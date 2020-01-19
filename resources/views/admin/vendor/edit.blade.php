@extends('layout.admin.admin') @section('title','Update Vendor') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Vendor</h2>
        </div>
    </div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        @if(Session::has('success'))
        <p class="alert alert-success message">{{ Session::get('success') }}</p>
        @endif @if(Session::has('error'))
        <p class="alert alert-warning message">{{ Session::get('error') }}</p>
        @endif

        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-7">

                </div>
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #000 !important;">Home</a></li>
                        <li class="breadcrumb-item">Update Vendor</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <section class="content" style="min-height: 500px;">
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Vendor</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.vendor.update',$vendor->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Name</label>
                            <input type="text" name="name" value="{{ $vendor->name }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="email" value="{{ $vendor->email }}" readonly class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" name="phone" value="{{ $vendor->phone }}" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="location" value="{{ $vendor->location }}" class="form-control">
                        </div>


                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" name="image" value="" class="form-control">
                        </div>
 -->

                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

</div>

</div>
</section>
<!-- /.content -->
</div>
@push('extra-css')
<link rel="stylesheet" href="{{asset('asset/back/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}"> @endpush @push('extra-scripts')
<script src="{{asset('asset/back/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('asset/back/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
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