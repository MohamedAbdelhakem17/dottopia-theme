// Start Custom Slider
(function () {
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".swiper-container", {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            centeredSlides: true,
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1024: {
                    spaceBetween: 10,
                },
                768: {
                    spaceBetween: 5,
                },
            },
        });
    });
})();

// Infinity Gallery Slider
(function () {
    document.addEventListener("DOMContentLoaded", function () {
        function startInfiniteScroll(rowClass, speed) {
            const row = document.querySelector(rowClass);
            if (!row) return;

            while (row.scrollWidth < window.innerWidth * 2) {
                row.innerHTML += row.innerHTML;
            }
        }

        startInfiniteScroll(".client-carousel-row-1", 20); // Left to right scrolling
        startInfiniteScroll(".client-carousel-row-2", 20); // Right to left scrolling
    });
})();

// FAQ Accordion
(function () {
    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll("#accordion button");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                const targetId = this.getAttribute("data-target");
                const targetPanel = document.getElementById(targetId);
                const icon = this.querySelector("#icon"); 

                document.querySelectorAll("#accordion > div > div").forEach(panel => {
                    if (panel !== targetPanel) {
                        panel.style.maxHeight = "0px";
                        panel.previousElementSibling.querySelector("#icon").innerHTML = '<i class="fa-solid fa-plus"></i>';
                    }
                });

                if (targetPanel.style.maxHeight && targetPanel.style.maxHeight !== "0px") {
                    targetPanel.style.maxHeight = "0px";
                    icon.innerHTML = '<i class="fa-solid fa-plus"></i>';
                } else {
                    targetPanel.style.maxHeight = targetPanel.scrollHeight + "px";
                    icon.innerHTML = '<i class="fa-solid fa-minus"></i>';
                }
            });
        });

        
        document.querySelectorAll("#accordion > div > div").forEach(panel => {
            panel.style.maxHeight = "0px";
        });
    });
})();

// // Start Animation in Scroll
// (function () {

//     const { animate, scroll, inView } = Motion;


//     // Animations for header text
//     inView("[data-inview='text-fadeInUp']", (element) => {
//         animate(
//             element,
//             { opacity: 1, y: [100, 0] },
//             {
//                 duration: 1.0,
//                 easing: [0.17, 0.55, 0.55, 1],
//             }
//         );
//         return () => animate(element, { opacity: 0, y: 100 });
//     });

//     // Animations for paragraph text
//     inView("[data-inview='text-fadeInUp']", (element) => {
//         animate(
//             element,
//             { opacity: 1, y: [100, 0] },
//             {
//                 duration: 1.2,
//                 easing: [0.17, 0.55, 0.55, 1],
//             }
//         );
//         return () => animate(element, { opacity: 0, y: 100 });
//     });

//     // Animations for the button
//     inView("[data-inview='button-fadeInUp']", (element) => {
//         animate(
//             element,
//             { opacity: 1, y: [100, 0] },
//             {
//                 duration: 1.4,
//                 easing: [0.17, 0.55, 0.55, 1],
//             }
//         );
//         return () => animate(element, { opacity: 0, y: 100 });
//     });


//     // Animating Services
//     document.querySelectorAll(".service-container").forEach((section) => {
//         const header = section.querySelector(".info");
//         const image = section.querySelector("img");

//         scroll(
//             animate(header, {
//                 y: [-100, 0, 100],
//                 opacity: [0, 1, 0]
//             }, { ease: "easeInOut" }),
//             { target: section }
//         );

//         scroll(
//             animate(image, {
//                 y: [-50, 50],
//                 opacity: [0, 1, 0]
//             }, { ease: "easeInOut" }),
//             { target: section }
//         );
//     });

//     // Animating Roadblocks
//     document.querySelectorAll(".card").forEach((card, index) => {
//         scroll(
//             animate(card, {
//                 opacity: [0, 1, 0],
//                 y: [20, 0]
//             }, {
//                 duration: 0.8,
//                 easing: "ease-out",
//                 delay: index * .2
//             }),
//             { target: card }
//         );
//     });

//     // Animating Partner
//     document.querySelectorAll(".partner").forEach((partner, index) => {
//         scroll(
//             animate(partner, {
//                 opacity: [0, 1, 0],
//                 scale: [1.3, 1, 0],
//                 y: [-50, 0, 50],
//             }, {
//                 duration: 1,
//                 easing: "ease-in-out",
//                 delay: index * .5
//             }),
//             { target: partner }
//         );
//     });

//     // Animating Title and Description
//     document.querySelectorAll('.title, .description').forEach((element, index) => {
//         const animation = animate(
//             element,
//             { opacity: [0, 1, 1], y: [10, 0, 0] },
//             { duration: 0.5, delay: 0.2 }
//         );
//         scroll(animation, { target: element });
//     });


//     // Animating Blogs
//     document.querySelectorAll(".BLOG").forEach((partner, index) => {
//         scroll(
//             animate(partner, {
//                 opacity: [0, 1, 1],
//                 scale: [.7, 1, 1],
//                 translateX: [-20, 0, 0],
//                 y: [-50, 0, 0],
//                 offset: "center"
//             }, {
//                 duration: 1,
//                 easing: "ease-in-out",
//                 delay: index * .1
//             }),
//             { target: partner }
//         );
//     });


//     // Fade in out Animation
//     document.querySelectorAll('.fade').forEach((element, index) => {
//         const animation = animate(
//             element,
//             { opacity: [0, 1, 0] },
//             { duration: 1, delay: index * 0.2 }
//         );
//         scroll(animation, { target: element });
//     });

// })();