const root = document.documentElement;

const syncIcons = () => {
    const isDark = root.classList.contains('dark');

    document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
        button.querySelector('[data-theme-icon-light]')?.classList.toggle('hidden', isDark);
        button.querySelector('[data-theme-icon-dark]')?.classList.toggle('hidden', !isDark);
    });
};

document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
    button.addEventListener('click', () => {
        const isDark = root.classList.toggle('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        syncIcons();
    });
});

syncIcons();
