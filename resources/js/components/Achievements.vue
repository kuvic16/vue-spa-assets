<template>
  <div>
    <h1 class="font-normal text-3xl text-gray-700 leading-none mb-8">Achievements</h1>
    <ul>
      <li></li>
      <li></li>
    </ul>
  </div>
</template>
<script>
export default {
  mounted() {},
  data() {
    return {
      series: 0,
      lessons: 0
    };
  },
  created() {
    axios
      .get("http://localhost:8080/api/v1/stats")
      .then(response => response.data)
      .then(data => {
        this.series = data.series;
        this.lessons = data.lessons;
      });
  }
};
</script>