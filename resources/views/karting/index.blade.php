@extends('layouts.app')
@section('content')
    <h1> Podaci o jednom karting centru: </h1>
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/karting/public/karting/{{$r->id}}">Podaci o izabranom karting centru:</a> </h3>
            <p> Adresa karting centra: {{$r->lokacija}} </p>
            <p> Radno vreme: {{$r->radnoVreme}} </p>
            <p> Cena za 1 vozaca: {{$r->cena}}</p>
            <p> Pravila koja se moraju postovati: {{$r->pravilaStaze}}</p>
            <p> Sve usluge u centru: {{$r->usluge}}</p>

</div>
    @endforeach

    @endif

@endsection
