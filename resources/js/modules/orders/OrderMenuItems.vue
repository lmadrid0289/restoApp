<template>
<div class="wrapper">
 <menu-items :items="items"></menu-items>
</div>



</template>
<script>
import MenuItems from './MenuItems.vue';
export default {
   components:{
     MenuItems,
   },
   props:['items']
}
</script>