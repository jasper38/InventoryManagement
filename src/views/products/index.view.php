<?php
require_once base_path('views/partials/head.php');
require_once base_path('views/partials/sidebar.php');
require_once base_path('views/partials/section.opening.php');
require_once base_path('views/partials/nav.php');
?>

<main>
    <div class="head-title">
        <div class="left">
            <h1>Products</h1>
            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Products</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">View</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>List of Products</h3>
                    <a href="#addProductModal" class="add-product-button">
                        <div class="add-product-icon"><i class='bx bxs-plus-circle'></i></div>
                    </a>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>SKU</th>
                            <th>Description</th>
                            <th>Supplier ID</th>
                            <th>Price</th>
                            <th>Qty.</th>
                            <th>Status</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <?php foreach ($products as $product) : ?>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="/assets/img/people.png">
                                    <p><?= htmlspecialchars($product['name']) ?></p>
                                </td>
                                <td><?= htmlspecialchars($product['sku']) ?></td>
                                <td><?= htmlspecialchars($product['description']) ?></td>
                                <td><?= htmlspecialchars($product['supp_id']) ?></td>
                                <td><?= htmlspecialchars($product['price']) ?></td>
                                <td><?= htmlspecialchars($product['qty']) ?></td>
                                <td>
                                    <span class="status <?= strtolower(htmlspecialchars($product['status'])) ?>">
                                        <?= htmlspecialchars($product['status']) ?>
                                    </span>
                                </td>
                                <td><?= htmlspecialchars($product['type']) ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
</main>

<?php require_once base_path('views/partials/section.close.php'); ?>

<div id="addProductModal" class="modal">
    <div class="modal-content">
        <div class="close-button"><a href="" class="close">&times;</a></div>
        <form action="/<?= $role ?>/products" method="POST">
            <div class="row">
                <div class="column">
                    <label for="productName">Product Name:</label>
                    <input type="text" id="productName" name="productName" required>
                </div>
                <div class="column">
                    <label for="sku">SKU:</label>
                    <input type="text" id="sku" name="productsku" required>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="supplierid">Supplier ID:</label>
                    <input type="number" id="supplierID" name="supplierID" required>
                </div>
                <div class="column">
                    <label for="supplierName">Supplier Name:</label>
                    <input type="text" id="supplierName" name="supplierName" required>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="description">Description:</label>
                    <input type="text" id="desc" name="description" required>
                </div>
                <div class="column">
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" required>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="qty">Quantity:</label>
                    <input type="number" id="qty" name="qty" required>
                </div>
                <div class="column">
                    <label for="status">Status:</label>
                    <input type="text" id="status" name="status" required>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="category">Type:</label>
                    <input type="text" id="category" name="category" required>
                </div>
            </div>
            <input type="submit" value="Add Product">
        </form>
    </div>
</div>

<?php require_once base_path('views/partials/footer.php'); ?>