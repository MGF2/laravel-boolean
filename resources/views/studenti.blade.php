@extends('layouts.app')
@section('titolo','Studenti')
@section('content')
  <div class="card-group">
    @foreach ($data as $student)
      <div class="card">
        <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
        <div class="card-body">
          <h5 class="card-title">{{$student['nome']}} ( {{$student['anni']}} anni )</h5>
          <h5>Assunto/a da {{$student['azienda']}}</h5>
          <p class="card-text">{{$student['descrizione']}}</p>
        </div>
      </div>
     @endforeach
   </div>
@endsection
