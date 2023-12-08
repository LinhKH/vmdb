<template>
  <div class="example-two">
    <vue-awesome-paginate
      :total-items="totalItems"
      v-model="page"
      :items-per-page="itemsPerPage"
      :max-pages-shown="5"
      :on-click="onClickHandler"
    >
      <template #prev-button>
        <span> Previous </span>
      </template>
      <template #next-button>
        <span> Next </span>
      </template>
    </vue-awesome-paginate>
  </div>
</template>

<script>
import { ref, toRefs, watch } from "vue";
export default {
  props: {
    totalItems: { type: Number, required: true },
    itemsPerPage: { type: Number, required: true },
    modelValue: { type: Number, required: true },
  },
  setup(props, context) {
    const page = ref(1);
    const { totalItems, itemsPerPage } = toRefs(props);
    const onClickHandler = () => {
      context.emit("update:modelValue", page.value);
      context.emit("onPageChange", page.value);
    };

    watch(
      () => props.modelValue,
      (newValue) => {
        page.value = newValue;
      }
    );

    return {
      page,
      totalItems,
      itemsPerPage,
      onClickHandler,
    };
  },
};
</script>
<style>
.example-two .pagination-container {
  column-gap: 10px;
}
.example-two .paginate-buttons {
  width: 50px;
  height: 40px;
  cursor: pointer;
  background-color: #f39c12;
  border: none;
  color: white;
  border-radius: 2px;
}
.example-two .back-button,
.example-two .next-button {
  width: 100px;
  height: 40px;
}
.example-two .paginate-buttons:hover,
.example-two .active-page:hover {
  background-color: #ffb33a;
}
.example-two .active-page {
  background-color: #d35400;
}
.example-two .back-button:active,
.example-two .next-button:active {
  background-color: #dd9e39;
}
</style>
