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
                            <div class="row">
                                <img src="{{ asset("storage/companies/$company->image") }}" alt="1"
                                width="50px">

                            </div>


                        </div>
                    </div>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
