@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="btn-group" role="group" aria-label="adrress book options">
                        <a href="{{ route('profile') }}" class="btn btn-primary">Manage Profile</b>
                        <a href="{{ route('contacts') }}" class="btn btn-primary">Manage Address book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
