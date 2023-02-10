@extends('layout.app')
@section('title','Enviar Reserva ')
@section('content')

    <style>
        .bg-light-blue{
            background-color: #fff;
            color: #333;
            overflow: hidden;
            margin-top: 110px;
            text-align: center;
            border-radius: 5px;
        }
    </style>

    <form action="{{route('reserves.store')}}" method="post" class="text-center">
        @csrf
        <input type="text" class="bg-light-blue text-center" placeholder="Title" name="title">
        <input type="datetime-local" readonly class="bg-light-blue text-center" name="start_time" value="{{ date('Y-m-d\TH:i', strtotime($start_time= Request::segment(2))) }}">
        <input type="datetime-local" readonly class="bg-light-blue text-center" name="end_time" value="{{ date('Y-m-d\TH:i', strtotime($start_time= Request::segment(2).'+1hour' )) }}">
        <input type="number" class="bg-light-blue text-center" placeholder="Court number" name="court_number">
        @if (auth()->check())
        <input type="text" readonly  class="bg-light-blue text-center" value="{{$email = \App\Models\User::find(1)->email}}" name="email">
        @endif
        <button type="submit" class="btn btn-primary" > SEND</button>
    </form>
@endsection
<!--"
funciona bien este selector pero ya me guarda bien cada reserva segun cada id de usuario, no lo tengo que elegir pues tengo bien puestas las relaciones
        <select type="select"  name="user_id" class="bg-light-blue text-center">
            @foreach(\App\Models\User::all() as $user)
    <option value = "{{$user->id}}"  >     {{$user->name}}    </option>
            @endforeach
    </select>
    "-->
