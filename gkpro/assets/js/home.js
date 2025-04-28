window.addEventListener("scroll", function () {
    let element = document.querySelector("header");
    if (window.scrollY > 50) {
        element.classList.add("scrolled");
    } else {
        element.classList.remove("scrolled");
    }
});
// $(document).ready(function() {
 
//     $(".test-card-carousel").owlCarousel({
//         loop: true,
//         nav: false,
//         dots: false,
//         autoWidth: true,
//         stagPadding: 200,
//         autoPlay: true,
//         responsive: {
//             0: {
//                 items: 1 // 1 item for mobile
//             }
//         }
//     });
   
// });

$(document).ready(function(){
    var owl = $(".owl-carousel.test-card-carousel");

    owl.owlCarousel({
        // items: 1,
        loop: true,
        nav: false,
        dots: false,
        // autoWidth: true,
        stagePadding: 350,
        center: true,
        margin: 32,
        responsive: {
            0: {
                items: 1, // 1 item for mobile
                stagePadding: 50,
                center: false
            },
            768: {
                items: 1, // 4 items for desktop
                stagePadding: 100,
                center: false
            },
            1100: {
                items: 1 // 4 items for desktop
            }
        }
    });

    // Get total slides directly by counting non-cloned items
    var totalSlides = $(".owl-carousel .owl-item:not(.cloned)").length;
    console.log("Total slides after initialization:", totalSlides); // Check in console
    $("#total-slides").text(totalSlides.toString().padStart(2, '0'));

    function updateCounter(event) {
        var currentIndex = (event.item.index - event.relatedTarget._clones.length / 2) % totalSlides + 1;
        if (currentIndex < 1) currentIndex = totalSlides;
        console.log("Current slide index:", currentIndex); // Check in console
        $("#current-slide").text(currentIndex.toString().padStart(2, '0'));
    }

    // Update counter on slide change
    owl.on('changed.owl.carousel', updateCounter);

    // Custom Navigation
    $("#prev-slide").click(function() {
        owl.trigger('prev.owl.carousel');
    });

    $("#next-slide").click(function() {
        owl.trigger('next.owl.carousel');
    });

    // Initialize counter after carousel is fully loaded
    owl.on('initialized.owl.carousel', function(event) {
        updateCounter(event);
    });
});


$(document).ready(function() {
 
    $("#owl-demo").owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 32,
        autoPlay: true,
        responsive: {
            0: {
                items: 1 // 1 item for mobile
            },
            768: {
                items: 3 // 4 items for desktop
            },
            1100: {
                items: 4 // 4 items for desktop
            }
        }
    });
   
});

  document.addEventListener("DOMContentLoaded", function () {
    function adjustTabContentMargin() {
        const header = document.querySelector("header .container");
        const tutorscard=document.querySelector(".owl-carousel.tutor-carousel");
        const tabContent = document.querySelector(".lower-tab-content");

        if (header && tabContent) {
            const headerMarginLeft = window.getComputedStyle(header).marginLeft;
            tabContent.style.marginLeft = headerMarginLeft;
        }

        if(header && tutorscard){
            const headerMarginLeft = window.getComputedStyle(header).marginLeft;
            tutorscard.style.marginLeft = headerMarginLeft;
        }
    }

    // Adjust on load and resize
    adjustTabContentMargin();
    window.addEventListener("resize", adjustTabContentMargin);
});



// document.addEventListener('DOMContentLoaded', function () {
//     // Testimonial slider functionality
//     const rightTestArrow = document.querySelector('.right-test-tl');
//     const leftTestArrow = document.querySelector('.left-test-tl');
//     const testimonialCarousel = document.querySelector('.test-card-carousel');
//     const testimonialCards = document.querySelectorAll('.card-parent-container');
//     let currentTestimonialIndex = 0;
//     const totalTestimonials = testimonialCards.length;

//     function updateTestimonialPageNumber() {
//         const pageNumber = document.querySelector('.testimonial .page-number');
//         const currentPage = String(currentTestimonialIndex + 1).padStart(2, '0');
//         const totalPages = String(totalTestimonials).padStart(2, '0');
//         pageNumber.innerHTML = `<strong>${currentPage}</strong>/${totalPages}`;
//     }

