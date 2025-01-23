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
                                <label for="" class="form-label">{{ __('keywords.name') }}</label>
                                <p class="form-control">{{ $testmonial->name }} </p>
                            </div>

                            <div class="col-md-5">
                                <label for="position">{{ __('keywords.position') }}</label>
                                <p class="form-control">{{ $testmonial->position }}</p>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="image">{{ __('keywords.image') }}</label>
                                <img src="{{ asset("storage/testmonials/$testmonial->image") }}" alt="1"
                                    width="50px">
                            </div>

                            <div class="col-md-12">
                                <label for="" class="form-label">{{ __('keywords.description') }}</label>
                                <p name="description" class="form-control"> {{ $testmonial->description }} </p>

                            </div>


                        </div>
                    </div>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </div>
@endsection
