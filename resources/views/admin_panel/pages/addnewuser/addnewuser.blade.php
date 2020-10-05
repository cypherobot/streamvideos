<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link rel="stylesheet" href="{{url('plugins-frontend/bootstrap/bootstrap.min.css')}}">

</head>
<body>
        <form action="{{ route('addnewuser') }}" method="POST">
            {{ csrf_field() }}
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
            
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
            
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            
                <label for="confpassword"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="confpassword" required>
                <hr>
                <button type="submit" class="registerbtn">Register</button>
            </div>
        </form>
</body>
</html>