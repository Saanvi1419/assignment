<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body, html {
      height: 100%;
      margin: 0;
      font: 400 15px/1.8 "Lato", sans-serif;
      color: #777;
    }
    .btn {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btn:hover {
  background-color: #3e8e41;
  color: white;
}
    .bgimg-1, .bgimg-2, .bgimg-3 {
      position: relative;
      opacity: 0.65;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    
    }
    .bgimg-1 {
      background-image: url("/1.jpg");
      height: 100%;
    }
    
    .caption {
      position: absolute;
      left: 0;
      top: 50%;
      width: 100%;
      text-align: center;
      color: #000;
    }
    
    .caption span.border {
      
      color: black;
      padding: 18px;
      font-size: 42px;
      letter-spacing: 10px;
    }
    .caption span.border1{
      color: #fff;
      padding: 18px;
      font-size: 25px;
      letter-spacing: 10px;
    }
    h3 {
      letter-spacing: 5px;
      text-transform: uppercase;
      font: 20px "Lato", sans-serif;
      color: #111;
    }
    .register{
        background: white;
        color: black;
      padding: 18px;
      font-size: 42px;
      
    }
    </style>
    <body>
      <form action="{{route('login')}}" method="get">
    <div class="bgimg-1">
      <div class="caption">
        <span class="border"><b>TEAMWORK</b></span><br>
        <span class="border1">Lorem ipsum dolor sit, amet conseHJGARG jbnkdrgnj fahhhgrnpernatur ex?</span><br>
        
      
      @if(Route::has('login'))
@auth
<p style="font-size:1vw" class="register"><b>Go Back to<br>
<a href="{{url('/home')}}">Dashboard</a>
@else
<button class="btn" href="{{route('login')}}"><b>LOGIN</b></button><br>
@if (route::has('register'))
<p style="font-size:1vw" class="register"><b>If Not a User</br>
<a href="{{route('register')}}">Register</a> here.
</b></p>
@endif
@endauth
@endif
      </div>
    </div>
    </form>
    </body>
</html>