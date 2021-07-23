export default {
    template: '<div><h1>{{ message }}</h1></div>',

    props: ['message'],

    data() {
        return {
            message: 'Hello world'
        }
    }
}
