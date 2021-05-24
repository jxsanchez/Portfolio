var scroll = new SmoothScroll('a[href*="#"]');

function hideScrollTop() {
    const scrollTop = document.querySelector(".scroll-top");
    
    scrollTop.classList.add("hide");
}

function closeNav() {
    const navbar = document.querySelector(".navbar-collapse");

    // Only hide navbar if on mobile.
    if(navbar.classList.contains("show")) {
        const scrollTop = document.querySelector(".scroll-top");

        navbar.classList.add("collapsing");
        navbar.classList.remove("show");
        scrollTop.classList.remove("hide");
    }
}