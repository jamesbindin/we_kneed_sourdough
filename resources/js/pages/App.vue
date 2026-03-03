<script setup lang="ts">
// import { Head, Link } from '@inertiajs/vue3';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);

</script>

<template>
    <!-- <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head> -->

    <section class="front-page-header">
        <div class="hero">
            <div class="hero__text">
                <h1>Delicious sourdough products<br>delivered straight to your door</h1>
            </div>
            <div class="hero__buttons">
                <a href="" class="btn btn-full">Make order</a>
                <a href="#" class="btn btn-ghost js--show_more_btn">Show me more</a>
            </div>
        </div>
    </section>
    <section class="section-features" id="features">
        <div class="row">
            <h2>Bread &mdash; as good as it gets</h2>
        </div>
        <div class="row">
            <p class="long-text">Hello welcome!<br>We Kneed Sourdough specialize in fresh organic sourdough baked goods. Including pizzas, pastries and artisinal sourdough bread, we will deliver straght to your door.</p>
        </div>
        <div class="row-boxes">
            <div class="box">
                <ion-icon name="infinite" class="icon-big"></ion-icon>
                <h3>24/7 delivery service</h3>
                <p>We mean that! we are dedicated to delivering our products any time, just make an order and you'll get delicious sourdough loaves pastries or pizzas deliverd in 20 minutes!</p>
            </div>
            <div class="box">
                <ion-icon name="thumbs-up-outline" class="icon-big"></ion-icon>
                <h3>Lots of choice</h3>
                <p>We sell a wide range of sourdough products which are expertly made by our dedicated staff. Sourdough loaves, white, rye and wholegrain. We sell deep dish and thin crust pizzas as well as french style pastries, all leavend with our sourdough culture.</p>
            </div>
            <div class="box">
                <ion-icon name="nutrition-outline" class="icon-big"></ion-icon>
                <h3>100% organic</h3>
                <p>All our ingredients are fresh, organic and local right down to the grain we use in our bread. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
            </div>
            <div class="box">
                <ion-icon name="ribbon-outline" class="icon-big"></ion-icon>
                <h3>Subscribe to our premium service</h3>
                <p>Customers can choose to sign up to our subscription service where we deliver bread or pastries to you regularly at a reduced discount. Of course you can also make one time orders if you choose.</p>
            </div>
        </div>
    </section>
    <section class="food-showcase">
        <div class="food-showcase_row">
            <figure class="food-showcase_picture"><img src="assets/img/1.jpg" alt=""></figure>
            <figure class="food-showcase_picture"><img src="assets/img/2.jpg" alt=""></figure>
            <figure class="food-showcase_picture"><img src="assets/img/3.jpg" alt=""></figure>
            <figure class="food-showcase_picture"><img src="assets/img/4.jpg" alt=""></figure>
        </div>
        <div class="food-showcase_row">
            <figure class="food-showcase_picture"><img src="assets/img/5.jpg" alt=""></figure>
            <figure class="food-showcase_picture"><img src="assets/img/6.jpg" alt=""></figure>
            <figure class="food-showcase_picture"><img src="assets/img/7.jpg" alt=""></figure>
            <figure class="food-showcase_picture"><img src="assets/img/8.jpg" alt=""></figure>
        </div>
    </section>
    <section class="health-benifits">
        <div class="row">
            <h2>Health benefits of sourdough</h2>
        </div>
        
        <div class="health-benifits_box">
            <div class="row"><h3>Lower Glycemic Index</h3></div>
            <div class="health-benifits_main">
                <div class="health-benifits_img">
                    <img src="assets/img/health_1.jpg" alt="">
                </div>
                <div class="health-benifits_content">
                    <p>Real sourdough bread is fermented for a very long time (anything from 6 to 48 hours!) During this time, the sugars and starches in the flour/dough break down considerably, and are consumed by the natural yeasts and bacteria found in the sourdough mixture. Because the fermentation time is so long, the sugars and starches have enough time to break down and be consumed. This is what makes it possible for sourdough bread to have a lower Glycemic Index.</p>
                    <p>If you’re concerned about keeping your sugar levels steady, sourdough bread may be an excellent alternative to conventional bread. The lower Glycemic Index means you sourdough will keep you fuller for longer, and help maintain steady blood sugar levels.</p>
                </div>
            </div>
        </div>
        <div class="health-benifits_box">
               <div class="row"><h3>Good for the Gut</h3></div> 
            <div class="health-benifits_main reverse">
                <div class="health-benifits_img">
                    <img src="assets/img/health_2.jpg" alt="">
                </div>
                <div class="health-benifits_content">
                    <p>Sourdough bread uses natural yeasts found in its sourdough starter to make it rise. But the sourdough starter is not just full of natural yeasts, it’s also bursting with millions of friendly bacteria (probiotics) which are good for your gut (similar to those found in bio-active yoghurts, only more diverse!).</p>
                    <p>Another propety within sourdough bread is an indigestible fiber known as prebiotics. This is essentially a type of fiber that feeds the good bacteria in your gut. And a healthy gut usually means a healthy body. Prebiotics also make sourdough bread easier for the body to digest. Win win!</p>
                </div>
            </div>
        </div>
        <div class="health-benifits_box">
            <div class="row"><h3>More Nutritious</h3></div>
            <div class="health-benifits_main">
                <div class="health-benifits_img">
                    <img src="assets/img/health_3.jpg" alt="">
                </div>
                <div class="health-benifits_content">
                    
                    <p>The long fermentation process in sourdough bread breaks down phytic acid in the dough which is an anti-nutirent. In fact, if fermented for long enough, it can almost eliminate phytic acid completely, which unlocks all of those lovely nutrients and makes them available to our bodies.</p>
                    <p>Something even more fascinating is this. Not only does sourdough bread unlock the nutrition from the wheat and make it available to our bodies, but the friendly bacteria and yeasts available in sourdough actually increases the nutrition in the wheat as a by product of the fermentation process! This works in a similar way to how other fermented foods such as kimchi and saurkraut develop increased nutritional value through fermentation.</p>
                </div>
            </div>
        </div>
        <div class="health-benifits_box">
            <div class="row"><h3>Chemical Free</h3></div>
            <div class="health-benifits_main reverse">
                <div class="health-benifits_img">
                    <img src="assets/img/health_4.jpg" alt="">
                </div>
                <div class="health-benifits_content">
                    <p>As long as you are eating real sourdough bread, you are eating only 3 simple ingredients: flour, water and salt. Nothing else. There are no chemicals, preservatives, or anything nasty in sourdough bread. Commercially yeasted breads contain many additives, sweeteners and oils in addition to the simple ingredients that bread is supposed to have.</p>
                        <br>
                    <p class="health-benifits__source">Information sourced from:<a href="https://truesourdough.com/is-sourdough-bread-good-for-you-7-things-you-need-to-know/">www.truesourdough.com</a></p>
                </div>
            </div>  
        </div>

    </section>
    <section class="testimonials">
        <div class="row">
            <h2>Customer reviews</h2>
        </div>
        <div class="testimonials_container">
            <div class="testimonials_box">
                <blockquote>
                "We kneed sourdough is just awesome! I just launched a startup which leaves me with no time for baking, it’s a life-saver. I couldn't live without my weekly sourdough!"
                <cite><img src="assets/img/customer-1.jpg" alt="customer 1"><span>Cathy Cruz</span></cite>
                </blockquote>
            </div>
            <div class="testimonials_box">
                <blockquote>
                "I can't say enough about We kneed sourdough. Your company is truly upstanding and is behind its product 100%."
                <cite><img src="assets/img/customer-2.jpg" alt="customer 2"><span>Virgil Ramirez</span></cite>
                </blockquote>
            </div>
            <div class="testimonials_box">
                <blockquote>
               "Their sourdough gives the pizzas a tangy full flavour, the best in town! Very good service and never late, I highly recomend!" 
                <cite><img src="assets/img/customer-3.jpg" alt="customer 3"><span>Randy Jensenn</span></cite>
                </blockquote>
            </div>
        </div>
    </section>

        <section class="plans">
            <div class="row">
                <h2>Premium subscriptions</h2>
            </div>

            <div class="plans_box_container">
                <div class="plans_box">
                    <div class="plans_title">
                        <h3>Mix and match</h3>
                    </div>
                    <div class="plans_price">
                        <p>£12 <span>/ week</span></p>
                    </div>
                    <div class="plans_description">
                        <ul>
                            <li>
                                <ion-icon name="checkmark-outline"></ion-icon>
                                <p>A loaf of your choice a week.</p>
                            </li>
                            <li>
                                <ion-icon name="checkmark-outline"></ion-icon>
                                <p>pizza a week.</p>
                            </li>
                            <li>
                                <ion-icon name="checkmark-outline"></ion-icon>
                                <p>pastry a week.</p></li>
                        </ul>
                    </div>
                    <div class="plans_button">
                        <a class="btn btn-full" href="">Sign up</a>
                    </div>
                </div>
                <div class="plans_box">
                    <div class="plans_title">
                        <h3>Bread lover</h3>
                    </div>
                    <div class="plans_price">
                        <p>£3 <span>/ week</span></p>
                    </div>
                    <div class="plans_description">
                        <ul>
                            <li>
                                <ion-icon name="checkmark-outline"></ion-icon>
                                <p>2 loaves of your choice a week</p>
                            </li>
                        </ul>
                    </div>
                    <div class="plans_button">
                        <a class="btn btn-full" href="">Sign up</a>
                    </div>
                </div>

                <div class="plans_box">
                    <div class="plans_title">
                        <h3>Breakfast deal</h3>
                    </div>
                    <div class="plans_price">
                        <p>£6.50 <span>/ week</span></p>
                    </div>
                    <div class="plans_description">
                        <ul>
                            <li>
                                <ion-icon name="checkmark-outline"></ion-icon>
                                <p>A pastry every weekday morning</p>
                            </li>
                        </ul>
                    </div>
                    <div class="plans_button">
                        <a class="btn btn-full" href="">Sign up</a>
                    </div>
                </div>
            </div>
        </section>
