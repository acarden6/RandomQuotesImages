<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Random Quotes</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/customStyle.css')}}"" >
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Random Quotes Images</div>
                <div class="card-body">
                    <img src="{{$quote}}" alt="randomImage">
                   <p class="card-text">
                    {{$data['quote']}}
                    {{$data['ip']}}
                   </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
