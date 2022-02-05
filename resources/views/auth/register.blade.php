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
            <content_login id='content_up'>
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input id="name" type="text" name="name" placeholder='Name'>
                    <input id="email" type="email" name="email" placeholder='Email'>
                    <input id="phone" type="text" name="phone" placeholder='Phone'>
                    <input id="gender" type="text" name="gender" placeholder='Gender'>
                    <input id="age" type="text" name="age" placeholder='Age '>
                    <input id="password" type="password" name="password" placeholder='Password'>
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder='Confirm Password '>
                    <button>Sign up</button>
                </form>
            </content_login>
        </part_field>

    </login_box>



</body>

</html>