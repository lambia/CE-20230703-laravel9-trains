@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <h2>Treni</h2>
        <div class="col">
            <table>
                <thead>
                    <tr>
                        <th>Numero Treno</th>
                        <th>Città Partenza</th>
                        <th>Orario Partenza</th>
                        <th>Città Arrivo</th>
                        <th>Orario Arrivo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <td>{{$train->codice_treno}}</td>
                        <td>{{$train->stazione_di_partenza}}</td>
                        <td>{{$train->orario_di_partenza}}</td>
                        <td>{{$train->stazione_di_arrivo}}</td>
                        <td>{{$train->orario_di_arrivo}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection