<script setup>
import Head from './components/Head.vue'
import Filters from './components/Filters.vue'
import Catalog from './components/CatalogProducts.vue'
</script>

<template>

<div class="wrapper">  
  
  <Head></Head>

  <div class="left-menu">
    <Filters></Filters>
  </div>

  <div class="right-catalog">
    <Catalog></Catalog>
  </div>


</div> 

</template>

<style scoped>

.wrapper{
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding-top: 60px;
}

.left-menu{
  width: 350px;
}

.right-catalog{
  margin-top: 20px;
  width: calc(100% - 350px);
}




@media (min-width: 1024px) {
}
</style>
