@extends('layouts.app')
@section('content')
    <h1> Kreiraj novu rezervaciju </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\RezervacijaController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('ime','Ime:')}}
        <!--  oclass opet bootstrap-->
         {{Form::text('ime','',['class'=>'form-control','placeholder'=>'ime'])}}
    </div>
    <div class="form-group">
         {{Form::label('prezime','Prezime:')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('prezime','', ['class'=>'form-control','placeholder'=>'prezime'])}}
    </div>
    <div class="form-group">
        {{Form::label('datum','Datum voznje:')}}
        <!--  oclass opet bootstrap-->
        {{ Form::date('datum', '', ['class'=>'form-control','placeholder'=>'datum'])}}
    </div>
    <div class="form-group">
        {{Form::label('vreme','Vreme:')}}
        <!--  oclass opet bootstrap-->
        {{Form::time('vreme','', ['class'=>'form-control','placeholder'=>'vreme'])}}
    </div>
    <div class="form-group">
        {{Form::label('brOsoba','Broj osoba:')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('brOsoba','', ['class'=>'form-control','placeholder'=>'brOsoba'])}}
    </div>
    <div class="form-group">
        {{Form::label('karting_id','Karting id:')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('karting_id','', ['class'=>'form-control','placeholder'=>'karting_id'])}}
    </div>
    <div class="form-group">
        {{Form::label('user_id','User id:')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('user_id','', ['class'=>'form-control','placeholder'=>'user_id'])}}
    </div>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
