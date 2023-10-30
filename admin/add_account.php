<div class="container">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Add a account</h3>
                    <form enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="username" class="form-control form-control-lg" />
                                    <label class="form-label" for="username">Username</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <input type="text" class="form-control form-control-lg" id="fullname" />
                                    <label for="fullname" class="form-label">Fullname</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <input type="text" class="form-control form-control-lg" id="address" />
                                    <label for="address" class="form-label">Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                                    <label class="form-label" for="emailAddress">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <input type="tel" id="tel" class="form-control form-control-lg" />
                                    <label class="form-label" for="tel">Phone Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <label class="form-label select-label">Role</label>
                                <select class="select form-control-lg">
                                    <option value="1">User</option>
                                    <option value="0">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="avatar">Avatar</label>
                                    <input class="form-control form-control-lg" id="avatar" type="file" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-2">
                            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>