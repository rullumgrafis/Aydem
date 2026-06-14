/*
Template Name: Landinger - Multipurpose Tailwind CSS Landing Page Template
Version: 1.0.0
Author: Unifato
Email: unifato.themes@gmail.com
File: App js
*/

// CSS File Import
import "../css/style.css";


// Preline Plugin File Import
import "preline";




import './components/gallary';
import './components/animation';
import './components/swiper';

import Gumshoe from 'gumshoejs';

document.addEventListener('DOMContentLoaded', () => {
    new Gumshoe('#navbar a[href^="#"]', {
        offset: 80,        // adjust if you have header / spacing
        reflow: true,
        events: true,
    });
});
