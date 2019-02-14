<!DOCTYPE html>
<html>
<head>
	<?php include 'assets/head.php'; ?>
	<title> Contacto </title>
	
	
</head>
<body>
	<!--navbar-->
		<?php include 'assets/navbar.php';  ?>
	<!--/navbar-->
	<section id="form" class="fondo-elec">
		
		<div class="container" id="superior" >
			<div class="row">
				<div class="col-md-6" id="text-form">
			<div class="container-fluid">

				
				<img src="assets/img/elec-title.png" alt=" " id="img-serv"> 

				
			</div>
		</div>
		<div class="col-md-6" id="formul">
			<div class="container-fluid" id="fondo-fcontac">
		 		 <form id="fcontact-elec" class="">
		 		 	
		 		 	 <div class="input-group">
		 		 	 	 <span class="input-group-addon">Nombre:</span>		                    	
                        <input class="form-control" type="text" name="name" placeholder="Jhon Doe*" aria-describedby="basic-addon3" required>
                    </div>
                    <div class="input-group">
		 		 	 	 <span class="input-group-addon">Telefono:</span>		
                        <input class="form-control" type="text" name="phone" placeholder="Mobile phone*" required>
                    </div>
                    <div class="input-group">
		 		 	 	 <span class="input-group-addon">Compañia:</span>		                    	
                        <input class="form-control" type="text" name="company" placeholder="Jhon Doe*" aria-describedby="basic-addon3" required>
                    </div>
                    <div class="input-group">
		 		 	 	 <span class="input-group-addon">Direccion:</span>		
                        <input class="form-control" type="text" name="direccion" placeholder="Mobile phone*" required>
                    </div>
                   <div class="input-group">
		 		 	 	 <span class="input-group-addon">Correo:</span>
                        <input class="form-control" type="email" name="email" placeholder="jhondoe@mail.com*" required>
                    </div>
                    <div class="input-group">
		 		 	 	 <span class="input-group-addon">Zip Code:</span>
                        <input class="form-control" type="text" name="code" placeholder="Zip Code*" required>
                    </div>
                              
                    <div class="input-group">
		 		 	 	 <span class="input-group-addon">Descripcion:</span>  
                        <textarea class="form-control" name="message" rows="8" placeholder="Message*" required></textarea>
                    </div>
                     <div class="input-group">		 		 	 	 
					    <input  type="file" id="archivo" name="archivo" value="prueb" class="file-input">
					    
					  </div>
                    <div class="text-center" style= "margin-top: 40px">
                        <button class="btn btn-principal2" type="submit">            
                            Contact Now <i class="fa fa-paper-plane"></i>
                        </button>
                    </div>
                </form>

			</div>
		</div>
		<!-- Respuesta -->
            <div id="respuesta-serv " class="separador" style="display: none"></div>
    <!-- /Respuesta -->
		
				
			</div>
			
		</div>
	</section>
	
	


	<!-- footer-->
	<?php include 'assets/footer.php'; ?>
	<!--footer-->
	<!--script-->
	<?php include 'assets/script.php'; ?>
	<!--/script-->
	
</body>
</html>