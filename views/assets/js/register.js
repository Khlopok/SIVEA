// Inputs traidos de valitaions.js
const host = document.getElementsByTagName('head')[0].getAttribute('host');
const form = document.querySelector('form');
const controller = form.getAttribute('controller');

const fkSelect = document.querySelectorAll('select[fk]');

const elementId = form.getAttribute('update');
const alert = document.getElementById('alert');

const updating = elementId != 'false';

const objShift = (obj) => {
    const keys = Reflect.ownKeys(obj);
    if (keys.length) delete obj[keys[0]];
    return obj;
}

const showAlert = (type, message) => {
    alert.textContent = message;
    alert.classList.add(`alert-${type}`);

    setTimeout(function () {
        alert.classList.remove(`alert-${type}`);
    }, 4000);
}

const fillInputs = (data) => {
    const keys = Object.keys(data);

    inputs.forEach(input => {
        const name = input.getAttribute('name');
        if (keys.includes(name)) {
            const value = data[name];
            if (input.options) {
                const option = Array.from(input.options).find(opt => opt.value == value);
                if (option) {
                    input.selectedIndex = option.index;
                }
            } else {
                input.value = value;
                input.placeholder = value;
            }
        }
    });
};

const get = async () => {
    const res = await fetch(`${host}/${controller}/list${controller}ById/${elementId}`);
    const json = await res.json();

    if (!json.error) {
        fillInputs(json[0]);
    } else {
        window.location.replace(`${host}/errors`);
    }
}

const getAll = async (fkController) => {
    const res = await fetch(`${host}/${fkController}/list${fkController}`);
    const json = await res.json();

    if (json.error !== undefined) return [];

    if (!json.error) {
        return json;
    } else {
        window.location.replace(`${host}/errors`);
    }
}

const post = async (controller, data) => {
    const url = `${host}/${controller}/add${controller}`;

    const res = await fetch(url, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json",
        },
    })
    const json = await res.json();

    if (!json.error) {
        showAlert('sucess', 'Registro exitoso');
    } else {
        showAlert('error', 'Registro fallido');
    }
}

const put = async (controller, data) => {
    const url = `${host}/${controller}/edit${controller}`;

    const res = await fetch(url, {
        method: "PUT",
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json",
        },
    })
    const json = await res.json();

    if (!json.error) {
        showAlert('sucess', 'Modificación exitosa');
    } else {
        showAlert('error', 'Modificación fallida');
    }
}

const submitHandler = async (e) => {
    e.preventDefault();
    const id = e.target.getAttribute('update');
    let data = {}

    for (let i = 0; i < inputs.length; i++) {
        const name = inputs[i].getAttribute('name');
        const value = inputs[i].value;

        if (name) {
            data = {
                ...data,
                [name]: value
            }
        }
    }
    
    if (!updating) {
        await post(controller, data);
    } else {
        data = (controller === 'Persona' || controller === 'Usuario') ? objShift(data) : data;

        data = {
            ...data,
            id: id
        }
        await put(controller, data);

        window.location.replace(`http://localhost/sivea/${controller.toLowerCase()}`);
    }

    for (let i = 0; i < inputs.length; i++) {
        inputs[i].value = '';
    }
}

(async () => {
    const createOption = (text, value) => {
        const option = document.createElement('option');
        option.textContent = text;
        option.value = value;
        return option;
    };

    const populateSelect = async (selectElement) => {
        const data = await getAll(selectElement.getAttribute('fk'));
        data.forEach(item => {
            const option = createOption(item.nombre || item.ubicacion || item.modelo, item.codigo || item.id || item.cedula);
            selectElement.appendChild(option);
        });
    };

    for (let i = 0; i < fkSelect.length; i++) {
        await populateSelect(fkSelect[i]);
    }

    if (updating) get();
})()

const matchPasswords = () => {
    const firstValue = passwordInputs[0].value;
    let match = true

    passwordInputs.forEach(input => {
        if (input.value !== firstValue && input.value !== '') {
            match = false;
        }    
    });

    if (!match) {
        passwordInputs.forEach(input => {
            input.setAttribute('unmatched', 'true');
            input.classList.add('error');
            showAlert('error', 'Las contraseñas no coinciden');
        });
    } else {
        passwordInputs.forEach(input => {
            input.classList.remove('error');
            input.removeAttribute('unmatched');
        });
    }
}

for (let i = 0; i < passwordInputs.length; i++) {
    passwordInputs[i].addEventListener('keyup', matchPasswords);
}

form.addEventListener('submit', submitHandler)