</template>

<style scoped>

section{
    padding: 8rem 0;
}

/* ******************************************************************* */
/* ----- HEADER SECTION ----- */
/* ******************************************************************* */

.front-page-header{
    background: -webkit-gradient( linear, left top, left bottom, from(rgba(0, 0, 0, 1)), to(rgba(0, 0, 0, 0))), url(/assets/img/hero_background.jpg);
    background: -o-linear-gradient( top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0)), url(/assets/img/hero_background.jpg);
    background: linear-gradient( to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0)), url(/assets/img/hero_background.jpg);
    height: calc(100vh - 12rem);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    margin: 0 auto 0 auto;
    padding-top: 0;
}

.hero{
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
}

.hero__text h1{
    margin-top: 10rem;
    line-height: 6rem;
    font-weight: 300;
    color: #ddd;
}

.hero__buttons{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding-top: 8rem;
}

.hero__buttons a{
    margin-bottom: 1rem;
}

/* ******************************************************************* */
/* ----- FEATURES ----- */
/* ******************************************************************* */
/* used all renewable comoponents */

/* ******************************************************************* */
/* ----- SHOWCASE ----- */
/* ******************************************************************* */

.food-showcase{
    padding: 0;
}

.food-showcase_row{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
}

.food-showcase_picture{
    height: auto;
    background-color: #000;
    overflow: hidden;
}

