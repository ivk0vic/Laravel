@extends('layouts.app')
@section('content')
<!-- dodali smo dugme da nnas vrati na prethodnu stranicu -->
<a href="/karting/public/karting" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci o karting centru na lokaciji: {{$r->lokacija}}</h1>
<div>
    Cena: {{$r->cena}}
</div>
<div>
    Usluge: {{$r->usluge}}
</div>
<div>
    Radno vreme: {{$r->radnoVreme}}
</div>
<div>
    Pravila staze: {{$r->pravilaStaze}}
</div>



    <a href="/karting/public/karting/{{$r->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\KartingController@destroy',$r->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
