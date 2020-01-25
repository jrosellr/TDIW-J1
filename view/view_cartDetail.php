<?php
if (!empty($product_details)) :
    foreach ($product_details as $product_detail) : ?>
        <article class="grid-item">
            <img src="<?php echo $product_detail['info']['Image']; ?>" alt="Product Image">
            <h2><?php echo htmlentities($product_detail['info']['Name']); ?></h2>
             <h4>Unitary Price: <?php echo htmlentities($product_detail['info']['Price']); ?>&euro;</h4>
            <h4>Units: <?php echo htmlentities($product_detail['units']); ?>&euro;</h4>
            <h4>Total Price: <?php echo htmlentities($product_detail['info']['Price'] * $product_detail['units']); ?>&euro;</h4>
        </article>
<?php
    endforeach; ?>
    <article><button type="button" id="makePurchaseButton">Finish Purchase</button></article>
<?php
else : ?>
        <h2>No products added to cart</h2>
<?php endif; ?>