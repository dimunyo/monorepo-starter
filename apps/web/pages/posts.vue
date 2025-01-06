<script setup lang="ts">
 
const { data, status, refresh } = useFetch<any>('http://localhost:8000/posts')
 
const columns = [
  {
    header: 'id',
    accessorKey: 'id',
  },
  {
    header: 'title',
    accessorKey: 'title',
  },
  {
    header: 'Description',
    accessorKey: 'description',
  },
]

const pagination = ref({
  pageSize: 5,
  pageIndex: 0,
})

const table = useTemplateRef('table')
</script>
 
<template>
  <div class="flex gap-4 mb-5">
    <NButton
      btn="outline-white"
      icon
      label="i-ph-arrow-clockwise"
      @click="refresh"
      :loading="status === 'pending'"
    />

    <NButton
      label="Post"
    />
  </div>
  <NTable
      ref="table"
      :columns
      :data="data?.posts"
      enable-column-filters
      enable-sorting
      :loading="status === 'pending'"
      :pagination="pagination"
    />

    <div
      class="flex flex-wrap items-center justify-between gap-4 p-2 overflow-auto"
    >
      <div
        class="flex items-center justify-center text-sm font-medium"
      >
        Page {{ (table?.getState().pagination.pageIndex ?? 0) + 1 }} of
        {{ table?.getPageCount().toLocaleString() }}
      </div>

      <NPagination
        :page="(table?.getState().pagination.pageIndex ?? 0) + 1"
        :total="table?.getFilteredRowModel().rows.length"
        show-edges
        :items-per-page="table?.getState().pagination.pageSize"
        @update:page="table?.setPageIndex($event - 1)"
      />
    </div>
</template>