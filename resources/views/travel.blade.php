@extends('layouts.app')

@section('body')
    <x-header></x-header>

    <div class="h-1/3 bg-center bg-cover" style="background-image: url('{{ asset('images/travel-placeholder.jpg') }}')">

    </div>
    <main>
        <div class="container grid lg:grid-cols-3 gap-10">
            <section class="lg:col-span-2">
                <h1>{{ $travel->name }}</h1>

                <p>{{ $travel->shortDescription }}</p>

                <div class="mt-10">
                    {{ $travel->name }}
                </div>

                <ul class="mt-10">
                    <li class="py-4 border-y">
                        <span class="font-bold mr-20">Durée: </span>
                        <span>{{ $travel->duration }} jours ({{ $travel->duration - 1 }} nuits)</span>
                    </li>
                </ul>

            </section>
            <section class="">
                <article class="card">
                    <div class="card-header bg-black text-white flex justify-between items-center">
                        <span class="text-xl font-bold">${{ $travel->price }}</span>
                        <span class="text-sm">Par Personne</span>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary w-full">Réserver</button>

                        <div class="card-footer text-sm">
                            Pour tous renseignements supplémentaires veuillez contacter un agent.
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </main>

    <x-footer></x-footer>
@endsection