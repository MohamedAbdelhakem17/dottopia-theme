const { animate, scroll } = Motion;


// Animating image and header inside each section
document.querySelectorAll(".img-container").forEach((section) => {
    const header = section.querySelector(".info");
    const image = section.querySelector("img");

    // Scroll animation for header (fade in/out & vertical movement)
    scroll(
        animate(header, {
            y: [-100, 0, 100], // Moves up, stays in place, moves down
            opacity: [0, 1, 0] // Fades in and out
        }, { ease: "easeInOut" }),
        { target: section }
    );

    // Scroll animation for image (vertical movement)
    scroll(
        animate(image, {
            y: [-50, 50], // Moves slightly up and down
            opacity: [0, 1, 0] // Fades in
        }, { ease: "easeInOut" }),
        { target: section }
    );
});

const cards = document.querySelectorAll(".card");
let allCardsVisible = false;

// Animate each card appearing one after another
cards.forEach((card, index) => {
    scroll(
        animate(card, {
            opacity: [0, 1, 0], // Fade in
            y: [20, 0] // Move up
        }, {
            duration: 0.8,
            easing: "ease-out",
            delay: index * .2 // Staggered effect
        }),
        { target: card }
    );
});

// Detect when all cards are fully visible, then allow scrolling
const observer = new IntersectionObserver((entries) => {
    if (entries.every(entry => entry.isIntersecting)) {
        allCardsVisible = true;
    }
}, { threshold: 1 });

observer.observe(cards[cards.length - 1]); // Watch the last card


jQuery(document).ready(function ($) {
    $(".testimonial-carousel").slick({
        centerMode: true,
        infinite: true,
        centerPadding: "20%",
        slidesToShow: 1,
        speed: 500,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    centerPadding: "10%",
                },
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: "5%",
                },
            },
        ],
    });
});