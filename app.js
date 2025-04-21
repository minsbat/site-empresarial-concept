function toggleMobileMenu(){
    const mobileNav = document.getElementById("mobilenav")
    const navBar = document.querySelector(".navBar")
    console.log(navBar)
    navBar.classList.add("mobileactive")
    mobileNav.style.display = 'flex'
}