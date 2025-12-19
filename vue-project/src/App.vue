<script setup>
import Head from './components/Head.vue'
import Filters from './components/Filters.vue'
import Catalog from './components/CatalogProducts.vue'
</script>

<template>

<div class="wrapper">  

    <Head />

    <Filters class="left-menu"/>

    <Catalog class="right-catalog"/>

</div> 

</template>

<style scoped>

.wrapper{
  width: 100%;
  height: 2500px;
  display: flex;
  flex-wrap: wrap;
  padding-top: 60px;
}

.left-menu{
  width: 350px;
  height: 100%;
}

.right-catalog{
  margin-top: 20px;
  width: calc(100% - 350px);
}




@media (min-width: 1024px) {
}
</style>
