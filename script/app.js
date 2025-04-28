//Toggle on mobile menu
function toggleMobileMenu() {
    const navBar = document.querySelector(".navBar")
    navBar.classList.add("mobileactive")
}

// Toggle off mobile menu
function closeMobileMenu() {
    const navBar = document.querySelector(".navBar")
    navBar.classList.remove("mobileactive")
}

// Loading Screen Ficticious Time of Loading
if (!sessionStorage.getItem('shownLoading')) {
    setTimeout(() => {
        const loading = document.querySelector(".LoadingScreen")
        loading.remove()
        sessionStorage.setItem('shownLoading', 'true')
    }, 3500)
} else {
    const loading = document.querySelector(".LoadingScreen")
    loading.remove()
}

// Get when media query changes

const mqc = window.matchMedia("(max-width: 1000px)")

mqc.onchange = () => {
    const navBar = document.querySelector(".navBar")
    if (navBar.classList.value === "navBar mobileactive") navBar.classList.remove("mobileactive")
}

// disable button if inputs are invalid

function sendMail() {
    const FirstName = document.getElementById("name").value;
    const subject = document.getElementById("subject").value;
    const desc = document.getElementById("desc").value;

    if (!FirstName || subject === "none" || !desc) {
        alert("Preencha todos os campos");
    } else {
        const mailtoLink = `mailto:suporte@cocacola.com?subject=${encodeURIComponent(FirstName + " - " + subject)}&body=${encodeURIComponent(`Olá, meu nome é ${FirstName} e gostaria de falar sobre ${subject}.\nMensagem: ${desc}`)}`;

        window.location.href = mailtoLink;
}
}


