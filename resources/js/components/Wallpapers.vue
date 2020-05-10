<template>
  <div>
    <h1 class="font-normal text-3xl text-gray-700 leading-none">Wallpapers</h1>

    <div class="text-center">
      <h1 class="text-2xl font-bold mb-">Modal</h1>
      <p>
        <a href="#canel-modal">Open Modal</a>
      </p>

      <modal name="cancel-modal">
        <h1>Leaving So Soon?</h1>
        <p>
          Hello Mister how are you? what are learning now alone.
          We are in corantaine for 2 months without job.
        </p>
      </modal>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted");
  }
};
</script>
