const themeSwitches = document.querySelectorAll('.theme-switch');
if (themeSwitches.length > 0) {
    themeSwitches.forEach((themeSwitch, i) => {
        if (localStorage.getItem('dark-mode') === 'true') {
            themeSwitch.checked = true;
        } else {
            themeSwitch.checked = false;
        }

        themeSwitch.addEventListener('change', () => {
            const { checked } = themeSwitch;
            themeSwitches.forEach((el, n) => {
                if (n !== i) {
                    el.checked = checked;
                }
            });
            if (themeSwitch.checked) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('dark-mode', true);
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('dark-mode', false);
            }
        });
    });
}
