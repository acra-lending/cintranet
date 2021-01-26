const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

const switchTheme = (e) => {
    if (e.target.checked) {
        document.getElementById('brand-logo').src="/img/acra-logo.png";
        document.getElementById('img-logo').src="/img/acra-logo-horizontal-highres.png";
        document.documentElement.setAttribute('data-theme', 'acra');
        localStorage.setItem('theme', 'acra');
    }
    else {
        document.getElementById('brand-logo').src="/img/CscLogo-red.png";
        document.getElementById('img-logo').src="/img/csc-logo-highres.png";
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
        document.getElementById('img-logo').src="/img/acra-logo-horizontal-highres.png";
    }
}