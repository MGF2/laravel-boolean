@extends('layouts.app')
@section('titolo','Studenti')
@section('content')
  <div class="cardz justify-content-center d-flex">
      <div class="card flex-row">
        <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
        <div class="card-body">
          <h5 class="card-title">{{$student['nome']}} ( {{$student['anni']}} anni )</h5>
          <h6>Assunt{{($student['genere'] == 'f') ? 'a' : 'o'}} {{$student['azienda']}}</h6>
          <p class="card-text">{{$student['descrizione']}}</p>
        </div>
      </div>
   </div>
@endsection
