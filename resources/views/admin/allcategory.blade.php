@extends('admin.layouts.template')
@section('page_title')
Danh mục - ttk shop
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Danh Mục Sản Phẩm</h4>
     <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Danh mục con</th>
                        <th>Sản phẩm</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                          <td>1</td>
                          <td>ĐT</td>
                          <td>100</td>
                          <td>150</td>
                          <td>
                            <a href="" class='btn btn-primary'>Chỉnh sửa</a>
                            <a href="" class='btn btn-warning'>Xóa</a>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
</div>
@endsection
