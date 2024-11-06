@extends('admin.master')

@section('title', __('keywords.show_details'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.show_details') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('keywords.title') }}</label>
                                    <p class="form-control">{{ $service->title }} </p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('keywords.icon') }}</label>
                                    <div class="mt-2">
                                        <i class=" {{ $service->icons }} fa-2x">></i>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('keywords.description') }}</label>
                                    <p name="description" class="form-control"> {{ $service->description }} </p>

                                </div>
                            </div>


                        </div>
                    </div>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
