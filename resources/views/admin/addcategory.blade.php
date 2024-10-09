@extends('admin.layouts.template')
@section('page_title')
Thêm danh mục - ttk shop
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Thêm Danh Mục Sản Phẩm</h4>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- / SUBMIT FORM -->
                    <form action='' method='POST'>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="category-name">Tên danh mục</label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="category-name"
                                    name="category_name"
                                    placeholder="Nhập tên danh mục"
                                />
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
