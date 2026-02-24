
<template>
    <section class="create_account">
        <div class="row heading_secondary_top">
            <h2>Create account</h2>
        </div>
            <Form :action="storeUser().url" method="post">
                <div class="row">
                    <label for="name">name:</label>
                    <input type="text" placeholder="name" name="name">
                    <div v-if="errors?.name">{{ errors?.name }}</div>
                </div>
                <div class="row">
                    <label for="email" >email:</label>
                    <input type="email" placeholder="email" name="email"> 
                    <div v-if="errors?.email">{{ errors?.email }}</div>
                </div>
                <div class="row">
                    <label for="address">address:</label>
                    <textarea name="address" id="address" placeholder="Enter address"></textarea>
                    <div v-if="errors?.address">{{ errors?.address }}</div>
                </div>
                <!-- <div class="row"> -->
                    <!-- <label for="subscription" required>subscription:</label> -->
                    <!-- <select  name="subscription" value="4"> -->
                                <!-- <option selected="4" value="<?php echo $row['subscription_id']; ?>"><?php echo $row['name']; ?></option> -->
                                <!-- <option value="">SUBSCRIPTION NAME</option> -->
                   <!-- </select> -->
                <!-- </div> -->
                <div class="row">
                    <label for="password">password:</label>
                    <input type="password" placeholder="password" name="password">
                    <div v-if="errors?.password">{{ errors?.password }}</div>
                </div>
                <div class="form-submit-row">
                    <input type="submit" name="create_account_submit" value="Create Account">
                </div>
            </Form> 
    </section>

</template>

<script setup lang="ts">
import { Form } from '@inertiajs/vue3';
import { store  as storeUser } from '@/actions/App/Http/Controllers/UserController';

defineProps({
    errors: {type: Object}
})

</script>

<style scoped>

</style>