import './bootstrap';
import './libs/trix';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus'
Alpine.plugin(focus);
window.Alpine = Alpine;
Alpine.start();
