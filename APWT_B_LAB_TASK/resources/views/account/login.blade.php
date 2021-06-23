<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <center>
        <form method="post">
            @csrf
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="login" value="login"></td>
                </tr>

            </table>
        </form>
        <p>Don't have account? <a href="/user">Register</a></p>
    </center>
    {{session('msg')}}
    <br>

    @foreach ($errors->all() as $err)
    {{$err}} <br>
    @endforeach
</body>

</html>