@extends ('layouts.app')

@section('content')

<div class="container">

    <h1>Trains</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                
                <th scope="col">Company</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Departure</th>
                <th scope="col">Arrival</th>
                <th scope="col">Train</th>
                <th scope="col">Carriages</th>
                <th scope="col">On time</th>
                <th scope="col">Train Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure }}</td>
                <td>{{ $train->arrival }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->no_carriages }}</td>
                <td>{{ $train->on_time == 1 ? 'On time' : 'Delayed'  }}</td>
                <td>{{ $train->cancelled == 0 ? 'Confirmed' : 'Deleted'  }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>


@endsection