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
import ConfirmDialog from "./components/ConfirmDialog";
import ConfirmButton from "./components/ConfirmButton";
import Tabs from "./components/Tabs";
import Tab from "./components/Tab";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

Vue.use(VueRouter);
Vue.use(Modal);

Vue.component("scroll-link", ScrollLink);
Vue.component("dropdown", Dropdown);
Vue.component("visible", Visible);
//Vue.component("modal", Modal);
Vue.component("confirm-dialog", ConfirmDialog);
Vue.component("confirm-button", ConfirmButton);
Vue.component("tabs", Tabs);
Vue.component("tab", Tab);
let app = new Vue({
    el: "#app",
    router: new VueRouter(routes),
    methods: {
        confirm(message) {
            this.$modal.dialog(message).then(confirmed => {
                confirmed ? alert("Proceed") : alert("Cancel");
            });
        }
    }
});
