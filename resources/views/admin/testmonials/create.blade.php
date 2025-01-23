@extends('admin.master')

@section('title', __('keywords.new'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.new') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testmonials.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                        <x-label-form title="title"></x-label-form>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ __('keywords.name') }}" aria-describedby="helpId" />
                                          <x-handle-error title="title"></x-handle-error>
                                    
                                </div>
                                <div class="col-md-6">
                            
                                        <x-label-form title="position"></x-label-form>
                                        <input type="text" name="position" class="form-control"
                                            placeholder="{{ __('keywords.position') }}" aria-describedby="helpId" />
                                            <x-handle-error title="position"></x-handle-error>

                                  
                                </div>
                                <div class="col-md-12">
                            
                                        <x-label-form title="image"></x-label-form>
                                        <input type="file" name="image" class="form-control-file"/>
                                            <x-handle-error title="image"></x-handle-error>    
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <x-label-form title="description"></x-label-form>
                                        <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
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
