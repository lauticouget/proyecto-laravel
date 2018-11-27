@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">Nombre:</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Apellido:</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">Altura:</label>

                            <div class="col-md-6">
                                <input id="height" type="text" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height" value="{{ old('height') }}" required autofocus>

                                @if ($errors->has('height'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="favorite_position" class="col-md-4 col-form-label text-md-right">Posicion favorita:</label>

                            <div class="col-md-6">
                                    <select name="favorite_position" class="form-control{{ $errors->has('favorite_position') ? ' is-invalid' : '' }}" id="favorite_position" value="{{ old('favorite_position') }}">
                                        <option>Seleccionar...</option>
                                        <option value="Arquero">Arquero</option>                                    
                                        <option value="Defensor">Defensor</option>
                                        <option value="Mediocampista">Mediocampista</option>
                                        <option value="Delantero">Delantero</option>
                                    </select>
                                {{-- <input id="favorite_position" type="text" class="form-control{{ $errors->has('favorite_position') ? ' is-invalid' : '' }}" name="favorite_position" value="{{ old('favorite_position') }}" required autofocus> --}}

                                @if ($errors->has('favorite_position'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('favorite_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="strong_foot" class="col-md-4 col-form-label text-md-right">Pie habil:</label>
                            <div class="col-md-6">
                                <select name="strong_foot" class="form-control{{ $errors->has('strong_foot') ? ' is-invalid' : '' }}" id="strong_foot" value="{{ old('strong_foot') }}">
                                    <option>Seleccionar...</option>
                                    <option value="derecho">Derecho</option>                                    
                                    <option value="izquierdo">izquierdo</option>

                                </select>

                                @if ($errors->has('strong_foot'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('strong_foot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">Barrio:</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Telefono:</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- subir image -->
                        <div class="form-group row">
                                <label for="profile_img_path" class="col-md-4 col-form-label text-md-right">imagen:</label>
    
                                <div class="col-md-6">
                                    <input id="profile_img_path" type="text" class="form-control{{ $errors->has('profile_img_path') ? ' is-invalid' : '' }}" name="profile_img_path" value="{{ old('profile_img_path') }}" required autofocus>
    
                                    @if ($errors->has('profile_img_path'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('profile_img_path') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
