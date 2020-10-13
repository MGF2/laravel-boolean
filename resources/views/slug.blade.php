@extends('layouts.app')
@section('titolo','Studenti')
@section('content')
  <div class="card-group">
      <div class="card">
        <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
        <div class="card-body">
          <h5 class="card-title">{{$student['nome']}} ( {{$student['anni']}} anni )</h5>
          <h5>Assunt{{($student['genere'] == 'f') ? 'a' : 'o'}} {{$student['azienda']}}</h5>
          <p class="card-text">{{$student['descrizione']}}</p>
        </div>
      </div>
   </div>
@endsection
