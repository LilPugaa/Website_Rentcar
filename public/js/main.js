// Toggle menu
const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");




menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", () => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

// ScrollReveal Options
const scrollRevealOption = {
  origin: "bottom",
  distance: "50px",
  duration: 1000,
};

// ScrollReveal Animations
ScrollReveal().reveal(".header__container h1", { ...scrollRevealOption });
ScrollReveal().reveal(".header__container form", { ...scrollRevealOption, delay: 500 });
ScrollReveal().reveal(".header__container img", { ...scrollRevealOption, delay: 1000 });
ScrollReveal().reveal(".range__card", { duration: 1000, interval: 500 });
ScrollReveal().reveal(".location__image img", { ...scrollRevealOption, origin: "right" });
ScrollReveal().reveal(".location__content .section__header", { ...scrollRevealOption, delay: 500 });
ScrollReveal().reveal(".location__content p", { ...scrollRevealOption, delay: 1000 });
ScrollReveal().reveal(".location__content .location__btn", { ...scrollRevealOption, delay: 1500 });
ScrollReveal().reveal(".story__card", { ...scrollRevealOption, interval: 500 });
ScrollReveal().reveal(".download__image img", { ...scrollRevealOption, origin: "right" });
ScrollReveal().reveal(".download__content .section__header", { ...scrollRevealOption, delay: 500 });
ScrollReveal().reveal(".download__links", { ...scrollRevealOption, delay: 1000 });
ScrollReveal().reveal(".service__image img", { ...scrollRevealOption, origin: "left" });
ScrollReveal().reveal(".service__content .section__subheader", { ...scrollRevealOption, delay: 500 });
ScrollReveal().reveal(".service__content .section__header", { ...scrollRevealOption, delay: 1000 });
ScrollReveal().reveal(".service__list li", { ...scrollRevealOption, delay: 1500, interval: 500 });
ScrollReveal().reveal(".experience__card", { duration: 1000, interval: 500 });

// Swiper Animation and Pricing Update
const selectCards = document.querySelectorAll(".select__card");
selectCards[0].classList.add("show__info");

const price = ["225", "455", "275", "625", "395"];
const priceEl = document.getElementById("select-price");

function updateSwiperImage(eventName, args) {
  if (eventName === "slideChangeTransitionStart") {
    const index = args && args[0].realIndex;
    priceEl.innerText = price[index];
    selectCards.forEach((item) => item.classList.remove("show__info"));
    selectCards[index].classList.add("show__info");
  }
}

const swiper = new Swiper(".swiper", {
  loop: true,
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    depth: 500,
    modifier: 1,
    scale: 0.75,
    slideShadows: false,
    stretch: -100,
  },
  onAny(event, ...args) {
    updateSwiperImage(event, args);
  },
});

// Banner Animation
const banner = document.querySelector(".banner__wrapper");
const bannerContent = Array.from(banner.children);
bannerContent.forEach((item) => {
  const duplicateNode = item.cloneNode(true);
  duplicateNode.setAttribute("aria-hidden", true);
  banner.appendChild(duplicateNode);
});

  // JavaScript Slider Autoplay
  let currentIndex = 0;
  const testimonials = document.querySelector('.testimonial-slider');
  const testimonialCount = document.querySelectorAll('.testimonial-card').length;

  setInterval(() => {
    currentIndex = (currentIndex + 1) % testimonialCount;
    testimonials.style.transform = `translateX(-${100 * currentIndex}%)`;
  }, 5000); // Slide interval is set to 5 seconds

