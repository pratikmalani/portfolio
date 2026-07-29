<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Pratik Malani</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {

            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            color: white;
            overflow: hidden;
        }

        .container {

            height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            text-align: center;

            flex-direction: column;

            animation: fadeIn 2s;
        }

        h3 {

            font-size: 25px;

            letter-spacing: 2px;

            margin-bottom: 10px;

            color: #ddd;

        }

        h1 {

            font-size: 70px;

            margin-bottom: 20px;
        }

        .typing {

            font-size: 28px;

            color: #38bdf8;

            margin-bottom: 40px;

            min-height: 40px;
        }

        .btn {

            padding: 15px 40px;

            text-decoration: none;

            background: white;

            color: #2563eb;

            border-radius: 50px;

            font-size: 18px;

            font-weight: bold;

            transition: .4s;
        }

        .btn:hover {

            background: #2563eb;

            color: white;

            border: 2px solid white;

            transform: translateY(-5px);

            box-shadow: 0 10px 20px rgba(0, 0, 0, .3);

        }

        @keyframes fadeIn {

            from {

                opacity: 0;

                transform: translateY(40px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }

        .circle {

            position: absolute;

            border-radius: 50%;

            background: rgba(255, 255, 255, .08);

            animation: move 15s linear infinite;

        }

        .circle:nth-child(1) {

            width: 200px;

            height: 200px;

            left: 10%;

            top: 10%;

        }

        .circle:nth-child(2) {

            width: 300px;

            height: 300px;

            right: -80px;

            bottom: -80px;

        }

        .circle:nth-child(3) {

            width: 150px;

            height: 150px;

            right: 15%;

            top: 15%;

        }

        @keyframes move {

            50% {

                transform: translateY(30px);

            }

        }

        @media(max-width:768px) {

            h1 {

                font-size: 45px;

            }

            .typing {

                font-size: 20px;

            }

        }
    </style>

</head>

<body>

    <div class="circle"></div>

    <div class="circle"></div>

    <div class="circle"></div>

    <div class="container">

        <h3>Hello, I'm</h3>

        <h1>Pratik Malani</h1>

        <div class="typing"></div>

        <a href="{{ url('/portfolio') }}" class="btn">
            View Portfolio →
        </a>

    </div>

    <script>

        const text = [
            "PHP Developer",
            "Laravel Developer",
            "Web Developer",
            "Backend Developer"
        ];

        let count = 0;

        let index = 0;

        let current = "";

        let letter = "";

        (function type() {

            if (count === text.length) {

                count = 0;

            }

            current = text[count];

            letter = current.slice(0, ++index);

            document.querySelector(".typing").textContent = letter;

            if (letter.length === current.length) {

                count++;

                index = 0;

                setTimeout(type, 1000);

            } else {

                setTimeout(type, 120);

            }

        })();

    </script>

</body>

</html>