let store = {
    user: {
        name: 'Jon'
    }
}

new Vue({
    el: '#one',

    data: {
        shared: store,
        justForThis: 'jsjsjs'
    }
})

new Vue({
    el: '#two',

    data: {
        shared: store,
        justForThis: 'Jose Jose'
    }
})