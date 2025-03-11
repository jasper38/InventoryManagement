<?php
require_once base_path('views/partials/head.php');
require_once base_path('views/partials/sidebar.php');
require_once base_path('views/partials/section.opening.php');
require_once base_path('views/partials/nav.php');
?>

<main>
    <div class="head-title">
        <div class="left">
            <h1>Orders</h1>
            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Orders</a>
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
                    <h3>Orders</h3>
                    <a href="#order-modal" class="modal-button">
                        <div class="modal-icon">
                            <i class='bx bxs-plus-circle'></i>
                            <h5>Create an Order</h5>
                        </div>
                    </a>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <div class="table-wrapper">

                    <table>
                        <thead>
                            <tr>
                                <th>Tracking ID</th>
                                <th>Order ID</th>
                                <th>Status</th>
                                <th>Supplier Name</th>
                                <th>Product</th>
                                <th>Qty.</th>
                                <th>Total cost</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <?php foreach ($orders as $order) : ?>
                            <tbody>
                                <tr>
                                    <td><?= htmlspecialchars($order['tracking_id']) ?></td>
                                    <td><?= htmlspecialchars($order['id']) ?></td>
                                    <td>
                                        <p><?= htmlspecialchars($order['status']) ?></p>
                                    </td>
                                    <td><?= htmlspecialchars($order['supp_name']) ?></td>
                                    <td><?= htmlspecialchars($order['name']) ?></td>
                                    <td><?= htmlspecialchars($order['qty']) ?></td>
                                    <td><?= htmlspecialchars($order['price']) ?></td>
                                    <td><?= htmlspecialchars($order['type']) ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once base_path('views/partials/section.close.php'); ?>

<div id="order-modal" class="modal">
    <div class="modal-content order">
        <div class="close-button"><a href="#" class="close">&times;</a></div>
        <form action="/<?= $role ?>/orders" method="POST">
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
                    <label for="supplierName">Supplier Name:</label>
                    <input type="text" id="supplierName" name="supplierName" required>
                </div>
            </div>
            <input type="hidden" name="tracking_id" value="<?= generateTrackingId() ?>">
            <input type="submit" value="Order">
        </form>
    </div>
</div>

<?php require_once base_path('views/partials/footer.php'); ?>