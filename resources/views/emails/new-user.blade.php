<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Platform</title>
    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <div class="message">
           

        <h3>Hello,  {{ $userData['name'] }},</h3>
        <h4>Welcome to Nexdecade HRM</h4>
        <br>
        <br>
        <p>Here are your login details: <br>
        Email: {{ $userData['email'] }} <br>
        Password: {{ $userData['password'] }} <br>

            <br>
            <br>

        Please visit the website <a href="{{url('/login')}}">Nexdecade HRM</a>

            </div>
        
    </div>
</body>

</html>