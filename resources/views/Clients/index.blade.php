@extends('layouts.app')

@section('content')

    <table border=1>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>

        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{$client->name }}</td>
                <td>{{$client->email }}</td>
                <td>{{$client->password}}</td>
            </tr>
        @endforeach
    </table>



@endsection