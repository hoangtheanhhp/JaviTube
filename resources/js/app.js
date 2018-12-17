
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');
import Vue from "vue"
import App from "./App.vue"

const app = new Vue({
    el: '#app',
    components: {App},
    data: {
        messages: []
    },
    
    created() {
        this.fetchMessages();
        window.Echo.private('chat')
        .listen('MessageSent', (e) => {
            this.messages.push({
                message: e.message.message,
                user: e.user
            });
        });
    },
    
    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },
        
        addMessage(message) {
            this.messages.push(message);
            
            axios.post('/messages', message).then(response => {
                console.log(response.data);
            });
        }
    }
});
