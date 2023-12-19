<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
           
           
        }
        .login-container{
            background-color: #3498db;
            padding: 20px;
            border-radius: 10px;
            width: 95%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; 
            text-align: center;
            color: white;

        }
        .form-container{
            padding: 20px;
            box-sizing: border-box;
            text-align: left
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }

        button {
            background-color: white;
            color: blue;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }
    </style>
</head>
<body>
    <div>
        <div class="login-container">
            <h2 style="color: white; text-align: center">SIGN UP</h2>
            <form action="{{ route('signup.store') }}" method="post">
                
                <div class="form-container">
                <label for="username">Name</label>
                <input type="text" name="username" placeholder="Enter name" required>

                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Enter email" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter password" required>

                <label for="confirm_password">Retype Password</label>
                <input type="password" name="confirm_password" placeholder="Retype password" required>

                <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>