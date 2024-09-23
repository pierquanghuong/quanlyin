<?php $this->extend('Modules\\Admin\\Views\\layouts\\admin') ?>

<?php $this->section('page-styles') ?>

<?php $this->endSection() ?>
<?php $this->section('page-scripts') ?>
    <script type="module" src="<?= base_url('assets/bsadmin') ?>/plugins/chart.js/chart.umd.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/select2/js/select2.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/validate/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/js/modules/device.js"></script>
    <script>
    $(document).ready(function() {
        //chart error
        const echar = document.getElementById('error-chart');
        new Chart(echar, {
            type: 'line',
            data: {
                labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                datasets: [{
                label: '# Số lỗi',
                data: [12, 19, 3, 5, 2, 3, 6, 6, 13, 9, 8, 3],
                borderWidth: 1
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        });
        //chart print
        const pchar = document.getElementById('print-chart');
        new Chart(pchar, {
            type: 'line',
            data: {
                    labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7'],
                    datasets: [{
                    label: '# bản in',
                    data: [4000, 2000, 5000, 1000, 7000, 2000, 3000],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        });
    });
    </script>
<?php $this->endSection() ?>
 
<?php $this->section('page-content') ?>
    <div class="page-content page-device">
        <div class="row static">
            <div class="col-md-12">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                       <div class="row">
                            <div class="col text-left">
                                Thống kê hoạt động
                            </div>
                            <div class="col text-right">
                                <a href="<?= site_url('device/report') ?>" >Tạo báo cáo</a>
                            </div>
                       </div>
                    </div>
                    <div class="card-body device-statis" >
                            <div class="row">
                                <div class="col-md-6">
                                    <canvas id="print-chart"></canvas>
                                </div>
                                <div class="col-md-6">
                                    <canvas id="error-chart"></canvas>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                Thông tin chung <span class="badge badge-pill badge-success">Hoạt động bình thường</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="<?= site_url('device/general/1') ?>">Sửa thông tin</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body device-info">
                        <div class="list-item">
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Tên thiết bị</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="info-value"> Ricoh MP 6002</h6>
                                </div>
                            </div>
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Mã Serie</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="info-value">D125998123</h6>
                                </div>
                            </div>
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Ngày mua</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="info-value">19/08/2019</h6>
                                </div>
                            </div>
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Phân loại</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="info-value">Máy in đơn sắc</h6>
                                </div>
                            </div>
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Nhà cung cấp</h6>
                                </div>
                                <div class="col-md-6">
                                    <a href="#"><h6 class="info-value">Văn Nhân</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-widget card mb-4">
                        <div class="card-header">
                        Hình ảnh
                        </div>
                        <div class="card-body">
                            <div class="img-upload device-img">
                                <div class="upload__box row">
                                    <div class="col-md-2">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                <input type="file" multiple="" data-max_length="4" class="upload__inputfile">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="upload__img-wrap">
                                            <div class="upload__img-box">
                                                <div class="img-bg" style="background-image: url(<?= site_url('uploads/images/devices/ricoh6002.jpg') ?>)" data-number="0" data-file="ricoh6002.jpg">
                                                    <div class="upload__img-close"></div>
                                                </div>
                                            </div>
                                            <div class="upload__img-box">
                                                <div class="img-bg" style="background-image: url(<?= site_url('uploads/images/devices/7502.jpg') ?>)" data-number="0" data-file="ricoh6002.jpg">
                                                    <div class="upload__img-close"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>                                       
                            </div> <!-- end image upload -->
                        </div>
                </div>

                <div class="page-widget card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    Thông tin dự tính
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="#">Sửa thông tin</a>                               
                                </div>
                            </div>
                        </div>
                        <div class="card-body device-info">
                        <div class="list-item">
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Giá mua</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="info-value"> 52.000.000</h6>
                                </div>
                            </div>
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Thời gian sử dụng</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="info-value">1 năm</h6>
                                </div>
                            </div>
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Giá bán dự tính</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="info-value">10.000.000</h6>
                                </div>
                            </div>
                            <div class="row info-list-row">
                                <div class="col-md-6">
                                    <h6>Counter mục tiêu</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="info-value">2.000.000</h6>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                Thông số
                            </div>
                            <div class="col-md-6 text-right">
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body device-info">
                        <div class="row info-list-row">
                            <div class="col-md-7">
                                <h6>Counter hiện tại</h6>
                            </div>
                            <div class="col-md-5">
                                <h6 class="info-value">5.682.991</h6>
                            </div>
                        </div>

                        <div class="row info-list-row">
                            <div class="col-md-7">
                                <h6>Counter đạt được</h6>
                            </div>
                            <div class="col-md-5">
                                <h6 class="info-value">4.898.012</h6> 
                            </div>
                        </div>

                        <div class="row info-list-row">
                            <div class="col-md-7">
                                <h6>Tổng vật tư - linh kiện</h6>
                            </div>
                            <div class="col-md-5">
                                <h6 class="info-value">12.400.000</h6> 
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                    Thao tác & báo cáo
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="<?= site_url('device/report') ?>">Tạo báo cáo</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="device-activity">
                            <ul class="timeline widget-timeline">
                                <li>
                                    <a target="_blank" href="#">Thay Vật Tư</a>
                                    <a href="#" class="float-right">14:00 20/08/2024</a>
                                    <p>Thay web dầu máy RICOH mp6002</p>
                                </li>
                                <li>
                                    <a href="#">Đổ mực</a>
                                    <a href="#" class="float-right">14:00 19/08/2024</a>
                                    <p>Đổ mực Ricoh 6002</p>
                                </li>
                                
                                <li>
                                    <a target="_blank" href="#">Thay Vật Tư</a>
                                    <a href="#" class="float-right">14:00 20/08/2024</a>
                                    <p>Thay web dầu máy RICOH mp6002</p>
                                </li>
                                <li>
                                    <a href="#">Đổ mực</a>
                                    <a href="#" class="float-right">14:00 19/08/2024</a>
                                    <p>Đổ mực xanh, vàng, đỏ</p>
                                </li>
                                <li>
                                    <a href="#">Máy TOSHIBA E857 báo lỗi</a>
                                    <a href="#" class="float-right">08:00 15/08/2024</a>
                                    <p>Bản in bị mờ</p>
                                </li>
                                <li>
                                    <a target="_blank" href="#">Thay Vật Tư</a>
                                    <a href="#" class="float-right">14:00 20/08/2024</a>
                                    <p>Thay web dầu máy RICOH mp6002</p>
                                </li>
                                <li>
                                    <a href="#">Đổ mực</a>
                                    <a href="#" class="float-right">14:00 19/08/2024</a>
                                    <p>Đổ mực xanh, vàng, đỏ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= site_url('devices') ?>" title="Danh sách thiết bị" class="btn btn-primary">Trở lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>

