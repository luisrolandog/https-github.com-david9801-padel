@extends('layout.app')
@section('title','Crear Reservas')

@section('content')

    <style>
        #table-create {
            background-color: #fff;
            color: #333;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 110px;
            text-align: center;
        }

        #table-create thead th {
            background-color: #333;
            color: #fff;
            border-bottom: 2px solid #333;
        }

        #table-create tbody td {
            border-bottom: 1px solid #ddd;
            padding: 5px;
        }

        #table-create tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table-create .btn {
            padding: 2px 5px;
            font-size: 9px;
        }

        #table-create .bi {
            font-size: 9px;
        }
    </style>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="table table-bordered" id="table-create">
        <thead>
            <tr>
                <th scope="col">Horario</th>
                <th scope="col">Lunes</th>
                <th scope="col">Martes</th>
                <th scope="col">Miércoles</th>
                <th scope="col">Jueves</th>
                <th scope="col">Viernes</th>
                <th scope="col">Sábado</th>
                <th scope="col">Domingo</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 11; $i < 21; $i++)
                <tr>
                    <td scope="row">{{ $i }}:00</td>
                    <td><button class="btn btn-primary"><i class="bi bi-alarm-fill"></i></button></td>
                    <td><button class="btn btn-primary"><i class="bi bi-alarm-fill"></i></button></td>
                    <td><button class="btn btn-primary"><i class="bi bi-alarm-fill"></i></button></td>
                    <td><button class="btn btn-primary"><i class="bi bi-alarm-fill"></i></button></td>
                    <td><button class="btn btn-primary"><i class="bi bi-alarm-fill"></i></button></td>
                    <td><button class="btn btn-primary"><i class="bi bi-alarm-fill"></i></button></td>
                    <td><button class="btn btn-primary"><i class="bi bi-alarm-fill"></i></button></td>
                </tr>
            @endfor
        </tbody>
    </table>

        <form action="{{route('reserves.store')}}" method="POST" class="text-center">
        @csrf
        <h2> Crear Reserva</h2>
        <input type="text" class="bg-light-blue text-center" placeholder="Title" name="title">
        <input type="text" class="bg-light-blue text-center" placeholder="Start time" name="start_time">
        <input type="datetime-local" class="bg-light-blue text-center" placeholder="End Time" name="end_time">
        <input type="datetime-local" class="bg-light-blue text-center" placeholder="Court number" name="court_number">
        <input type="text" class="bg-light-blue text-center" placeholder="Email" name="email">
        <button type="submit" class="btn btn-primary" > SEND</button>
    </form>


@endsection