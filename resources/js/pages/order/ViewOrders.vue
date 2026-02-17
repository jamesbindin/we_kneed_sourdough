<template>
<section class="section_my_orders">

    <div class="row heading_secondary_top">
        <h2>my orders</h2>
    </div>

    <div class="my_orders">
        <div class='my_order'>
            <div class='my_order__title'>
            <p>order id: <span>ORDER ID</span></p>
            <p>date: <span>ORDER DATE</span></p>
            </div>
        </div>
        <div class='my_order__items'>
            <div class="my_order__items--row">
                <p>ITEM NAME</p>
                <p>PRICE</p>
            </div>  
        </div>

        <div class='my_order__total'>
            <p>TOTAL</p>
            <p>TOTAL VALUE</p>
        </div>
    </div>
</section>

</template>

<script setup lang="ts">

</script>

<style scoped>
.my_orders{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    margin: auto;
    width: 60%;
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