import Vue from 'vue/dist/vue.js'
import test from 'ava'
import Notification from '../src/Notification'

test('that it renders a notification', t => {
    let N = Vue.extend(Notification)

    let vm = new N({
        propsData: {
            message: 'Foobar'
        }
    }).$mount()
    

    t.is(vm.$el.textContent, 'FOOBAR')
})

test('that it capitalizes the message', t => {
    let N = Vue.extend(Notification)

    let vm = new N({
        propsData: {
            message: 'foobar'
        }
    }).$mount()
    
    t.is(vm.$el.textContent, 'FOOBAR')
})