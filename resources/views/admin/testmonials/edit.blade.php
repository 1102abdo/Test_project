@extends('admin.master')

@section('title', __('keywords.edit'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.edit') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testmonials.update', $testmonial) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                        <x-label-form title="name"></x-label-form>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ __('keywords.name') }}" aria-describedby="helpId"
                                            value="{{ $testmonial->name }}" />
                                        <x-handle-error title="name"></x-handle-error>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <x-label-form title="position"></x-label-form>
                                        <input type="text" name="position" class="form-control"
                                            placeholder="{{ __('keywords.position') }}" aria-describedby="helpId"
                                            value="{{ $testmonial->position }}" />
                                        <x-handle-error title="position"></x-handle-error>

                                    </div>
                                </div>
                                <div class="col-md-12">
                            
                                    <x-label-form title="image"></x-label-form>
                                    <input type="file" name="image" class="form-control-file" />
                                        <x-handle-error title="image"></x-handle-error>    
                            </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <x-label-form title="description"></x-label-form>
                                        <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $testmonial->description }} </textarea>
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
