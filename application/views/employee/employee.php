<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/employee.css'>
<form id="employeeForm">
    <div class="row">
        <div class="col-4 text-center">
            <div class="form-group file-preview">
                <img id="previewImage" src="<?=$employee['employee_image']?>" onerror="this.onerror=null; this.src='<?=base_url()?>assets/images/no-image.png'" class="mx-auto d-block">
            </div>
            <span class="form-group btn btn-primary btn-file">
                <i class="glyphicon glyphicon-folder-open"></i>
                <input type="hidden" name="employee_image" value="<?php if (isset($employee['employee_image'])) echo $employee['employee_image']; ?>">
                <input type="file" id="user_file" name="userfile" accept=".jpg, .png, .jpeg">
            </span>
            <h6 id="msg_image"></h6>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label col-sm-4 font-weight-bold">Mã Nhân Viên:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="employee_id" id="employee_id"
                        maxlength="15" value="<?php if (isset($employee['employee_id'])) echo $employee['employee_id']; ?>" required readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4 font-weight-bold">Tên Nhân Viên: <span class="red">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="employee_name" maxlength="50" required value="<?php if (isset($employee['employee_name'])) echo $employee['employee_name']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4 font-weight-bold">Ngày Sinh: <span class="red">*</span></label>
                <div class="col-sm-10">
                    <input type="date" min="0000-01-01" max="9999-01-01" class="form-control" name="birthday" required value="<?php if (isset($employee['birthday'])) echo $employee['birthday']; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <label class="control-label font-weight-bold">Giới Tính:</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="0">
                        <label class="form-check-label" for="gender1">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="1">
                        <label class="form-check-label" for="gender2">Nữ</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4 font-weight-bold">Chức Vụ:</label>
                <div class="col-sm-10">
                <select name="department" class="form-control">
                    <option value="0">Nhân Viên</option>
                    <option value="1">Kế Toán</option>
                    <option value="2">Phó Giám Đốc</option>
                    <option value="3">Giám Đốc</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4 font-weight-bold">Điện Thoại:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" value="<?php if (isset($employee['phone'])) echo $employee['phone']; ?>" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4 font-weight-bold">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?php if (isset($employee['email'])) echo $employee['email']; ?>" maxlength="50">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="button" class="btn-primary" value="Đăng Ký">
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
</script>