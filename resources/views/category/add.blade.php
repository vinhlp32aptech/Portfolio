<!-- Stored in resources/views/child.blade.php -->

@extends('backend.layouts.admin')

@section('title')

    <title>Index</title>



@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            @include('partials.content-header',['name' => 'category', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                        <form>
                            <div class="form-group">
                                <label>Category</label>
                                <input type="email" class="form-control" placeholder="Enter category">

                            </div>
                            <div class="form-group">
                                <label>Choose main category</label>
                                <select class="form-control">
                                    <option value="0">Choose main category</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
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


