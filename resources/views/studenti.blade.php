@extends('layouts.app')
@section('titolo','Studenti')
@section('content')
  <div class="d-flex flex-wrap justify-content-center cardz">
    @foreach ($data as $key => $student)
      <div class="card flex-row">
        <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
        <div class="card-body">
          <a href="{{ route('Student.show',['id'=> $key])}}">
          <h5 class="card-title">{{$student['nome']}}</a> ( {{$student['anni']}} anni )</h5>
          <h6>Assunt{{($student['genere'] == 'f') ? 'a' : 'o'}} {{$student['azienda']}}</h6>
          <p class="card-text">{{$student['descrizione']}}</p>
        </div>
      </div>
     @endforeach
   </div>
@endsection
