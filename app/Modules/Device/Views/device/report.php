<?php $this->extend('Modules\\Admin\\Views\\layouts\\admin') ?>
    
<?php $this->section('page-styles') ?>
    <link href="<?= base_url('assets/bsadmin') ?>/plugins/select2/css/select2.min.css" rel="stylesheet">
<?php $this->endSection() ?>
<?php $this->section('page-scripts') ?>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/select2/js/select2.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/validate/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/js/modules/device.js"></script>
    <script>
        $(document).ready(function() {
            $('#txtDevice').select2();
        });
    </script>
<?php $this->endSection() ?>
 
<?php $this->section('page-content') ?>
    <form action="#" class="form" method="POST">
    <?= csrf_field() ?>
    <div class="page-content page-device">
        <div class="row static">
            <div class="col-md-8">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        Thông tin chung
                    </div>
                    <div class="card-body device-report" >
                         <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="cbType">Phân loại</label>
                                    <select class="form-control" name="type" id="cbType">
                                        <option>Lỗi không ổn định</option>
                                        <option>Không thể hoạt động</option>
                                        <option>Thay vật tư</option>
                                    </select>
                                    <small id="helpType" class="form-text text-muted">Phân loại báo cáo</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                  <label for="txtCounter">Counter</label>
                                  <input type="number" class="form-control" name="counter" id="txtCounter" 
                                  aria-describedby="helpCounter" placeholder="Counter" value="<?= set_value('counter') ?>">
                                  <small id="helpCounter" class="form-text text-muted">Counter hiện tại</small>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
                <!-- accord-->
                <div class="report-table">
                    <div class="accordion" id="reportAccordion">
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" data-target="#counterTab" aria-expanded="true">     
                                <span class="title"><i class="fa fa-bug" aria-hidden="true"></i> Ghi lỗi </span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="counterTab" class="collapse show" data-parent="#reportAccordion">
                                <div class="card-body">
                                    <p class="accodi-help">
                                        Mô tả chi tiết lỗi bao gồm tình trạng máy, bộ phận hỏng hóc, kẹt... 
                                        tình trạng hoạt động (bản in...) và hình ảnh chi tiết. 
                                    </p>
                                    
                                    <div class="form-group">
                                      <label for="txtDes">Mô tả</label>
                                      <textarea class="form-control" name="desc" id="txtDes" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" data-toggle="collapse" data-target="#errorTab" aria-expanded="false" aria-controls="errorTab">     
                                <span class="title"><i class="fa fa-recycle" aria-hidden="true"></i> Thay vật tư </span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="errorTab" class="collapse" data-parent="#reportAccordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div> <!--end accordion -->
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
                            </ul>
                        </div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
    </form>
<?php $this->endSection() ?>

