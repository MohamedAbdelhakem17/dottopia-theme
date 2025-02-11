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
            opacity: [0, 1 , 0] // Fades in
        }, { ease: "easeInOut" }),
        { target: section }
    );
});
