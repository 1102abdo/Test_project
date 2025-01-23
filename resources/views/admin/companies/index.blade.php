@extends('admin.master')

@section('title', __('keywords.companies'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.companies') }}

                        <div class="page-title-right">
                           <x-action-button href="{{ route('admin.companies.create') }}" type="create"></x-action-button>
                        </div>
                   
                </div>
                </h2>
                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                      
                       
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="25%">#</th>
                                    <th width="50%">{{ __('keywords.image') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th> 

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($companies) > 0)
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{ $companies->firstItem() + $loop->index }}</td>
                                            <td>
                                        
                                                <img src="{{ asset("storage/companies/$company->image") }}" alt="1" width="50px">
                                            </td>

                                            <td>
                                                
                                                <x-action-button href="{{ route('admin.companies.edit', $company) }}" type="edit"></x-action-button>
                                                <x-action-button href="{{ route('admin.companies.show', $company) }}" type="show"></x-action-button>
                                                <x-delete-button href="{{ route('admin.companies.destroy', $company) }}" id="{{ $company->id }}"></x-delete-button>
                                            </td>

                                        </tr>
                                    @endforeach
                                @else
                                   <x-empty-alert></x-empty-alert>
                                @endif

                            </tbody>
                        </table>
                        {{ $companies->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
   
@endsection
