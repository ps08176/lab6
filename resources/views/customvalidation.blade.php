<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!! Form::open(array('route'=>'custom-validation.post', 'method'=>'POST'))!!}
        @if (count($errors) > 0)
            <div class = 'alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    {!! Form::text('phone', old('phone'), ['placeholder' => 'Enter VN phone number'])!!}
    
    <br>

    {!! Form::submit('Save')!!}
</body>
</html>