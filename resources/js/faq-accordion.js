document.querySelectorAll('[data-faq-toggle]').forEach((button) => {
    button.addEventListener('click', () => {
        const item = button.closest('[data-faq-item]');
        const answer = item.querySelector('[data-faq-answer]');
        const icon = item.querySelector('[data-faq-icon]');

        answer.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    });
});
