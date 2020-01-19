@extends('layout.admin.admin') @section('title','Add Vendor') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Add Vendor</h2>
        </div>
    </div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        @if(Session::has('success'))
        <p class="alert alert-success" id="message">{{ Session::get('success') }}</p>
        @endif @if(Session::has('error'))
        <p class="alert alert-warning" id="message">{{ Session::get('error') }}</p>
        @endif

        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-7">

                </div>
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #000 !important;">Home</a></li>
                        <li class="breadcrumb-item">Add Vendor</li>
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
                    <h3 class="card-title">Add Vendor</h3>
                </div>

                <form role="form" action="{{ route('admin.vendor.store') }}" method="post" enctype="multipart/form-data">
                    @method('POST') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="type" name="email" class="form-control" value="{{ old('email') }}" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="location" class="form-control" value="{{ old('location') }}" required>
                        </div>

                        <!-- <div class="form-group">]
          <label for="exampleInputEmail1">Image</label>
          <input type="file" name="image" class="form-control"  >
        </div> -->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>


            </div>
            <!-- /.card -->

            <!-- Form Element sizes --

        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->


        <!-- /.card -->

</div>
</section>
</div>
@push('extra-css')
<link rel="stylesheet" href="{{asset('asset/back/vendor/datatables/css/dataTables.bootstrap4.css')}}"> @endpush @push('extra-scripts')
<script src="{{asset('asset/back/vendor/datatables/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('asset/back/vendor/datatables/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endpush @endsection