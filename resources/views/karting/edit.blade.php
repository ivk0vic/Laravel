@extends('layouts.app')
@section('content')
    <h1> Izmeni podatke o karting centru: </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\KartingController@update',$rez->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('lokacija','Mesto i adresa karting centra:')}}
    <!--  oclass opet bootstrap-->
     {{Form::text('lokacija',$rez->lokacija,['class'=>'form-control','placeholder'=>'lokacija'])}}
</div>
<div class="form-group">
     {{Form::label('radnoVreme','Radno vreme karting centra:')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('radnoVreme',$rez->radnoVreme, ['class'=>'form-control','placeholder'=>'radnoVreme'])}}
</div>
<div class="form-group">
    {{Form::label('pravilaStaze','Pravila o voznji:')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('pravilaStaze',$rez->pravilaStaze, ['class'=>'form-control','placeholder'=>'pravilaStaze'])}}
</div>
<div class="form-group">
    {{Form::label('cena','Cena voznje po coveku za jedan termin:')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('cena',$rez->cena, ['class'=>'form-control','placeholder'=>'cena'])}}
<div class="form-group">
    {{Form::label('usluge','Sve usluge koje nudi karting centar:')}}
    <!--  oclass opet bootstrap-->
    {{ Form::text('usluge',$rez->usluge, ['class'=>'form-control','placeholder'=>'usluge'])}}
</div>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
