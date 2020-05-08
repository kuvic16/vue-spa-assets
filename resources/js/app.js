//import "./bootstrap";

import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";
import axios from "axios";
import ScrollLink from "./components/ScrollLink";
import Dropdown from "./components/Dropdown";
import Visible from "./components/Visible";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

Vue.use(VueRouter);

Vue.component("scroll-link", ScrollLink);
Vue.component("dropdown", Dropdown);
Vue.component("visible", Visible);
let app = new Vue({
    el: "#app",
    router: new VueRouter(routes)
});
