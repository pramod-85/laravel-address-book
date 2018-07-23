@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacts <a href="{{ route('contact_add') }}" class="btn btn-primary">Add New</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Contact Name</th>
                            <th>Contact Title</th>
                            <th>Contact No.</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach( $contacts as $contact)
                            <tr>
                                <td>{{$contact->person_name}}</td>
                                <td>{{$contact->title}}</td>
                                <td>{{$contact->person_number}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="contact options">
                                        <a href="{{ route('contact_edit', array('contact_id' => $contact->id)) }}" class="btn btn-primary">Edit</b>
                                        <a href="{{ route('contact_delete', array('contact_id' => $contact->id)) }}" class="btn btn-primary">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection