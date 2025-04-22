function toggleMobileMenu(){
    const navBar = document.querySelector(".navBar")
    navBar.classList.add("mobileactive")
}

function closeMobileMenu(){
    const navBar = document.querySelector(".navBar")
    navBar.classList.remove("mobileactive")
}


setTimeout(() => {
    const loading = document.querySelector(".LoadingScreen")
    loading.classList.remove("loading")
}, "5000")
