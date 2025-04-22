<section id="hero" class="min-vh-100 d-flex align-items-center text-center bg-dark"><!--HERO-->
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-white text-uppercase fw-semibold display-1">Bienvenido al Portafolio Docente</h1>
              <h5 class="text-white mt-3 mb-4">Accede o crea tu cuenta para comenzar</h5>
              
              <div class="d-flex justify-content-center align-items-center gap-3">
                <button class="btn btn-outline-success btn-white" onclick="document.getElementById('loginModal').style.display='block'">Iniciar Sesión</button>
                <button class="btn btn-outline-secondary btn-white" onclick="document.getElementById('registerModal').style.display='block'">Registrarse</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <!-- Modal Login -->
      <div id="loginModal" class="modal-custom">
        <form class="modal-content animate" action="action_page.php" method="post">
          <div class="imgcontainer">
            <img src="./assets/img/icono logo.png" alt="Avatar" class="avatar">
          </div>
    
          <div class="container">
            <label for="uname"><b>Usuario</b></label>
            <input type="text" placeholder="Ingrese Usuario" name="uname" required>
    
            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese Contraseña" name="psw" required>
    
            <button type="submit">Login</button>
            <label><input type="checkbox" checked="checked" name="remember"> Recordarme</label>
          </div>
    
          <div class="container bg-light">
            <button type="button" class="cancelbtn" onclick="document.getElementById('loginModal').style.display='none'">Cancelar</button>
            <span class="psw">¿Olvidaste <a href="#">tu contraseña?</a></span>
          </div>
        </form>
      </div>
    
      <!-- Modal Registro -->
      <div id="registerModal" class="modal-custom">
        <form class="modal-content animate" action="action_page.php" method="post">
          <div class="container">
            <h1>Registrarse</h1>
            <p>Complete el formulario para crear una cuenta.</p>
            <hr>
    
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Ingrese Email" name="email" required>
    
            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese Contraseña" name="psw" required>
    
            <label for="psw-repeat"><b>Repita la Contraseña</b></label>
            <input type="password" placeholder="Repita la Contraseña" name="psw-repeat" required>
    
            <label><input type="checkbox" checked="checked" name="remember"> Acepto términos y condiciones</label>
    
            <div class="clearfix">
              <button type="button" class="cancelbtn" onclick="document.getElementById('registerModal').style.display='none'">Cancelar</button>
              <button type="submit" class="signupbtn">Registrarse</button>
            </div>
          </div>
        </form>
      </div>