
    document.addEventListener('DOMContentLoaded', () => {
        const picker = document.querySelector('#emoji-picker');
        const input = document.querySelector('#mood');

        picker.addEventListener('emoji-click', event => {
            input.value += event.detail.unicode;
        });
    });

