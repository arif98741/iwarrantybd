@extends('layout.admin.admin') @section('title','Update Page') @section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.page.index') }}">Page list</a></li>

                        <li class="breadcrumb-item active">Update Page</li>
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
                    <h3 class="card-title">Update Page</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.page.update',$page->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter page title</label>
                            <input type="text" name="title" class="form-control" value=" {{  $page->title }} " readonly>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" cols="30" rows="3" class="form-control"> {{  $page->description }} </textarea>
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
@push('extra-scripts') @endpush @endsection