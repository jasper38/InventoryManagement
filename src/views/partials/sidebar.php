<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-building-house'></i>
        <span class="text">Inventory Management</span>
    </a>
    <ul class="side-menu top">
        <?php if ($role === 'admin') : ?>
            <li class="<?= url_is('/dashboard') ? 'active' : '' ?>">
                <a href=/dashboard>
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
        <?php endif ?>
        <li class="<?= url_is("/{$role}/products") ? 'active' : '' ?>">
            <a href="/<?= $role ?>/products">
                <i class='bx bxs-package'></i>
                <span class="text">Products</span>
            </a>
        </li>
        <li class="<?= url_is("/{$role}/restock") ? 'active' : '' ?>">
            <a href="/<?= $role ?>/restock">
                <i class='bx bxs-purchase-tag'></i>
                <span class="text">Restock</span>
            </a>
        </li>
        <li class="<?= url_is("/{$role}/orders") ? 'active' : '' ?>">
            <a href="/<?= $role ?>/orders">
                <i class='bx bx-cart'></i>
                <span class="text">Orders</span>
            </a>
        </li>
        <li class="<?= url_is("/{$role}/shipments") ? 'active' : '' ?>">
            <a href="/<?= $role ?>/shipments">
                <i class='bx bxs-paper-plane'></i>
                <span class="text">Shipments</span>
            </a>
        </li>
        <li class="<?= url_is("/{$role}/customers") ? 'active' : '' ?>">
            <a href="/<?= $role ?>/customers">
                <i class='bx bxs-paper-plane'></i>
                <span class="text">Customers</span>
            </a>
        </li>
        <li class="<?= url_is("/{$role}/suppliers") ? 'active' : '' ?>">
            <a href="/<?= $role ?>/suppliers">
                <i class='bx bxs-paper-plane'></i>
                <span class="text">Suppliers</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="/<?= $role ?>/settings">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <form action="/logout" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <button class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </button>
            </form>
        </li>
    </ul>
</section>