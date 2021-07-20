Vue.component('task', {
    template: '<li><slot></slot></li>'
})

Vue.component('tasks-title', {
    template: '<h1><slot></slot></h1>'
})

Vue.component('tasks-footer', {
    template: '<quote><i><slot></slot></i></quote>',
})

new Vue({
    el: '#root'
})