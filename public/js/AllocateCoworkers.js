document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById('container');

    const createFields = () => {
        const newContainer = document.createElement('div');
        newContainer.className = 'additional-fields';

        const newTextField1 = createTextField('Text Field ' + (document.querySelectorAll('.additional_form-control').length * 2 + 1));
        const newTextField2 = createTextField('Text Field ' + (document.querySelectorAll('additional_form-control').length * 2 + 2));
        const newSubmitButton = createSubmitButton();

        newContainer.appendChild(newTextField1);
        newContainer.appendChild(newTextField2);
        newContainer.appendChild(newSubmitButton);

        container.appendChild(newContainer);
    };

    const createTextField = () => {
        const newTextField = document.createElement('input');
        newTextField.type = 'text';
        newTextField.className = 'additional_form-control';
        return newTextField;
    };

    const createSubmitButton = () => {
        const newSubmitButton = document.createElement('button');
        newSubmitButton.textContent = 'Add';
        newSubmitButton.className = 'additional-button';
        newSubmitButton.addEventListener('click', createFields);
        return newSubmitButton;
    };

    const submitButton = document.querySelector('.additional-button');

    submitButton.addEventListener('click', createFields);
});