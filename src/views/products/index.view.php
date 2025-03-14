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
                    <a href="#enlistProductModal" class="modal-button">
                        <div class="modal-icon">
                            <i class='bx bxs-plus-circle'></i>
                            <h5>Enlist a product</h5>
                        </div>
                    </a>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>Description</th>
                                <th>Supplier Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>

                    <div class="tablebody-wrapper">
                        <table>
                            <tbody>
                                <tr>
                                    <td><img src="/assets/img/people.png"> Mouse</td>
                                    <td>0111111</td>
                                    <td>Powerless Mouse</td>
                                    <td>22222222</td>
                                    <td>Php 10000</td>
                                    <td>50</td>
                                    <td>Mouse</td>
                                    <td class="action-icons">
                                        <a href="/<?= $role ?>/products/edit/0111111">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <i class="bx bx-trash"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="/assets/img/people.png"> Mouse</td>
                                    <td>0111112</td>
                                    <td>Powerless Mouse</td>
                                    <td>22222222</td>
                                    <td>Php 10000</td>
                                    <td>50</td>
                                    <td>Mouse</td>
                                    <td class="action-icons">
                                        <a href="/<?= $role ?>/products/edit/0111112">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <i class="bx bx-trash"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="/assets/img/people.png"> Mouse</td>
                                    <td>0111113</td>
                                    <td>Powerless Mouse</td>
                                    <td>22222222</td>
                                    <td>Php 10000</td>
                                    <td>50</td>
                                    <td>Mouse</td>
                                    <td class="action-icons">
                                        <a href="/<?= $role ?>/products/edit/0111113">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <i class="bx bx-trash"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="/assets/img/people.png"> Mouse</td>
                                    <td>0111114</td>
                                    <td>Powerless Mouse</td>
                                    <td>22222222</td>
                                    <td>Php 10000</td>
                                    <td>50</td>
                                    <td>Mouse</td>
                                    <td class="action-icons">
                                        <a href="/<?= $role ?>/products/edit/0111114">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <i class="bx bx-trash"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="/assets/img/people.png"> Mouse</td>
                                    <td>0111115</td>
                                    <td>Powerless Mouse</td>
                                    <td>22222222</td>
                                    <td>Php 10000</td>
                                    <td>50</td>
                                    <td>Mouse</td>
                                    <td class="action-icons">
                                        <a href="/<?= $role ?>/products/edit/0111115">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <i class="bx bx-trash"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="/assets/img/people.png"> Mouse</td>
                                    <td>0111116</td>
                                    <td>Powerless Mouse</td>
                                    <td>22222222</td>
                                    <td>Php 10000</td>
                                    <td>50</td>
                                    <td>Mouse</td>
                                    <td class="action-icons">
                                        <a href="/<?= $role ?>/products/edit/0111116">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <i class="bx bx-trash"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="/assets/img/people.png"> Mouse</td>
                                    <td>0111117</td>
                                    <td>Powerless Mouse</td>
                                    <td>22222222</td>
                                    <td>Php 10000</td>
                                    <td>50</td>
                                    <td>Mouse</td>
                                    <td class="action-icons">
                                        <a href="/<?= $role ?>/products/edit/0111117">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <i class="bx bx-trash"></i>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <?php foreach ($products as $product) : ?>
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
                    <?php endforeach; ?> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once base_path('views/partials/section.close.php'); ?>

<div id="enlistProductModal" class="modal">
    <div class="modal-content products">
        <div class="upload-portal">
            <h3>Upload and Attach Files</h3>
            <h5>Upload and attach files to this project.</h5>
            <div class="close-button"><a href="#" class="close">&times;</a></div>
            <div class="dashed-box">
                <i class='bx bx-upload'></i>
                <h5><span>Click to Upload</span> or drag and drop</h5>
                <h6>Maximum file size of 50 MB.</h6>
            </div>
            <div class="upload-preview">
                <div class="upload-bar">
                    <i class='bx bx-film'></i>
                    <div class="upload-details">
                        <h5>Prototype recording 1.jpg</h5>
                        <h5 class="upload-size">20 MB</h5>
                    </div>
                    <div class="progress-wrapper">
                        <div class="progress-container">
                            <div class="progress-bar"></div>
                        </div>
                        <div class="progress-percent">100%</div>
                    </div>
                    <div class="remove-button">&times;</div>
                </div>
            </div>
            <div class="footer">
                <button class="cancel-button">Cancel</button>
                <button class="enlist-button" id="product-modal-submit">Enlist Product</button>
            </div>
        </div>
        <div class="product-enlist">
            <h3>New Arrivals</h3>
            <div class="new-products">
                <div class="product-bar">
                    <h4>Mouse version 5</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Keyboard version 9</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Mouse version 5</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Keyboard version 9</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Mouse version 5</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Keyboard version 9</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Mouse version 5</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Keyboard version 9</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Mouse version 5</h4>
                    Date of arrival: 03-08
                </div>
                <div class="product-bar">
                    <h4>Keyboard version 9</h4>
                    Date of arrival: 03-08
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once base_path('views/partials/confirm-modal.php'); ?>

<?php require_once base_path('views/partials/footer.php'); ?>