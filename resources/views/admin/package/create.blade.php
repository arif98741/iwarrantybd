@extends('layout.admin.admin') @section('title','Add Pricing') @section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Pricing Plan </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Add Pricing Plan</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.package.store') }}" method="post">
                    @method('POST') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pricing Plan Type </label>
                            <select name="type" class="form-control" required="">
                                <option selected="" disabled="">Pricing Plan Type</option>


                                <option value="Standard">Standard</option>
                                <option value="Extended">Extended</option>
                                <option value="Premium">Premium</option>


                            </select>

                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Duration </label>
                            <input type="number" name="duration" class="form-control" id="exampleInputEmail1">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Description </label>
                            <input type="text" name="description" class="form-control" id="exampleInputEmail1">

                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">price </label>
                            <input type="number" name="price" class="form-control" id="exampleInputEmail1">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Duration Unit </label>
                            <input type="number" name="duration_unit" class="form-control" id="exampleInputEmail1">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->


        </div>
        <!-- /.card-body -->
</div>
<!-- /.card -->
<!-- Horizontal Form -->

<!-- /.card -->

</div>
</section>

<!-- /.content -->
</div>

@endsection