@extends('admin.master')

@section('title', __('keywords.messages'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.messages') }}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('keywords.name') }}</label>
                                    <p class="form-control">{{ $message->name }} </p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('keywords.email') }}</label>
                                    <p class="form-control">{{ $message->email }} </p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('keywords.subject') }}</label>
                                    <p class="form-control">{{ $message->subject }} </p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">{{ __('keywords.messages') }}</label>
                                    <p class="form-control">{{ $message->message }} </p>

                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
