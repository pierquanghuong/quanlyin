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
        <form action="<?= site_url('part/create') ?>" class="page-form device-form form" id="deviceForm">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-widget card mb-4">
                        <div class="card-header">
                            Thông tin chung
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Tên linh kiện</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="Tên linh kiện" aria-describedby="helpName" required minlength="3">
                                <small id="helpName" class="text-muted">Tên đầy đủ linh kiện</small>
                            </div>
                            <div class="form-row form-group">
                                <div class="col">
                                    <label for="txtPrice">Giá nhập</label>
                                    <input type="number" name="price" id="txtPrice" class="form-control" placeholder="Giá nhập" aria-describedby="helpPrice" required>
                                    <small id="helpPrice" class="text-muted">Giá nhập linh kiện</small>
                                </div>
                                <div class="col">
                                    <label for="txtDate">Ngày nhập</label>
                                    <input type="text" name="date" id="txtDate" class="form-control" placeholder="Ngày nhập" aria-describedby="helpDate" required>
                                    <small id="helpDate" class="text-muted">Giá nhập linh kiện</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Số lượng nhập</label>
                                <input type="number" value = "1" name="qty" id="" class="form-control" placeholder="Số lượng" aria-describedby="helpDate">
                                <small id="helpDate" class="text-muted">Số lượng nhập</small>   
                            </div>
                        </div>           
                    </div>
                    <div class="page-widget card mb-4">
                        <div class="card-header">
                            Phân loại
                        </div>
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label for="opGroup">Nhóm linh kiện - Vật Tư</label>
                                <select class="form-control js-example-basic-single" name="group" id="opGroup">
                                    <option value="1">Máy in</option>
                                    <option value="2">Máy bế decal</option>
                                    <option value="3">Máy Gia công</option>
                                    <option value="4">Mực in</option>
                                </select>
                            </div>
                        </div>           
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="page-widget card mb-4">
                        <div class="card-header">
                            Thông tin khác
                        </div>
                        <div class="card-body">                                            
                            <div class="form-group">
                                <label for="OpStatus">Tình trạng</label>
                                <select class="form-control js-example-basic-single" name="status" id="OpStatus">
                                    <option value = "1">Hàng mới</option>
                                    <option>Hàng cũ</option>
                                    <option>Hàng lỗi</option>
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
