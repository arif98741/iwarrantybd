@extends('layout.admin.admin') @section('title','Subscriber') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Vendor</h2>
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
            <div class="row mb-2">
                <div class="col-sm-7">

                </div>
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #000 !important;">Home</a></li>
                        <li class="breadcrumb-item">Vendor list</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Location</th>
                                            <th>Added On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($vendors as $key=> $vendor)
                                        <tr>

                                            <td>{{ ++$key }}</td>
                                            <td>{{ $vendor->name }}</td>
                                            <td>{{ $vendor->email }}</td>
                                            <td>{{ $vendor->phone }}</td>
                                            <td>{{ $vendor->location }}</td>
                                            <td>{{ date('d-m-Y',strtotime($vendor->created_at)) }}</td>
                                            <td>
                                                <a href="{{ route('admin.vendor.edit',$vendor->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>


                                                <a class="" href="{{ route('admin.vendor.destroy',$vendor->id) }}" onclick="event.preventDefault();
                                document.getElementById('vendor-delete-form{{ $vendor->id }}').submit();">
                                                    <i class="fa fa-trash btn btn-warning btn-sm"></i>
                                                </a>
                                                <form id="vendor-delete-form{{ $vendor->id }}" action="{{ route('admin.vendor.destroy',$vendor->id) }}" method="post" style="display: none;">
                                                    {{ csrf_field() }} @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                        </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>

        </div>
    </section>
    <!-- /.content -->
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