import './bootstrap'
import Carousel from './components/Carousel.vue'

// window.Vue = require('vue')
// Vue.component('carousel', require('./components/Carousel.vue'))

const app = new Vue({
    el: '#app',
    components: { Carousel }
})