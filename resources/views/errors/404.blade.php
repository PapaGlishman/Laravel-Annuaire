@extends('layouts.error')

@section('title', '404')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="page-error">
        <div class="page-inner">
            <h1>404</h1>
            <div class="page-description">
                {{__('Sorry, but the page you are looking for has not been found on our server.')}}
            </div>
            <div class="page-search">
                <div class="mt-3">
                    <a href="{{ route('home') }}">{{ __('Back to Home') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
