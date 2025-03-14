<?php
require_once base_path('views/partials/head.php');
require_once base_path('views/partials/sidebar.php');
require_once base_path('views/partials/section.opening.php');
require_once base_path('views/partials/nav.php');
?>

<main>
    <div class="head-title">
        <div class="left">
            <h1><a href="/<?= $role ?>/customers/create">New Supplier</a></h1>
            <div class="head-title">
                <div class="left">
                    <!-- <h1>Welcome, <?= $_SESSION['user']['role'] ?></h1> -->
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Suppliers</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Create</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="customer-container">
        <div class="customer-type">
            <label>Supplier Type:</label>
            <label><input type="radio" class="customer-type" name="customerType"> Business</label>
            <label><input type="radio" class="customer-type" name="customerType"> Individual</label>
        </div>

        <form>

            <div class="form-group">
                <label>Primary Contact</label>
                <div class="input-group">
                    <select>
                        <option>Salutation</option>
                        <option>Mr.</option>
                        <option>Ms.</option>
                    </select>
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                </div>
            </div>

            <!-- Company Name -->
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" placeholder="Type to add">
            </div>

            <!-- Display Name -->
            <div class="form-group">
                <label>Display Name <span class="required">*</span></label>
                <input type="text">
            </div>

            <!-- Email & Phone -->
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text">
            </div>

            <!-- Tabs -->
            <!-- <div class="tabs">
                <button class="active">Other Details</button>
                <button>Address</button>
                <button>Contact Persons</button>
                <button>Custom Fields</button>
                <button>Reporting Tags</button>
                <button>Remarks</button>
            </div> -->

            <!-- Other Details -->
            <!-- <div class="details-section"> -->
            <!-- <div class="form-group">
                    <label>Tax Rate</label>
                    <select>
                        <option>Select a Tax</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Company ID</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Currency</label>
                    <select>
                        <option>PHP - Philippine Peso</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Payment Terms</label>
                    <select>
                        <option>Due on Receipt</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox"> Allow portal access for this customer
                    </label> -->
            <!-- </div>

                <div class="form-group">
                    <label>Portal Language</label>
                    <select>
                        <option>English</option>
                    </select>
                </div> -->

            <!-- File Upload -->
            <!-- <div class="form-group">
                <label>Documents</label>
                <input type="file">
                <p>You can upload a maximum of 10 files, 10MB each</p>
            </div> -->
            <!-- </div> -->

            <!-- Buttons -->
            <div class="button-group">
                <button class="save-btn">Save</button>
                <button class="cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
</main>

<?php require_once base_path('views/partials/section.close.php'); ?>

<?php require_once base_path('views/partials/footer.php'); ?>