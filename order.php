<?php include 'pages/reusable/navbar.php'; ?>
<?php include 'php/database/DBconnection.php'; ?>
<?php include 'php/classes/item.php'; ?>
<?php include 'php/classes/items.php'; ?>
<section class="order">
    <div class="row">
        <h2>Menu</h2>
    </div>

    <?php
    // get connection and items from database, store as item object and display
    $conn = DBconnection::getInstance();
    $items = new Items();
    $items->loadFromDB($conn);
    $result = $items->getResult();
    while($row = $result->fetch_assoc()){
        $item = new Item($row['item_id'], $row['name'], $row['description'], $row['price'], $row['image']);
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
                                <a href="#" class="item__controls-add btn btn-full"><ion-icon name="add-outline"></ion-icon></a>
                            </div>
                            <div>
                                <a href="#" class="item__controls-remove btn btn-full"><ion-icon name="remove-outline"></ion-icon></a>
                            </div>
                            <div class="item__controls-quantity">
                                <p id="quantity_<?php echo $item->getId(); ?>">qty: </p>
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

<!-- <script src="js/order.js"></script> -->
<!-- <script src="js/items.js"></script> -->