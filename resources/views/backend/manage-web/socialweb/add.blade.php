<!-- Stored in resources/views/child.blade.php -->

@extends('backend.layouts.admin')

@section('title')

    <title>Index</title>



@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            @include('partials.content-header',['name' => 'Social web', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                        <form action="{{route('backend.manage-web.socials.store')}}" method="post">
                            <div class="form-group">
                                <label>Name_soc</label>
                                <input type="email" class="form-control" placeholder="Enter name_soc">

                            </div>
                            <div class="form-group">
                                <label>Icon_soc</label>
                                <input type="email" class="form-control" placeholder="Enter icon_soc">

                            </div>
                            <div class="form-group">
                                <label>url_soc</label>
                                <input type="email" class="form-control" placeholder="Enter url_soc">

                            </div>
                            <div class="form-group">
                                <label>Choose main category</label>
                                <select class="form-control">
                                    <option value="0">Thư mục cha</option>

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


