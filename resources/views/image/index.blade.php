<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Random Quotes</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{url('css/customStyle.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}" >

</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <b><div class="card-header">Random Quotes Images</div></b>
                <div class="card-body">
                    <img class="img-fluid" src="{{$data['quote']}}" alt="randomImage">
                   <p class="card-text">
                        {{$data['ip']}}
                   </p>
                   <input class="button" type="button" value="Cambiar imagen" onClick="location.reload();" />
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
