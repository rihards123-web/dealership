import './bootstrap';

import Alpine from 'alpinejs';

import './bootstrap';
import './nav-bar';
import '../css/app.css';

import.meta.glob([
    '../images/**',
]);


window.Alpine = Alpine;

Alpine.start();