.food-showcase_picture img{
    width:100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover;
    vertical-align: bottom;
    opacity: .5;
    -webkit-transition: opacity 1s, -webkit-transform 1s;
    transition: opacity 1s, -webkit-transform 1s;
    -o-transition: opacity 1s, transform 1s;
    transition: opacity 1s, transform 1s;
    transition: opacity 1s, transform 1s, -webkit-transform 1s;
}

.food-showcase_picture img:hover{
    opacity: 1;
    -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
            transform: scale(1.2);
}

/* ******************************************************************* */
/* ----- HEALTH BENEFITS ----- */
/* ******************************************************************* */
.health-benifits{
   background-color: rgba(238, 238, 238, 1);
}

.health-benifits_box{
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex; 
   -webkit-box-orient: vertical; 
   -webkit-box-direction: normal; 
       -ms-flex-direction: column; 
           flex-direction: column;
   width: 80%;
   margin: auto;
   margin-bottom: 2rem;
   background-color: #fff;
   padding: 2rem;
}

.health-benifits_box:last-child{
    margin-bottom:0;
}

.health-benifits_main{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.health-benifits_main.reverse{
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
}

.health-benifits_img{
    overflow: hidden;
    height: 30rem;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 30rem;
            flex: 0 0 30rem;
    border-radius: 5px;
}

.health-benifits_img img{
    height: 100%;
    width: 100%;
    -o-object-fit: cover;
       object-fit: cover;
}

.health-benifits_content{
    margin: 0 1rem;
}

.health-benifits__source{
    text-align: center;
    font-size: 1rem;
}

.health-benifits__source a{
    font-size: 1.5rem;
    text-align: center;
}

/* ******************************************************************* */
/* ----- TESTIMONIALS ----- */
/* ******************************************************************* */
.testimonials{
    background-color: black;
    color: white;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.6)), to(rgba(0, 0, 0, .6))), url(../img/testimonial-background.jpg);
    background: -o-linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url(../img/testimonial-background.jpg);
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url(../img/testimonial-background.jpg);
    background-size: cover;
    background-attachment: fixed;
}

