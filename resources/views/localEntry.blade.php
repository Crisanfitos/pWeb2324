@extends('generalTemplate')

@section('content')

<head>
    <link rel="stylesheet" href="http://pWeb2324.test/themes/css/entry.css">
</head>


<button class="tablink" onclick="openPage('login', this, 'whitesmoke')" id= "defaultOpen" >Iniciar sesión</button>
<button class="tablink" onclick="openPage('register' , this, 'whitesmoke')" >Registrarse</button>

  <div id="login" class="tabcontent">
    @include('loginLocal')
  </div>
  <div id="register" class="tabcontent">
    @include('registerLocal')
  </div>


<script src="http://pWeb2324.test/js/fullPageTab.js"></script>

@endsection