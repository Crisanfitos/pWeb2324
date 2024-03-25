
<head>
    <link rel="stylesheet" href="http://pWeb2324.test/themes/css/loginRegisterForms.css">
</head>

<form action="/action_page.php">
    <div class="container">
      <h1>Regístrate como Consumidor</h1>
      <p>Por favor rellene estos datos para crear su cuenta.</p>
      <hr>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Introduzca su correo" name="email" id="email" required>
  
      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Introduzca su Contraseña" name="psw" id="psw" required>
  
      <label for="psw-repeat"><b>Repita su contraseña</b></label>
      <input type="password" placeholder="Repita su contraseña" name="psw-repeat" id="psw-repeat" required>

      <label for="phone"><b>Número de teléfono</b></label>
      <input type="tel" placeholder="928 123 456" name="phone" maxlength="9" pattern="[0-9]{9}" id="phone" required>

      <hr>

      <p>Al crear una cuenta, acepta nuestros Términos de privacidad.</p>
  
      <button type="submit" class="registerbtn">Register</button>
    </div>
    
  </form>
