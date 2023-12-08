<template>
  <div id="wrapper">
    <Header/>

    <slot />
  </div>
</template>

<script>
import Header from '../components/partials/Header.vue'
export default {
  components: { Header},
};
</script>

<style>
</style>