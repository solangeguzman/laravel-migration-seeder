<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Document</title>
</head>
<body>
   <h1>VIAGGI</h1>
    @foreach($allTravels  as $travel)
   <h3>{{$travel['country']}}</h3>  
   <img src="{{$travel['imagen']}}" width="300" height="200"/>
   <hr>
   <div>DATE DISPONIBILI {{$travel['data']}}</div>
   
   <div>PREZZO: {{$travel['price']}}</div> 
    @endforeach
   <!-- per stampare da homeController -->
    @dump($prezzoViaggio)
    @dump($countries)
    
</body>
</html>