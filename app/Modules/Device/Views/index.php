<?php $this->extend('Modules\\Admin\\Views\\layouts\\admin') ?>

<?php $this->section('page-styles') ?>
<?php $this->endSection() ?>
<?php $this->section('page-scripts') ?>
<?php $this->endSection() ?>

  
<?php $this->section('page-content') ?>
    <div class="page-content page-device">
        <div class="row">
            <div class="col-md-8">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        Danh Sách Thiết Bị
                    </div>
                    
                    <div class="card-body device-list">
                        <!-- list device -->
                        <div class="row no-gutters align-items-center device-item">
                            <div class="col-md-10">
                                <div class="item-name">
                                    RICOH MP6002 <span class="status badge badge-primary">Đang hoạt động </span>
                                    
                                </div>
                                <span class="item-counter"> Counter: 4.991.009</span> 
                            </div>
                        
                            <div class="col-md-2">
                                <img class="device-img" src="<?= site_url('uploads/images/devices') ?>/ricoh6002.jpg" alt="RICOH 6002">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center device-item">
                            <div class="col-md-10">
                                <div class="item-name">
                                    RICOH MP8001 <span class="status badge badge-primary">Đang hoạt động </span>
                                    
                                </div>
                                <span class="item-counter"> Counter: 5.991.009</span> 
                            </div>
                        
                            <div class="col-md-2">
                                <img class="device-img" src="<?= site_url('uploads/images/devices') ?>/ricoh8001.jpg" alt="RICOH 6002">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center device-item">
                            <div class="col-md-10">
                                <div class="item-name">
                                    RICOH MP7500 <span class="status badge badge-warning">Cần chú ý</span>
                                    
                                </div>
                                <span class="item-counter"> Counter: 2.991.009</span> 
                            </div>
                        
                            <div class="col-md-2">
                                <img class="device-img" src="<?= site_url('uploads/images/devices') ?>/ricoh8001.jpg" alt="RICOH 6002">
                            </div>
                        </div>

                        <div class="row no-gutters align-items-center device-item">
                            <div class="col-md-10">
                                <div class="item-name">
                                    RICOH MPC6502 <span class="status badge badge-danger">Đang bị lỗi</span>
                                    
                                </div>
                                <span class="item-counter"> Counter: 991.009</span> 
                            </div>
                        
                            <div class="col-md-2">
                                <img class="device-img" src="<?= site_url('uploads/images/devices') ?>/ricoh5100.png" alt="RICOH 6002">
                            </div>
                        </div>


                    </div><!-- end list device --> 
                </div>
            </div>
            <div class="col-md-4">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        Thao tác thiết bị
                    </div>
                    <div class="card-body">
                        <div class="device-activity">
                            <ul class="timeline widget-timeline">
                                <li>
                                    <a target="_blank" href="https://www.totoprayogo.com/#">Thay Vật Tư</a>
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
                            </ul>
                        </div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>

