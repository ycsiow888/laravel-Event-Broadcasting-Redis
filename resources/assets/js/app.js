/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
Vue.component('chat-messages', require('./components/ChatMessages.vue'));
// Vue.component('chat-form', require('./components/ChatForm.vue'));
const app = new Vue({
  el: '#app',
  data: {
    messages: [],
  },

  created() {
    this.fetchMessages();

    Echo.private('channel1').listen('NewComment', (e) => {
      this.messages.push({
        message: e.message.message,
        user: e.user,
      });
    });
  },
});
