
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

/*
 * Vue and VueRouter
 */
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

/**
 * Vuetufy, fortawesome, materiial icons, material-design-icons
 */
import '@fortawesome/fontawesome-free/css/all.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import '@mdi/font/css/materialdesignicons.css'

var Vuetify = require('vuetify');
Vue.use(Vuetify);

//import 'vuetify/dist/vuetify.min.css';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('toolbar', require('./components/Toolbar.vue').default);
Vue.component('drawer', require('./components/Drawer.vue').default);
Vue.component('lang', require('./components/Lang.vue').default);

Vue.component('content-main', require('./components/content/ContentMain.vue').default);
Vue.component('content-villas', require('./components/content/ContentVillas.vue').default);
Vue.component('content-apartments', require('./components/content/ContentApartments.vue').default);
Vue.component('content-feedbacks', require('./components/content/ContentFeedbacks.vue').default);
Vue.component('content-contact', require('./components/content/ContentContact.vue').default);

Vue.component('footer-component', require('./components/FooterComponent.vue').default);




// Localization
window.trans = (string) => _.get(window.i18n, string);
Vue.prototype.trans = string => _.get(window.i18n, string);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const routes = [];

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router,
    data: {

    },
}).$mount('#app');


function vh() {
    let el = document.getElementById('main-img');

    if (screen.width >= 960 && el != null) {
        document.getElementById('main-img').style.height = '94vh';
    }  
}

vh();




