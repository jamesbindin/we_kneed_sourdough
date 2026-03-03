<template>
<section class="order">
    <div class="row heading_secondary_top">
        <h2>Menu</h2>
    </div>
<div class="items">
              <div v-for="item in items" :key="item.id" class="item">
                <div class="item__img">
                    <img :src="'assets/img/items/'+item.image" alt="item_picture">
                </div>
                    <div class="item__content">
                        <div class="item__title">
                            <h3>{{ item.name }}</h3>
                        </div>
                        <p class="item__description">{{ item.description }}</p>
                        <div class="item__controls">
                                <div v-on:click="removeItem(item.id)" class="item__controls-remove js--remove"><ion-icon name="remove-outline"></ion-icon></div>
                                <div v-on:click="addItem(item.id)" class="item__controls-add js--add"><ion-icon name="add-outline"></ion-icon></div>
                                <p class="item__controls-qty">qty: {{itemCounts[item.id] || 0}} </p>
                        </div>
                    </div>
                <div class="item__price"><p>{{ item.price }}</p></div>
            </div>
    <div class="order_submit_row">
        <div class="order_submit_container">
            <div class="order_submit">
                <div @click="submitOrder" class="btn btn-full order_submit__submit_btn">submit order</div>
            </div>
        </div>
    </div>
</div>
</section>

</template>

<script setup lang="ts">
import { router } from '@inertiajs/vue3'
import { onMounted, ref } from 'vue';
import { store as storeOrder } from '@/actions/App/Http/Controllers/OrderController';


const props = defineProps({
    items: {
        type: Array<{ id: number; name: string; description: string; price: number; image: string }>,
        required: true
    },
    auth: {type: Object}
})

// const itemCounts = computed(() => {
//     const counts: { [key: number]: number } = {};

//     selectedItems.forEach((value) => {
//         if (!counts[value]) {
//         counts[value] = 1;
//         } else {
//         counts[value]++;
//         }
//     });



//     // props.items.forEach((item) => {
//         // counts[item.id] = selectedItems.value.filter(id => id === item.id).length;
//     // });
//     // return counts;
// });
onMounted(() => {
    initItemCounts(props.items);
})

const itemCounts = ref<{ [key: number]: number }>({});
const selectedItems = ref<number[]>([]);

function initItemCounts(items: Array<{id: number}>){
    items.forEach((item) => {
       itemCounts.value[item.id] = 0; 
    });
}

function addItem(id: number){
    selectedItems.value.push(id);
    if(itemCounts.value[id] !== undefined){
        itemCounts.value[id]++;
    }
}

function removeItem(id: number){
    selectedItems.value = selectedItems.value.filter(itemId => itemId !== id);
    if(itemCounts.value[id] !== undefined && itemCounts.value[id] > 0){
        itemCounts.value[id]--;
    }
}

function submitOrder(){
    router.visit(storeOrder().url, {
        method: 'post',
        data: {
            items: selectedItems.value
        },
    })
}

</script>

<style scoped>
.items{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -ms-flex-pack: distribute;
        justify-content: space-around;
}

.item{
    -webkit-box-flex: 0;
        -ms-flex: 0 1 50rem;
            flex: 0 1 50rem;
    height: 20rem;
    border-radius: 4px;
    border: 1px solid #333;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 2rem;    
}

.item__img{
    -webkit-box-flex: 0;
        -ms-flex: 0 0 27%;
            flex: 0 0 27%;
    background-color: #000;
    overflow: hidden;
}

.item__img img{
    width:100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover;
    vertical-align: bottom;
}
 
.item__content{
    background: white;
    padding: 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
}

.item__price{
    background-color: #e57e22;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 2rem;
            flex: 0 0 2rem;
    height: 100%;
    -webkit-writing-mode: vertical-rl;
        -ms-writing-mode: tb-rl;
            writing-mode: vertical-rl;
    color: white;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-left: auto;
    -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
} 

.item__title{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    word-wrap: break-word;
}

.item_title h3{
    font-size: 2rem;
}

.item__description{
    font-size: 1.4rem; 
}

.item__controls{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    margin-top: auto;
    -webkit-user-select: none; /* Safari */
    -ms-user-select: none; /* IE 10 and IE 11 */
    user-select: none; /* Standard syntax */
}

/* buttons */
.item__controls-add{
    font-size: 2rem;
    cursor:pointer;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; 
    border-radius: 50%;
    height: 3.4rem;
    width: 3.4rem;
    color: white;
    border-color: green;
    background-color: green;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-right: 1rem;
}

.item__controls-remove{
    font-size: 2rem;
    cursor: pointer;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 3.4rem;
    width: 3.4rem;
    border-radius: 50%;
    color: white;
    border-color: red;
    background-color: red;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-right: 1rem;
}  

.order_submit_row{
    width: 100%;
    margin: auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.order_submit_container{
    width: 50rem;
}
.order_submit{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    margin-top: 3rem;
}
.order_submit a.btn{
    margin: 0;
}
</style>