<template>
<section class="section_my_orders">

    <div class="row heading_secondary_top">
        <h2>my orders</h2>
    </div>
    <div v-if="orders?.data.length === 0" class="no-orders">
        <p>You have no orders yet.</p>
        <p>Go to the <Link :href="createOrder().url">make order</Link> page to place your first order.</p>
    </div>
    <InfiniteScroll data="orders">
            <div v-for="order in orders?.data" :key="order.id" class="my_orders">
                <div class='my_order'>
                    <div class='my_order__title'>
                        <p>order id: <span>{{ order.id }}</span></p>
                        <p>date: <span>{{ formatDateAndTime(order.created_at) }}</span></p>
                    </div>
                    <div v-for="item in order.items" :key="item.id" class='my_order__items'>
                        <div class="my_order__items--row">
                            <p>{{ item.name }}</p>
                            <p>{{ formatPrice(item.price) }}</p>
                        </div>  
                    </div>

                    <div class='my_order__total'>
                        <p>TOTAL</p>
                        <p>{{ calculateTotal(order.items) }}</p>
                    </div>
                </div>
            </div> 
    </InfiniteScroll>
</section>

</template>

<script setup lang="ts">
import { InfiniteScroll } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { onMounted, ref, onBeforeUnmount } from 'vue';
import { create as createOrder } from '@/actions/App/Http/Controllers/OrderController';
defineProps({
    orders: {
        type: Object,
        data: {
            type: Array<{ id: number; created_at: string; items: Array<{ name: string; price: number }> }>
        }
    }
})

const windowWidth = ref(window.innerWidth);

onMounted(() => {
    window.addEventListener('resize', () => {
        onResize()
    });
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', () => {
        onResize()
    });
});

function formatDateAndTime(dateString: string): string {
    const date = new Date(dateString);
    if(windowWidth.value < 700){
        return date.toLocaleDateString('en-UK', {
            year: 'numeric',
            month: 'numeric',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
        });
    }
    return date.toLocaleDateString('en-UK', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
    });
}

function formatPrice(price: number): string {
    return `£${price.toFixed(2)}`;
}

function calculateTotal(items: Array<{ price: number }>): string {
    const total = items.reduce((sum, item) => sum + item.price, 0);
    return `£${total.toFixed(2)}`;
}

function onResize(){
    windowWidth.value = window.innerWidth;
}

</script>

<style scoped>
.no-orders{
    text-align: center;
}

.my_orders{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    margin: auto;
    width: 50%;
    @media screen and (max-width: 700px) {
        width: 90%;
    }
}

.my_order{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    margin-bottom: 1rem;
    padding: 2rem;
    border: 1px solid #000;
}

.my_order__title{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    border-bottom: 1px solid #000;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    @media (max-width: 500px) {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        gap: 0.5rem;
        text-align: center;
    }
}

.my_order__title p{
    text-transform: capitalize;
    font-weight: bold;
}

.my_order__title p span{
    font-weight: 300;
}


.my_order__items{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    border-bottom: 1px solid #000;
    padding-bottom: 1rem;
    margin-bottom: 1rem;
}

.my_order__items--row{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
}

.my_order__total{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
}




</style>