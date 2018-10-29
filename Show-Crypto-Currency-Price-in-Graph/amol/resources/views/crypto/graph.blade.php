<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Graph</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="container">
<div id="app">
    <p>
        test
    </p>
</div>
{{--
<div id="app">
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Rank</td>
            <td>Name</td>
            <td>Symbol</td>
            <td>Price (USD)</td>
            <td>1H</td>
            <td>1D</td>
            <td>1W</td>
            <td>Market Cap (USD)</td>
        </thead>
        <tbody>
        <tr v-for="coin in coins">
            <td>{{ coin.rank }}</td>
            <td><img v-bind:src="getCoinImage(coin.symbol)"> {{ coin.name }}</td>
            <td>{{ coin.symbol }}</td>
            <td>{{ coin.price_usd | currency }}</td>
            <td>
                <span v-if="coin.percent_change_1h > 0">+</span>{{ coin.percent_change_1h }}%
            </td>
            <td>
                <span v-if="coin.percent_change_24h > 0">+</span>{{ coin.percent_change_24h }}%
            </td>
            <td>
                <span v-if="coin.percent_change_7d > 0">+</span>{{ coin.percent_change_7d }}%
            </td>
            <td>{{ coin.market_cap_usd | currency }}</td>
        </tr>
        </tbody>
    </table>
</div>
--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>