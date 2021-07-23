import Vue from 'vue/dist/vue.js'
import test from 'ava'
import Notification from '../src/Notification'

test('that it renders a notification', t => {
    let n = new Vue(Notification).$mount()

    t.is(n.$el.textContent, 'Foobar')
})