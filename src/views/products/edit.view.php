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
                            <a class="active" href="#">Edit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container product-edit">
            <div class="upload-portal product-edit">
                <h3>Product Details</h3>
                <div class="product-edit-image"><img id="preview-image" src="/assets/img/people.png"></div>
                <div class="close-button"><a href="#" class="close">&times;</a></div>
                <div class="footer">
                    <label class="change-photo-button">
                        <h4>Change Photo</h4>
                        <input type="file" id="imageUpload" name="productImage" accept="image/*" hidden>
                    </label>
                </div>
            </div>

            <div class="product-edit-form">
                <form id="order-form" action="/<?= $role ?>/products" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="row">
                        <div class="column">
                            <label for="productName">Product Name:</label>
                            <input type="text" id="productName" name="productName" required>
                        </div>
                        <div class="column">
                            <label for="sku">SKU:</label>
                            <input type="text" id="sku" name="productsku" value="011111" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="description">Description:</label>
                            <input type="text" id="desc" name="description" required>
                        </div>
                        <div class="column">
                            <label for="price">Price:</label>
                            <input type="text" id="price" name="price" value="1000" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="qty">Quantity:</label>
                            <input type="text" id="qty" name="qty" value="50" disabled>
                        </div>
                        <div class="column">
                            <label for="category">Type:</label>
                            <input type="text" id="category" name="category" value="Mouse" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="supplierid">Supplier Name:</label>
                            <input type="text" id="supplierName" name="supplierName" required>
                        </div>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="save-btn">Save</button>
                        <button type="button" class="cancel-btn" formnovalidate>Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once base_path('views/partials/section.close.php'); ?>

<?php require_once base_path('views/partials/confirm-modal.php'); ?>

<script>
    document.getElementById("imageUpload").addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImage = document.getElementById("preview-image");
                previewImage.src = e.target.result;
                previewImage.style.width = "320px";
                previewImage.style.height = "310px";
                previewImage.style.objectFit = "cover";
            };
            reader.readAsDataURL(file);
        }
    });

    document.querySelector(".cancel-btn").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "/<?= $role ?>/products";
    });
</script>

<?php require_once base_path('views/partials/footer.php'); ?>