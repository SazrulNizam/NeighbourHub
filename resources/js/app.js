import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// script.js

import '../assets/js/script.js';
import '../assets/js/plugins/simplebar.min.js';
import '../assets/js/plugins/popper.min.js';
import '../assets/js/icon/custom-icon.js';
import '../assets/js/plugins/feather.min.js';
import '../assets/js/component.js';
import '../assets/js/theme.js';
document.addEventListener('DOMContentLoaded', () => {
  if (typeof feather !== 'undefined') {
    feather.replace();
  }
});