@extends('admin.layouts.template')
@section('page_title')
Thêm danh mục con - ttk shop
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Thêm Danh Mục Con Sản Phẩm</h4>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- / SUBMIT FORM -->
                    <form action='' method='POST'>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="category-name">Tên danh mục con</label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="subcategory-name"
                                    name="subcategory_name"
                                    placeholder="Nhập tên danh mục"
                                />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="category-name">Chọn danh mục</label>
                            <div class="col-sm-10">
                                <select id="category" class="form-select" name='category'>
                                    <option>Large select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                     <option value="3">Three</option>
                                </select>

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
