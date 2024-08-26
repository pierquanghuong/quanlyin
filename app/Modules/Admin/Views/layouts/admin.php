<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= isset($pape_tilte) ? esc( $pape_tilte ) : esc( 'Quản Lý In' ); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/bsadmin') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/bsadmin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/bsadmin') ?>/css/custom.css" rel="stylesheet">

<!-- Custom page styles -->
    <?= $this->renderSection('page-styles') ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?= $this->include('Modules\\Admin\\Views\\includes\\sidebar.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('Modules\\Admin\\Views\\includes\\navbar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <?= $this->renderSection('page-content'); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; print.inquanghuy.com</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!--  Modal-->
    <?php $this->include('Modules\\Admin\\Views\\includes\\modal.php') ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/bsadmin') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/bsadmin') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/bsadmin') ?>/js/sb-admin-2.min.js"></script>

    <?= $this->renderSection('page-scripts') ?>

</body>

</html>