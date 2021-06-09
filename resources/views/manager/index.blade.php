@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ route('manager') }}">Home</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('manager.page1') }}">Page1</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('manager.page2') }}">Page2</a>
                </li>
              </ul>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! Welcome to Manager Index Page ') }}
                    <a href="/manager">Home</a>
                    <a href="/acount">Account</a>
                    <a href="/product">Product</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
