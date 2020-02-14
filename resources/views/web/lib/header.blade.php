<!--Header section start-->
<header class="home sticky-top" id="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <nav class="navbar navbar-expand-lg wow bounce">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('asset/front/img/logo.png')}}" alt="iwarrantybd logo" class="img-fluid logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="#sub">Subscription</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#review">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/claim-request') }}">Post your claim</a>
                            </li>

                           
                            

                            @if(Auth::guard('subscriber')->check())
                            <li class="nav-item">


                                <a class="nav-link" href="{{ url('susbcriber/logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <!-- <i class="fas fa-bars"></i> -->Logout
                                </a>
                                <form id="logout-form" action="{{ url('subscriber/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                            @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('subscriber/login') }}">Login</a>

                            </li>

                            @endif

                        </ul>
                    </div>
                </nav>
                 
            </div>
        </div>
    </div>
</header>
<section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-12">
            @if(\Request::route()->getName() == 'home')
                <div class="tag-line">
                    <h1>Premium Phone <br>Premium Care</h1>
                </div>

                @endif
          </div>
        </div>
      </div>
    </section>