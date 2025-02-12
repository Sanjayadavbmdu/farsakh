<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login- Farsakh</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>

:root {
            /* --primary-color: #206843; */
            --primary-color: #213a59;
            
            /* #213a59 */
       
            --secondary-color: #3a8d5c;
            --accent-color: #e9f5ef;
        }


        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #213a59, #213a59);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            color: #fff;
        }

        .login-box {
            background: #ffffff;
            color: #333;
            border-radius: 15px;
            padding: 30px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            position: relative;
        }

        .login-box .icon {
            /* background: linear-gradient(135deg, #6c63ff, #3b82f6); */
            color: #fff;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            position: absolute;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            /* box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); */
        }

        .login-box h2 {
            margin-top: 60px;
            font-size: 1.8rem;
            font-weight: bold;
        }

        .login-box p {
            font-size: 0.9rem;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 25px;
            background: #f9f9f9;
            border: 1px solid #ccc;
            padding: 10px 20px;
            font-size: 1rem;
            color: #333;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(99, 255, 143, 0.5);
            border-color: var(--primary-color);
            outline: none;
        }

        .btn-custom {
            background: var(--primary-color);
            border: none;
            color: #fff;
            border-radius: 25px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            margin-top: 20px;
            width: 100%;
            transition: all 0.3s;
        }

        .btn-custom:hover {
            background: var(--primary-color);
            transform: scale(1.05);
            color: #f9f9f9
        }

        .forgot-password {
            margin-top: 15px;
        }

        .forgot-password a {
            color: #6c63ff;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .forgot-password a:hover {
            color: #3b82f6;
        }

        .decorative-circles {
            position: absolute;
            z-index: -1;
        }

        .decorative-circles .circle {
            position: absolute;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        .circle.small {
            width: 60px;
            height: 60px;
            top: 10%;
            left: 20%;
        }

        .circle.large {
            width: 120px;
            height: 120px;
            bottom: 15%;
            right: 25%;
        }

        .language-dropdown {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        @media (max-width: 768px) {
            .circle.large {
                width: 80px;
                height: 80px;
            }

            .circle.small {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>

    <div class="language-dropdown">
        <select class="form-select" onchange="changeLanguage(this.value)">
            <option value="en">English</option>
            <option value="ar">العربية</option>
        </select>
    </div>


    <div class="decorative-circles">
        <div class="circle small"></div>
        <div class="circle large"></div>
    </div>
    <div class="login-box">
        <div class="icon">
            <img src="{{asset('logo.png')}}"  height="80px" alt="">
           
        </div>
        <h2>Admin Login</h2>
        <p></p>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{route('admin.login')}}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-custom">Login</button>
            <div class="forgot-password">
                {{-- <a href="#">Forgot Password?</a> --}}
            </div>
        </form>
    </div>
<script>

    function changeLanguage() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,ar',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- Bootstrap JS and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
