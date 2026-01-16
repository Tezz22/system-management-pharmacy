import './bootstrap';

import Alpine from 'alpinejs';
import navbar from './components/navbar';

Alpine.data('navbar', navbar);

window.Alpine = Alpine;

Alpine.start();
