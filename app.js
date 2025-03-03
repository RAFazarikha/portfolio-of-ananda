const text = "My Personal Portfolio Project As An Industrial Engineering Student";
const typingTextElement = document.getElementById("typingText");
let index = 0;
let isDeleting = false;

function typeEffect() {
    if (!isDeleting) {
        typingTextElement.textContent = text.substring(0, index + 1);
        index++;
        if (index === text.length) {
        isDeleting = true;
        setTimeout(typeEffect, 1000); // Tunggu sebelum menghapus
        return;
        }
    } else {
        typingTextElement.textContent = text.substring(0, index - 1);
        index--;
        if (index === 0) {
        isDeleting = false;
        }
    }
    setTimeout(typeEffect, isDeleting ? 50 : 100); // Kecepatan mengetik dan menghapus
}

typeEffect();
