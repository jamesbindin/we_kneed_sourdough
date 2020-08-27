<?php include 'pages/reusable/navbar.php'; ?>
<section class="order">
    <div class="row">
        <h2>Menu</h2>
    </div>
    <div class="row">
        <div class="item">
            <div class="item__img">
                <img SameSite=None  src="./img/1.jpg" alt="item_picture">
            </div>
                <div class="item__content">
                    <div class="item__title">
                        <h3>Pizza vegetale</h3>
                    </div>
                    <p class="item__description">Yummy veggie pizza with tasty olives, crisp peppers, fresh arugula and original italian tomato sauce.</p>
                    <div class="item__controls">
                        <div>
                            <a href="#" class="item__controls-add btn btn-full"><ion-icon name="add-outline"></ion-icon></a>
                        </div>
                        <div>
                            <a href="#" class="item__controls-remove btn btn-full"><ion-icon name="remove-outline"></ion-icon></a>
                        </div>
                    </div>
                </div>
            <div class="item__price"><p>£11.99</p></div>
        </div>
    </div>
</section>
<?php include 'pages/reusable/footer.php'; ?>

<script src="js/order.js"></script>