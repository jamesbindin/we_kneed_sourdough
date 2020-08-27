<?php include 'reusable_pages/navbar.php'; ?>
    <section class="login">
        <div class="row">
            <h2>Login</h2>
        </div>
            <form action="#" method="post">
                <div class="row">
                    <label for="email" >Email: </label>
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="row">
                    <label for="password">Password: </label>
                    <input type="password" placeholder="password" name="password">
                </div>
                <div class="row">
                    <label for="submit">&nbsp;</label>
                    <input type="submit" name="submit" value="Login">
                </div>
            </form> 
    </section>
<?php include 'reusable_pages/footer.php'; ?>