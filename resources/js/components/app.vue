<template>
  <component :is="layout">
    <router-view></router-view>
  </component>
  <base-loading></base-loading>
</template>

<script>
import { computed } from "vue";
import { useRoute } from "vue-router";
import BaseLoading  from "./plugins/loading.vue";
export default {
  components: { BaseLoading },
  setup() {
    const route = useRoute();
    const defaultLayout = "login";
    const layout = computed(() => {
      return (route.meta.layout || defaultLayout) + "-layout";
    });
    return { layout };
  },
};
</script>

<style>
</style>