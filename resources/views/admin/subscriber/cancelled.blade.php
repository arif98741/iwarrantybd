@extends('layout.admin.admin') @section('title','Cancelled Subscriber') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Cancelled Subscriber</h2>
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
            <div class="row mb-2">
                <div class="col-sm-7">

                </div>
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #000 !important;">Home</a></li>
                        <li class="breadcrumb-item">Subscriber list</li>
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
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Registered On</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subscribers as $key=> $subscriber)
                                        <tr>

                                            <td>{{ ++$key }}</td>
                                            <td>{{ $subscriber->name }}</td>
                                            <td>{{ $subscriber->mobile }}</td>
                                            <td>{{ $subscriber->address }}</td>
                                            <td>{{ date('d-m-Y',strtotime($subscriber->created_at)) }}</td>
                                            <td><a href="{{ route('admin.subscriber.show',$subscriber->id) }}" class="btn btn-primary" style="color: #fff;"><i
                                                        class="fa fa-eye"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>

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