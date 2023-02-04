@extends('layouts.app')
@section('content')
    <h1> Rezervacije </h1>
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/karting/public/rezervacije/{{$r->id}}">Prikazi nosioca rezervacije: {{$r->ime}}{{$r->prezime}}</a> </h3>
            <p> Datum:{{$r->datum}}</p>
            <p> Vreme: {{$r->vreme}}</p>
            <p> Broj osoba: {{$r->brOsoba}}</p>

</div>
    @endforeach

    @endif

@endsection
