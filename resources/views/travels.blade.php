@extends('layouts.app')

@section('body')
    <x-header></x-header>

    <div class="container">
        <section class="">
            <div class="text-center mb-10">
                <h2>Trouvez votre prochain <span class="text-primary">voyage</span> !</h2>
                <p>Nos derniers voyages enregistrés.</p>
            </div>
            <div class="grid lg:grid-cols-4 gap-3">
                @foreach($travels as $travel)
                    <a href="{{ route('travels.show', $travel) }}" class="card group overflow-hidden">
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