<?php $this->extend('Modules\\Admin\\Views\\layouts\\admin') ?>

<?php $this->section('page-styles') ?>

<?php $this->endSection() ?>
<?php $this->section('page-scripts') ?>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/select2/js/select2.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/plugins/validate/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/bsadmin') ?>/js/modules/device.js"></script>  
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
                    <div class="card-body device-edit" >
                        <div class="form-group">
                          <label for="txtName">Tên thiết bị</label>
                          <input type="text" class="form-control" name="name" id="txtName" 
                          placeholder="Tên thiết bị" value="<?= set_value('name') ?>">
                        </div>

                        <div class="form-row form-group">
                            <div class="col">
                                <label for="">Mã/Serie</label>
                                <input type="text" name="serie" id="" class="form-control"
                                placeholder="Serie" aria-describedby="helpSerie" value="<?= set_value('serie') ?>">
                                
                            </div>
                            <div class="col">
                                <label for="">Counter</label>
                                <input type="number" name="start-counter" id="" class="form-control"
                                placeholder="Counter khởi điểm " aria-describedby="helpStartCounter" required value="<?= set_value('start-counter') ?>">
                                
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <div class="col">
                                <label for="txtBuyDate">Ngày mua</label>
                                <input type="text" class="form-control" name="buy-date" id="txtBuyDate" 
                                placeholder="Ngày" value="<?= set_value('buy-date') ?>">
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Tổng Chi Phí</label>
                                    <input type="text" name="price" id="" class="form-control"
                                    placeholder="Giá mua máy" value="<?= set_value('price') ?>">
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-group form-row">
                            <div class="col">
                                <label for="cbGroup">Phân loại máy</label>
                                <select class="form-control" name="group" id="cbGroup">
                                    <option value="1" selected> Máy in </option>
                                    <option value="2"> Máy Gia Công</option>
                                    <option value="3">Máy thành phẩm</option>
                                    <option value="4">Máy hỗ trợ</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="cbSupplier">Nhà cung cấp</label>
                                <select class="form-control" name="supplier" id="cbSupplier">
                                    <option value="1"> Văn Nhân </option>
                                    <option value="2"> Tùng Vỹ</option>
                                    <option value="3"> An Nhân</option>
                                    <option value="4" selected> Vũ Gia</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="page-widget card mb-4">
                    <div class="card-header">Hình ảnh</div>
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

            </div>

            <div class="col-md-4">
                <div class="page-widget card mb-4">
                    <div class="card-header">
                         Thông tin khác
                    </div>
                    <div class="card-body device-edit" >
                        <div class="form-group">
                            <label for="OpStatus">Tình trạng</label>
                            <select class="form-control js-example-basic-single" name="status" id="OpStatus">
                                <option value = "1">Đang hoạt động</option>
                                <option>Không ổn định</option>
                                <option>Lỗi - Không chạy</option>
                            </select>
                        </div>

                        <div class="form-group">
                          <label for="txtCounterPlan">Counter đạt khấu hao</label>
                          <input type="number" name="counter-plan" id="txtCounterPlan"
                          class="form-control" placeholder="Bản in" aria-describedby="helpCounterPlan" value="<?= set_value('counter-plan') ?>">
                          <small id="helpCounterPlan" class="text-muted">Counter sử dụng dự tính</small>
                        </div>

                        <div class="form-group">
                          <label for="txtTimePlan">Thời gian sử dụng</label>
                          <input type="text" name="time-sell" id="txtTimePlan" class="form-control"
                          placeholder="Thời gian" aria-describedby="txtTimePlan" value="<?= set_value('time-sell') ?>">
                          <small id="txtTimePlan" class="text-muted">Thời gian sử dụng dự tính</small>
                        </div>

                         <div class="form-group">
                          <label for="txtSellPrice">Giá bán</label>
                          <input type="text" name="sell-price" id="txtSellPrice" class="form-control"
                          placeholder="Giá bán" aria-describedby="helpSellPrice" value="<?= set_value('sell-price') ?>">
                          <small id="helpSellPrice" class="text-muted">Giá bán khi hết khấu hao</small>
                        </div>

                    </div>


                    <div class="card-footer text-left">
                        <button class="btn btn-primary" type="submit">Lưu thông tin</button>
                        <button class="btn btn-info" type="submit">Trở lại</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
<?php $this->endSection() ?>

