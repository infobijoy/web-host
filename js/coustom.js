// timer script end
function formatTime(time) {
    return time < 10 ? '0' + time : time;
}

function startCountdown() {
    const countdownElement = document.getElementById("countdown");
    let targetTime = new Date().getTime() + (1 * 24 * 60 * 60 * 1000) + (2 * 60 * 60 * 1000) + (30 * 60 * 1000) + (45 * 1000);
    const savedTime = localStorage.getItem("countdownTarget");
    if (savedTime) {
        targetTime = parseInt(savedTime);
    }

    const interval = setInterval(function() {
        const now = new Date().getTime();
        const distance = targetTime - now;

        if (distance < 0) {
            clearInterval(interval);
            countdownElement.textContent = "EXPIRED";
        } else {
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            countdownElement.textContent = `${formatTime(days)}:${formatTime(hours)}:${formatTime(minutes)}:${formatTime(seconds)}`;
            localStorage.setItem("countdownTarget", targetTime);
        }
    }, 1000);
}
startCountdown();
// timer script end


document.addEventListener("DOMContentLoaded", function () {
    const menuToggler = document.getElementById("menu-toggler");
    const menuBar = document.getElementById("menubar");
    const menuBackdrop = document.getElementById("menubar-backdrop");
    const closeMenuElements = document.querySelectorAll("#menubar-backdrop, .close-mobile-menu");
    const dropdownLinks = document.querySelectorAll("#menubar .dropdown .nav-link");
    const searchButton = document.querySelector(".open-mobile-search");
    const searchForm = document.querySelector("header form");
    const closeSearchButton = document.querySelector(".close-mobile-search");

    if (menuToggler && menuBar) {
        menuToggler.addEventListener("click", function (event) {
            event.preventDefault();
            document.body.classList.toggle("mobile-menu-show");
        });
    }

    closeMenuElements.forEach(element => {
        element.addEventListener("click", function () {
            document.body.classList.remove("mobile-menu-show");
        });
    });

    dropdownLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            if (window.innerWidth <= 991) { // Only apply for mobile screens
                event.preventDefault();
                const parent = this.parentElement;
                parent.classList.toggle("active");
            }
        });
    });

    if (searchButton && searchForm) {
        searchButton.addEventListener("click", function (event) {
            event.preventDefault();
            searchForm.classList.add("active");
            searchForm.querySelector("input").focus();
        });
    }

    if (closeSearchButton && searchForm) {
        closeSearchButton.addEventListener("click", function (event) {
            event.preventDefault();
            searchForm.classList.remove("active");
        });
    }
});

window.addEventListener("scroll", function () {
    if (window.scrollY > 0) {
        document.body.classList.add("scrolled");
    } else {
        document.body.classList.remove("scrolled");
    }
});
