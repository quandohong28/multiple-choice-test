<form role="form" class="filter-panel">
    <div class="row align-items-end">
        <div class="col-md-3 form-group">
            <label>Sắp xếp theo</label>
            <select class="form-control form-control-sm">
                <option value="id">ID</option>
            </select>
        </div>
        <div class="col-md-3 form-group">
            <label>Cách sắp xếp</label>
            <select class="form-control form-control-sm">
                <option value="0">A-Z</option>
                <option value="1">Z-A</option>
            </select>
        </div>
        <div class="col-md-3 form-group">
            <label>Tìm kiếm</label>
            <input type="text" class="form-control form-control-sm">
        </div>
        <div class="col-md-3 form-group ">
            <div class="row">
                <button type="submit" class="btn btn-sm btn-info me-3 col">
                    <i class="fa fa-fw fa-search fs-6 me-2"></i>
                    <span class="lg-hidden">Tìm kiếm</span>
                </button>
                <button type="reset" class="btn btn-sm btn-outline-dark col">
                    <i class="fa-regular fa-fw fa-window-restore"></i>
                    <span class="lg-hidden">Mặc định</span>
                </button>
            </div>
        </div>
    </div>
</form>