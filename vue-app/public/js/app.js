// Custom inputs components
Vue.component('coupon', {
    props: ['code'],

    template: `
        <input type="text" :value="code" @input="updateCode($event.target.value)" ref="input"></input>
    `,

    data() {
        return {
            invalids: [
                'ALLFREE',
                'ALLPAID',
                'JSJSJS'
            ]
        }
    },

    methods: {
        updateCode(code) {
            // Here we can make any custom validation, sanitization or whatever
            if (this.invalids.includes(code)) {
                this.$refs.input.value = code = ''
            }

            this.$emit('input', code)
        }
    }
})

new Vue({
    el: '#app',

    data: {
        coupon: 'Free'
    }
})