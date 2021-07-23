<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses" :key="status.id">
                    <div class="message-header">
                        <p>
                            {{ status.user.name }} said...
                        </p>

                        <p>
                            {{ postedOn(status) }}
                        </p>
                    </div>

                    <div class="message-body" v-text="status.body"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment'
import Status from '../models/Status'

export default {
    data() {
        return {
            statuses: []
        }
    },

    created() {
        Status.all(statuses => this.statuses = statuses)

        // Status.all()
        //     .then(({data}) => this.statuses = data)

        // // Before creating the ../models/Status class
        // // ajax request
        // axios.get('/statuses')
        // // .then(response => this.statuses = response.data)
        // // Alternative in ES2015 - using object desconstruction in the func params
        // .then(({data}) => this.statuses = data)
    },

    methods: {
        // Methods have more impact than computed properties in the cache
        postedOn(status) {
            return moment(status.created_at).fromNow()
        }
    }
}
</script>

<style>

</style>