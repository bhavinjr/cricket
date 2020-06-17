require('./bootstrap');

import Vue from 'vue';
window.Vue = Vue;

import axios from 'axios';
window.axios = axios;

import VeeValidate from 'vee-validate'
Vue.use(VeeValidate);

Vue.component('match-create', require('./admin/components/partials/matches/Create').default);
Vue.component('match-edit', require('./admin/components/partials/matches/Edit').default);

new Vue({
    el: '#wrapper',
});

// new Vue({
//   data: {
//     message: 'hello!'
//   }
// }).$mount('#wrapper')