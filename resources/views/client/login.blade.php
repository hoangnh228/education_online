<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .login-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            width: 800px;
        }

        .login-image {
            width: 50%;
            background: url('https://via.placeholder.com/400') center/cover no-repeat;
        }

        .login-form {
            width: 50%;
            padding: 40px;
        }

        .login-form h1 {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        .login-form .form-control {
            border-radius: 5px;
        }

        .login-form .btn {
            width: 100%;
            border-radius: 5px;
        }

        .error-messages {
            color: red;
            font-size: 14px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Left Side Image -->
        <div class="login-image"></div>

        <!-- Right Side Form -->
        <div class="login-form">
            <h1>Login</h1>

            @if ($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="user_name" class="form-label">Username:</label>
                    <input type="text" name="user_name" id="user_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
