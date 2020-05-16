<template>
  <div>
    <modal name="dialog">
      {{ message }}
      <template v-slot:footer>
        <button
          class="bg-gray-500 hover:bg-gray-600 py-2 px-4 text-white rounded-lg mr-2"
          @click.prevent="handleClick(false)"
        >Cancel</button>
        <button
          class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg"
          @click.prevent="handleClick(true)"
        >Continue</button>
      </template>
    </modal>
  </div>
</template>

<script>
import Modal from "../plugins/modal/ModalPlugin";
export default {
  data() {
    return {
      message: "Are you sure?"
    };
  },
  beforeMount() {
    // $vm0.confirm('Are you there?');
    // listen for that event
    // fetch the process
    // and assign it to the data object
    Modal.events.$on("show", params => {
      this.message = params.message;
    });
  },
  methods: {
    handleClick(confirmed) {
      Modal.events.$emit("clicked", confirmed);

      this.$modal.hide();
    }
  }
};
</script>