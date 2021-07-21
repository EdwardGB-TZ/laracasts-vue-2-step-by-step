new Vue ({
    el: '#app',

    data: {
        skills: []
    },

    created() {
        // Make an ajax request to our server - /skills

        // we could use the fetch() API, but it may have some problems with old browsers
        // or with jquery $.getJson()
        // axios

        axios.get('/skills').then(response => this.skills = response.data)
    }
})