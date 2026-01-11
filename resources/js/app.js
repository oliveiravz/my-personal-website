import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import "bootstrap";

const btn = document.getElementById("theme-toggle");
const icon = document.getElementById("theme-icon");
const navbarText = document.getElementById("navbar-text");
const body = document.body;
const langBtn = document.getElementById("lang-toggle");
const browserLang = navigator.language.toLowerCase();

let currentLang = "pt-br";

if (localStorage.getItem("theme") === "light") {
    body.classList.add("light-mode");
    icon.classList.replace("bi-sun-fill", "bi-moon-fill");
}

btn.addEventListener("click", () => {
    body.classList.toggle("light-mode");

    if (body.classList.contains("light-mode")) {
        localStorage.setItem("theme", "light");
        icon.classList.replace("bi-sun-fill", "bi-moon-fill");
    } else {
        localStorage.setItem("theme", "dark");
        icon.classList.replace("bi-moon-fill", "bi-sun-fill");
    }
});

langBtn.addEventListener("click", () => {
    var lang = langBtn.dataset.language;

    console.log(lang);
    if (lang === "pt-br") {
        // aboutText.innerText = textEN;
        langBtn.innerHTML = '<span class="fi fi-us fis"></span>';
        lang = "en-us";
    } else {
        // aboutText.innerText = textPT;
        langBtn.innerHTML = '<span class="fi fi-br fis"></span>';
        lang = "pt-br";
    }
});

async function loadLanguage() {
    const response = await fetch("/lang/home.json");
    const texts = await response.json();
    applyTexts(texts[currentLang]);
    updateLangButton();
}

function applyTexts(data) {
    // títulos
    document.querySelector('[data-i18n="title-sobre"]').innerText =
        data.titles.sobre;
    document.querySelector('[data-i18n="title-experiencia"]').innerText =
        data.titles.experiencia;

    // sobre
    data.sobre.forEach((text, i) => {
        document.querySelector(`[data-i18n="sobre-${i}"]`).innerText = text;
    });

    // experiência
    data.experiencia.forEach((exp, i) => {
        document.querySelector(`[data-i18n="exp-${i}-periodo"]`).innerText =
            exp.periodo;
        document.querySelector(`[data-i18n="exp-${i}-cargo"]`).innerText =
            exp.cargo;
        document.querySelector(`[data-i18n="exp-${i}-local"]`).innerText =
            exp.local;

        if (exp.descricao) {
            document.querySelector(
                `[data-i18n="exp-${i}-descricao"]`
            ).innerText = exp.descricao;
        }

        if (exp.lista) {
            exp.lista.forEach((item, j) => {
                document.querySelector(
                    `[data-i18n="exp-${i}-item-${j}"]`
                ).innerText = `— ${item}`;
            });
        }
    });

    // contato
    document.querySelector('[data-i18n="contato-texto"]').innerText =
        data.contato.texto;
    document.querySelector('[data-i18n="contato-botao"]').innerText =
        data.contato.botao;

    // hero
    document.querySelector('[data-i18n="hero-name"]').innerText =
        data.hero.name;
    document.querySelector('[data-i18n="hero-role"]').innerText =
        data.hero.role;

    // navegação
    document.querySelector('[data-i18n="nav-sobre"]').innerText =
        data.nav.sobre;
    document.querySelector('[data-i18n="nav-carreira"]').innerText =
        data.nav.carreira;
    document.querySelector('[data-i18n="nav-contato"]').innerText =
        data.nav.contato;
}

function updateLangButton() {
    const btn = document.getElementById("lang-toggle");
    btn.innerHTML =
        currentLang === "pt-br"
            ? '<span class="fi fi-us fis"></span>'
            : '<span class="fi fi-br fis"></span>';
}

document.getElementById("lang-toggle").addEventListener("click", async () => {
    currentLang = currentLang === "pt-br" ? "en-us" : "pt-br";
    loadLanguage();
});

document.addEventListener("DOMContentLoaded", loadLanguage);
