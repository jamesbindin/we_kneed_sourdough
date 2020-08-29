<?php include 'pages/reusable/navbar.php'; ?>
<?php include 'php/database/DBconnection.php'; ?>
<?php include 'php/classes/items.php'; ?>
<section class="order">
    <div class="row">
        <h2>Menu</h2>
    </div>

    <?php
    // use items class to get list of all items in db, display to user.
    $conn = DBconnection::getInstance();
    $items_obj = new Items();
    $items_obj->loadFromDB($conn);
    $items =$items_obj->getItems();
    foreach($items as $item){
        ?> 
        <div class="row">
            <div class="item">
                <div class="item__img">
                    <img src="<?php echo $item->getImage(); ?>" alt="item_picture">
                </div>
                    <div class="item__content">
                        <div class="item__title">
                            <h3><?php echo $item->getName();?></h3>
                        </div>
                        <p class="item__description"><?php echo $item->getDescription();?></p>
                        <div class="item__controls">
                            <div>
                                <a href="#" class="item__controls-remove btn btn-full js--remove" id="js--remove_<?php echo $item->getId(); ?>"><ion-icon name="remove-outline"></ion-icon></a>
                            </div>
                            <div>
                                <a href="#" class="item__controls-add btn btn-full js--add" id="js--add_<?php echo $item->getId(); ?>"><ion-icon name="add-outline"></ion-icon></a>
                            </div>
                            <div>
                                <p class="item__controls-qty">qty: <span id="js--qty_<?php echo $item->getId(); ?>">0</span> </p>
                                
                            </div>
                        </div>
                    </div>
                <div class="item__price"><p><?php echo $item->getPrice();?></p></div>
            </div>
        </div>
        <?php
    }
    ?>
</section>
<?php include 'pages/reusable/footer.php'; ?>

<script src="js/order.js"></script>