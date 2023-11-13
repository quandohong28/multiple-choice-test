<div class="modal fade" id="exampleModalABC" tabindex="-1" aria-labelledby="exampleModalABCLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalABCLabel">Sửa tài khoản</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?act=tables&data=edit_account" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-center align-items-center h-100 mt-5">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <input type="hidden" name="edit_username" id="username" value="" placeholder="" class="form-control form-control-sm" />
                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline w-100">
                                        <label for="fullname" class="form-label">Họ và tên</label>
                                        <input type="text" name="edit_fullname" class="form-control form-control-sm" value="" placeholder="" id="fullname" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline w-100">
                                        <label class="form-label" for="emailAddress">Email</label>
                                        <input type="email" id="edit_emailAddress" name="edit_emailAddress" value="" placeholder="" class="form-control form-control-sm" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <textarea name="edit_address" cols="30" rows="3" class="form-control form-control-sm" id="address"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="tel">Số điện thoại</label>
                                        <input type="tel" id="tel" name="edit_tel" value="" placeholder="" class="form-control form-control-sm" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <label class="form-label select-label">Vai trò</label>
                                    <select name="role_id" class="select form-control form-control-sm">
                                        <?php foreach ($getRole as $key => $value) : ?>
                                            <option value="<?= $value['id'] ?>">
                                                <?= $value['role'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="introduce" class="form-label">Giới thiệu</label>
                                        <textarea readonly name="edit_introduce" cols="30" rows="3" value="" placeholder="" class="form-control form-control-sm" id="introduce"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="avatar">Ảnh đại diện</label>
                                        <input class="form-control form-control-sm" id="avatar" name="edit_avatar" type="file" />
                                        <input class="form-control form-control-sm" id="avatar" name="edit_avatar" type="hidden" />
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="" placeholder="" name="edit_id" id="id">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" name="btn_edit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const myModal = document.getElementById('exampleModalABC')

    myModal.addEventListener('shown.bs.modal', function() {
        const id = document.querySelector('input[name="edit_id"]');
        const username = document.querySelector('input[name="edit_username"]');
        const fullname = document.querySelector('input[name="edit_fullname"]');
        const avatar = document.querySelector('input[name="edit_avatar"][type="hidden"]');
        const emailAddress = document.querySelector('input[name="edit_emailAddress"]');
        const address = document.querySelector('textarea[name="edit_address"]');
        const introduce = document.querySelector('textarea[name="edit_introduce"]');
        const tel = document.querySelector('input[name="edit_tel"]');

        const button = event.relatedTarget
        const recipient = button.getAttribute('data-value')

        const val = JSON.parse(recipient)
        // console.log(val);

        username.setAttribute('value', val.username);
        fullname.setAttribute('value', val.fullname);
        avatar.setAttribute('value', val.avatar);
        emailAddress.setAttribute('value', val.email);
        tel.setAttribute('value', val.tel);
        address.value = val.address;
        introduce.value = val.introduce;
        id.setAttribute('value', val.id);

        // username.value = val.username;

        // console.log(myModal);
    })
</script>