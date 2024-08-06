import Inputmask from "inputmask";

document.addEventListener('DOMContentLoaded', function() {
    Inputmask({"mask": "9999-9999-9999"}).mask(document.querySelectorAll('input[type="tel"]'));
});
