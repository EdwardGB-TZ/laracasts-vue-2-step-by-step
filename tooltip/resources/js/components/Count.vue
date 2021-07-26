<template>
    <span v-text="count"></span>
</template>

<script>
import inView from 'in-viewport';
export default {
    props: ['to'],
    data() {
        return {
            count: 0,
            interval: null
        };
    },
    computed: {
        increment() {
            return Math.ceil(this.end / 30);
        }
    },
    mounted() {
        inView(this.$el, () => {
            this.interval = setInterval(this.tick, 40);
        });
    },
    methods: {
        tick() {
            if (this.count + this.increment >= this.end) {
                this.count = this.to;
                return clearInterval(this.interval);
            }
            this.count += this.increment;
        }
    }
};

// HTML call
// <count :to="1000"></count>
</script>

