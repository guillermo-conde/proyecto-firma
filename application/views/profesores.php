<!doctype html>
    <?=$this->load->view('includes/head', '', true) ?>
    <body>

       
            <!-- ========== Menu Superior ========== -->
            <?=$this->load->view('includes/menu_sup', '', true) ?>
            

            <!-- ========== Contenido ========== -->      

      <!-- ========== El siguiente codigo nos sirve como contenedor y ajustar de manera automatica una interfaz ========== --> 
            <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               <div class="content-header">
                 <div class="container-fluid">
                   <div class="row mb-2">
                     <div class="col-sm-12">
                       <!-- ========== El siguiente codigo es de estilos y sirve de manera similar al anterior solo que ajustando textos ========== --> 
  <!-- ========== Style ========== -->
            <style type="text/css">
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
  }
body{
    background: #F5F3F4;
  }
  .container{
    width: 200%;
    height: 100vh;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
   
  .login-container{
    display: flex;
    width: 650px;
    height: auto;
    background: #fff;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .2);
  }
   
  .register, .login{
    flex: 1;
  }
   
  .register{
    padding: 40px;
    position: relative;
  }
   
  .register h2{
    color: #797979;
    margin-bottom: 30px;
  }
  .register h3{
    color: #797979;
    margin-bottom: 30px;
  }
   
  .register input{
    width: 100%;
    padding: 5px;
    font-size: 16px;
    margin-bottom: 25px;
    border-top-style: none;
    border-left-style: none;
    border-right-style: none;
    border-bottom: 1px solid #a8a8a8;
    color: #333;
  }
   
  .register input:active,
  .register input:focus{
    outline: none;
  }
   
  .register .submit{
    width: auto;
    padding: 10px;
    background: #B1A7A6;
    color: #fff;
    font-size: 12px;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    cursor: pointer;
  }
   
  .register::after{
    content: '>';
    position: absolute;
    width: 25px;
    height: 25px;
    top: 50%;
    right: -23px;
    padding: 10px;
    text-align: center;
    font-size: 19px;
    background: #f1f1f1;
    border-radius: 50%;
    transform: translateY(-50%);
    box-shadow: -1px 1px 3px 1px rgba(0, 0, 0, .2);
    color: #7c7c7c;
  }
   
  .login{
    background-image: linear-gradient(to bottom right, #E5383B, #E5383B);
    padding: 40px;
  }
   
  .login h2{
    color: #fff;
    margin-bottom: 45px;
  }
   
  .login button i{
    position: absolute;
    top: 12px; 
    left: 12px;
  }
   
  .login button{
    width: 100%;
    margin: 15px 0px;
    padding: 10px;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    cursor: pointer;
    
  }
   
  .login .fb{
    background: #660708;
    border-style: none;
    color: #fff;
  }
   
  .login .tw{
    background: #A4161A;
    border-style: none;
    color: #fff;
  }
   
  .login .correo{
    background: #33d4ce;
    border-style: none;
    color: #fff;
  }
   
  @media only screen and (max-width: 540px){
    .login-container{
      display: block;
    }
   
    .register, .login{
      flex: none;
    }
   
    .register::after{
      top: unset;
      bottom: -25px;
      left: 50%;
      transform: translateX(-50%) rotate(90deg);
    }
  }
</style>
            <!-- ========== El siguiente codigo superpone una imagen ========== --> 
            <!-- <DIV STYLE="position:absolute; top:50px; left:440px; visibility:visible z-index:1"> --> <!--Colocar .jpg en posicion fija-->
            <DIV STYLE="position:absolute; visibility:visible z-index:1">
<center><IMG height="170" SRC="https://www.arcgis.com/sharing/rest/content/items/00a17645a1b8400593caf1aa3dfd71ff/resources/docentes-png-1__1552002937345__w800.png" width="550"></center>
</div>

<DIV STYLE="position:absolute; top:650px; left:600px; visibility:visible z-index:1">
<IMG height="200" SRC="https://i.pinimg.com/originals/a8/0d/11/a80d11b75013bc88e762e7befa4a4b1f.png" width="300">
</div>
</div>
<!-- ========== Este codigo ayuda a centrar una imagen y colocarla de manera normal ========== --> 
            <center>
      <img src="https://fondosmil.com/fondo/547.jpg" width="1300" height="200" ></center>
<!-- ========== El siguiente es la parte de contenido en este caso un formulario ========== --> 

	<!--Contenido-->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10 col-xl-8">

				<!-- Header -->
				<div class="header mt-md-5">
					<div class="header-body">
						<div class="row align-items-center">
							<div class="col">
                <div class="col-12">

								<!-- Title -->
								<h1 class="header-title">
							<center><font color="navy">???????????????????????? Alta de docente ????????????????????????</font><br> </center>
								</h1>

							</div>
						</div> <!-- / .row -->

					</div>
				</div>

				<!-- Form -->
				<form class="" action="profesores" method="post">

					<div class="row">
						<div class="col-7">

							<!-- First name -->
							<div class="form-group">

								<!-- Label -->
								<label>
									Matricula
                  <!-- Form text -->
								<small class="form-text text-muted">
Ingrese su Matricula						</small>
								</label>

								<!-- Input -->
								<input type="text" name="Matricula" id="Matricula" class="form-control">
								<label class="danger"><?=form_error('Matricula')?></label>

							</div>

						</div>
						<div class="col-6">

							<!-- Last name -->
							<div class="form-group">

								<!-- Label -->
								<label>
									Nombre
                  <!-- Form text -->
								<small class="form-text text-muted">
Ingrese su nombre(s)							</small>
								</label>

								<!-- Input -->
								<input type="text" name="Nombre" id="Nombre" class="form-control">
								<label class="danger"><?=form_error('Nombre')?></label>
							</div>

						</div>

						<div class="col-6">

							<!-- Last name -->
							<div class="form-group">

								<!-- Label -->
								<label>
									Apellidos
                  <!-- Form text -->
								<small class="form-text text-muted">
Ingrese sus apellidos						</small>
								</label>

								<!-- Input -->
								<input type="text" name="Apellidos" id="Apellidos" class="form-control">
								<?=form_error('Apellidos')?>
							</div>

						</div>

						<div class="col-6">

							<!-- Email address -->
							<div class="form-group">

								<!-- Label -->
								<label class="mb-1">
									Email
								</label>

								<!-- Form text -->
								<small class="form-text text-muted">
Ingrese su correo electronico							</small>

								<!-- Input -->
								<input type="Email" name="Email" id="Email" class="form-control">

							</div>
              <!-- Confirm new password -->
							<div class="form-group">

<!-- Label -->
<label>
  Confirme su Email
  <!-- Form text -->
  <small class="form-text text-muted">
Repetir correo electronico						</small>
</label>

<!-- Input -->
<input type="Email" name="Email1" id="Email1"  class="form-control">

</div>

						</div>

					<!-- Divider -->
					<hr class="mt-4 mb-5">

					<div class="row">
						<div class="col-6 col-md-4 order-md-3">

									</ul>

								</div>
							</div>

						</div>
						<div class="col-6">

							<!-- Password -->
							<div class="form-group">

								<!-- Label -->
								<label>
									Contrase??a
                  <!-- Form text -->
								<small class="form-text text-muted">
Escriba su contrase??a						</small>
								</label>

								<!-- Input -->
								<input type="password" name="contrase??a" id="contrase??a" class="form-control">

							</div>

							<!-- Confirm new password -->
							<div class="form-group">

								<!-- Label -->
								<label>
									Confirmar contrase??a
                  <!-- Form text -->
								<small class="form-text text-muted">
Repetir contrase??a						</small>
								</label>

								<!-- Input -->
								<input type="password" name="contrase??a1" id="contrase??a1"  class="form-control">

							</div>

							<!-- Submit -->
							<button type="submit" class="btn btn-danger">
								Resgistrarse
							</button> 
              <!-- exit -->
							<button type="button" value="P??gina anterior" onClick="history.go(-1);" class="btn btn-primary">
								Salir
							</button> 
              
								<!-- Form text -->
								<small class="form-text text-muted">
                <a class="already" href="login">
??Ya tienes una cuenta? ??Pues que esperas? Inicia Sesion</a></form>							</small>


						</div>
					</div> <!-- / .row -->

				</form>

			</div>
		</div> <!-- / .row -->
	</div>

	<!--Fin Contenido-->


</div> <!-- / .main-content -->

<!-- JAVASCRIPT
    ================================================== -->
<?=$this->load->view('includes/base_js','',TRUE)?>

</body>
</html>

