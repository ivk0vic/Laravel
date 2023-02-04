@extends('layouts.app')
@section('content')
    <h1> Unesi u bazu novu karting centar</h1>

    {!! Form::open(['action'=>['App\Http\Controllers\KartingController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('lokacija','Mesto i adresa karting centra:')}}
        <!--  oclass opet bootstrap-->
         {{Form::text('lokacija','',['class'=>'form-control','placeholder'=>'lokacija'])}}
    </div>
    <div class="form-group">
         {{Form::label('radnoVreme','Radno vreme karting centra:')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('radnoVreme','', ['class'=>'form-control','placeholder'=>'radnoVreme'])}}
    </div>
    <div class="form-group">
        {{Form::label('pravilaStaze','Pravila o voznji:')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('pravilaStaze','', ['class'=>'form-control','placeholder'=>'pravilaStaze'])}}
    </div>
    <div class="form-group">
        {{Form::label('cena','Cena voznje po coveku za jedan termin:')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('cena','', ['class'=>'form-control','placeholder'=>'cena'])}}
    <div class="form-group">
        {{Form::label('usluge','Sve usluge koje nudi karting centar:')}}
        <!--  oclass opet bootstrap-->
        {{ Form::text('usluge','', ['class'=>'form-control','placeholder'=>'usluge'])}}
    </div>

    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
