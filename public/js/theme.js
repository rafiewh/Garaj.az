document.addEventListener('DOMContentLoaded', function () {
    const savedTheme = localStorage.getItem('theme') || 'light';
    const buttons = document.querySelectorAll('.theme-toggle');

    document.documentElement.setAttribute('data-theme', savedTheme);

    function updateButtons() {
        const currentTheme = document.documentElement.getAttribute('data-theme');

        buttons.forEach(function (button) {
            button.innerHTML = currentTheme === 'dark' ? '☀' : '☾';
            button.setAttribute(
                'title',
                currentTheme === 'dark' ? 'Gündüz rejimi' : 'Gecə rejimi'
            );
        });
    }

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const nextTheme = currentTheme === 'dark' ? 'light' : 'dark';

            document.documentElement.setAttribute('data-theme', nextTheme);
            localStorage.setItem('theme', nextTheme);
            updateButtons();
        });
    });

    updateButtons();
});
