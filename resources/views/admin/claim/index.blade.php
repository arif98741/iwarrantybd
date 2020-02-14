@extends('layout.admin.admin') @section('title',$status) @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">{{ $status }}</h2>
        </div>
    </div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        @if(Session::has('success'))
        <p class="alert alert-success message" id="message">{{ Session::get('success') }}</p>
        @endif @if(Session::has('error'))
        <p class="alert alert-warning message" id="message">{{ Session::get('error') }}</p>
        @endif

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-7">

                </div>
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" style="color: #000 !important;">Home</a></li>
                        <li class="breadcrumb-item">{{ $status }} list</li>
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
                                            <th>Subscriber ID</th>
                                            <th>Name</th>
                                            <th>Model</th>
                                            <th>IMEI</th>
                                            <th>Problem Pattern</th>
                                            <th>Recieved on</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($claims as $key=> $claim)
                                        <tr>

                                            <td>{{ ++$key }}</td>
                                            <td>{{ $claim->subscriber->unique_id }}</td>
                                            <td>{{ $claim->subscriber->name }}</td>
                                            <td>{{ $claim->model }}</td>
                                            <td>{{ $claim->imei }}</td>
                                            <td>{{ $claim->problem_pattern }}</td>
                                            <td>{{ date('d-m-Y',strtotime($claim->created_at)) }}</td>
                                            <td>
                                                @if($claim->status == 0)
                                                <a href="{{ url('admin/claim/change_status/pending/'.$claim->id) }}" class="btn btn-primary btn-sm">Mark Approved</a> @else
                                                <a href="{{ url('admin/claim/change_status/complete/'.$claim->id) }}" class="btn btn-primary btn-sm">Mark Incomplete</a> @endif @if($status ==0)
                                                <a href="{{ url('admin/claim/cancel/'.$claim->id) }}" class="btn btn-warning btn-sm" onclick="return(confirm('are you sure to reject?'))">Reject</a> @endif
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