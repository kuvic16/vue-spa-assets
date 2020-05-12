//import "./bootstrap";

import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";
import axios from "axios";
import ScrollLink from "./components/ScrollLink";
import Dropdown from "./components/Dropdown";
import Visible from "./components/Visible";
// import Modal from "./components/Modal";
import Modal from "./plugins/modal/ModalPlugin";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

Vue.use(VueRouter);
Vue.use(Modal);

Vue.component("scroll-link", ScrollLink);
Vue.component("dropdown", Dropdown);
Vue.component("visible", Visible);
//Vue.component("modal", Modal);
let app = new Vue({
    el: "#app",
    router: new VueRouter(routes)
});
