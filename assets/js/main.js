$('.visit-insta .slider').slick({
    centerMode: true,
    slidesToShow: 3,
    dots: true,
    arrows: false,
    swipe: true,
    infinite: true,
    swipeToSlide: true,
    //adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1200, // Adjust settings for tablets
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 768, // Adjust settings for mobile
            settings: {
                slidesToShow: 1,
                centerMode: false // Optional: Disable centering on small screens
            }
        }
    ]
});





document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll(".navigator-items a");

    navItems.forEach(item => {
        item.addEventListener("click", function () {
            // Remove 'active' from all links
            navItems.forEach(link => link.classList.remove("active"));

            // Add 'active' to the clicked link
            this.classList.add("active");
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    // Prevent Bootstrap from closing the dropdown when clicking inside
    document.querySelectorAll(".dropdown-submenu .dropdown-toggle").forEach(function (dropdown) {
        dropdown.addEventListener("click", function (e) {
            e.stopPropagation(); // Stop event from bubbling up

            let submenu = this.nextElementSibling;
            let parentSubmenu = this.closest(".dropdown-submenu");

            if (submenu && submenu.classList.contains("dropdown-menu")) {
                let isOpen = submenu.classList.contains("show");

                // Close all open submenus first
                document.querySelectorAll(".dropdown-submenu .dropdown-menu.show").forEach(function (openSubmenu) {
                    openSubmenu.classList.remove("show");
                    openSubmenu.parentElement.classList.remove("show"); // Remove from parent submenu
                    openSubmenu.parentElement.parentElement.classList.remove("show");
                });

                // Toggle the clicked submenu
                submenu.classList.toggle("show", !isOpen);
                if (parentSubmenu) {
                    parentSubmenu.classList.toggle("show", !isOpen); // Add `.show` to `.dropdown-submenu`
                    parentSubmenu.parentElement.classList.toggle("submenu-activated", !isOpen);
                }
            }
        });
    });

    document.addEventListener("click", function (e) {
        document.querySelectorAll(".dropdown-menu.show").forEach(function (submenu) {
            if (!submenu.parentElement.contains(e.target)) {
                submenu.classList.remove("show");
                submenu.parentElement.classList.remove("show"); // Remove `.show` from `.dropdown-submenu`
                submenu.parentElement.parentElement.classList.remove("submenu-activated");
            }
        });
    });
});





$(document).ready(function () {
    $('.team-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        arrows: true,
        dots: true,
        speed: 300,
        centerPadding: '20px',
        infinite: true,
        autoplaySpeed: 5000,
        autoplay: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next')
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const contactLinks = document.querySelectorAll('.contact-link');
    const contactItems = document.querySelectorAll('.contact-item');

    // Handle contact-link click
    contactLinks.forEach((contactLink, index) => {
        contactLink.addEventListener('click', function (e) {
            // If clicked target is NOT cross-icon, then toggle
            if (!e.target.classList.contains('cross-icon')) {
                e.preventDefault();

                contactItems.forEach((item, i) => {
                    if (i !== index) {
                        item.classList.remove('active');
                    }
                });

                contactItems[index].classList.toggle('active');
            }
        });
    });

    // Handle cross-icon click to toggle active class
    const crossIcons = document.querySelectorAll('.cross-icon');
    crossIcons.forEach(icon => {
        icon.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation(); // Stop click from bubbling up to the link

            const contactItem = icon.closest('.contact-item');
            if (contactItem) {
                contactItem.classList.toggle('active');
            }
        });
    });
});
