<section class="social">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="float-right">
                    <a href="https://twitter.com/iWarrantybd/">
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="float-right">
                    <a href="https://www.facebook.com/iWarrantyBD/">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="float-right">
                    <p class="email">{{ $setting->email }}</p>
                </div>
                <div class="float-right">
                    <p class="phone">{{ $setting->contact }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@extends('layout.web.web') @section('title','Homepage') @section('content')
<!-- offer section start -->
<section class="offer">
    <div class="container">
        @if(Session::has('error'))
        <p class="alert alert-warning message">{{ Session::get('error') }}</p>
        @endif @if(Session::has('success'))
        <p class="alert alert-success message">{{ Session::get('success') }}</p>
        @endif
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>Offers</h1>
                <p>
                    iWarrantyBD is the only premium warranty service provider in Bangladesh for iPhone and iPad users. By taking subscription of iWarrantyBD for a minimal amount, your iPhone service is ensured till the end of the validity expiration date.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- offer section end -->

<!-- Why choose us start -->
<section class="choose-us-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>Why Choose us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12" style="margin-bottom:15px;">
                <div class="card icloud" style="width: 100%; height:250px;">
                    <div class="card-body">
                        <img src="{{ asset('asset/front/img/icloud-logo.png')}}" class="img-fluid" style="height: 70px;width: 70px;padding-bottom: 5px;display: block;margin: 0 auto;">
                        <h5 class="card-title">50GB iCloud Storage</h5>
                            <p class="card-text icloud-text">
                            One of the major problems for the iPhone users is storage. iWarrantyBD will provide you 50GB iCloud storage for One year after active your subscription package. And it will cost <span style="font-weight:bold;">$12 for a year.</span>
                        </p>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12" style="margin-bottom:15px;">
                <div class="card itunes" style="width: 100%; height:250px;">
                    <div class="card-body">
                        <img src="{{ asset('asset/front/img/itunes.png')}}" class="img-fluid" style="height: 70px;width: 70px;padding-bottom: 5px;display: block;margin: 0 auto;">
                        <h5 class="card-title">iTunes</h5>
                       
                            <p class="card-text itunes-text">
                            iTunes is one of the core features of the iPhone. Keeping it in mind, iWarrantyBD will provide you iTunes for One year with is cost around <span style="font-weight:bold;">$120 for a year.</span>
                        </p>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12" style="margin-bottom:15px;">
                <div class="card appletv" style="width: 100%; height:250px;">
                    <div class="card-body img-hover">
                        <img src="{{ asset('asset/front/img/appletv.png')}}" class="img-fluid" style="height: 70px;width: 70px;padding-bottom: 5px;display: block;margin: 0 auto;">
                        <h5 class="card-title">Apple TV</h5>
                            <p class="card-text tv-text">
                            Who doesn't love watching TV? iWarrantyBD will provide you Apple TV for One year with is cost around <span style="font-weight:bold;">$60 for a year.</span>
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12" style="margin-bottom:15px;">
                <div class="card premiumbg" style="width: 100%;height:250px;">
                    <div class="card-body ">
                        <img src="{{ asset('asset/front/img/premium.png')}}" class="img-fluid" style="height: 70px;width: 70px;padding-bottom: 5px;display: block;margin: 0 auto;">
                        <h5 class="card-title">Premium Service</h5>
                        
                            <p class="card-text premium-text">
                            We are more focusing to provide the premium service to our customers. And we believe that, all iPhone users are expecting a premium service for it’s device.
                        </p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why choose us end -->
<!-- How it Works section start -->
<section class="how-it-works" style="background-color:black;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div style="display:block;margin:0 auto; width:90%;">
                    <h1 style="color:white;">How it Works</h1>
                <div class="row " >
                    <div class="col-md-4 col-sm-4 col-12 wow slideInLeft">
                        <div class="row" style="background-color:#b0a160;margin-top:10px; padding-top:10px;border-radius:10px;">
                            <div class="col-md-9 col-sm-9 col-12" style="height:255px;background-color:#b0a160;">
                                <h2 class="align-right">iCloud Lock</h2>
                                    <p class="align-right">
                                    iCloud lock is a major problem in Bangladesh iPhone users and we are providing the authentic iCloud lock service. On customer demand having proper documentation we have the ability to unlock iCloud and country lock excluding our subscription fee.
                                </p>
                                
                                
                            </div>
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-unlock-alt icons" aria-hidden="true"></i>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row" style="background-color:#2c3e50;margin-top:10px;padding-top:10px;border-radius:10px;">
                            <div class="col-md-9 col-sm-9 col-12" style="height:285px;background-color:#2c3e50;">
                                <h2 class="align-right">Claim Requirements</h2>
                            
                                    <p class="align-right">
                                    Subscriber’s need to post his claim against the subscription package. iWarrantyBD.com will assess the request and then process the request for the next steps.
                                </p>
                                
                                
                            </div>
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-file-powerpoint-o icons" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="background-color:#fd746c;margin-top:10px;padding-top:10px;border-radius:10px;">
                            <div class="col-md-9 col-sm-9 col-12" style="height:170px;background-color:#fd746c;">
                                <h2 class="align-right">Active Subscriber</h2>
                                
                                    <p class="align-right">
                                    You have to be an active subscriber to get a premium service from iWarrantyBD.com
                                </p>
                                
                                
                            </div>
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-users icons" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12">
                        <img src="{{ asset('asset/front/img/iphone-bg.png')}}" alt="Iphone Image" class="img-fluid" style="margin-top:110px;">
                    </div>

                    <div class="col-md-4 col-sm-4 col-12 wow slideInRight">
                        <div class="row" style="background-color:#5b8c85;margin-top:10px;padding-top:10px;border-radius:10px;">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-calendar-check-o icons" aria-hidden="true"></i>
                                </div>

                            </div>
                            <div class="col-md-9 col-sm-9 col-12" style="height:255px;background-color:#5b8c85;">
                                <h2 class="align-left">Get Quicker Service</h2>
                                
                                    <p class="align-left">
                                    We are providing the best solution within the lowest possible period of time keeping in mind the value of the customer’s valuable time.
                                </p>
                                
                                
                            </div>
                        </div>
                        <div class="row" style="background-color:#1fddff;margin-top:10px;padding-top:10px;border-radius:10px;">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-cog icons" aria-hidden="true"></i>
                                </div>

                            </div>
                            <div class="col-md-9 col-sm-9 col-12" style="height:285px;background-color:#1fddff;">
                                <h2 class="align-left">Apple expert service</h2>
                                
                                    <p class="align-left">
                                    All the services are ensured by Apple expert. We will give our 100 % effort on the problems of iPhone. Singapore is our main service point where we send all our iPhone and Customer able to see the status of his phone through iWarrantyBD
                                </p>
                               
                                
                            </div>
                        </div>
                        <div class="row how-card" style="background-color:#c2e59c; margin-top:10px;padding-top:10px;border-radius:10px;">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-wrench icons" aria-hidden="true"></i>
                                </div>

                            </div>
                            <div class="col-md-9 col-sm-9 col-12 " style="height:170px;background-color:#c2e59c;">
                                <h2 class="align-left">Original Apple Parts</h2>
                                
                                    <p class="align-left how-card-text">
                                    We are ensuring a guarantee of repairing or replacing your device with the original Apple parts.
                                </p>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
                
            </div>    
        </div>
    </div>
</section>
<!-- How it Works section end -->
<!-- Prices Section Start -->
<section id="sub" class="price">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 price-heading">
                <h1>Check Our Prices</h1>
                <p>
                    Lowest priced Apple service for you premium phone.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="prices" style="width:100%;">
                    <div class="col-md-12 col-sm-12 col-12 price-top price-top-one">
                        <h2 class="package">PACKAGE</h2>
                        <hr>
                        <h1>
                            <sub>BDT</sub> 5000
                        </h1>
                        <h6>per year</h6>

                    </div>
                    <div class="col-md-12 col-sm-12 col-12 price-bottom">
                        <h6 class="project">Warranty Service from Singapore</h6>
                        <h6>50GB iCloud for 1 Year</h6>
                        <h6>Free iMusic for 1 Year</h6>
                        <h6>Apple TV+ for 1 Year</h6>
                        <h6>1 Month Parts Replacement Guarantee</h6>
                        @if(Auth::guard('subscriber')->check())
                        <a href="{{url('save_subscription')}}" style="max-width: 220px; color: #fff;" class="btn btn-custom btn-buy-now">
                            BUY
                            NOW
                        </a> @else
                        <a href="{{ url('subscriber/login') }}" class="btn btn-custom btn-buy-now">
                            Login to activate
                            package
                        </a> @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="prices" style="width:100%;">
                    <div class="col-md-12 col-sm-12 col-12 price-top price-top-two">
                        <h2 class="package">PACKAGE</h2>
                        <hr>
                        <h1>
                            <sub>BDT</sub> 5000
                        </h1>
                        <h6>per year</h6>

                    </div>
                    <div class="col-md-12 col-sm-12 col-12 price-bottom">
                        <h6 class="project">Warranty Service from Singapore</h6>
                        <h6>50GB iCloud for 1 Year</h6>
                        <h6>Free iMusic for 1 Year</h6>
                        <h6>Apple TV+ for 1 Year</h6>
                        <h6>1 Month Parts Replacement Guarantee</h6>
                        @if(Auth::guard('subscriber')->check())
                        <a href="{{url('save_subscription')}}" style="max-width: 220px; color: #fff;" class="btn btn-custom btn-buy-now">
                            BUY
                            NOW
                        </a> @else
                        <a href="{{ url('subscriber/login') }}" class="btn btn-custom btn-buy-now">
                            Login to activate
                            package
                        </a> @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Prices Section End -->

<!-- Review section start -->
<section id="review" class="review">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>User Reviews</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach($reviews as $reviewid => $review) @if($reviewid == 1)
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <img src="{{ asset('asset/front/img/user1.png')}}" class="img-fluid user-review-image">
                                </div>
                                <div class="col-md-8 col-sm-8 col-8">
                                    <h5>{{ $review->name }}</h5>
                                    <h6>{{ $review->designation }}</h6>
                                    <p>{{ $review->details }}</p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <img src="{{ asset('asset/front/img/user1.png')}}" class="img-fluid user-review-image">
                                </div>
                                <div class="col-md-8 col-sm-8 col-8">
                                    <h5>{{ $review->name }}</h5>
                                    <h6>{{ $review->designation }}</h6>
                                    <p>{{ $review->details }}</p>
                                </div>
                            </div>
                        </div>
                        @endif @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-offset-3 col-md-12 col-sm-12 col-12">
                <a href="#review-form-button" id="review-form-button" class="btn btn-custom ques-btn" style="width: 15%;float: right;">
                    Give Your Review
                </a>
                <form action="{{ url('save_review') }}" method="post" id="review-form" style="display: none;">
                    @csrf @method('post')
                    <div class="form-group">
                        <label for>Enter your name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for>Enter designation</label>
                        <input type="text" name="designation" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for>Write Review</label>
                        <textarea name="details" id cols="30" rows="3" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- Review section end -->



<!-- Post Your Question -->
<section class="post-question">
    <form id="post-question-form" action="{{ url('save_question') }}" method="post">

        @csrf @method('post')
        <div class="container">
            <div class="row wow slideInLeft">
                <div class="col-md-12 col-sm-12 col-12">
                    <h1>Post Your Questions</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="form-group ques-form">
                      <input type="text" name="question_data" class="form-control form-filed"placeholder="Your Question">
                        <div class="ques-btn-field">
                      <input type="submit" class="btn btn-custom ques-btn" value="Submit">
                    </div>
                    </div>
                    

                </div>
            </div>
        </div>

    </form>
</section>
<!-- Post Your Question end -->

<!-- Contact Start -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <ul style="list-style: none;font-weight:bold;margin-bottom:0px;margin-top:6px">
                    <li>
                        <a href="#home" style="color: black">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#home" style="color: black">
                            Post Your Claim
                        </a>
                    </li>
                    <li>
                        <a href="#sub" style="color: black">
                            Subscription
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('faq') }}" style="color: black">
                            Q & A
                        </a>
                    </li>
                    <li>
                        <a href="#review" style="color: black">
                            Reviews
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-12" style="margin-top:6px">
                <h5 class="contact-address" style="font-size:15px;">{{ $setting->address }}</h5>
                <h5 class="contact-email" style="font-size:15px;">{{ $setting->email }}</h5>
                <h5 class="contact-phone" style="font-size:15px;">{{ $setting->contact }}</h5>
            </div>
        </div>
    </div>
</section>

<footer style="border-top: 1px solid #989898;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <p style="text-align: center;margin-bottom:0px;">© 2020 iWarrantyBD</p>

            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
</script>
<script>
    $(document).ready(function() {
        /* $('#faq-load-more-btn').click(function() {
             $('.faq_load_more_section').css('display', 'block');
         });
*/
        var rfb = 0;
        $('#review-form-button').click(function() {
            $(this).css('display', 'none');
            if (rfb == 0) {

                $('#review-form').css('display', 'block');
                $('#review-form').children().css('display', 'block');
                rfb = 1;
            } else {
                $('#review-form').css('display', 'none');
                rfb = 0;
            }
        });

    });
</script>
@endsection