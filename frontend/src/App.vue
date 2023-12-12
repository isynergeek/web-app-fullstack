<template>
  <el-table :data="tableData" stripe style="width: 100%">
    <el-table-column prop="name" label="Name" width="180" />
    <el-table-column prop="price" label="Price" width="180" />
    <el-table-column prop="bedrooms" label="Bedrooms" />
    <el-table-column prop="bathrooms" label="Bathrooms" />
    <el-table-column prop="storeys" label="Storeys" />
    <el-table-column prop="garages" label="Garages" />
  </el-table>
</template>

<script setup lang="ts">
import { getPropertyList } from '@/api/common.ts';
import { ref } from 'vue';

const tableData = ref([]);

getPropertyList().then(resp => {
  tableData.value = resp.data.data;
})

</script>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
