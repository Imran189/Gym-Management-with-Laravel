<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Cells Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="frontend/assets/css/stylelogin.css">

</head>

<body>

    <login_box>

        <part_field>
            <content_login id='content_in'>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" name="email" placeholder='Email'>
                    <input id="password" type="password" name="password" placeholder='Password'>
                    <button>Sign in</button>
                    <forgot_box>Forgot your <a href="{{ route('password.request') }}">password</a>?<forgot_box>
                </form>
            </content_login>
        </part_field>



    </login_box>



</body>

</html>