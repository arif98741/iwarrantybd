@extends('layout.admin.admin') @section('title','Update Faq') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Faq</h2>
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
                        <li class="breadcrumb-item">Update Faq</li>
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
                    <h3 class="card-title">Update Faq</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.faq.update',$faq->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question</label>
                            <input type="text" name="question" value="{{ $faq->question }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Answer</label>

                            <textarea name="answer" cols="30" rows="4" class="form-control"> {{ $faq->answer }}</textarea>
                        </div>

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
@endsection