<?php include 'reusable_pages/navbar.php'; ?>
    <section class="create_account">
        <div class="row">
            <h2>Create account</h2>
        </div>
            <form action="#" method="post">
                <div class="row">
                    <label for="firstname">First name: </label>
                    <input type="text" placeholder="first name" name="firstname">
                </div>
                <div class="row">
                    <label for="lastname">Last name: </label>
                    <input type="text" placeholder="last name" name="lastname">
                </div>
                <div class="row">
                    <label for="email" >Email: </label>
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="row">
                    <label for="address">Address: </label>
                    <textarea name="address" id="address" placeholder="Enter address"></textarea>
                </div>
                <div class="row">
                    <label for="password">Password: </label>
                    <input type="password" placeholder="password" name="password">
                </div>
                <div class="row">
                    <label for="submit">&nbsp;</label>
                    <input type="submit" name="submit" value="Create Account">
                </div>
            </form> 
    </section>
<?php include 'reusable_pages/footer.php'; ?>