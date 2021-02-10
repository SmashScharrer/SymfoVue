import '../scss/home_second.scss';
import Vue from "vue";
import HomeSecondPage from '../vue/HomeSecond'

new Vue({
    components: { HomeSecondPage },
    template: "<HomeSecondPage/>"
}).$mount("#app-home-second")