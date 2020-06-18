@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục sản phẩm
                </header>
                <?php
                  $message = Session::get('message');
                  if($message){
                      echo '<span class="text-alert">'.$message.'</span>';
                      Session::put('message',null);
                  }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/save-category-product')}}" method="post">
                          {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên danh mục sản phẩm</label>
                            <input type="text" name="category_product_name" class="form-control" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Mô tả danh mục sản phẩm</label>
                            <textarea style="resize: none" rows="10" name="category_product_desc" class="form-control" placeholder="Nhập mô tả danh mục sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hiển thị</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                              <option value="0">Ẩn</option>
                              <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm</button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
</div>
@endsection
