import "./bootstrap";

import '@splidejs/splide/css/skyblue';

import Splide from "@splidejs/splide";

import $ from "jquery";

window.jQuery = $;

window.$ = $;

window.Splide = Splide;

/* Import images and fonts. */
import.meta.glob(["../images/**", "../fonts/**"]);
