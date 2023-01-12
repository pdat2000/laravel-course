@extends('layout.app')

@section('content') 
<ul class="list-group">
@foreach ($foods as $food )
<li class="list-group-item">{{$food->id}}-{{$food->name}}-{{$food->description}}</li>
@endforeach
  </ul>
@endsection