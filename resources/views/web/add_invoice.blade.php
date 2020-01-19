<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iWarrenty Bd</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/front/css/style.css') }}">

</head>

<body>
    <!-- Header section start -->
    @include('web.lib.header')

    <div class="container">
        <div class="card" style>
            <div class="card-header">
                <h2>
                    You have selected
                    <i>{{ $package->title }}</i>
                </h2>
                <p>
                    In Your package you will get
                    <i>
                        <strong>
                            {{ $package->storage }}, {{ $package->project }}
                        </strong>
                        for
                        <strong>{{ $package->price }}$</strong>

                    </i>
                </p>
                <p>
                    Please complete below form for confirming your order
                </p>
            </div>

            <div class="card-body">
                <form action="{{ route('save_invoice', $package->id) }}" method="post">
                    @csrf @method('POST')
                    <div class="form" style="max-width: 600px;">
                        <div class="form-group">
                            <label for>Enter Your Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}"> @error('name')
                            <div class="form-control-feedback text-red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for>Enter Your Email</label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}"> @error('email')
                            <div class="form-control-feedback text-red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for>Enter Contact Number</label>
                            <input type="text" name="contact" class="form-control" value="{{ old('contact') }}"> @error('contact')
                            <div class="form-control-feedback text-red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for>Enter your comment</label>
                            <textarea name="comment" class="form-control" id cols="30" rows="4">
                                    {{ old('comment') }}
                                </textarea> @error('comment')
                            <div class="form-control-feedback text-red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">

                            <input type="hidden" value="{{ $package->id }}" name="package_id">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="{{ asset('asset/front/js/collase.js') }}"></script>

</body>

</html>