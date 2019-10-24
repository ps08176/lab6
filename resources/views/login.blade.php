<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <?php
        echo Form::open(array('url'=>'/validation'));
    ?>

    <table>
        <tr>
            <td align = 'center' colspan="2">Login</td>
        </tr>
        <tr>
            <td>Username: </td>
            <td><?php echo Form::text('username');?></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><?php echo Form::password('password');?></td>
        </tr>
        <tr>
            <td align = 'center' colspan="2"><?php echo Form::submit('Login');?></td>
        </tr>
    </table>

    <?php
        echo Form::close();
    ?>
</body>
</html>