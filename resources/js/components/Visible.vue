<template>
  <div v-show="shouldDisplay">
    <slot></slot>
  </div>
</template>
<script>
export default {
  props: ["whenHidder"],
  data() {
    return {
      shouldDisplay: false
    };
  },
  mounted() {
    window.addEventListener(
      "scroll",
      () => {
        this.shouldDisplay = inViewport();
      },
      { passive: true }
    );
  }
};
</script>