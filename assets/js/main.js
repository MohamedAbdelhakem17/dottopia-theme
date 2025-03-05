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

// Start Scroll
(function () {

    const { animate, scroll } = Motion;

    // Start Parallax Animation 
    document.querySelectorAll(".parallax").forEach((section) => {
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
                y: [0, 0],
                opacity: [.8, 1, .8]
            }, { ease: "easeInOut" }),
            { target: section }
        );
    });

    // Start Counter Animation
    function startCounting(counter) {
        const number = Number(counter.getAttribute("data-count"));
        animate(0, number, {
            duration: 4,
            ease: "circOut",
            onUpdate: (latest) => (counter.innerHTML = Math.round(latest)),
        });
    }

    // Observe when the section appears in viewport
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                startCounting(entry.target);
                observer.unobserve(entry.target); // Stop observing after animation starts
            }
        });
    }, { threshold: 0.5 }); // Trigger when 50% of the section is visible

    // Select all counter elements and observe them
    document.querySelectorAll(".counter").forEach((counter) => {
        observer.observe(counter);
    });


    // Animations for header text
    // inView("[data-inview='text-fadeInUp']", (element) => {
    //     animate(
    //         element,
    //         { opacity: 1, y: [100, 0] },
    //         {
    //             duration: 1.0,
    //             easing: [0.17, 0.55, 0.55, 1],
    //         }
    //     );
    //     return () => animate(element, { opacity: 0, y: 100 });
    // });

    // Animations for paragraph text
    // inView("[data-inview='text-fadeInUp']", (element) => {
    //     animate(
    //         element,
    //         { opacity: 1, y: [100, 0] },
    //         {
    //             duration: 1.2,
    //             easing: [0.17, 0.55, 0.55, 1],
    //         }
    //     );
    //     return () => animate(element, { opacity: 0, y: 100 });
    // });

    // Animations for the button
    // inView("[data-inview='button-fadeInUp']", (element) => {
    //     animate(
    //         element,
    //         { opacity: 1, y: [100, 0] },
    //         {
    //             duration: 1.4,
    //             easing: [0.17, 0.55, 0.55, 1],
    //         }
    //     );
    //     return () => animate(element, { opacity: 0, y: 100 });
    // });


    // animating parallax


    // Animating Roadblocks
    // document.querySelectorAll(".card").forEach((card, index) => {
    //     scroll(
    //         animate(card, {
    //             opacity: [0, 1, 0],
    //             y: [20, 0]
    //         }, {
    //             duration: 0.8,
    //             easing: "ease-out",
    //             delay: index * .2
    //         }),
    //         { target: card }
    //     );
    // });

    // // Animating Partner
    // document.querySelectorAll(".partner").forEach((partner, index) => {
    //     scroll(
    //         animate(partner, {
    //             opacity: [0, 1, 0],
    //             scale: [1.3, 1, 0],
    //             y: [-50, 0, 50],
    //         }, {
    //             duration: 1,
    //             easing: "ease-in-out",
    //             delay: index * .5
    //         }),
    //         { target: partner }
    //     );
    // });

    // // Animating Title and Description
    // document.querySelectorAll('.title, .description').forEach((element, index) => {
    //     const animation = animate(
    //         element,
    //         { opacity: [0, 1, 1], y: [10, 0, 0] },
    //         { duration: 0.5, delay: 0.2 }
    //     );
    //     scroll(animation, { target: element });
    // });


    // // Animating Blogs
    // document.querySelectorAll(".BLOG").forEach((partner, index) => {
    //     scroll(
    //         animate(partner, {
    //             opacity: [0, 1, 1],
    //             scale: [.7, 1, 1],
    //             translateX: [-20, 0, 0],
    //             y: [-50, 0, 0],
    //             offset: "center"
    //         }, {
    //             duration: 1,
    //             easing: "ease-in-out",
    //             delay: index * .1
    //         }),
    //         { target: partner }
    //     );
    // });


    // // Fade in out Animation
    // document.querySelectorAll('.fade').forEach((element, index) => {
    //     const animation = animate(
    //         element,
    //         { opacity: [0, 1, 0] },
    //         { duration: 1, delay: index * 0.2 }
    //     );
    //     scroll(animation, { target: element });
    // });

})()

// AOS Animation
AOS.init(
    {
        offset: 50,
        duration: 800,
        easing: 'ease-in-out',
        once: false,
    }
);

// Navbar
document.addEventListener("DOMContentLoaded", function () {
    const menu = document.getElementById("menu-primary");
    const menuToggleBtn = document.getElementById("menu-toggle");

    menuToggleBtn.addEventListener("click", function () {
        menu.classList.toggle("active");
        // alert('hello')
    });
});

// BLog Filter
document.addEventListener("DOMContentLoaded", function () {
    const categoryButtons = document.querySelectorAll(".category-btn");
    const posts = document.querySelectorAll(".post-item");

    // Function to filter posts based on category
    function filterPosts(category) {
        categoryButtons.forEach(btn => btn.classList.remove("bg-black", "text-white"));

        categoryButtons.forEach(button => {
            if (button.getAttribute("data-category").toLowerCase() === category.toLowerCase()) {
                button.classList.add("bg-black", "text-white");
            }
        });

        posts.forEach(post => {
            if (category === "all" || post.getAttribute("data-category") === category) {
                post.style.display = "block";
            } else {
                post.style.display = "none";
            }
        });
    }

    // Function to update the URL without reloading
    function updateCategory(category) {
        const newUrl = new URL(window.location);
        newUrl.searchParams.set("category", category);
        window.history.pushState({}, "", newUrl);
        filterPosts(category);
    }

    // Set category on page load if exists in URL
    const urlParams = new URLSearchParams(window.location.search);
    const currentCategory = urlParams.get("category") || "all";
    filterPosts(currentCategory);

    // Event listeners for category buttons
    categoryButtons.forEach(button => {
        button.addEventListener("click", function () {
            const category = this.getAttribute("data-category");
            updateCategory(category);
        });
    });

    // Handle back/forward navigation (browser history)
    window.addEventListener("popstate", function () {
        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get("category") || "all";
        filterPosts(category);
    });
});


document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".contact-swiper-container", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        centeredSlides: true,
        slidesPerView: 1,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        },
    });
});