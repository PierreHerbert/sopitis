@extends('layouts.app')

@section('body')
    <div class="h-full flex justify-center items-center">
        <form method="post" action="{{ route('login.perform') }}" class="block w-full max-w-xl">
            @csrf

            <h1 class="mb-5">Connexion</h1>

            <label for="floatingName">Adresse Email ou Nom d'utilisateur</label>
            <div class="input-group mb-3">
                <input type="text" class="" name="username" value="{{ old('username') }}" required autofocus>
            </div>

            <label for="floatingPassword">Mot de passe</label>
            <div class="input-group form-floating mb-3">
                <input type="password" class="" name="password" value="{{ old('password') }}" required>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>

        </form>
    </div>
@endsection