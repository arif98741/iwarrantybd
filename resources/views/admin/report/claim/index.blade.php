@extends('layout.admin.admin') @section('title','Claim Report') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Claim Report</h2>
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
                        <li class="breadcrumb-item">Claim Report</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Claim Report</h3>
                </div>

                <form role="form" action="{{ url('admin/report/claim/action') }}" method="post">
                    @method('POST') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Report</label>
                            <select name="" id="" class="form-control" required>
                                <option value="" selected disabled>Select Report Type</option>
                                <option value="">Claim Report (Pending)</option>
                                <option value="">Claim Report (Completed)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">From</label>
                            <input type="date" name="starting" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">To</label>
                            <input type="date" name="to" class="form-control" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection