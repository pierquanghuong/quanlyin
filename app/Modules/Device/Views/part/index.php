<?php $this->extend('Modules\\Admin\\Views\\layouts\\admin') ?>

<?php $this->section('page-styles') ?>
    <link href="<?= base_url('assets/bsadmin') ?>/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/bsadmin') ?>/plugins/datatables/datatables.min.css" rel="stylesheet">
<?php $this->endSection() ?>
<?php $this->section('page-scripts') ?>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/datatables/datatables.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/validate/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/js/modules/part.js"></script>  
<?php $this->endSection() ?>
  
<?php $this->section('page-content') ?>
    <div class="page-content page-part">
        <form action="<?= site_url('part/create') ?>" class="page-form device-form form" id="deviceForm">
            <div class="row">
                <div class="col-md-12 col-xs">
                    <div class="page-widget card mb-4">
                        <div class="card-header">
                            Linh Kiện - Vật Tư
                        </div>
                        <div class="card-body">
                            <div class="part-list-table">
                                <table id="part-table" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên linh kiện</th>
                                            <th width="12%">Tồn kho</th>
                                            <th>Ngày nhập</th>
                                            <th>Tình trạng</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <td>#2</td>
                                                <td>Gạt belt RICOH trắng đen</td>
                                                <td>4</td>
                                                <td>08/09/2024</td>
                                                <td>Hàng mới</td>
                                                <td>
                                                    <a href="#" class="badge badge-primary">Sửa</a>
                                                    <a href="#" class="badge badge-danger">Xóa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#3</td>
                                                <td>Gạt Drum RICOH trắng đen</td>
                                                <td>4</td>
                                                <td>12/09/2024</td>
                                                <td>Hàng mới</td>
                                                <td>
                                                    <a href="#" class="badge badge-primary">Sửa</a>
                                                    <a href="#" class="badge badge-danger">Xóa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#4</td>
                                                <td>Drum Ricoh màu</td>
                                                <td>4</td>
                                                <td>01/09/2024</td>
                                                <td>Hàng mới</td>
                                                <td>
                                                    <a href="#" class="badge badge-primary">Sửa</a>
                                                    <a href="#" class="badge badge-danger">Xóa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#5</td>
                                                <td>Gạt drum dưới Ricoh màu</td>
                                                <td>5</td>
                                                <td>01/09/2024</td>
                                                <td>Hàng mới</td>
                                                <td>
                                                    <a href="#" class="badge badge-primary">Sửa</a>
                                                    <a href="#" class="badge badge-danger">Xóa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#6</td>
                                                <td>Gạt drum trên Ricoh màu</td>
                                                <td>2</td>
                                                <td>01/09/2024</td>
                                                <td>Hàng mới</td>
                                                <td>
                                                    <a href="#" class="badge badge-primary">Sửa</a>
                                                    <a href="#" class="badge badge-danger">Xóa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#7</td>
                                                <td>Cụm gạt belt Ricoh màu</td>
                                                <td>1</td>
                                                <td>01/09/2024</td>
                                                <td>Hàng tháo máy</td>
                                                <td>
                                                    <a href="#" class="badge badge-primary">Sửa</a>
                                                    <a href="#" class="badge badge-danger">Xóa</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>           
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $this->endSection() ?>
