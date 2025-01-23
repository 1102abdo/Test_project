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
                                    <x-label-form title="name"></x-label-form>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{ __('keywords.name') }}" aria-describedby="helpId"
                                        value="{{ $member->name }}" />
                                    <x-handle-error title="name"></x-handle-error>

                            </div>
                            <div class="col-md-6">
                                    <x-label-form title="position"></x-label-form>
                                    <input type="text" position="position" class="form-control"
                                        placeholder="{{ __('keywords.position') }}" aria-describedby="helpId"
                                        value="{{ $member->position }}" />
                                    <x-handle-error title="position"></x-handle-error>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <x-label-form title="facebook"></x-label-form>
                                    <input type="text" name="facebook" class="form-control"
                                        placeholder="{{ __('keywords.facebook') }}" aria-describedby="helpId"
                                        value="{{ $member->facebook }}" />
                                    <x-handle-error title="facebook"></x-handle-error>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <x-label-form title="twitter"></x-label-form>
                                    <input type="text" name="twitter" class="form-control"
                                        placeholder="{{ __('keywords.twitter') }}" aria-describedby="helpId"
                                        value="{{ $member->twitter }}" />
                                    <x-handle-error title="twitter"></x-handle-error>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <x-label-form title="linkedin"></x-label-form>
                                    <input type="text" name="linkedin" class="form-control"
                                        placeholder="{{ __('keywords.linkedin') }}" aria-describedby="helpId"
                                        value="{{ $member->linkedin }}" />
                                    <x-handle-error title="linkedin"></x-handle-error>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <img src="{{ asset("storage/members/$member->image") }}" alt="1" width="50px">
   
                        </div>

                        </div>
                    </div>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </div>
@endsection
