// import Vue from 'vue';
import Vue from 'vue';
import './bootstrap';

Vue.directive('tooltip', {
    // here elem will refer to the element where the directive has been bound to
    bind(elem, bindings) {
        tippy(elem, {
            content: bindings.value,
            theme: 'black',
            placement: bindings.arg || 'top'
        })
    }
})

const app = new Vue({
    el: '#app',

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            tippy(elem, {
                content: elem.dataset.tooltip,
                theme: 'black',
                placement: elem.dataset.tooltipPlacement || 'top'
            })
        })
    }
})