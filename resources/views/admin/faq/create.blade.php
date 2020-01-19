@extends('layout.admin.admin') @section('title','Add Faq') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Add Faq</h2>
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
                        <li class="breadcrumb-item">Add Faq</li>
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
                    <h3 class="card-title">Add Faq</h3>
                </div>

                <form role="form" action="{{ route('admin.faq.store') }}" method="post" enctype="multipart/form-data">
                    @method('POST') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question Title</label>
                            <input type="text" name="question" class=" form-control " value=" {{ old( 'question') }} " required>
                        </div>

                        <div class=" form-group ">
                            <label for=" exampleInputEmail1 ">Answer</label>
                            <textarea name="answer" class=" form-control " cols=" 30 " rows=" 4 " required>{{ old('answer') }}</textarea>
                        </div>

                    </div>
                    <div class="card-footer ">
                        <button type="submit " class="btn btn-primary ">Save</button>
                    </div>
                </form>

            </div>

        </div>

</div>

</div>
</section>
</div>
@endsection