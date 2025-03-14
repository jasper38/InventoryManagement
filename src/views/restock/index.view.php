<?php
require_once base_path('views/partials/head.php');
require_once base_path('views/partials/sidebar.php');
require_once base_path('views/partials/section.opening.php');
require_once base_path('views/partials/nav.php');
?>

<main>
    <div class="head-title">
        <div class="left">
            <h1>Restock</h1>
            <div class="head-title">
                <div class="left">
                    <!-- <h1>Welcome, <?= $_SESSION['user']['role'] ?></h1> -->
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Restock</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">View</a>
                        </li>
                    </ul>
                </div>
                <!-- <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul> -->
            </div>
            <!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Product Restock</h3>

                </div>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qty.</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>

                    <div class="tablebody-wrapper">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Mouse</td>
                                    <td>5</td>
                                    <td><span class="status low-stock">Low stock</span></td>
                                    <td><a href="#restock-modal"><button class="restock-button">Restock</button></a></td>

                                </tr>
                                <tr>
                                    <td>Speaker</td>
                                    <td>100</td>
                                    <td><span class="status stable">Stable</span></td>
                                    <td><a href="#restock-modal"><button class="restock-button">Restock</button></a></td>

                                </tr>
                                <tr>
                                    <td>Monitor</td>
                                    <td>0</td>
                                    <td><span class="status unavailable">Unavailable</span></td>
                                    <td><a href="#restock-modal"><button class="restock-button">Restock</button></a></td>
                                </tr>
                                <tr>
                                    <td>Monitor</td>
                                    <td>0</td>
                                    <td><span class="status unavailable">Unavailable</span></td>
                                    <td><a href="#restock-modal"><button class="restock-button">Restock</button></a></td>
                                </tr>
                                <tr>
                                    <td>Monitor</td>
                                    <td>0</td>
                                    <td><span class="status unavailable">Unavailable</span></td>
                                    <td><a href="#restock-modal"><button class="restock-button">Restock</button></a></td>
                                <tr>
                                    <td>Monitor</td>
                                    <td>0</td>
                                    <td><span class="status unavailable">Unavailable</span></td>
                                    <td><a href="#restock-modal"><button class="restock-button">Restock</button></a></td>
                                <tr>
                                    <td>Monitor</td>
                                    <td>0</td>
                                    <td><span class="status unavailable">Unavailable</span></td>
                                    <td><a href="#restock-modal"><button class="restock-button">Restock</button></a></td>
                                </tr>
                            </tbody>
                            <!-- <?php foreach ($products as $product) : ?>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p><?= $product['name'] ?></p>
                                </td>
                                <td><?= $product['sku'] ?></td>
                                <td><?= $product['description'] ?></td>
                                <td><?= $product['supp_id'] ?></td>
                                <td><?= $product['price'] ?></td>
                                <td><?= $product['qty'] ?></td>
                                <td><?= $product['status'] ?></td>
                                <td><?= $product['type'] ?></td>
                                <!-- <td><span class="status completed">Completed</span></td> -->
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

<div id="restock-modal" class="modal">
    <div class="modal-content restock">
        <div class="close-button"><a href="#" class="close">&times;</a></div>
        <form id="restock-form">
            <div class="row">
                <div class="column">
                    <label for="productName">Product Name:</label>
                    <h4 class="product-name">Mouse</h4>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="qty">Quantity:</label>
                    <input type="text" id="qty" name="qty" required>
                </div>
                <div class="column">
                    <label for="sku">Supplier Name:</label>
                    <input type="text" id="sku" name="productsku" required>
                </div>
            </div>
            <input type="button" id="restock-modal-submit" value="Restock">
        </form>
    </div>
</div>

<?php require base_path('views/partials/confirm-modal.php'); ?>
<?php require_once base_path('views/partials/footer.php'); ?>