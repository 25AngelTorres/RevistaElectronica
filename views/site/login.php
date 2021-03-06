<?php session_start();
      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Usuario.php');
      include ('../../controllers/siteController/LoginController.php');
      include ('../../libs/Er.php');
      include ('../layouts/url.php');

      $login = new LoginController();
      if (isset($_POST['email'])) {
        $login->validaUsuario($_POST);
      }
      
      
      include ('../layouts/header.php');
?>

<!--<body id="page-top" class="index">-->

    <!-- Header -->
    <header id="headerP">
        <div class="container">
            <div class="intro-text">                
            </div>
        </div>
    </header>

   

    <!-- Portfolio Grid Section -->
    <section id="login" class="bg-light-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="<?php echo ($login->muestra_errores)?'alert alert-danger':''; ?> ">
                <?php 
                  if ($login->muestra_errores) {
                    foreach ($login->errores as $key => $value) {
                      echo $value."<br>";
                    }
                  }
                ?>
              </div>
              <form role="form" method="POST" >
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="email" name="email" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" >
                </div>

                <button type="submit" class="btn btn-default">Aceptar</button>
              </form>
            </div>


          </div>
        </div>
      </section>

<?php include ('../layouts/footer.php'); ?>