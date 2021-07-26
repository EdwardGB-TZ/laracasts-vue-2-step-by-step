<template>
    <div data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround" : true }'>
        <slot></slot>
    </div>
</template>

<script>
import Flickity from 'flickity'
import 'flickity/dist/flickity.min.css'

export default {
    mounted() {
        console.log('component-mounted')
    }
}
</script>