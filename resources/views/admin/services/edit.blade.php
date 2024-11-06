@extends('admin.master')

@section('title', __('keywords.edit'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.edit') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.update', $service) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <x-label-form title="title"></x-label-form>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="{{ __('keywords.title') }}" aria-describedby="helpId"
                                            value="{{ $service->title }}" />
                                        <x-handle-error title="title"></x-handle-error>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <x-label-form title="icon"></x-label-form>
                                        <input type="text" name="icon" class="form-control"
                                            placeholder="{{ __('keywords.icon') }}" aria-describedby="helpId"
                                            value="{{ $service->icon }}" />
                                        <x-handle-error title="icon"></x-handle-error>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <x-label-form title="description"></x-label-form>
                                        <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $service->description }} </textarea>
                                        <x-handle-error title="description"></x-handle-error>

                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">
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
