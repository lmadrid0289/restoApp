<template>
    <div class="row">
        <div class="col-md-7">
            <h3>Customer Details</h3>
            <order-form></order-form>
            <h3>Order Details <span class="float-right" v-if="finalAmount > 0">{{ finalAmount}}</span></h3>
            <OrderList :items="orderedItems"></OrderList>
        </div>
        <div class="col-md-5">
            <h3>Menu</h3>
            <order-menu-items 
            :items="menuItems"
            @addMenuItem="handleNewMenuItem"></order-menu-items>
        </div>
    </div>
</template>

<script>

import OrderForm from './OrderForm.vue';
import OrderMenuItems from './OrderMenuItems.vue';
import OrderList from './OrderList.vue';
import axios from 'axios';


export default {
    props:['restoId'],
    components:{
        OrderForm,
        OrderMenuItems,
        OrderList
    },
    created(){
        this.loadRestoMenuItems();
        window.eventBus.$on("addMenuItem", this.handleNewMenuItem);
    },
     data() {
        return {
        menuItems: [],
        orderedItems:[],
        };
    },
    computed:{
        finalAmount(){
            let price = 0;
            this.orderedItems.forEach(order => price = price + order.price);
           
            return price;
        }
    }, 
    

    methods:{
        loadRestoMenuItems(){
            let postData = { restoId: this.restoId };
      axios
        .post("/api/menu-items", postData)
        .then(response => {
          this.menuItems = response.data;
          this.orginalMenuItems = response.data;
          console.log(response.data);
        })
        .catch(error => console.log("error", error.response));

        },
        handleNewMenuItem(menuItem){
            console.log('click2');
            this.orderedItems.unshift(menuItem)

        }
    }
}
</script>