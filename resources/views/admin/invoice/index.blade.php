@extends('layout.admin.admin') @section('title','Invoice') @section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        @if(Session::has('success'))
        <p class="alert alert-success message">{{ Session::get('success') }}</p>
        @endif @if(Session::has('error'))
        <p class="alert alert-warning message">{{ Session::get('error') }}</p>
        @endif

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Invoice List</li>
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

                        <!-- /.card -->

                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Invoice ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Package</th>
                                            <th>Price</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($invoices as $invoice)
                                        <tr>

                                            <td>{{ date('d-m-Y',strtotime($invoice->created_at)) }}</td>
                                            <td>{{ $invoice->id }}</td>
                                            <td>{{ $invoice->name }}</td>
                                            <td>{{ $invoice->email }}</td>
                                            <td>{{ $invoice->package->title }}</td>
                                            <td>{{ $invoice->package->price }}</td>

                                            <!-- <td>
                                               <a href="{{ route('admin.page.edit',$invoice->id) }}"><i
                                                        class="fa fa-edit btn btn-primary"></i></a>

                                                <a href="{{ route('admin.page.edit',$invoice->id) }}"><i
                                                        class="fa fa-eye btn btn-success"></i></a>


                                            </td> -->

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