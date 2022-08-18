import Vue from "vue";
window.Vue = require("vue");
import VueAgile from "vue-agile";

Vue.use(VueAgile);

window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import App from "./views/App";

import router from "./router";

require("./bootstrap");

const app = new Vue({
    el: "#root",
    render: (h) => h(App),
    router,
});
