@extends('layout.masterlayout')

@section('tittle', 'Array')

@section('main')
    <h2>{{$name}}</h2>

    <h2>IF statement</h2>
    @if ($day == 'Sunday')
        <p>Time to party</p>
    @else
        <p>Time to work</p>
    @endif

    <h2>Foreach statement</h2>
    @foreach ($drink as $drink)
        {{$drink}} <br>
    @endforeach

    <h2>Execute PHP function</h2>
    <p>Date: {{date('D, M, Y')}}</p>
@endsection