// Utility functions for Cookies
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

// Cookie Consent Logic
document.addEventListener('DOMContentLoaded', function () {
    var cookieBanner = document.getElementById('cookieConsent');
    var acceptBtn = document.getElementById('acceptCookiesBtn');

    if (!getCookie('cookieConsent')) {
        if (cookieBanner) {
            cookieBanner.style.display = 'block';
            // Force a small reflow/repaint to ensure transition works if added
            setTimeout(() => {
                cookieBanner.classList.add('show');
            }, 10);
        }
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', function () {
            setCookie('cookieConsent', 'true', 365); // Consent valid for 1 year
            if (cookieBanner) {
                cookieBanner.classList.remove('show');
                setTimeout(() => {
                    cookieBanner.style.display = 'none';
                }, 300); // Match transition duration
            }
        });
    }
});

// Aquí puedes agregar funcionalidades personalizadas si lo necesitas.