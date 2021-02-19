import '../scss/home.scss';
import Vue from "vue";
import Home from "../vue/Home.vue";

new Vue({
    components: { Home },
    template: "<Home/>"
}).$mount("#app-home")