//     function slideTestimonial(direction) {
//         if (direction === 'right' && currentTestimonialIndex < totalTestimonials - 1) {
//             currentTestimonialIndex++;
//         } else if (direction === 'left' && currentTestimonialIndex > 0) {
//             currentTestimonialIndex--;
//         }

//         // Remove active class from all cards
//         testimonialCards.forEach(card => {
//             card.classList.remove('active');
//         });

//         // Add active class to current card
//         testimonialCards[currentTestimonialIndex].classList.add('active');

//         // Calculate slide position with smooth transition
//         const slideAmount = -399 - (currentTestimonialIndex * testimonialCards[0].offsetWidth);
//         testimonialCarousel.style.transform = `translateX(${slideAmount}px)`;
//         updateTestimonialPageNumber();
//     }

//     rightTestArrow.addEventListener('click', function () {
//         slideTestimonial('right');
//     });

//     leftTestArrow.addEventListener('click', function () {
//         slideTestimonial('left');
//     });

//     // Initialize testimonial page number
//     updateTestimonialPageNumber();
// });

// function toggleFAQ(element) {
//     const answer = element.nextElementSibling; // Get the paragraph element
//     const allAnswers = document.querySelectorAll('.faq-answer'); // Get all FAQ answers

//     // Close all other answers
//     allAnswers.forEach((item) => {
//         if (item !== answer) {
//             item.style.display = "none"; // Hide other answers
//         }
//     });

//     // Toggle the clicked answer
//     if (answer.style.display === "none" || answer.style.display === "") {
//         answer.style.display = "block"; // Show the answer
//         element.style.cursor = "pointer"; // Change cursor to pointer
//     } else {
//         answer.style.display = "none"; // Hide the answer
//     }
// }

function toggleFAQ(element) {
    const answer = element.nextElementSibling; // Get the paragraph element
    const faqCard = element.parentElement; // Get the parent div (faq-card-content)
    const allFaqCards = document.querySelectorAll('.faq-card-content'); // Get all FAQ cards

    // Close all other answers and remove the active class
    allFaqCards.forEach((card) => {
        const answerElement = card.querySelector('.faq-answer');
        if (card !== faqCard) {
            answerElement.style.display = "none"; // Hide other answers
            card.classList.remove('active'); // Remove active class from other cards
        }
    });

    // Toggle the clicked answer and add/remove the active class
    if (answer.style.display === "none" || answer.style.display === "") {
        answer.style.display = "block"; // Show the answer
        faqCard.classList.add('active'); // Add active class
    } else {
        answer.style.display = "none"; // Hide the answer
        faqCard.classList.remove('active'); // Remove active class
    }
}


// Add double-click functionality to collapse
document.querySelectorAll('.faq-card-tl').forEach(card => {
    card.addEventListener('dblclick', function () {
        const addClass = document.querySelector('.faq-card-content');
        const answer = this.nextElementSibling; // Get the paragraph element
        answer.style.display = "none"; // Hide the answer on double-click

    });
});

