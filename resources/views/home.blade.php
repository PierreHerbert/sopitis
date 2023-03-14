@extends('layouts.app')

@section('body')
    <x-header></x-header>

    <div class="relative h-3/4">
        <img src="{{ asset('images/travel-placeholder.jpg') }}" alt="Hero Image" class="w-full h-full object-cover">
        <div class="z-[2] absolute top-0 left-0 bottom-0 right-0 flex flex-col justify-center items-center bg-black/10 text-white p-6">
            <h1 class="text-center">Voyagez l'esprit tranquille !</h1>
            <p class="my-4">Plus de <span class="text-primary">{{ $travelsCount }} voyages</span> à travers le monde.</p>
            <form class="flex flex-col lg:flex-row gap-5 mt-5">
                <div class="input-group">
                    <input type="text" placeholder="Destination">
                    <x-icon name="magnifying-glass"></x-icon>
                </div>
                <div class="input-group">
                    <select>
                        <option selected>Durée</option>
                        <option value="1" selected>1 semaine</option>
                        <option value="2">2 semaines</option>
                    </select>
                    <x-icon name="clock"></x-icon>
                </div>
                <button class="btn btn-primary">Rechercher</button>
            </form>
        </div>
    </div>
    <div class="container">
        <section class="">
            <div class="text-center mb-10">
                <h2>Trouvez votre prochain <span class="text-primary">voyage</span> !</h2>
                <p>Nos derniers voyages enregistrés.</p>
            </div>
            <div class="grid lg:grid-cols-4 gap-3">
                @foreach($travels as $travel)
                    <a href="" class="card group overflow-hidden {{ $loop->first || $loop->last ? 'lg:col-span-2' : '' }}">
                        <img src="{{ $travel->image->file }}" alt="{{ $travel->image->alt }}" loading="lazy" class="transition group-hover:scale-110 w-full h-80">
                        <div class="z-[2] absolute top-0 left-0 w-full h-full bg-black/30 text-white flex flex-col justify-center items-center">
                            <h3>{{ $travel->name }}</h3>
                            <p class="text-sm text-neutral-200">${{ $travel->price }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>

    <x-footer></x-footer>
@endsection