<?php $this->extend('Modules\\Admin\\Views\\layouts\\admin') ?>

<?php $this->section('page-styles') ?>
    <link href="<?= base_url('assets/bsadmin') ?>/plugins/select2/css/select2.min.css" rel="stylesheet">
<?php $this->endSection() ?>
<?php $this->section('page-scripts') ?>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/select2/js/select2.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/validate/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/js/modules/device.js"></script>  
<?php $this->endSection() ?>
  
<?php $this->section('page-content') ?>
    <div class="page-content page-device">
        <form action="<?= site_url('admin/create') ?>" class="page-form device-form form" id="deviceForm">
        <div class="row">
            <div class="col-md-8">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        Thông tin chung & Hình ảnh
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label for="">Tên thiết bị</label>
                          <input type="text" name="name" id="" class="form-control" placeholder="Tên thiết bị" aria-describedby="helpName" required minlength="3">
                          <small id="helpName" class="text-muted">Tên của máy sử dụng để quản lý máy</small>
                        </div>
                       
                        <div class="form-row form-group">
                            <div class="col">
                                <label for="">Mã/Serie</label>
                                <input type="text" name="serie" id="" class="form-control" placeholder="Serie" aria-describedby="helpSerie">
                                <small id="helpSerie" class="text-muted">Serie thiết bị sử dụng để tra cứu online</small>
                            </div>
                            <div class="col">
                                <label for="">Counter</label>
                                <input type="number" name="start-counter" id="" class="form-control" placeholder="Counter khởi điểm " aria-describedby="helpStartCounter" required>
                                <small id="helpStartCounter" class="text-muted">Counter khi mua máy</small>
                            </div>
                        </div>

                        <div class="img-upload device-img">
                            <hr>
                            <label for="">Hỉnh ảnh thiết bị</label>
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
                                    <div class="upload__img-wrap"></div>
                                </div>
                            </div>  
                                                                         
                        </div> <!-- end image upload -->
                    
                    </div>           
                </div>
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        Thông số
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label for="">Tổng Chi Phí</label>
                          <input type="text" name="price" id="" class="form-control" placeholder="Giá mua máy" aria-describedby="ç">
                          <small id="helpPrice" class="text-muted">Giá mua thiết bị ban đầu - sử dụng quản lý máy</small>
                        </div>
                        <div class="form-group">
                          <label for="opGroup">Phân loại</label>
                          <select class="form-control js-example-basic-single" name="group" id="opGroup">
                            <option value="1">Máy in đơn sắc</option>
                            <option value="2">Máy in màu</option>
                            <option value="3">Máy Gia công</option>
                          </select>
                        </div>
                    </div>           
                </div>
            </div>

            <div class="col-md-4">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                        Thông tin thống kê
                    </div>
                    <div class="card-body">                                            
                        <div class="form-group">
                            <label for="OpStatus">Tình trạng</label>
                            <select class="form-control js-example-basic-single" name="status" id="OpStatus">
                                <option value = "1">Đang hoạt động</option>
                                <option>Không ổn định</option>
                                <option>Lỗi - Không chạy</option>
                            </select>
                            <small id="OpStatus" class="text-muted">Tình trạng máy</small>
                        </div>

                        <div class="form-group">
                          <label for="txtSupplier">Nhà cung cấp</label>
                          <input type="text" name="supplier" id="txtSupplier" class="form-control" placeholder="Nhà Cung Cấp" aria-describedby="helpSupplier">
                          <small id="helpSupplier" class="text-muted">Nhà cung cấp máy - người bán</small>
                        </div>

                        <div class="form-group">
                          <label for="txtCounterPlan">Counter đạt được</label>
                          <input type="number" name="counter-plan" id="txtCounterPlan" class="form-control" placeholder="Bản in" aria-describedby="helpCounterPlan">
                          <small id="helpCounterPlan" class="text-muted">Counter sử dụng dự tính</small>
                        </div>
                        <div class="form-group">
                          <label for="txtTimePlan">Thời gian sử dụng</label>
                          <input type="text" name="time-sell" id="txtTimePlan" class="form-control" placeholder="Thời gian" aria-describedby="txtTimePlan">
                          <small id="txtTimePlan" class="text-muted">Thời gian sử dụng dự tính</small>
                        </div>

                        <div class="form-group">
                          <label for="txtSellPrice">Giá bán</label>
                          <input type="text" name="sell-price" id="txtSellPrice" class="form-control" placeholder="Giá bán" aria-describedby="helpSellPrice">
                          <small id="helpSellPrice" class="text-muted">Giá bán khi hết khấu hao</small>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Nhập máy</button>
                        <button class="btn btn-info" type="submit">Thoát</button>
                    </div>

                </div>

            </div>

        </div>
        </form>
    </div>
<?php $this->endSection() ?>
