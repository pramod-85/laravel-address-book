@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Contact</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact_update', array('client_id' => $contact_id)) }}" aria-label="{{ __('Edit Contact') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') ? old('title') : $contact->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="person_name" class="col-md-4 col-form-label text-md-right">{{ __('Person Name') }}</label>

                            <div class="col-md-6">
                                <input id="person_name" type="text" class="form-control{{ $errors->has('person_name') ? ' is-invalid' : '' }}" name="person_name" value="{{ old('person_name') ? old('person_name') : $contact->person_name }}" required>

                                @if ($errors->has('person_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('person_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="person_number" class="col-md-4 col-form-label text-md-right">{{ __('Person No.') }}</label>

                            <div class="col-md-6">
                                <input id="person_number" type="text" class="form-control{{ $errors->has('person_number') ? ' is-invalid' : '' }}" name="person_number" value="{{ old('person_number') ? old('person_number') : $contact->person_number }}" required>

                                @if ($errors->has('person_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('person_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="address_line_1" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 1') }}</label>

                            <div class="col-md-6">
                                <input id="address_line_1" type="text" class="form-control{{ $errors->has('address_line_1') ? ' is-invalid' : '' }}" name="address_line_1" value="{{ old('address_line_1') ? old('address_line_1') : $contact->address_line_1 }}" required>

                                @if ($errors->has('address_line_1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address_line_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="address_line_2" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 2') }}</label>

                            <div class="col-md-6">
                                <input id="address_line_2" type="text" class="form-control{{ $errors->has('address_line_2') ? ' is-invalid' : '' }}" name="address_line_2" value="{{ old('address_line_2') ? old('address_line_2') : $contact->address_line_2 }}">

                                @if ($errors->has('address_line_2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address_line_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="address_line_3" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 3') }}</label>

                            <div class="col-md-6">
                                <input id="address_line_3" type="text" class="form-control{{ $errors->has('address_line_3') ? ' is-invalid' : '' }}" name="address_line_3" value="{{ old('address_line_3') ? old('address_line_3') : $contact->address_line_3 }}">

                                @if ($errors->has('address_line_3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address_line_3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                            <div class="col-md-6">
                                <input id="pincode" type="text" class="form-control{{ $errors->has('pincode') ? ' is-invalid' : '' }}" name="pincode" value="{{ old('pincode') ? old('pincode') : $contact->pincode }}" required>
                                @if ($errors->has('pincode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pincode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') ? old('city') : $contact->city }}" required>
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') ? old('state') : $contact->state }}" required>
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') ? old('country') : $contact->country }}" required>
                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Is default From?') }}</label>
                            @php
                            $default_from = old('default_from') ? old('default_from') : $contact->default_from
                            @endphp

                            <div class="col-md-6">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" {{ $default_from == 'yes'? 'checked': '' }} class="form-check-input {{ $errors->has('default_from') ? ' is-invalid' : '' }}" value="yes" name="default_from">Yes
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" {{ $default_from == 'no'? 'checked': '' }} class="form-check-input {{ $errors->has('default_from') ? ' is-invalid' : '' }}" value="no" name="default_from">No
                                  </label>
                                </div>
                                @if ($errors->has('default_from'))
                                    <span class="invalid-feedback radio-error" role="alert">
                                        <strong>{{ $errors->first('default_from') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Is default To?') }}</label>

                            @php
                            $default_to = old('default_to') ? old('default_to') : $contact->default_to
                            @endphp
                            <div class="col-md-6">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" {{ $default_to == 'yes'? 'checked': '' }} class="form-check-input {{ $errors->has('default_to') ? ' is-invalid' : '' }}" value="yes" name="default_to">Yes
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" {{ $default_to == 'no'? 'checked': '' }} class="form-check-input {{ $errors->has('default_to') ? ' is-invalid' : '' }}" value="no" name="default_to">No
                                  </label>
                                </div>
                                @if ($errors->has('default_to'))
                                    <span class="invalid-feedback radio-error" role="alert">
                                        <strong>{{ $errors->first('default_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4  offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('contacts') }}" class="btn btn-secondary">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection