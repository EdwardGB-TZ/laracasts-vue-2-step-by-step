<template>
    <div v-show="false">
        <slot></slot>
    </div>
</template>

<script>
import tippy from 'tippy.js'

export default {
    props: {
        name: {},
        placement: { default: top }
    },

    mounted() {
        document.querySelectorAll(`[data-tooltip-name=${this.name}]`)
            .forEach(elem => {
                tippy(elem, {
                    content: this.$el.innerHTML,
                    theme: 'black',
                    placement: this.placement,
                    allowHTML: true
                })
            })

    }
}
</script>

<script>
export default {
    data() {
        return { name: 'Jon Doe' }
    },

    render(element) {
        return element("div", { attrs: { id: "foobar" } }, [
            element("h1", this.name)
        ])
    }
}
</script>


<script>
export default {
    render: h => h("h1", "Hello world")
}
</script>