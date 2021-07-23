import VueRouter from 'vue-router'

// An array that contains the routes and its associated components
let routes = [
    {
        path: '/',
        components: require('./views/Home.vue')
    },
    
    {
        path: '/about',
        components: require('./views/About.vue')
    },

        {
        path: '/contact',
        components: require('./views/Contact')
    }
]

export default new VueRouter({
    routes,

    // Set a custom css class for active links
    linkActiveClass: 'is-active'
})