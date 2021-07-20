<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet"> 
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=BenchNine&family=Monoton&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>MyNameIsTravel</title>
</head>
<body class="cuerpo">
    <div>
        @yield('content')
    </div>
    
    <div class="header">
        <nav class="menu"> 
			<a class ="textonav" href="{{ route('home') }}"> Home </a>
			<a class ="textonav" href="{{ route('about') }}"> About me </a>
            <a class ="textonav" href="{{ route('destinations') }}"> Destinations </a>
            <a class ="textonav" href="{{ route('contact') }}">Contact </a>
    </div>




    <div>
        @yield('image')
    </div>

    <div>
        @yield('topics')
    </div>
    <div>
        @yield('imagetopics')
    </div>


    <div>
        @yield('paices')
    </div>

 
 

    <div>
        @yield('about')
    </div>



    <div>
        @yield('cuadrado')
    </div>

   

    <div>
        @yield('formulario')
    </div>

 

    <div>
        @yield('footer')
    </div>
     

</body>
</html>