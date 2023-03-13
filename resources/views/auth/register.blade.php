@extends('layouts.app')

@section('body')
    <form method="post" action="{{ route('register.perform') }}">

        @csrf 

        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <!-- EMAIL -->
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Adresse Email</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <!-- ------ -->

        <!-- Username -->
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required">
            <label for="floatingName">Nom d'Utilisateur</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <!-- -------- -->

        <!-- LastName -->
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Nom de famille" required="required" >
            <label for="floatingName">Nom de famille</label>
        </div>
        <!-- -------- -->

        <!-- FirstName -->
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="Prénom" required="required" >
            <label for="floatingName">Prénom</label>
        </div>
        <!-- -------- -->
        
        <!-- Password -->
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Mot de passe</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <!-- -------- -->

        <!-- Confirm Password -->
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirmer le mot de passe</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        <!-- ---------------- -->

        <button class="w-100 btn btn-lg btn-primary" type="submit">S'enregistrer</button>
    </form>
@endsection