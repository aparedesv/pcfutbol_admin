import { createApp } from 'vue'
import App from './App.vue'

// vue router
import router from './router'

// vuex
import store from './store'

// bootstrap 5
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
import "bootstrap-icons/font/bootstrap-icons.css";

createApp(App)
.use(router)
.use(store)
.mount('#app')
