/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from "vue";
import VueI18n from 'vue-i18n'
import {i18n} from "./i18n";
require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('v-header', require('./components/HeaderComponent.vue').default);
Vue.component('feedback-form-component', require('./components/FeedbackFormComponent.vue').default);
Vue.component('v-footer', require('./components/FooterComponent.vue').default);
Vue.component('service-component', require('./components/ServiceComponent.vue').default);
Vue.component('about-component', require('./components/AboutComponent.vue').default);
Vue.component('service-details-component', require('./components/ServiceDetailComponent.vue').default);
Vue.component('contacts-component', require('./components/ContanctsComponent.vue').default);
Vue.component('feedback-transport-component', require('./components/FeedBackTransportComponent.vue').default);
Vue.component('form-contact-component', require('./components/FormContacts.vue').default);
Vue.component('floating-button-component', require('./components/FloatingButton.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueI18n)
const app = new Vue({
    i18n,
    el: '#ubios',
});
