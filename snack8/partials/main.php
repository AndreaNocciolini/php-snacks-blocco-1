<main>
    <?php foreach ($products as $product) { ?>
        <div class="products-divider">
            <div class="product-container">
                <h2 class="red">Product</h2>
                <ul>
                    <li>
                        <h2 class="white"><?= $product['name'] ?></h2>
                    </li>
                    <li>
                        <h5 class="white"><?= $product['price'] ?>&euro;</h5>
                    </li>
                    <li>
                        <div class="img-container">
                            <img src="<?= $product['img'] ?>" alt="">
                        </div>
                    </li>
                    <li>
                        <h5 class="blue">(<?= $product['type'] ?>)</h5>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>
</main>