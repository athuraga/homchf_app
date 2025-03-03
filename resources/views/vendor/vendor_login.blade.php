<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @php
    $title = App\Models\GeneralSetting::find(1)->business_name;
    $favicon = App\Models\GeneralSetting::find(1)->favicon;
    @endphp

    <title>{{ $title }} | @yield('title','Vendor login')</title>

    <link rel="icon" href="{{ url('images/upload/'.$favicon) }}" type="image/png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/components.css')}}">

    @php
    $favicon = App\Models\GeneralSetting::find(1)->company_favicon;
    $color = App\Models\GeneralSetting::find(1)->site_color;
    $icon = App\Models\GeneralSetting::find(1)->company_black_logo;

    @endphp
    <style>
    :root {
        --site_color: <?php echo $color;
        ?>;
        --hover_color: <?php echo $color.'c7';
        ?>;
    }
    </style>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-8 col-12 col-md-6 order-lg-1 order-1 min-vh-100 background-walk-y overlay-gradient-bottom"
                    data-background="{{ url('images/1.png') }}" style="background-color: #23110f">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">{{__("welcome @home chef...!!")}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 pt-5 col-md-6 order-lg-2 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <div class="w-100 text-center">
                            <img src="{{ url('images/upload/'.$icon) }}" alt="logo" width="80"
                                class="shadow-light rounded-circle mb-5 mt-2">
                        </div>
                        <h4 class="text-dark mb-5 font-weight-normal">{{__('Welcome to ')}}<span
                                class="font-weight-bold">{{__('HomChf')}}</span>
                        </h4>
                        @if ($errors->any())
                        <div class="alert alert-primary alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                @foreach ($errors->all() as $item)
                                {{ $item }}
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <form method="POST" action="{{ url('vendor/vendor_confirm_login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{__('Email')}}</label>
                                <input id="email" type="email" class="form-control" name="email_id" tabindex="1"
                                    required autofocus>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2"
                                    required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    {{__('Login')}}
                                </button>
                            </div>
                        </form>
                        <div class="text-center">
                            <a href="{{ url('vendor/forgot_password') }}" class="text-small mt-2">
                                {{__('Forgot Password?')}}
                            </a>
                        </div>
                        <div class="text-muted text-center mt-2">
                            {{__("Don't have an account?")}}
                            <a href="{{ url('vendor/register_vendor') }}">{{__('Register')}}</a>
                        </div>
                        <style>
                        * {
                            box-sizing: border-box;
                        }

                        .row {
                            display: flex;
                        }

                        /* Create two equal columns that sits next to each other */
                        .column {
                            flex: 50%;
                            padding: 10px;
                        }
                        </style>
                        <div class="row">
                            <div class="column">
                                <h3 class="font-weight-bold">{{__('User App')}}</h3>
                                <ul class="app">
                                    <li>
                                        <a href="{{url('https://apps.apple.com/se/app/homchf/id1591763186?l=en')}}">
                                            <img src="{{asset('images/apple_store.png')}}" width="80%" height="80%">
                                        </a>
                                    </li>
                                </ul>

                                <ul class="app">
                                    <li>
                                        <a href="{{url('https://play.google.com/store/apps/details?id=app.homchf.homechef')}}"
                                            target="_blank"> <img src="{{asset('images/google_play.png')}}" width="80%"
                                                height="80%"> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="column">
                                <h3 class="font-weight-bold">{{__('Vendor/Chef App')}}</h3>
                                <ul class="app">
                                    <li>
                                        <a href="{{url('https://testflight.apple.com/join/025cRG2p')}}"> <img
                                                src="{{asset('images/apple_store.png')}}" width="80%" height="80%"> </a>
                                    </li>
                                </ul>

                                <ul class="app">
                                    <li>
                                        <a href="{{url('https://play.google.com/store/apps/details?id=app.one.homchf.vendor')}}"
                                            target="_blank"> <img src="{{asset('images/google_play.png')}}" width="80%"
                                                height="80%"> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ url('js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
</body>

</html>