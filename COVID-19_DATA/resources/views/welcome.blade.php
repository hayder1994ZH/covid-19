<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
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

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="container" style = "text-align: center;">
            <h2 style="font-size: 2rem;font-weight: bold;margin-top: 5rem;margin-bottom: 1rem;">Coronavirus Cases</h2>
            <p style="margin-bottom: 5rem;font-weight: 600;">This table shows you Coronavirus(covid-19) cases and deaths around the world </p>            
        </div>
        <table class="table table-bordered"style = "width:100%">
                        <thead>
                        <tr>
                            <th>country</th>
                            <th>Cases</th>
                            <th style = "background:red;color:#ffff">deaths</th>
                            <th>recovered</th>
                            <th>critical</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($responses as $row)
                        <tr>
                            <td>{{ $row->country }}</td>
                            <td>{{ $row->confirmed }}</td>
                            <td style = "background:red;color:#ffff">{{ $row->deaths }}</td>
                            <td>{{ $row->recovered }}</td>
                            <td>{{ $row->critical }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
    </body>
</html>
