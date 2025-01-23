@extends('admin.master')

@section('title', __('keywords.edit'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.edit') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.members.update', $member) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                        <x-label-form title="name"></x-label-form>
                                        <input type="text" name="name" class="form-control mb-2"
                                            placeholder="{{ __('keywords.name') }}" aria-describedby="helpId"
                                            value="{{ $member->name }}" />
                                        <x-handle-error title="name"></x-handle-error>

                                </div>
                                <div class="col-md-6">
                                        <x-label-form title="position"></x-label-form>
                                        <input type="text" name="position" class="form-control mb-2"
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
                            
                                    <x-label-form title="image"></x-label-form>
                                    <input type="file" name="image" class="form-control-file" />
                                        <x-handle-error title="image"></x-handle-error>    
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
