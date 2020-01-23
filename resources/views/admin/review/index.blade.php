@extends('layout.admin.admin') @section('title','Reviews') @section('content')
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
                    <h1>Reviews</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Review</li>
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
                                            <th>Serial</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($reviews as $key=>$review)
                                        <tr>

                                            <td class="text-center">{{ ++$key }}</td>
                                            <td>{{ $review->name }}</td>
                                            <td>{{ $review->designation }}</td>
                                            <td>{{ $review->details }}</td>

                                            <td class="text-center">
                                                @if($review->status == 0) <span style="color: grenn;"><strong>active</strong></span> @else <span style="color: red;"><strong>inactive</strong></span>@endif
                                            </td>
                                            <td>

                                                @if($review->status == 0)
                                                <a href="{{ url('admin/review/change_review_status/'.$review->status.'/'.$review->id) }}" title="change to inactive"><i
                                                        class="fa fa-times btn btn-success"></i></a> @else

                                                <a href="{{ url('admin/review/change_review_status/'.$review->status.'/'.$review->id) }}" title="change to active"><i
                                                        class="fa fa-check btn btn-primary"></i></a> @endif


                                                <a class="" href="{{ route('admin.review.destroy',$review->id) }}" onclick="event.preventDefault();
                                                            document.getElementById('vendor-delete-form{{ $review->id }}').submit();">
                                                    <i class="fa fa-trash btn btn-danger btn-sm"></i>
                                                </a>


                                                <form id="vendor-delete-form{{ $review->id }}" action="{{ route('admin.review.destroy',$review->id) }}" method="post" style="display: none;">
                                                    {{ csrf_field() }} @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>

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