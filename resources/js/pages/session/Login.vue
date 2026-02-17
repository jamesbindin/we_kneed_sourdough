<template>
    <section class="login">
        <div class="row heading_secondary_top">
            <h2>Login</h2>
        </div>
            <form action="#" method="post">
                <div class="row">
                    <label for="email" >Email: </label>
                    <input type="email" placeholder="email" name="email" required>
                </div>
                <div class="row">
                    <label for="password">Password: </label>
                    <input type="password" placeholder="password" name="password" required>
                </div>
                <div class="form-submit-row">
                    <input type="submit" name="login_submit" value="Login">
                    <a class="btn btn-ghost" href="./create_account.php">Create account</a>
                </div>
            </form> 
    </section>
</template>

<script setup lang="ts">

</script>

<style scoped>
.login_form_buttons{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
}

.login_form_buttons a {
    margin-right: 2rem;
}
</style>