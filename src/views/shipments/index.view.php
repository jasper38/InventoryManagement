<?php
require_once base_path('views/partials/head.php');
require_once base_path('views/partials/sidebar.php');
require_once base_path('views/partials/section.opening.php');
require_once base_path('views/partials/nav.php');
?>
<main>
    <div class="head-title">
        <div class="left">
            <h1>Shipments</h1>
            <div class="head-title">
                <div class="left">
                    <!-- <h1>Welcome, <?= $_SESSION['user']['role'] ?></h1> -->
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Shipments</a>
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
        <!-- <ul class="box-info">
        <li>
            <i class='bx bxs-package'></i>
            <span class="text">
                <h3>1020</h3>
                <p>Products</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3>2834</h3>
                <p>Suppliers</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>$2543</h3>
                <p>Total Sales</p>
            </span>
        </li>
    </ul> -->
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Shipments Log</h3>
                    <a href="#addProductModal" class="add-product-button">
                        <div class="add-product-icon"><i class='bx bxs-plus-circle'></i></div>
                    </a>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Tracking ID</th>
                            <th>Order ID</th>
                            <th>Status</th>
                            <th>Supplier ID</th>
                            <th>Product</th>
                            <th>Qty.</th>
                            <th>Total cost</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0000001</td>
                            <td>0000002</td>
                            <td><span class="status in-transit">In transit</
                                        span>
                            </td>
                            <td>22222222</td>
                            <td>Mouse</td>
                            <td>50</td>
                            <td>Php 10000</td>
                            <td>Mouse</td>
                        </tr>
                    </tbody>
                    <!-- <?php foreach ($products as $product) : ?>
                <tbody>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p><?= htmlspecialchars($product['name']) ?></p>
                        </td>
                        <td><?= htmlspecialchars($product['sku']) ?></td>
                        <td><?= htmlspecialchars($product['description']) ?></td>
                        <td><?= htmlspecialchars($product['supp_id']) ?></td>
                        <td><?= htmlspecialchars($product['price']) ?></td>
                                <td><?= htmlspecialchars($product['qty']) ?></td>
                        <td><?= htmlspecialchars($product['status']) ?></td>
                        <td><?= htmlspecialchars($product['type']) ?></td>
                        <!-- <td><span class="status completed">Completed</span></
td> -->
                    </tr>
                    </tbody>
                <?php endforeach; ?> -->
                </table>
            </div>
            <!-- <div class="todo">
			<div class="head">
				<h3>Todos</h3>
				<i class='bx bx-plus' ></i>
				<i class='bx bx-filter' ></i>
			</div>
			<ul class="todo-list">
				<li class="completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded' ></i>
				</li>
				<li class="completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded' ></i>
				</li>
				<li class="not-completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded' ></i>
				</li>
				<li class="completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded' ></i>
				</li>
				<li class="not-completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded' ></i>
				</li>
			</ul>
		</div> -->
        </div>
</main>
<?php require_once base_path('views/partials/section.close.php'); ?>

<div id="addProductModal" class="modal">
    <div class="modal-content">
        <div class="close-button"><a href="#" class="close">&times;</a></div>
        <form>
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
                    <input type="text" id="supplierID" name="supplierID" required>
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
                    <input type="text" id="price" name="price" required>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="qty">Quantity:</label>
                    <input type="text" id="qty" name="qty" required>
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