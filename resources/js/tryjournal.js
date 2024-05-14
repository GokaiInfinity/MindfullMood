import 'emoji-picker-element';

document.addEventListener('DOMContentLoaded', function() {
    const emojiInput = document.getElementById('emoji');
    const picker = new EmojiPickerElement();
    picker.addEventListener('emoji-click', (event) => {
        const { emoji } = event.detail;
        emojiInput.value += emoji;
    });
    emojiInput.after(picker);
});

document.getElementById('sort').addEventListener('change', function() {
    document.getElementById('sortForm').submit();
});
