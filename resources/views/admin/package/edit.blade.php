@extends('layout.admin.admin') @section('title','Update Package') @section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Package </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">update Package</li>
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
                <form role="form" action="{{ route('admin.package.update',$package->id) }}" method="post">
                    @method('PUT') @csrf
                    <div class="card-body">


                        <div class="form-group">
                            <label for="exampleInputEmail1">Name </label>
                            <input type="text" name="title" value="{{ $package->title }}" class="form-control" id="exampleInputEmail1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Project </label>
                            <input type="text" name="project" value="{{ $package->project }}" class="form-control" id="exampleInputEmail1">
                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail1">Storage </label>
                            <input type="text" name="storage" value="{{ $package->storage }}" class="form-control" id="exampleInputEmail1">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Price </label>
                            <input type="number" name="price" value="{{ $package->price }}" class="form-control" id="exampleInputEmail1">
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
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