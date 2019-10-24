{{ Form::open(array('url' => '/calculate')) }}
    <table>
        <tr>
            <td>first operant:</td>
            <td>{{Form::text('firstoperant')}}</td>
        </tr>

        <tr>
            <td>second operant:</td>
            <td>{{Form::text('secondoperant')}}</td>
        </tr>

        <tr>
            {{Form::submit('Submit')}}
        </tr>

        <tr>
            <td>{{ $result ?? ''}}</td>
        </tr>
    </table>
{{ Form::close() }}