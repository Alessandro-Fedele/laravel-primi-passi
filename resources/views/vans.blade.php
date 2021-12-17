<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nike</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .title {
            font-size: 84px;
            text-align: center;
        }

        .m-b-md {
            margin-bottom: 20px;
        }

        .card-group {
            display: flex;
            width: 80%;
            text-align: center;
            margin: auto;
            gap: 10px;
        }

        .card {
            width: 33.3%;
        }

        img {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="full-height flex-center">
        <div class="content">
            <div class="title m-b-md">
                VANS
            </div>
            <div class="card-group">
                @foreach ($shoes as $prod)
                <div class="card">
                    <img src="{{asset($prod['path'])}}" alt="nike">
                    <div>
                        <h4>Prezzo: {{$prod['price']}}</h4>
                        <p>Numeri: {{$prod['size']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>