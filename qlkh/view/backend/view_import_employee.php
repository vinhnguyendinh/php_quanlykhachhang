<!-- form import khách hàng -->

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">Import khách hàng từ file excel</div>
        <div class="panel-body">
            <form action="<?php echo $form_action; ?>" method="post" enctype="multipart/form-data">

                        <label>Lưu ý:</label>
                        <ul class="list-group">
                          <li class="list-group-item">File import phải lưu dạng .csv (MS-DOS)</li>
                          <li class="list-group-item">Dữ liệu trong file được đặt từ hàng và cột đầu tiên</li>
                          <li class="list-group-item">Dữ liệu trong file phải để đúng thứ tự: Tên, năm sinh, SĐT, email, phòng, kiểu khách hàng</li>
                        </ul>
                <div class="col-md-2">
                    <input type="file" name="file" id="file">
                </div>
                <div style="text-align: center;">
                    <input type="submit" value="Import" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
