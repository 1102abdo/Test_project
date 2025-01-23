@extends('admin.master')

@section('title', __('keywords.settings'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <form action="{{ route('admin.settings.update', $setting) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                        <x-label-form title="phone"></x-label-form>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="{{ __('keywords.phone') }}" aria-describedby="helpId"
                                            value="{{ $setting->phone }}" />
                                        <x-handle-error title="phone"></x-handle-error>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <x-label-form title="email"></x-label-form>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="{{ __('keywords.email') }}" aria-describedby="helpId"
                                            value="{{ $setting->email }}" />
                                        <x-handle-error title="email"></x-handle-error>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <x-label-form title="facebook"></x-label-form>
                                        <input type="url" name="facebook" class="form-control"
                                            placeholder="{{ __('keywords.facebook') }}" aria-describedby="helpId"
                                            value="{{ $setting->facebook }}" />
                                        <x-handle-error title="facebook"></x-handle-error>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <x-label-form title="instagram"></x-label-form>
                                        <input type="url" name="instagram" class="form-control"
                                            placeholder="{{ __('keywords.instagram') }}" aria-describedby="helpId"
                                            value="{{ $setting->instagram }}" />
                                        <x-handle-error title="instagram"></x-handle-error>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <x-label-form title="twitter"></x-label-form>
                                        <input type="url" name="twitter" class="form-control"
                                            placeholder="{{ __('keywords.twitter') }}" aria-describedby="helpId"
                                            value="{{ $setting->twitter }}" />
                                        <x-handle-error title="twitter"></x-handle-error>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <x-label-form title="linkedin"></x-label-form>
                                        <input type="url" name="linkedin" class="form-control"
                                            placeholder="{{ __('keywords.linkedin') }}" aria-describedby="helpId"
                                            value="{{ $setting->linkedin }}" />
                                        <x-handle-error title="linkedin"></x-handle-error>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <x-label-form title="youtube"></x-label-form>
                                        <input type="url" name="youtube" class="form-control"
                                            placeholder="{{ __('keywords.youtube') }}" aria-describedby="helpId"
                                            value="{{ $setting->youtube }}" />
                                        <x-handle-error title="youtube"></x-handle-error>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <x-label-form title="address"></x-label-form>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="{{ __('keywords.address') }}" aria-describedby="helpId"
                                            value="{{ $setting->address }}" />
                                        <x-handle-error title="address"></x-handle-error>
                                </div>


                            </div>
                            <button type="submit" class="btn btn-primary mt-2">
                                {{ __('keywords.submit') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    {{-- <script>
        setTimeout(function() {
          var elementToHide = document.getElementById('to_hide');
          if (elementToHide) {
            elementToHide.style.display = 'none';
          }
        }, 1000);
      </script> --}}
@endsection
