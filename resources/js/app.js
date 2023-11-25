import "./bootstrap";

import '@splidejs/splide/css/skyblue';

import Splide from "@splidejs/splide";

import $ from "jquery";

window.jQuery = $;

window.$ = $;

/* Guestbook Slider */

new Splide(".splide", {
    perPage: 3,
    breakpoints: {
        640: {
            perPage: 1,
        },
    },
    gap: '1em',
}).mount();
