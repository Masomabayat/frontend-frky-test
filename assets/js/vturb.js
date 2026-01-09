// Delete #pricetable to url when reload
$(function () {
    if (location.hash) history.replaceState(null, '', location.pathname + location.search);
});

/**
* ========== INIT / VARIABLES ==========
**/
var player = document.querySelector("vturb-smartplayer");
var storageKey = getPathFromUrl();
let previousVisit = localStorage.getItem(`_previousVisit-${storageKey}`);
let isCtaOpen = `_isCtaOpen-${storageKey}`;
let comments;
var hasShownBanner = false;
var bubbleActive = false;
var linkToPriceTable = $('#linkToPriceTable');
var bubbleLoopInterval = null;
var bubbleCommentsContainer = $('#bubble-comments-container');
var isStarted = false;

loadComments();

/**
* ========== CTA (hidethis) ==========
**/
document.addEventListener("DOMContentLoaded", function () {
    const ctaTime = 10;
    // const ctaTime = 6;
    const partOpenCta = new URLSearchParams(window.location.search).get('part');
    const hidethisEls = document.querySelectorAll(".hidethis");

    function showHideThis() {
        hidethisEls.forEach(el => el.style.display = "block");
        $('.timer-container').removeClass('d-none');
        $(".home-top").css("height", "unset");	
        $('.footer-section').css("height", "unset");	
        $('.container-list-ref-no-hideThis').removeClass('container-list-ref-no-hideThis')
        $('.ref-bloc-no-hideThis').removeClass('ref-bloc-no-hideThis');
        $('.h2-no-hidethis').removeClass('h2-no-hidethis');
    }

    if (partOpenCta === 'openpage') {
        showHideThis();
        localStorage.setItem(`_isCtaOpen-${storageKey}`, "true");
        // startTimer();
    }

    if (localStorage.getItem(`_isCtaOpen-${storageKey}`)) {
        showHideThis();
        ltptIsCtaOpen();
        startTimer();
    } else {
        let intervalCTA = setInterval(() => {
        const currentTime = parseInt(localStorage.getItem(`_currentTime-${storageKey}`), 10);

        if (!isNaN(currentTime) && currentTime >= ctaTime) {
            showHideThis();
            clearInterval(intervalCTA);
            localStorage.setItem(`_isCtaOpen-${storageKey}`, "true");
            startTimer();
        }
        }, 2000); 
    }
});

/**
* ========== HANDLERS ==========
**/
// Play video
player.addEventListener("video:play", (event) => {
    if(isStarted == false) {
        isStarted = true;
    }
    $('#videoRow').addClass('container-full-screen');
    $('#video-section').removeClass('container');
    $('.cover').removeClass('py-5');
    $('#videoRow').removeClass('py-4')
    $("#header-index-video").addClass('d-none');
    $('.video-wrapper').removeClass('video-border');
    setIntervalCurrentTime = setInterval(() => {
        saveCurrentTime();
        if (player.currentTime >= 5) {
            localStorage.setItem(`_previousVisit-${storageKey}`, 1);
        }
    }, 1000);

    
    window.scrollTo({ top: 0, behavior: "smooth" });

    if (window.innerWidth >= 2275) {
        player.style.maxWidth = "2275px";
    } else {
        player.style.maxWidth = "1600px";
    }
hideBanner();
});

// Pause video
player.addEventListener("video:pause", (event) => {
    $('#video-section').addClass('container');
    $('#videoRow').removeClass('container-full-screen');
    $("#header-index-video").removeClass('d-none');
    $('.cover').addClass('py-5');
    $('#videoRow').addClass('py-4')
    $('.video-wrapper').addClass('video-border');
    clearInterval(setIntervalCurrentTime);
});

// Banner && Modal : 
$(document).on('mouseleave', function(e) {
    console.log(isStarted);
        if (e.clientY <= 0) {
            if (!localStorage.getItem(isCtaOpen) && !hasShownBanner) {
                showBanner();
                hasShownBanner = true;
                return; 
            }
            if (localStorage.getItem(isCtaOpen)) {
                showVideoModal();
            }
        }
});
$('.notification-banner-btn').on('click', function() {
    var timeSaved;
    hideBanner();
    if(localStorage.getItem(`_currentTime-${storageKey}`)) {
        timeSaved = localStorage.getItem(`_currentTime-${storageKey}`)
    } else {
        timeSaved = 0
        localStorage.setItem(`_previousVisit-${storageKey}`, 1);
        videoWasStarted = true;
    }
    player.focus()
    player.play()
});
$('.notification-banner .delete').on('click', function() {
    hideBanner();
});
$('#open-cta-modal .button-yellow').on('click', function() {
    $('#open-cta-modal').modal('hide');
    setTimeout(() => { // setTimeout  optionnal (UX)
        $('#open-cta-modal').removeClass('d-flex');
    }, 200);
});
$('#open-cta-modal').on('hidden.bs.modal', function () { 
    setTimeout(() => { 
        $('#open-cta-modal').removeClass('d-flex');
    }, 200);
});
// Bubble comments : 
$(window).on('scroll', throttle(function () {
    if (localStorage.getItem(isCtaOpen)) {
        const anyVisible = $('.bubbleOpen').toArray().some(el => isInViewport(el));

        if (anyVisible && !bubbleActive) {
            bubbleActive = true;
            startBubbleLoop();
        }

        if (!anyVisible && bubbleActive) {
            bubbleActive = false;
            stopBubbleLoop();
        }
    }
}, 100));

