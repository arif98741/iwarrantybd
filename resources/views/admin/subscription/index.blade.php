@extends('layout.admin.admin') @section('title',$title.' Subscription') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">{{$title}} Subscription</h2>
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
                        <li class="breadcrumb-item">{{$title}} Subscription</li>
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
                                            <th width="5%">#</th>
                                            <th width="20%">Name</th>
                                            <th width="10%">Mobile</th>
                                            <th width="15%">Address</th>
                                            <th width="10%">Package</th>
                                            <th width="10%">Registered On</th>
                                            <th width="15%">Expire</th>
                                            <td width="15%">Acion</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subscriptions as $key=> $subscription)
                                        <tr>

                                            <td>{{ ++$key }}</td>
                                            <td>{{ $subscription->subscriber->name }} <br> ({{ $subscription->subscriber->unique_id }})
                                            </td>
                                            <td>{{ $subscription->subscriber->mobile }}</td>
                                            <td>
                                                {{ $subscription->subscriber->address }}</td>
                                            <td>{{ $subscription->package->title }}</td>
                                            <td>{{ date('d-m-Y',strtotime($subscription->created_at)) }}</td>
                                            <td>{{ date('d-m-Y',strtotime($subscription->expire)) }}</td>
                                            <td>

                                                <a href="{{ url('admin/subscription/mark_as_approve/'.$subscription->id) }}" class="btn btn-primary btn-sm">Approve</a>

                                                <a href="{{ url('admin/subscription/mark_as_reject/'.$subscription->id) }}" class="btn btn-warning btn-sm">Reject</a>
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