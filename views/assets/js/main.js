const host = document.getElementsByTagName('head')[0].getAttribute('host');
const controller = document.getElementsByTagName('table')[0].getAttribute('controller');
const tbody = document.getElementsByTagName('tbody')[0];
const modal = document.getElementById('modal');
const modalContent = document.getElementById('modalContent');
const closeModal = document.getElementById('closeModal');
const deleteButton = document.getElementById('action');

const getData = async () => {
    const res = await fetch(`${host}/${controller}/list${controller}`);
    const json = await res.json();
    tbody.textContent = '';

    if (json.error) {
        window.location.replace(`${host}/errors`);
    }

    for (let i = 0; i < json.length; i++) {
        renderRow(Object.values(json[i]));
    }

    return (json.error ?? true) === true;
}

const openDeleteModal = (id, message) => {
    deleteButton.setAttribute('key', id);
    modalContent.textContent = message;
    modal.showModal();
}

const closeDeleteModal = () => {
    deleteButton.removeAttribute('key');
    modal.close();
}

const deleteHandler = async (e) => {
    const url = `${host}/${controller}/remove${controller}/${e.target.getAttribute('key')}`;
    const res = await fetch(url, {
        method: "DELETE"
    })
    const json = await res.json();

    closeDeleteModal();
    if (!await getData()) {
        window.location.replace(`${host}/${controller}/crear`);
    };
}

const renderRow = (data) => {
    const tr = document.createElement('tr');

    for (let i = 1; i <= data.length - 1; i++) {
        const td = document.createElement('td');
        td.textContent = data[i];
        tr.appendChild(td);
    }

    const actionsTd = document.createElement('td');

    if (controller === 'Vuelogeneral' || controller === 'Vuelocomercial') {
        const moreModal = document.getElementById('moreModal');

        const buttonModal = document.createElement('button');
        buttonModal.addEventListener('click', modalInfoHandler);
        buttonModal.setAttribute('id', data[0]);
        buttonModal.setAttribute('type', 'button');
        buttonModal.setAttribute('title', 'Ver más');
        buttonModal.classList.add('base-table-edit');
        const svgModal = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svgModal.setAttributeNS(null, 'viewBox', '0 0 24 24');
        svgModal.setAttributeNS(null, 'fill', 'currentColor');
        const pathModal = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        pathModal.setAttributeNS(null, 'fill-rule', 'evenodd');
        pathModal.setAttributeNS(null, 'clip-rule', 'evenodd');
        pathModal.setAttributeNS(null, 'd', 'M4.5 12a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm6 0a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm6 0a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z');

        actionsTd.appendChild(buttonModal)
        buttonModal.appendChild(svgModal);
        svgModal.appendChild(pathModal);
    } else {
        const aEdit = document.createElement('a');
        aEdit.setAttribute('href', `${host}/${controller.toLowerCase()}/editar/${data[0] ?? data[1]}`)
        const buttonEdit = document.createElement('button');
        buttonEdit.setAttribute('type', 'button');
        buttonEdit.setAttribute('title', 'Editar');
        buttonEdit.classList.add('base-table-edit');
        const svgEdit = document.createElementNS('http://www.w3.org/2000/svg', 'svg')
        svgEdit.setAttributeNS(null, 'viewBox', '0 0 24 24');
        svgEdit.setAttributeNS(null, 'fill', 'currentColor');
        const pathEditOne = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        pathEditOne.setAttributeNS(null, 'd', 'M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z');
        const pathEditTwo = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        pathEditTwo.setAttributeNS(null, 'd', 'M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z');

        const buttonDelete = document.createElement('button');
        buttonDelete.addEventListener('click', () => { openDeleteModal(data[0] ?? data[1], '¿Seguro que desea eliminar?') });
        buttonDelete.setAttribute('type', 'button');
        buttonDelete.setAttribute('title', 'Eliminar');
        buttonDelete.classList.add('base-table-delete');
        const svgDelete = document.createElementNS('http://www.w3.org/2000/svg', 'svg')
        svgDelete.setAttributeNS(null, 'viewBox', '0 0 24 24');
        svgDelete.setAttributeNS(null, 'fill', 'currentColor');
        const pathDelete = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        pathDelete.setAttributeNS(null, 'fill-rule', 'evenodd');
        pathDelete.setAttributeNS(null, 'clip-rule', 'evenodd');
        pathDelete.setAttributeNS(null, 'd', 'M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z');

        actionsTd.appendChild(aEdit);
        actionsTd.appendChild(buttonDelete)
        aEdit.appendChild(buttonEdit);
        buttonEdit.appendChild(svgEdit);
        svgEdit.appendChild(pathEditOne);
        svgEdit.appendChild(pathEditTwo);
        buttonDelete.appendChild(svgDelete);
        svgDelete.appendChild(pathDelete);
    }

    tbody.appendChild(tr);
    tr.appendChild(actionsTd);
}

closeModal.addEventListener('click', closeDeleteModal);
deleteButton.addEventListener('click', deleteHandler);

(
    async () => {
        if (!await getData()) {
            window.location.replace(`${host}/${controller}/crear`);
        };
    }
)()