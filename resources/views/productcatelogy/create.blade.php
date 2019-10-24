@extends('layout.masterlayout')

@section('title', 'Create Product Catelogy')

@section('main')
    {{ Form::open(array('url' => '/productcatelogy')) }}
        <table>
            <tr>
                <td>Name: </td>
                <td>{{Form::text('name')}}</td>
            </tr>
            <tr>
                <td>Display name: </td>
                <td>{{Form::text('display_name')}}</td>
            </tr>
            <!-- <tr>
                <td>Select: </td>
                <td>{{Form::select('size', array('$Select'))}}</td>
            </tr> -->
            <tr>
                <td>{{Form::submit('Add')}}</td>
            </tr>
        </table>
    {{ Form::close() }}
@endsection