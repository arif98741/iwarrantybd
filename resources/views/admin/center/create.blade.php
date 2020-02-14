@extends('layout.admin.admin') @section('title','Add Service Center') @section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Center</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.center.index') }}">Center list</a></li>

                        <li class="breadcrumb-item active">Add Service Center</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Center</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.center.store') }}" method="post" enctype="multipart/form-data">
                    @method('POST') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="location" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" name="phone" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div> -->

                    </div>



                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-body -->
</div>

</div>
</section>

<!-- /.content -->
</div>
@push('extra-scripts')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('description');
</script>
@endpush @endsection