<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>
        Auto Veikals
    </title>
</head>

<body background="img/8.png">
    <div class="navbar">
        <a href="#">Light Cars</a>
        <a href="#">Buses</a>
        <a href="#">Jeeps</a>
        <a href="#" class="right">Registration</a>
        <a href="#" class="right">Login</a>
        <a href="#" class="right">Info</a>
      </div>
    <div>
    <section>
        {{$car->model}}<br>
        {{$car->color}}<br>
        {{$car->mileage}}<br>
        {{$car->price}}<br>
        {{$car->year}}<br>
        @if ($car->automatic == 1) 
            <p> automatic </p>
        @endif <p> mechanic </p>
        {{$car->condition}}<br>
    </section>


     
    <div class="footer">
        <h2>Contacts</h2>
        <p> Antons Broks </p>
        <p>antonbroks@inbox.lv</p>
      </div>
    
</body>

</html>