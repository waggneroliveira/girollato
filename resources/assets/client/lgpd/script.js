// Função para salvar cookies
function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Função para ler cookies
function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1);
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length, c.length);
        }
    }
    return null;
}

// Função para verificar se o consentimento já foi dado
function checkConsent() {
    const banner = document.getElementById('lgpd-banner');
    if (!banner) return;

    const consent = getCookie('lgpdConsent');
    if (!consent) {
        banner.style.display = 'block';
    }
}

// Função para registrar o consentimento
function giveConsent() {
    const banner = document.getElementById('lgpd-banner');
    if (!banner) return;

    setCookie('lgpdConsent', 'accepted', 365); // 1 ano
    banner.style.display = 'none';
}

// Aguarda o DOM carregar
document.addEventListener('DOMContentLoaded', function () {
    const acceptBtn = document.getElementById('accept-btn');

    if (acceptBtn) {
        acceptBtn.addEventListener('click', giveConsent);
    }

    checkConsent();
});
