import "./bootstrap";

import '@splidejs/splide/css/skyblue';

import Splide from "@splidejs/splide";

import tippy from 'tippy.js';
import 'tippy.js/dist/tippy.css';
import 'tippy.js/animations/scale.css';

import $ from "jquery";

window.jQuery = $;

window.$ = $;

window.Splide = Splide;

/* Import images and fonts. */
import.meta.glob(["../images/**", "../fonts/**"]);

tippy('.reactions > img', {
    arrow: true,
    animation: 'scale',
    content: (reference) => reference.getAttribute('title'),
});
