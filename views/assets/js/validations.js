const inputs = document.querySelectorAll('input[type="text"], input[type="password"], input[type="number"], input[type="date"], input[type="time"], textarea, select');
const requiredInputs = document.querySelectorAll('input[type="text"], input[type="password"], input[type="number"], input[type="date"], input[type="time"], select');
const passwordInputs = document.querySelectorAll('input[type="password"][passwordValidator]');
const btn = document.querySelector('input[type="submit"]');
const invalidInputs = [];

// Validar inputs con contenido

const isEmpty = (input) => {
    return input.value ? false : true;
};

const inputHightlighter = (input) => {
    if (isEmpty(input)) {
        input.classList.add('error');
        input.placeholder = 'Campo obligatorio';
    } else {
        input.classList.remove('error');
    };
};

const inputCleaner = (input) => {
    input.classList.remove('error');
};

const requiredInputFocusHandler = (e) => {
    const input = e.target;
    input.classList.remove('error');
};

const requiredInputBlurHandler = (e) => {
    const input = e.target;
    inputHightlighter(input);
};
const requiredInputValidator = (input) => {
    if (isEmpty(input)) {
        input.setAttribute('invalid', 'true');
    } else {
        input.removeAttribute('invalid');
    };
};

const buttonManager = () => {
    invalidInputs.length = 0;

    for (let i = 0; i < requiredInputs.length; i++) {
        requiredInputValidator(requiredInputs[i]);
    };

    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].getAttribute('invalid') || inputs[i].getAttribute('unmatched')) {
            invalidInputs.push(inputs[i]);
        }
    };

    invalidInputs.forEach(input => {
        inputHightlighter(input);
    });

    if (invalidInputs.length > 0) {
        btn.setAttribute('disabled', 'true');
    } else {
        btn.removeAttribute('disabled');
    };
};

const buttonLeave = () => {
    invalidInputs.forEach(input => {
        inputCleaner(input);
    });

}

for (let i = 0; i < requiredInputs.length; i++) {
    requiredInputs[i].addEventListener('focus', requiredInputFocusHandler);
    requiredInputs[i].addEventListener('blur', requiredInputBlurHandler);
};

btn.addEventListener('mouseover', buttonManager);
btn.addEventListener('mouseout', buttonLeave);