
const { animate, scroll, inView } = Motion;


// Animating Services
document.querySelectorAll(".service-container").forEach((section) => {
    const header = section.querySelector(".info");
    const image = section.querySelector("img");

    scroll(
        animate(header, {
            y: [-100, 0, 100],
            opacity: [0, 1, 0]
        }, { ease: "easeInOut" }),
        { target: section }
    );

    scroll(
        animate(image, {
            y: [-50, 50],
            opacity: [0, 1, 0]
        }, { ease: "easeInOut" }),
        { target: section }
    );
});


// Animating Roadblocks
document.querySelectorAll(".card").forEach((card, index) => {
    scroll(
        animate(card, {
            opacity: [0, 1, 0],
            y: [20, 0]
        }, {
            duration: 0.8,
            easing: "ease-out",
            delay: index * .2
        }),
        { target: card }
    );
});

// Animating Partner 
document.querySelectorAll(".partner").forEach((partner, index) => {
    scroll(
        animate(partner, {
            opacity: [0, 1, 0],
            scale: [1.3, 1, 0],
            y: [-50, 0, 50],
        }, {
            duration: 1,
            easing: "ease-in-out",
            delay: index * .5
        }),
        { target: partner }
    );
});




document.querySelectorAll('.title, .description').forEach((element, index) => {
    const animation = animate(
        element,
        { opacity: [0, 1, 1], y: [10, 0, 0] },
        { duration: 0.5, delay: 0.2 }
    );
    scroll(animation, { target: element });
});




// Animating Partner 
document.querySelectorAll(".BLOG").forEach((partner, index) => {
    scroll(
        animate(partner, {
            opacity: [0, 1, 1],
            scale: [.7, 1, 1],
            translateX: [-20, 0, 0],
            y: [-50, 0, 0],
            offset: "center"
        }, {
            duration: 1,
            easing: "ease-in-out",
            delay: index * .1
        }),
        { target: partner }
    );
});


// Fade in out Animation
document.querySelectorAll('.fade').forEach((element, index) => {
    const animation = animate(
        element,
        { opacity: [0, 1, 0] },
        { duration: 1, delay: index * 0.2 }
    );
    scroll(animation, { target: element });
});




// Animations for header text
inView("[data-inview='text-fadeInUp']", (element) => {
    animate(
        element,
        { opacity: 1, y: [100, 0] },
        {
            duration: 1.0,
            easing: [0.17, 0.55, 0.55, 1],
        }
    );
    return () => animate(element, { opacity: 0, y: 100 });
});

// Animations for paragraph text
inView("[data-inview='text-fadeInUp']", (element) => {
    animate(
        element,
        { opacity: 1, y: [100, 0] },
        {
            duration: 1.2,
            easing: [0.17, 0.55, 0.55, 1],
        }
    );
    return () => animate(element, { opacity: 0, y: 100 });
});

// Animations for the button
inView("[data-inview='button-fadeInUp']", (element) => {
    animate(
        element,
        { opacity: 1, y: [100, 0] },
        {
            duration: 1.4,
            easing: [0.17, 0.55, 0.55, 1],
        }
    );
    return () => animate(element, { opacity: 0, y: 100 });
});

