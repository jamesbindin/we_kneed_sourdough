<template>
    <main>
        <header>
            <nav class="navbar">
                <div class="navbar__logo">
                    <Link href="/">
                        <img src="assets/img/logo.png" alt="we kneed sourdough logo"> 
                    </Link>
                </div>
                <div class="navbar__name">
                    <Link href="/">
                        <a href="."><p>We<br>Kneed<br>Sourdough</p></a>
                    </Link>
                </div>
                    <div class="navbar__user">

                        <div v-if="page.props.auth.user.name" class="navbar-user-container"><ion-icon class="icon-user" name="person-circle-outline"></ion-icon><p>{{page.props.auth.user.name}}</p></div>
                    </div>
                <div class="navbar__navigation" @click="navClicked">
                    <ion-icon class="nav-icon js--nav-icon" ref="nav-icon" :name="navOpen ? 'close-outline' : 'menu-outline'"></ion-icon>
                </div>
            </nav>
            <div v-if="navOpen" class="nav-menu js--nav-menu">
                <ul class="nav-menu__links js--main-nav">
                    <a href="/"><li>Home</li></a>
                    <a :href="createUserSession().url"><li>Login</li></a>
                    <a :href="createUser().url"><li>Create account</li></a>
                    <a :href="createOrder().url"><li>Make order</li></a>
                    <a :href="indexOrder().url"><li>My orders</li></a>
                    <!-- <a :href="destroyUserSession().url"><li>Logout</li></a> -->

                </ul>
            </div>
            <div class="navbar-spacer"></div>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue';
import { usePage } from "@inertiajs/vue3";

import { create  as createUser } from '@/actions/App/Http/Controllers/UserController';
import { create  as createUserSession} from '@/actions/App/Http/Controllers/UserSessionController';
import { create  as createOrder, index as indexOrder } from '@/actions/App/Http/Controllers/OrderController';

const page = usePage();

let navOpen = ref(false);

function navClicked() {
    navOpen.value = !navOpen.value;
}
</script>

<style scoped>
.navbar{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 12rem;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
    background: rgba(238, 238, 238, 1);
    width: 100%;
    padding: 1rem;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
}

.navbar__logo, 
.navbar__logo img{
    height:100%;
    width: auto;
}

.navbar__name{
    margin-left: 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    
}

.navbar__name a p{
    color: #333;
    font-size: 3rem;
    font-weight: 400;
    line-height: 3rem;
}

.navbar__user{
    margin: 0 1rem;
    margin-left: auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.nav-icon{
    font-size: 7rem;
    border-radius: 1rem;
    padding: 3;
    cursor: pointer;
}

.navbar__navigation{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
}

.nav-menu{
    width: 100%;
    background: rgba(238, 238, 238, 1);
    z-index: 9999;
    position: fixed;
    top: 12rem;
    right: 0;
    /* display: none; */
}

.nav-menu ul a li{
    padding: 2rem;
}

.nav-menu ul a li:hover{
    background: #e57e22;
    color: white;
}

.navbar-user-container{
    width: 100%;
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
    color: #e57e22;
}

.navbar-user-container ion-icon{
    font-size: 3rem;
    color: #e57e22;
}

.navbar-spacer{
    height: 12rem;
}

</style>