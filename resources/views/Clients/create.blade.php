@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 class="col-md-12">
                Add data
            </h3>
            <form method="post" action="{{url('clients')}}">
                @csrf
                {{--{{ csrf_field() }}--}}
                <input type="text" name="name" class="form-control" placeholder="name">
                <input type="text" name="email" class="form-control" placeholder="email">
                <input type="text" name="password" class="form-control" placeholder="password">
                <input type="submit">

            </form>
        </div>
    </div>

@endsection