<template>
<section class="order">
    <div class="row heading_secondary_top">
        <h2>Menu</h2>
    </div>
    <div class="order_submit_container">
        <div class="message success">
            <h3>order completed</h3>
            <div class="links">
                <Link class="btn btn-full" :href="indexOrder.url()" method="get">My Orders</Link>
                <div class="btn-spacer"></div>
                <Link class="btn btn-full" href="/" method="get">Home</Link>
            </div>
        </div>
    </div>
</section>

</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { index as indexOrder } from '@/actions/App/Http/Controllers/OrderController';

</script>

<style scoped>
.order {
    @apply flex flex-col items-center;
}
.order_submit_container{
    width: 50rem;
}

.btn{
   width:50%; 
}
.btn-spacer{
    width: 3rem;
}

.links{
    display: flex;
    justify-content: space-between;
}

</style>