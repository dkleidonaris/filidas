import './bootstrap';
import Alpine from 'alpinejs';
import 'jquery-ui/themes/base/all.css';

import $ from 'jquery';
window.$ = $;
window.jQuery = $;

(async () => {
    await import('jquery-ui/ui/widgets/datepicker');
})();   

import lightbox from 'lightbox2';
