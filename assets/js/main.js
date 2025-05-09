
document.addEventListener('input', function (event) {
  if (event.target.tagName.toLowerCase() === 'textarea') {
    event.target.style.height = 'auto'; // Reset height
    event.target.style.height = (event.target.scrollHeight) + 'px'; // Set new height based on scrollHeight
    event.target.style.overflow = 'hidden'; // Hide scrollbars
  }
});
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

if (window.innerWidth < 768) {
  var menutop = document.querySelector("nav .breadcrumb");
  var fixtopspace = document.querySelector(".fixtopspace");
  if (menutop) {
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
      if (document.body.scrollTop > 172 || document.documentElement.scrollTop > 172) {
        menutop.classList.add("menufixcustom");
        fixtopspace.classList.add("active");
      } else {
        menutop.classList.remove("menufixcustom");
        fixtopspace.classList.remove("active");
      }
    }
  }
}





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



$(document).ready(function () {
  $('.nav-item.dropdown').on('click', function (e) {
    $(this).find('.dropdown-menu').toggleClass('show');
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




window.addEventListener('DOMContentLoaded', function () {
  const params = new URLSearchParams(window.location.search);
  const tabId = params.get('tab');

  if (tabId) {
    const triggerTab = document.querySelector(`#${tabId}-tab`);
    if (triggerTab) {
      const tab = new bootstrap.Tab(triggerTab);
      tab.show();

      // Scroll smoothly to the tab content
      const tabContent = document.getElementById(tabId);
      if (tabContent) {
        setTimeout(() => {
          tabContent.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 500); // wait a little so the tab opens before scroll
      }
    }
  }
});









const contactItems = document.querySelectorAll('.contact-item');
const dynamicButton = document.getElementById('dynamic-button');
const dropdown = document.querySelector('.contact-dropdown-menu');
const closeBtn = document.querySelector('.close-icon');


dynamicButton.addEventListener('click', () => {
  dropdown.classList.toggle('d-none');
});
closeBtn.addEventListener('click', () => {
  dropdown.classList.toggle('d-none');
});




document.querySelectorAll('.contact-dropdown-menu .contact-item').forEach(item => {
  item.addEventListener('click', (e) => {
    e.preventDefault();

    const img = item.querySelector('.contact-link img');
    const dynamicImg = dynamicButton.querySelector('img');

    if (img && dynamicImg) {
      dynamicImg.src = img.src;
      dynamicImg.alt = img.alt;
    }

    dropdown.classList.add('d-none'); // hide dropdown after selection
  });
});









const openNavCase = document.getElementById('openNavCase');
if (openNavCase) {
  openNavCase.addEventListener('click', function (e) {
    e.preventDefault();
    const triggerEl = document.querySelector('#nav-case-tab');
    if (triggerEl) {
      new bootstrap.Tab(triggerEl).show();
    }
  });
}

const openNavSozialberatung = document.getElementById('openNavSozialberatung');
if (openNavSozialberatung) {
  openNavSozialberatung.addEventListener('click', function (e) {
    e.preventDefault();
    const triggerEl = document.querySelector('#nav-sozialberatung-tab');
    if (triggerEl) {
      new bootstrap.Tab(triggerEl).show();
    }
  });
}

const openNavFamilientherapie = document.getElementById('openNavFamilientherapie');
if (openNavFamilientherapie) {
  openNavFamilientherapie.addEventListener('click', function (e) {
    e.preventDefault();
    const triggerEl = document.querySelector('#nav-familientherapie-tab');
    if (triggerEl) {
      new bootstrap.Tab(triggerEl).show();
    }
  });
}

const openNavernahrungsberatung = document.getElementById('openNavernahrungsberatung');
if (openNavernahrungsberatung) {
  openNavernahrungsberatung.addEventListener('click', function (e) {
    e.preventDefault();
    const triggerEl = document.querySelector('#nav-ernahrungsberatung-tab');
    if (triggerEl) {
      new bootstrap.Tab(triggerEl).show();
    }
  });
}









const openNavBehorden = document.getElementById('openNavBehorden');
if (openNavBehorden) {
  openNavBehorden.addEventListener('click', function (e) {
    e.preventDefault();
    const triggerEl = document.querySelector('#nav-krankenkassen-tab');
    if (triggerEl) {
      new bootstrap.Tab(triggerEl).show();
    }
  });
}

const opennavArzte = document.getElementById('opennavArzte');
if (opennavArzte) {
  opennavArzte.addEventListener('click', function (e) {
    e.preventDefault();
    const triggerEl = document.querySelector('#nav-Pflegedienste-tab');
    if (triggerEl) {
      new bootstrap.Tab(triggerEl).show();
    }
  });
}

const opennavkita = document.getElementById('opennavkita');
if (opennavkita) {
  opennavkita.addEventListener('click', function (e) {
    e.preventDefault();
    const triggerEl = document.querySelector('#nav-Kita-tab');
    if (triggerEl) {
      new bootstrap.Tab(triggerEl).show();
    }
  });
}

const opennavNetzwerkarbeit = document.getElementById('opennavNetzwerkarbeit');
if (opennavNetzwerkarbeit) {
  opennavNetzwerkarbeit.addEventListener('click', function (e) {
    e.preventDefault();
    const triggerEl = document.querySelector('#nav-offentlichkeit-tab');
    if (triggerEl) {
      new bootstrap.Tab(triggerEl).show();
    }
  });
}


if (window.innerWidth < 768) {
  $('.help-affected #nav-tab').slick({
    dots: true,
    arrows: false,
    swipeToSlide: true,
    slidesToScroll: 1,
    autoplaySpeed: 5000,
    infinite: false,
    variableWidth: true  // <- this is key
  });
}





$(document).ready(function () {
  function initCircleSlider() {
    if (window.innerWidth < 768) {
      if (!$('.shop-slider').hasClass('slick-initialized')) {
        $('.shop-slider').slick({
          dots: true,
          arrows: false,
          infinite: true,
          centerMode: true,
          loop: true,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2.5,
                centerPadding: '40px',
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 2,
                centerPadding: '0px',
                centerMode: false,
              }
            }
          ]
        });
      }
    } else {
      if ($('.shop-slider').hasClass('slick-initialized')) {
        $('.shop-slider').slick('unslick');
      }
    }
  }

  initCircleSlider();
  $(window).on('resize', initCircleSlider);
});
