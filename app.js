
//Toggle on mobile menu
function toggleMobileMenu(){
    const navBar = document.querySelector(".navBar")
    navBar.classList.add("mobileactive")
}
// Toggle off mobile menu
function closeMobileMenu(){
    const navBar = document.querySelector(".navBar")
    navBar.classList.remove("mobileactive")
}

// Loading Screen Ficticious Time of Loading
setTimeout(() => {
    const loading = document.querySelector(".LoadingScreen")
    loading.classList.remove("loading")
}, 3500)

// Get when media query changes

const mqc = window.matchMedia("(max-width: 1000px)")

mqc.onchange = () => {
    const navBar = document.querySelector(".navBar")
    if(navBar.classList.value == "navBar mobileactive") navBar.classList.remove("mobileactive")
}
