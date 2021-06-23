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
                    <td>Full name</td>
                    <td><input type="text" name="full_name"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="user_name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="confirm_password"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="company_name"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="number" name="phone_number"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="signup" value="sign up"></td>
                </tr>

            </table>
        </form>
        <p>Already have an account? <a href="/login">Login</a></p>
        {{session('msg')}}
    </center>

    <br>

    @foreach ($errors->all() as $err)
    {{$err}} <br>
    @endforeach
</body>

</html>