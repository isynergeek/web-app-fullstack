<template>
  <div style="width: 1100px">
    <h2>The Property Table</h2>
    <el-table
        v-loading="isLoading"
        :data="tableData"
        stripe
        style="height: 500px;"
    >
      <el-table-column
          prop="name"
          label="Name"
          width="250"
      >
        <template #header>
          <div class="table-header-name">Name</div>
          <el-input
              v-model="filters.name"
              placeholder="Enter Name"
              clearable
              style="flex: 0 0 250px"
          />
        </template>
      </el-table-column>
      <el-table-column
          prop="price"
          label="Price"
          width="210"
      >
        <template #header>
          <div class="table-header-name">Price</div>
          <div
              class="filter-field"
              style="display: flex; gap: 5px; flex-basis: 200px"
          >
            <el-input
                v-model="filters.price_from"
                placeholder="From"
                clearable

            />
            <el-input
                v-model="filters.price_to"
                placeholder="To"
                clearable
            />
          </div>
        </template>
      </el-table-column>
      <el-table-column
          prop="bedrooms"
          label="Bedrooms"
          width="160"
      >
        <template #header>
          <div class="table-header-name">Bedrooms</div>
          <el-input
              class="filter-field"
              v-model="filters.bedrooms"
              placeholder="Enter number"
              clearable
          />
        </template>
      </el-table-column>
      <el-table-column
          prop="bathrooms"
          label="Bathrooms"
          width="160"
      >
        <template #header>
          <div class="table-header-name">Bathrooms</div>
          <el-input
              v-model="filters.bathrooms"
              placeholder="Enter number"
              clearable
              class="filter-field"
          />
        </template>
      </el-table-column>
      <el-table-column
          prop="storeys"
          label="Storeys"
          width="160"
      >
        <template #header>
          <div class="table-header-name">Bathrooms</div>
          <el-input
              v-model="filters.storeys"
              placeholder="Enter number"
              clearable
              class="filter-field"
          />
        </template>
      </el-table-column>
      <el-table-column
          prop="garages"
          label="Garages"
      >
        <template #header>
          <div class="table-header-name">Garages</div>
          <el-input
              v-model="filters.garages"
              placeholder="Enter number"
              clearable
              class="filter-field"
          />
        </template>
      </el-table-column>
    </el-table>
  </div>
</template>

<script
    setup
    lang="ts"
>
import { getPropertyList, PropertyItem, RequestParams } from '@/api/common.ts';
import { debounce } from 'lodash';
import { ref, watch, reactive } from 'vue';

const filters = reactive<Partial<RequestParams>>({
  name: null,
  bathrooms: null,
  bedrooms: null,
  garages: null,
  price_from: null,
  price_to: null,
  storeys: null,
});

const tableData = ref<PropertyItem[]>([]);

const isLoading = ref(true);

watch(filters, debounce((newFilters) => {
  isLoading.value = true;
  getPropertyList(newFilters).then(resp => {
    tableData.value = resp || [];
  })
      .catch(() => {
        tableData.value = [];
      })
      .finally(() => {
        isLoading.value = false;
      });
}, 500), {
  immediate: true,
});

</script>

<style scoped>

.filter-field {
  flex: 0 0 150px;
}

.table-header-name {
  padding-left: 5px;
  padding-bottom: 5px;
}
</style>
