import { mount } from "vue-test-utils";
import expect from "expect";
import Logo from "../../resources/js/components/Logo.vue";

describe("Logo", () => {
    it("Says that it is an Logo component", () => {
        let wrapper = mount(Logo);

        expect(wrapper.html()).toContain("Full Logos");
    });
});
