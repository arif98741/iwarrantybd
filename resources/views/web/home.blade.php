@extends('layout.web.web') @section('title','Homepage') @section('content')
<section class="social">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="float-right">
                    <a href="https://www.facebook.com/iWarrantyBD/"><i class="fa fa-facebook-official"
                            aria-hidden="true"></i></a>
                </div>
                <div class="float-right">
                    <p class="email">rakib@gmail.com</p>
                </div>
                <div class="float-right">
                    <p class="phone">0978728372</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--offer section start-->
<section class="offer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>Offers</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
</section>
<!--offer section end-->

<!--How it Works section start-->
<section class="how-it-works">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>How it Works</h1>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-12">
                                <h2 class="align-right">Instant Repair</h2>
                                <p class="align-right">Our specialists are here for real-time scheduling support for instant repair service within which we can provide one of the highest possible solutions for your Apple device.</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-calendar-check-o icons" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-12">
                                <h2 class="align-right">Best Repair Specialists</h2>
                                <p class="align-right">Specialized & efficient expert technicians are available here to deal with any problem regarding your Apple device within the shortest possible time.
                                </p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-users icons" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-12">
                                <h2 class="align-right">Fastest Repair Time</h2>
                                <p class="align-right">We are providing the best solution within the lowest possible time keeping in mind the value of your precious time.</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-clock-o icons" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12">
                        <img src="{{ asset('asset/front/img/iphone-bg.png')}}" alt="Iphone Image" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-money icons" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-12">
                                <h2 class="align-left">Low Repair Prices</h2>
                                <p class="align-left">We are assuring you that whatever be the problem with your device our specialized technicians will come up with the best solution that too within the cheapest & affordable price limit.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-cog icons" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-12">
                                <h2 class="align-left">Special Quarantee</h2>
                                <p class="align-left">We are giving a special guarantee offer for your device to come up with the best solution. With our specialized technician team & of course,we will deal with it giving the highest priority.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="how-icon-bg">
                                    <i class="fa fa-laptop icons" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-12">
                                <h2 class="align-left">Original Spare Parts</h2>
                                <p class="align-left">We are giving a special guarantee of repairing or replacing your device with the highest quality original Apple parts for a given length of time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--How it Works section end-->
<!--Why choose us start-->
<section class="choose-us-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>Why Choose us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-12">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Free Diagnostic Checkup</h5>
                        <p class="card-text">We are providing you Free Diagnostic check-up on your Apple Devices. We will check all the problems with your apple device for hardware or software issues and let them know you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Money Back Guaranty</h5>
                        <p class="card-text">If you are not satisfied with our service, we would like to offer your Money Back Guaranty! without any hassle. We are offering.you 30 Days Money Back Guaranty. so let us know within that time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Expert Technicians</h5>
                        <p class="card-text">We have built a Expert Team of iPhone Repair Specialist or Apple Device Repair Expert. They can solve those issues you are facing with your Apple Devices. So no need to worry anymore !!!</p>
                    </div>
                </div>
            </div>
            <div class="row choose-bottom">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Friendly Support</h5>
                            <p class="card-text">We are more focusing on After Sales & Service. We want 100% customer satisfaction. So, Our friendly support team is always ready to give you support with various platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Quick Repair</h5>
                            <p class="card-text">Nowadays your Apple Device is an essential device for daily life. We know how much important is it. So, Our technicians are always trying to repair your device with the best care and quick repair.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Advanced Service Lab</h5>
                            <p class="card-text">We have Advanced Labs with Advanced Technologies that needed to repair your Apple devices perfectly. We always try to use advanced & developed technologies.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Why choose us end-->
<!--Prices Section Start-->
<section id="sub" class="price">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 price-heading">
                <h1>Check Our Prices</h1>
                <p>Lowest priced Apple service for you premium phone.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="prices">
                    <div class="col-md-12 col-sm-12 col-12 price-top price-top-two">
                        <h2 class="package">PACKAGE</h2>
                        <hr>
                        <h1><sub>BDT</sub>5000</h1>
                        <h6>per month</h6>

                    </div>
                    <div class="col-md-12 col-sm-12 col-12 price-bottom">
                        <h6 class="project">All coverage</h6>
                        <h6>1GB Storage</h6>
                        <h6>Notification setting</h6>
                        <h6>Password Protection</h6>
                        <button type="button" class="btn btn-custom btn-buy-now">BUY NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Prices Section End-->

<!--Review section start-->
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
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <img src="{{ asset('asset/front/img/user1.png')}}" class="img-fluid user-review-image">
                                </div>
                                <div class="col-md-8 col-sm-8 col-8">
                                    <h5>Name</h5>
                                    <h6>Designation</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, std do eiusmod tempor incididunt ut labore tet dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <img src="{{ asset('asset/front/img/user2.png')}}" class="img-fluid user-review-image">
                                </div>
                                <div class="col-md-8 col-sm-8 col-8">
                                    <h5>ArifuL islam</h5>
                                    <h6>Designation</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, std do eiusmod tempor incididunt ut labore tet dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <img src="{{ asset('asset/front/img/user3.png')}}" class="img-fluid user-review-image">
                                </div>
                                <div class="col-md-8 col-sm-8 col-8">
                                    <h5>Name</h5>
                                    <h6>Designation</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, std do eiusmod tempor incididunt ut labore tet dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
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
    </div>

</section>
<!--Review section end-->

<!--FaQ section start-->
<section class="header-faq" id="q&a">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>Frequently Asked Questions</h1>
                <div class="faq">
                    <div class="collaps">
                        <div class="question-one">
                            <h5 class="faq-one"> How easy is it to import the layout?</h5>
                            <p class="ans-one">We’ve made it ridiculously easy to share your projects and get real-time feedback on your designs. Clients and colleagues can comment directly on each screen or drop annotations</p>

                        </div>
                        <div class="question-two">
                            <h5 class="faq-two">Why Analog in the project name?</h5>
                            <p class="ans-two">We’ve made it ridiculously easy to share your projects and get real-time feedback on your designs. Clients and colleagues can comment directly on each screen or drop annotations</p>

                        </div>
                        <div class="question-three">
                            <h5 class="faq-three">How is this related to wordpress?</h5>
                            <p class="ans-three">We’ve made it ridiculously easy to share your projects and get real-time feedback on your designs. Clients and colleagues can comment directly on each screen or drop annotations</p>

                        </div>
                        <div class="question-four">
                            <h5 class="faq-four">Who are you?</h5>
                            <p class="ans-four">We’ve made it ridiculously easy to share your projects and get real-time feedback on your designs. Clients and colleagues can comment directly on each screen or drop annotations
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--FaQ section end-->
<!--Post Your Question-->
<section class="post-question">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>Post Your Questions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <form class="ques-form">
                    <div class="form-group">
                        <label for="exampleInputQuestion">Your Question</label><br>
                        <textarea class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom ques-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Post Your Question end-->

<!--Contact Start-->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h1>contact us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-7 col-12">
                <h5>Address: ABC</h5>
                <h5>Email: email@gmail.com</h5>
                <h5>Phone: 01889378273</h5>
            </div>
            <div class="col-md-5 col-sm-5 col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7301404954824!2d90.35761351445596!3d23.757000794442224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5964403afb%3A0x543e35446de9ef70!2sBajaj%20Collection!5e0!3m2!1sen!2sbd!4v1578929693605!5m2!1sen!2sbd"
                    width="100%" height="220" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>
@endsection