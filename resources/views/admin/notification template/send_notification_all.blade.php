@extends('layouts.app',['activePage' => 'send_notification_all'])

@section('title', __('Send Notification To All'))

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>{{ __('Send Notification') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('admin/home') }}">{{ __('Dashboard') }}</a></div>
                <div class="breadcrumb-item">{{ __('Send Notification') }}</div>
            </div>
        </div>
    </section>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ __('Send Notification') }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">{{ __('User') }}</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form action="{{ url('admin/send_notification_allv') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="role">{{ __('Notification Title') }}</label>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is_invalide @enderror"
                                                placeholder="{{ __('Notification Title') }}" value="{{ old('title') }}"
                                                required>
                                            @error('title')
                                                <span class="custom_error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="role">{{ __('Notification Message') }}</label>
                                            <textarea name="message"
                                                class="form-control privacy_policy @error('message') is_invalide @enderror"
                                                placeholder="{{ __('Notification Message') }}"></textarea>
                                            @error('message')
                                                <span class="custom_error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="user">{{ __('Select Vendor') }}</label>
                                            <select name="vendor_id[]" class="form-control select2" multiple required>
                                                @foreach ($vendors as $vendor)
                                                    <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('vendor_id')
                                                <span class="custom_error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <div class="row">
                                        <div class="col-md-12 mb-3 text-center">
                                            <input type="submit" value="{{ __('Send Notification') }}"
                                                class="btn btn-primary">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
