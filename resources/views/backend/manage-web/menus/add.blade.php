<!-- Stored in resources/views/child.blade.php -->

@extends('backend.layouts.admin')

@section('title')

    <title>Index</title>



@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            @include('partials.content-header',['name' => 'menus', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                        <form action="{{route('backend.manage-web.menus.store')}}" method="post">
                            <div class="form-group">
                                <label>Tên Menus</label>
                                <input type="email" class="form-control" placeholder="Nhập tên danh mục">

                            </div>
                            <div class="form-group">
                                <label>Chọn menus cha</label>
                                <select class="form-control">
                                    <option value="0">Chọn danh mục cha</option>

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>



    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


