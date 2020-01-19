@extends('layout.web.web') @section('title','Claim Request') @section('content')
<section>
    <div class="container">
        <div class="row">
            <p class="alert alert-succces text-center">
                You must have to <a href="{{ url('subscriber/register') }}">create an account</a> to claim a request. @if(Auth::guard('subscriber')->check())
                <br>You are now logged in <a href="{{ url('subscriber/login') }}">logout</a> @else
                <br>If have already account, then <a href="{{ url('subscriber/login') }}">login here</a> @endif
            </p>
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

                    <form class="post-claim-form" action="{{ url('save_claim') }}" method="post">
                        @csrf @method('post')
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" value="@if(Auth::guard('subscriber')->check()){{ Auth::guard('subscriber')->user()->name }}@endif"> @error('name')
                            <div class="form-control-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber">Phone</label>
                            <input type="text" name="phone_name" class="form-control" id="exampleInputNumber" aria-describedby="emailHelp"> @error('phone_name')
                            <div class="form-control-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLocation">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputLocation" aria-describedby="emailHelp" value="@if(Auth::guard('subscriber')->check()){{ Auth::guard('subscriber')->user()->address }}@endif"> @error('address')
                            <div class="form-control-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLocation">Phone Model</label>
                            <input type="text" name="model" class="form-control" id="exampleInputLocation" aria-describedby="emailHelp"> @error('model')
                            <div class="form-control-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputModel">Phone Model</label><br>
                            <select name="phone-model">
                                <option value="iphone11pro">iPhone 11 Pro</option>
                                <option value="iphone11prmax">iPhone 11 Pro Max</option>
                                <option value="iphone11">iPhone 11</option>
                                <option value="iPhonexs">iPhone Xs</option>
                                <option value="iPhonexsmax">iPhone Xs Max</option>
                                <option value="iphonexr">iPhone XR</option>
                                <option value="iphonex">iPhone X</option>
                                <option value="iPhone8plus">iPhone 8 Plus</option>
                                <option value="iPhone8">iPhone 8</option>
                                <option value="iPhone7plus">iPhone 7 Plus</option>
                                <option value="iphone6splus">iPhone 6s Plus</option>
                                <option value="iphone6s">iPhone 6s</option>
                                <option value="iPhone6plus">iPhone 6 Plus</option>
                                <option value="iphone6">iPhone 6s</option>
                                <option value="iPhonese">iPhone SE</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputImei">IMEI Number</label>
                            <input type="text" name="imei" class="form-control" id="exampleInputImei" aria-describedby="emailHelp"> @error('imei')
                            <div class="form-control-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhoneDetails">Phone Details</label>
                            <input type="text" name="details" class="form-control" id="exampleInputPhoneDetails" aria-describedby="emailHelp" placeholder="Purchase Date, Purchase Country"> @error('details')
                            <div class="form-control-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProblemPattern">Problem Pattern</label><br>
                            <select name="problem_pattern" class="form-control">
                                <option value="CountryLock" disabled selected>Select</option>
                                <option value="CountryLock">Country Lock</option>
                                <option value="iCloudLock">iCloud Lock</option>
                                <option value="blackListed">Black Listed</option>
                                <option value="networdissue">WiFi/Network Issue</option>
                                <option value="DisplayBroken">Display Broken</option>
                                <option value="appleid">Apple ID Activation</option>
                                <option value="facelock">Face Lock Not Working</option>
                                <option value="cameraProblem">Camera Lens Problem</option>
                                <option value="others">Others</option>
                            </select> @error('problem_pattern')
                            <div class="form-control-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhoneDetails">Problem in Details</label>
                            <textarea name="more_details" class="form-control"></textarea> @error('more_details')
                            <div class="form-control-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        @if(Auth::guard('subscriber')->check())
                        <button type="submit" class="btn btn-primary post-claim-btn">Submit</button> @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection