document.getElementById("mail").addEventListener("click", function () {
    const user = 'qst' + 'ar.' + 'inc';
    const host = 'gm' + 'ail.' + 'com';
    this.innerHTML = `<a href="mailto:${user + "@" + host}">${user + "@" + host}</a>`;
    this.classList.add("revealed");
});

function setBodyTextMinHeight() {
    const navbarHeight = document.querySelector('.navbar').offsetHeight;
    const letsHeight = document.querySelector('#lets-connect').offsetHeight;
    const viewportHeight = window.innerHeight;
    const bodyText = document.querySelector('#body-text');

    const minHeight = viewportHeight - navbarHeight - letsHeight;

    bodyText.style.minHeight = `${minHeight}px`;
}

window.addEventListener('load', setBodyTextMinHeight);
window.addEventListener('resize', setBodyTextMinHeight);