.testimonials_container{
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex; 
   -webkit-box-pack: space-evenly; 
       -ms-flex-pack: space-evenly; 
           justify-content: space-evenly;
   -ms-flex-wrap: wrap;
       flex-wrap: wrap;
}

.testimonials_box{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 20rem;
            flex: 0 0 20rem;
    line-height: 2.8rem;
    font-weight: 300;
    margin: 1rem;
    padding: 1.5rem;
    background: rgba(0, 0, 0, 0.1);
}

.testimonials_box blockquote{
    height: 100%;
    font-size: 2rem;
    font-style: italic;
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
}

.testimonials_box blockquote cite{ 
    font-size: 1.5rem;
    margin-top: 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.testimonials_box blockquote cite img{
    border-radius: 50%;
    width: 5rem;
    margin-right: .5rem;
}

/* ******************************************************************* */
/* ----- PLANS ----- */
/* ******************************************************************* */
.plans{
   background-color: rgba(238, 238, 238, 1);
}

.plans_box_container{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
}

.plans_box{
    width: 36rem;
    height: 50rem;
    margin: 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;

}

/* all child divs in box */
.plans_box div{
    background-color: #fff;
    margin-bottom: .3rem;
    -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.plans_title h3{
    font-size: 3rem;
    margin: 0;
}

.plans_price p{
    font-size: 4rem;
    color: #e57e22;
    text-align: center;
}

.plans_price span{
    font-size: 2rem;
    color: #333;
}

.plans_description ul{
    width:100%;
} 

.plans_description ul li{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.plans_description ul li ion-icon{
    margin-right: .7rem;
    font-size: 2rem;
}

.plans_button{
    text-align: center;
}

.plans_button .btn{
    width: 18rem;
}

/* media queries */
@media only screen and (max-width: 980px){
    .health-benifits_main{
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
    }
    .health-benifits_main.reverse{
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
    }
    .health-benifits_content{
        margin: 1rem 0;
    }

}
</style>


