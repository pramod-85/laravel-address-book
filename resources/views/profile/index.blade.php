@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile <a href="{{ route('edit_profile') }}" class="btn btn-primary">Edit</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>Name</td>
                          <td>{{ $profile->name }}</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>{{ $profile->email }}</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection