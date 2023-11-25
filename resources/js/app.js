import "./bootstrap";

import Alpine from "alpinejs";

import '@splidejs/splide/css/skyblue';

import Splide from "@splidejs/splide";

import $ from "jquery";

window.jQuery = $;

window.$ = $;

window.Alpine = Alpine;

Alpine.start();

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