document.querySelectorAll('.tab-link').forEach(tab => {
    tab.addEventListener('click', function (e) {
        e.preventDefault();
        const tabId = this.getAttribute('data-tab');

        // Hide all tab cards
        document.querySelectorAll('.tab-cards').forEach(card => {
            card.style.display = 'none';
        });

        // Show the selected tab cards
        document.getElementById(tabId).style.display = 'flex';

        // Optionally, you can add active class to the clicked tab
        document.querySelectorAll('.tab-link').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// Replace the existing card sliding functionality with this updated version
// document.addEventListener('DOMContentLoaded', function () {
//     const rightArrow = document.querySelector('.right-tl');
//     const leftArrow = document.querySelector('.left-tl');
//     let currentPosition = 0;
//     let currentCardIndex = 0;

//     function updateActiveTabCards() {
//         const activeTabCards = document.querySelector('.tab-cards[style*="display: flex"]') || document.querySelector('.tab-cards:not([style*="display: none"])');
//         return activeTabCards;
//     }

//     function updatePageNumber() {
//         const activeTabCards = updateActiveTabCards();
//         if (!activeTabCards) return;

//         const totalCards = activeTabCards.querySelectorAll('.cardd-tl').length;
//         const pageNumber = document.querySelector('.page-number');

//         // Format the current index to 2 digits (01, 02, etc.)
//         const currentPage = String(currentCardIndex + 1).padStart(2, '0');
//         const totalPages = String(totalCards).padStart(2, '0');

//         pageNumber.innerHTML = `<strong>${currentPage}</strong>/${totalPages}`;
//     }

//     function updateBoxShadow() {
//         const activeTabCards = updateActiveTabCards();
//         if (!activeTabCards) return;

//         const allCards = activeTabCards.querySelectorAll('.cardd-tl');
//         allCards.forEach(card => {
//             card.classList.remove('active-card');
//             // Ensure smooth transition to inactive state
//             card.style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
//         });

//         const currentCard = allCards[currentCardIndex];
//         if (currentCard) {
//             // Add small delay before adding active class for smoother transition
//             setTimeout(() => {
//                 currentCard.classList.add('active-card');
//             }, 50);
//         }

//         updatePageNumber();
//     }

//     rightArrow.addEventListener('click', function () {
//         const activeTabCards = updateActiveTabCards();
//         if (!activeTabCards) return;

//         const allCards = activeTabCards.querySelectorAll('.cardd-tl');
//         if (currentCardIndex < allCards.length - 1) {
//             currentCardIndex++;
//             const cardWidth = allCards[0].offsetWidth + 24; // card width + gap
//             currentPosition = currentCardIndex * cardWidth;

//             activeTabCards.scroll({
//                 left: currentPosition,
//                 behavior: 'smooth'
//             });

//             updateBoxShadow();
//         }
//     });

//     leftArrow.addEventListener('click', function () {
//         const activeTabCards = updateActiveTabCards();
//         if (!activeTabCards) return;

//         if (currentCardIndex > 0) {
//             currentCardIndex--;
//             const cardWidth = activeTabCards.querySelector('.cardd-tl').offsetWidth + 24; // card width + gap
//             currentPosition = currentCardIndex * cardWidth;

//             activeTabCards.scroll({
//                 left: currentPosition,
//                 behavior: 'smooth'
//             });

//             updateBoxShadow();
//         }
//     });

//     // Reset position and box shadow when switching tabs
//     document.querySelectorAll('.tab-link').forEach(tab => {
//         tab.addEventListener('click', function () {
//             currentPosition = 0;
//             currentCardIndex = 0;
//             setTimeout(() => {
//                 updateBoxShadow();
//                 updatePageNumber(); // Update page number when switching tabs
//             }, 100); // Small delay to ensure DOM is updated
//         });
//     });

//     // Initialize box shadow and page number
//     updateBoxShadow();
//     updatePageNumber();
// });

// Add this new code for hamburger menu functionality
document.addEventListener('DOMContentLoaded', function () {
    const menuIcon = document.querySelector('.menu-icon');
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const bodyOverflow = document.querySelector('body');
    // Open menu when clicking menu icon
    menuIcon.addEventListener('click', function (e) {
        e.stopPropagation();
        hamburgerMenu.classList.add('active');
        bodyOverflow.classList.add('overflow');
    });

    // Close menu when clicking outside
    document.addEventListener('click', function (e) {
        if (hamburgerMenu.classList.contains('active')) {
            // Check if click is outside the inner-menu-bar
            const innerMenu = document.querySelector('.inner-menu-bar');
            if (!innerMenu.contains(e.target)) {
                hamburgerMenu.classList.remove('active');
                bodyOverflow.classList.remove('overflow');
            }
        }
    });

    // Prevent clicks inside menu from closing it
    hamburgerMenu.querySelector('.inner-menu-bar').addEventListener('click', function (e) {
        e.stopPropagation();
    });
});

// document.addEventListener('DOMContentLoaded', function () {
//     // Add this new function for setting margins
//     function setTestimonialMargins() {
//         const header = document.querySelector('.header.container');
//         const testimonialSection = document.querySelector('.test-card-carousel');

//         if (window.innerWidth <= 991) { // For mobile devices
//             const headerComputedStyle = window.getComputedStyle(header);
//             const headerMarginLeft = headerComputedStyle.marginLeft;
//             const headerMarginRight = headerComputedStyle.marginRight;

//             testimonialSection.style.marginLeft = headerMarginLeft;
//             testimonialSection.style.marginRight = headerMarginRight;
//             testimonialSection.style.width = `calc(100% - ${parseFloat(headerMarginLeft) * 2}px)`;
//         } else {
//             // Reset margins for larger screens
//             testimonialSection.style.marginLeft = '';
//             testimonialSection.style.marginRight = '';
//             testimonialSection.style.width = '';
//         }
//     }

//     // Call the function initially
//     setTestimonialMargins();

// });


$(document).ready(function(){
    $(".fetshow-more").click(function(){
        var content = $(".course-feat-body");
        var btnText = $(".fetshow-more span");
        var mobileHeight = 440; // Height for mobile
        var desktopHeight = 210; // Height for desktop
        var targetHeight = $(window).width() <= 768 ? mobileHeight : desktopHeight; // Check screen width

        if (content.hasClass("active")) {
            // Collapse
            content.removeClass("active").animate({ height: targetHeight + "px" }, 500);
            btnText.text("Show More");
        } else {
            // Expand
            content.addClass("active").animate({ height: content.get(0).scrollHeight }, 500, function() {
                content.css("height", "auto"); // Keep height auto after expanding
            });
            btnText.text("Show Less");
        }
    });
});

// $(document).ready(function(){
//     $(".sylshow-more").click(function(){
//         var content = $(".csy-body");
//         var btnText = $(".sylshow-more span");

//         if (content.hasClass("active")) {
//             // Collapse
//             content.removeClass("active").animate({ height: "440px" }, 500);
//             btnText.text("Show More");
//         } else {
//             // Expand
//             content.addClass("active").animate({ height: content.get(0).scrollHeight }, 500, function() {
//                 content.css("height", "auto"); // Ensure height stays auto after expanding
//             });
//             btnText.text("Show Less");
//         }
//     });
// });

$(document).ready(function(){
    $(".sylshow-more").click(function(){
        var content = $(".csy-body");
        var btnText = $(".sylshow-more span");
        var mobileHeight = 380; // Height for mobile
        var desktopHeight = 440; // Height for desktop
        var targetHeight = $(window).width() <= 768 ? mobileHeight : desktopHeight; // Check screen width

        if (content.hasClass("active")) {
            // Collapse
            content.removeClass("active").animate({ height: targetHeight + "px" }, 500);
            btnText.text("Show More");
        } else {
            // Expand
            content.addClass("active").animate({ height: content.get(0).scrollHeight }, 500, function() {
                content.css("height", "auto"); // Keep height auto after expanding
            });
            btnText.text("Show Less");
        }
    });
});

// $(document).ready(function(){
//     $(".faqshow-more").click(function(){
//         var content = $(".course-faq-body");
//         var btnText = $(".faqshow-more span");

//         if (content.hasClass("active")) {
//             // Collapse
//             content.removeClass("active").animate({ height: "410px" }, 500);
//             btnText.text("Show More");
//         } else {
//             // Expand
//             content.addClass("active").animate({ height: content.get(0).scrollHeight }, 500, function() {
//                 content.css("height", "auto"); // Ensure height stays auto after expanding
//             });
//             btnText.text("Show Less");
//         }
//     });
// });
$(document).ready(function(){
    $(".faqshow-more").click(function(){
        var content = $(".course-faq-body");
        var btnText = $(".faqshow-more span");
        var mobileHeight = 420; // Height for mobile
        var desktopHeight = 400; // Height for desktop
        var targetHeight = $(window).width() <= 768 ? mobileHeight : desktopHeight; // Check screen width

        if (content.hasClass("active")) {
            // Collapse
            content.removeClass("active").animate({ height: targetHeight + "px" }, 500);
            btnText.text("Show More");
        } else {
            // Expand
            content.addClass("active").animate({ height: content.get(0).scrollHeight }, 500, function() {
                content.css("height", "auto"); // Keep height auto after expanding
            });
            btnText.text("Show Less");
        }
    });
});


$('.abt-test-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay: true,
    responsive:{
        0:{
            items:1,
        }
    }
});

jQuery(document).ready(function($) {
    // Auto-submit when a checkbox changes
    $('#course-filter-form input[type=checkbox]').on('change', function() {
        $('#course-filter-form').submit();
    });

    $('#course-filter-form input[type="checkbox"], #course-sort').on('change', function(){
        $('#course-filter-form').submit();
    });
});


// share code
// document.getElementById('share-button').addEventListener('click', function(e) {
//     e.preventDefault();

//     if (navigator.share) {
//         navigator.share({
//             title: '<?php echo esc_js($product_title); ?>',
//             url: '<?php echo esc_url($product_url); ?>'
//         }).catch(error => console.log('Error sharing:', error));
//     } else {
//         alert('Sharing not supported on this browser.');
//     }
// });


$(document).ready(function() {
 
    $(".login-carousel").owlCarousel({
        autoPlay: true,
        dots: true,
        nav: false,
        loop: true,
        autoPlay: 3000, 

        responsive: {
            0: {
                items: 1 
            }
        }
   
    });
   
});


// new js
$(document).ready(function() {
    // Initialize all carousels
    $(".owl-carousel").each(function() {
        var owl = $(this);
        
        owl.owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            margin: 24,
            responsive: {
                0: {
                    items: 1,
                    // autoWidth: true,
                    // stagePadding: 50,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1100: {
                    items: 4
                }
            }
        });

        // Function to update the slide counter
        function updateCounter(event) {
            var totalSlides = event.item.count; // Total items after carousel is initialized
            var currentIndex = (event.item.index - event.relatedTarget._clones.length / 2) % totalSlides + 1;
            if (currentIndex < 1) currentIndex = totalSlides;

            // Update the specific counter related to the current carousel
            var parentContent = owl.closest(".content");
            parentContent.find(".current-slide").text(currentIndex.toString().padStart(2, '0'));
            parentContent.find(".total-slides").text(totalSlides.toString().padStart(2, '0'));
        }

        // Set total slides after a small delay to ensure calculation
        setTimeout(function() {
            var totalSlides = owl.find(".owl-item:not(.cloned)").length;
            var parentContent = owl.closest(".content");
            parentContent.find(".total-slides").text(totalSlides.toString().padStart(2, '0'));
        }, 100); // Delay to ensure correct calculation

        // Update counter on slide change
        owl.on('changed.owl.carousel', updateCounter);
    });

    // Custom Navigation
    $(".custom-prev").click(function() {
        var activeCarousel = $(this).closest(".content").find(".owl-carousel");
        if (activeCarousel.length) {
            activeCarousel.trigger('prev.owl.carousel');
        }
    });

    $(".custom-next").click(function() {
        var activeCarousel = $(this).closest(".content").find(".owl-carousel");
        if (activeCarousel.length) {
            activeCarousel.trigger('next.owl.carousel');
        }
    });
});

$('.dash-toggle').on('click', function(){
    $('.std-dash-box').toggleClass('show');
});




       $(".tabs").on("click", ".tab", function(e) {
            	e.preventDefault();
            	$(".tab").removeClass("active");
            	$(".content").removeClass("show");
            	$(this).addClass("active");
            	$($(this).attr("href")).addClass("show");
            });

            jQuery(document).ready(function($) {
                $('.pass-hide-show').on('click', function() {
                  var $passwordField = $(this).siblings('.login-pass');
                  var type = $passwordField.attr('type') === 'password' ? 'text' : 'password';
              
                  $passwordField.attr('type', type);
              
                  // Optional: toggle button text
                //   $(this).text(type === 'password' ? 'Show' : 'Hide');
                });
              });
              jQuery(document).ready(function($) {
                $('.course-faq-body .accordion-header button').on('click', function(e) {
                  e.preventDefault();
              
                  // Collapse all open items
                  $('.course-faq-body .accordion-collapse').removeClass('show');
                  // Get the target collapse ID from data-bs-target
                  var target = $(this).attr('data-bs-target');
              
                  // Expand the clicked one
                  $(target).addClass('show');
                });
              });

              jQuery(document).ready(function($) {
                $('.course-faq-body .accordion-header button').on('click', function(e) {
                  // Remove 'active' from all items
                  $('.accordion-item').removeClass('active');
              
                  // Add 'active' to the clicked item's parent
                  $(this).closest('.accordion-item').addClass('active');
                });
              });