// Btn to price table : 
$(window).on('scroll', throttle(function () {
    if (localStorage.getItem(isCtaOpen)) {
        const btns = document.querySelectorAll('.openOrderBtn');
        const anyVisible = Array.from(btns).some(el => isInViewport(el));

        if (anyVisible) {
            linkToPriceTable.addClass('visible');
        } else {
            linkToPriceTable.removeClass('visible');
        }
    }
}, 100));

$('#linkToPriceTableClosed').on('click', function() {
    var timeSaved;
    if(localStorage.getItem(`_currentTime-${storageKey}`)) {
        timeSaved = localStorage.getItem(`_currentTime-${storageKey}`)
    } else {
        timeSaved = 0
        localStorage.setItem(`_previousVisit-${storageKey}`, 1);
        videoWasStarted = true;
    }
    player.play();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    hideBanner()
});


/**
* ========== FUNCTIONS ==========
**/
function getPathFromUrl() {
    let path = window.location.pathname;
    path = path.replace(/^\/|\/$/g, ''); 
    path = path.replace(/\.php$/g, '');  
    path = path.replace(/\//g, '-'); 

    return path;
}
function saveCurrentTime() {
    var currentTime = player.currentTime;
    if (typeof currentTime === 'number') {
        localStorage.setItem(`_currentTime-${storageKey}`, currentTime.toFixed(0));
    }
}
function ltptIsCtaOpen() {
    // $('#linkToPriceTable').addClass('visible');
    $('#linkToPriceTableClosed').removeClass('visible');
}
async function loadComments() {
try {
    const res = await fetch('assets/json/bubble-comments.json');
    if (!res.ok) throw new Error(`HTTP ${res.status}`);
    comments = await res.json();
} catch {
    console.warn('Bubbles data undefined');
}
}
// Banner & Modal :
function hideBanner() {
    const $banner = $('.notification-banner');
    $banner.addClass('remove');
}
function showBanner() {
    startBannerTimer();
    player.pause();
    const $banner = $('.notification-banner');
    $banner.removeClass('remove'); 
    
    setTimeout(() => {
        $banner.removeClass('hidden'); 
    }, 5); 
}
function showVideoModal() {
    $('#open-cta-modal').modal('show').addClass('d-flex');
    player.pause();
}
function startBannerTimer(duration = 120) {
    const $timer = $('.banner-timer');
    let remaining = duration;

    const interval = setInterval(() => {
        const minutes = Math.floor(remaining / 60);
        const seconds = remaining % 60;
        $timer.text(`${minutes}:${seconds.toString().padStart(2, '0')}`);
        remaining--;
        if (remaining < 0) {
            clearInterval(interval);
            $timer.text("0:00");
        }
    }, 1000);
}
// Bubble comments : 
function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom > 0;
}
function startBubbleLoop() {
    // if (bubbleLoopInterval || comments.length === 0) return;
    let isVisible = false;
    let lastIndex = -1; 
    bubbleLoopInterval = setInterval(() => {
        if (!isVisible) {
            let index;
            do {
                index = Math.floor(Math.random() * comments.length);
            } while (index === lastIndex && comments.length > 1);

            lastIndex = index;
            const comment = comments[index];

            $('.bubble-name').text(comment.name);
            $('.bubble-city').text(comment.city);
            $('.bubble-quantity').text(`a acheté ${comment.quantity} boîte${comment.quantity > 1 ? 's' : ''}`);
            $('.bubble-time').text(`${comment.time} minute${comment.time > 1 ? 's' : ''}`);
        }

        if (isVisible) {
            bubbleCommentsContainer.css({
                transform: 'translateX(-600px)',
                opacity: 0
            });
        } else {
            bubbleCommentsContainer.css({
                transform: 'translateX(0)',
                opacity: 1
            });
        }
        isVisible = !isVisible;
    }, 3000);
}
function stopBubbleLoop() {
    clearInterval(bubbleLoopInterval);
    bubbleLoopInterval = null;
    bubbleCommentsContainer.css({
        transform: 'translateX(-600px)',
        opacity: 0
    });
}
function throttle(fn, delay) {
    let lastCall = 0;
    return function (...args) {
        const now = Date.now();
        if (now - lastCall >= delay) {
            lastCall = now;
            fn.apply(this, args);
        }
    };
}