
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require('./vendor/src/index.js');

window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('ui-alert', require('./vendor/src/UiAlert.vue'));
Vue.component('ui-autocomplete', require('./vendor/src/UiAutocomplete.vue'));
Vue.component('ui-button', require('./vendor/src/UiButton.vue'));
Vue.component('ui-calendar', require('./vendor/src/UiCalendar.vue'));
Vue.component('ui-checkbox', require('./vendor/src/UiCheckbox.vue'));
Vue.component('ui-checkbox-group', require('./vendor/src/UiCheckboxGroup.vue'));
Vue.component('ui-collapsible', require('./vendor/src/UiCollapsible.vue'));
Vue.component('ui-confirm', require('./vendor/src/UiConfirm.vue'));
Vue.component('ui-datepicker', require('./vendor/src/UiDatepicker.vue'));
Vue.component('ui-fab', require('./vendor/src/UiFab.vue'));
Vue.component('ui-fileupload', require('./vendor/src/UiFileupload.vue'));
Vue.component('ui-icon', require('./vendor/src/UiIcon.vue'));
Vue.component('ui-icon-button', require('./vendor/src/UiIconButton.vue'));
Vue.component('ui-menu', require('./vendor/src/UiMenu.vue'));
Vue.component('ui-modal', require('./vendor/src/UiModal.vue'));
Vue.component('ui-popover', require('./vendor/src/UiPopover.vue'));
Vue.component('ui-preloader', require('./vendor/src/UiPreloader.vue'));
Vue.component('ui-progress-circular', require('./vendor/src/UiProgressCircular.vue'));
Vue.component('ui-progress-linear', require('./vendor/src/UiProgressLinear.vue'));
Vue.component('ui-radio', require('./vendor/src/UiRadio.vue'));
Vue.component('ui-radio-group', require('./vendor/src/UiRadioGroup.vue'));
Vue.component('ui-ripple-ink', require('./vendor/src/UiRippleInk.vue'));
Vue.component('ui-select', require('./vendor/src/UiSelect.vue'));
Vue.component('ui-slider', require('./vendor/src/UiSlider.vue'));
Vue.component('ui-snackbar', require('./vendor/src/UiSnackbar.vue'));
Vue.component('ui-snackbar-container', require('./vendor/src/UiSnackbarContainer.vue'));
Vue.component('ui-switch', require('./vendor/src/UiSwitch.vue'));
Vue.component('ui-tab', require('./vendor/src/UiTab.vue'));
Vue.component('ui-tabs', require('./vendor/src/UiTabs.vue'));
Vue.component('ui-textbox', require('./vendor/src/UiTextbox.vue'));
Vue.component('ui-toolbar', require('./vendor/src/UiToolbar.vue'));
Vue.component('ui-tooltip', require('./vendor/src/UiTooltip.vue'));

const app = new Vue({
    el: '#app',
    data: {
    	showAlert1: false,
    	file11PreviewImage: '',
    },
    methods: {
    	openModal(ref) {
            this.$refs[ref].open();
        },
        closeModal(ref) {
            this.$refs[ref].close();
        },
        onFile11Change(files) {
            this.file11PreviewImage = URL.createObjectURL(files[0]);
        }
    }
});

