<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Buku | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<style> 
        body {
            background: url('{{ asset('images/Book rent.png') }}') no-repeat center center fixed;
            background-size: cover;
        }

        .main {
            height: 100vh;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.5); /* Add a dark overlay */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .register-box {
            width: 100%;
            max-width: 450px;
            border: solid 1px #ddd;
            padding: 30px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .register-box h2 {
            margin-bottom: 10px;
            font-weight: bold;
        }

        form div {
            margin-bottom: 10px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            border-radius: 5px;
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-center a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .text-center a:hover {
            color: #0056b3;
        }

        .alert-danger {
            background-color: rgba(255, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 5px;
        }

        .alert-success {
            background-color: rgba(0, 128, 0, 0.5);
            color: white;
            border: none;
            border-radius: 5px;
        }
</style>

<body>

    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 500px">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
        <div class="alert alert-success" style="width: 500px">
            {{ session('message') }}
        </div>
            
        @endif

        <div class="register-box">
        <form action="" method="post">
            @csrf
            <div>
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" >
            </div>
            <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" >
            </div>
            <div>
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div>
                <label for="address" class="form-label">Address</label>
                <textarea name="address" id="address" class="form-control" rows="" required></textarea>
            </div>
            <div>
                    <button type="submit" class="btn btn-primary form-control">Register</button>
            </div>
            <div class="text-center">
            Have account? <a href="login">Login</a>
            </div>
        </form>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>