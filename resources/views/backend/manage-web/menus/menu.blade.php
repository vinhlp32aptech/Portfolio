

@extends('backend.layouts.admin')

@section('title')

    <title>Admin</title>



@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Menus', 'key' => 'Home'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('backend.manage-web.menus.create') }}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Menu</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>
                                    <a href="" class="btn btn-default">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->    </div>
    <!-- /.content-wrapper -->
@endsection


