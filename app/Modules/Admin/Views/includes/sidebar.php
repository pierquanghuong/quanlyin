<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fa fa-print" aria-hidden="true"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Print it!</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= site_url('admin') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tổng Quan</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Quản Lý
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
        <span>Đơn in</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản lý đơn in:</h6>
            <a class="collapse-item" href="#">Danh sách</a>
            <a class="collapse-item" href="#">Tạo đơn</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapProduct"
        aria-expanded="true" aria-controls="collapProduct">
        <i class="fa fa-book" aria-hidden="true"></i>
        <span>Sản phẩm</span>
    </a>
    <div id="collapProduct" class="collapse" aria-labelledby="headingProduct" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Sản phẩm & Giá</h6>
            <a class="collapse-item" href="<?= site_url('admin/product') ?>">Sản Phẩm</a>
            <a class="collapse-item" href="<?= site_url('admin/component') ?>">Thành phần</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapCustomer"
        aria-expanded="true" aria-controls="collapCustomer">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span>Khách hàng</span>
    </a>
    <div id="collapCustomer" class="collapse" aria-labelledby="headingCustomer" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Quản lý khách:</h6>
            <a class="collapse-item" href="#">Thêm mới</a>
            <a class="collapse-item" href="#">Danh sách</a>
            <a class="collapse-item" href="#">Phân loại</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item <?php if(url_is('device*')) echo('active') ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-laptop" aria-hidden="true"></i>
        <span>Thiết bị</span>
    </a>
    <div id="collapseUtilities" class="collapse <?php if(url_is('device*') || url_is('part*')) echo('show') ?>" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản lý máy</h6>
            <a class="collapse-item <?php if(url_is('device')) echo('active') ?>" href="<?= site_url('device') ?>">Danh sách</a>
            <a class="collapse-item <?php if(url_is('device/create')) echo('active') ?>" href="<?= site_url('device/create') ?>">Thêm Thiết Bị</a>
            <h6 class="collapse-header">Linh kiện & Vật tư:</h6>
            <a class="collapse-item <?php if(url_is('part')) echo('active') ?>" href="<?= site_url('part') ?>">Danh sách Linh kiện</a>
            <a class="collapse-item <?php if(url_is('part/create')) echo('active') ?>" href="<?= site_url('part/create') ?>">Thêm Linh Kiện</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Hệ thống
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
        <span>Nhân viên</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản lý nhân viên</h6>
            <a class="collapse-item" href="#">Thêm mới</a>
            <a class="collapse-item" href="#">Danh sách</a>
            <a class="collapse-item" href="#">Phân quyền</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Cấu hình</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>