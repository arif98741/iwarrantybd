@extends('layout.web.web') @section('title','FAQ') @section('content')
<section>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-12">
                @if(Session::has('success'))
                <p class="alert alert-success">
                    {{ Session::get('success') }}
                </p>
                @endif @if(Session::has('error'))
                <p class="alert alert-warning">
                    {{ Session::get('error') }}
                </p>
                @endif
            </div>

            <div class="col-md-12 col-sm-12 col-12">
                <div class="claim-section">
                    <h1>Frequently Asked Questions</h1>
                    @foreach($faqs as $key => $faq)
                    <button class style="display: block; width: 100%; text-align: left; border: none; outline: none; height: 50px;" type="button" data-toggle="collapse" data-target="#collapseExample{{ $key }}" aria-expanded="false" aria-controls="collapseExample{{ $key }}">
                        <i class="fa fa-angle-right fa-1x"></i>
                        &nbsp;{{ $faq->question }}
                    </button>

                    <div class="collapse" id="collapseExample{{ $key }}">

                        <div class="card card-body bg-white">{{ $faq->answer }}</div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endsection