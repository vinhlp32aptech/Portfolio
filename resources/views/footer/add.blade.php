<!-- Stored in resources/views/child.blade.php -->

@extends('backend.layouts.admin')

@section('title')

    <title>Index</title>



@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            @include('partials.content-header',['name' => 'Footer', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                        <form action="{{route('footers.store')}}" method="post">
                            <div class="form-group">
                                <label>Name_contact</label>
                                <input type="email" class="form-control" placeholder="Nhập tên danh mục">

                            </div>
                            <div class="form-group">
                                <label>Icon_contact</label>
                                <input type="email" class="form-control" placeholder="Nhập icon">

                            </div>
                            <div class="form-group">
                                <label>conten_contact</label>
                                <input type="email" class="form-control" placeholder="Nhập content">

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


