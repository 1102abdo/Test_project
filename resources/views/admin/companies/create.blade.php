@extends('admin.master')

@section('title', __('keywords.new'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.new') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <x-label-form title="image"></x-label-form>
                                    <input type="file" name="image" class="form-control-file" />
                                    <x-handle-error title="image"></x-handle-error>
                                </div>

                            </div>
                           
                            <button type="submit" class="btn btn-primary mt-3">
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
