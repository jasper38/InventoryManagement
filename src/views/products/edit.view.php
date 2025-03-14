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
                    <!-- <h1>Welcome, <?= $_SESSION['user']['role'] ?></h1> -->
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Products</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Edit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container product-edit">
            <div class="upload-portal product-edit">
                <h3>Product Details</h3>
                <div class="product-edit-image"><img src="/assets/img/people.png"></div>
                <div class="close-button"><a href="#" class="close">&times;</a></div>
                <div class="footer">
                    <button class="change-photo-button">Change Photo</button>
                </div>
            </div>

            <div class="product-edit-form">
                <form id="order-form">
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
                            <label for="description">Description:</label>
                            <input type="text" id="desc" name="description" required>
                        </div>
                        <div class="column">
                            <label for="price">Price:</label>
                            <input type="text" id="price" name="price" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="qty">Quantity:</label>
                            <input type="text" id="qty" name="qty" required>
                        </div>
                        <div class="column">
                            <label for="category">Type:</label>
                            <input type="text" id="category" name="category" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="supplierid">Supplier Name:</label>
                            <input type="text" id="supplierName" name="supplierName" required>
                        </div>
                    </div>
                    <div class="button-group">
                        <button class="save-btn">Save</button>
                        <button class="cancel-btn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once base_path('views/partials/section.close.php'); ?>

<?php require_once base_path('views/partials/confirm-modal.php'); ?>

<?php require_once base_path('views/partials/footer.php'); ?>