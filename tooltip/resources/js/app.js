// import Vue from 'vue';
import './bootstrap';

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