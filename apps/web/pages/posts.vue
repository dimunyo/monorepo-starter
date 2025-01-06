<script setup lang="ts">
 
const { data } = useFetch<any>('http://localhost:8000/posts')
 
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
</script>
 
<template>
<NTable
    :columns
    :data="data?.posts"
  />
</template>