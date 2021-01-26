const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

const switchTheme = (e) => {
    if (e.target.checked) {
        logoImage = document.getElementById('brand-logo').src="/img/acra-logo.png";
        document.documentElement.setAttribute('data-theme', 'acra');
        localStorage.setItem('theme', 'acra');
    }
    else {
        logoImage = document.getElementById('brand-logo').src="/img/CscLogo-red.png";
        document.documentElement.setAttribute('data-theme', 'csc');
        localStorage.setItem('theme', 'csc');
    }
}

toggleSwitch.addEventListener('change', switchTheme, false);

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'acra') {
        toggleSwitch.checked = true;
        document.getElementById('brand-logo').src="/img/acra-logo.png";
    }
}