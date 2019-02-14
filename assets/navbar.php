<header id="header" class="">
	<nav  class="navbar navbar-default navbar-fixed-top" role="navigation" id="menu">
		<div class="container-fluid" id="contenedor">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="glyphicon glyphicon-menu-hamburger"  style="color: white;" aria-hidden="true"></span></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img id="logo" class="img-responsive" src="assets/img/logofinal.png" alt="">
                </a>
				
			</div>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/" title=""><span class="glyphicon glyphicon-home" style="color: white"></span> Home</a></li>					
					
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" title="">Servicios <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu submenu" id="serv-menu">
							<li> <h3 style="color: #fff !important;">Servicios</h3> </li>
							<hr >
							<li> <h4> Servicios Electricos</h4> </li>
                       	    <li><a href="servicios.php">Comercial</a></li>
                        	<li><a href="servicios.php">Industrial</a></li>
                        	<li><a href="servicios.php">Residencial</a></li>
                        	<li> <h4> Permisos Electricos</h4> </li>
                       	    <li><a href="permisos.php">Planos</a></li>
                        	<li><a href="permisos.php">Permisos Nuevos</a></li>
                        	<li><a href="permisos.php">Permiso Existente</a></li>
                        	<li><a href="permisos.php">Violacion </a></li>
                        	<li> <h4> Partes y Componentes</h4> </li>
                        	<li><a href="tel:+1305300477" style="color: #FED32F !important; font-size: 20px;" title="" id="telefono"><span class="glyphicon glyphicon-earphone" style="color: rgb(2,76,111) !important; background-color: #fff !important; border-radius: 50% ;  padding: 3px; " ></span> (305) 300-477</a></li>
                        </ul>
					</li>
					<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Contacto <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" id="menu2">
                            <section class="col-sm-10 col-sm-offset-1">
				                <form id="fcontact">
				                    <div class="form-group">   				                    	
				                        <input class="form-control" type="text" name="name" placeholder="Name*" aria-describedby="basic-addon3" required>
				                    </div>
				                    <div class="form-group">    
				                        <input class="form-control" type="text" name="phone" placeholder="Mobile phone*" required>
				                    </div>
				                    <div class="form-group">
				                        <input class="form-control" type="email" name="email" placeholder="Mail*" required>
				                    </div>
				                    <div class="form-group">
									 
									  <select class="form-control" id="servicio">
									  	<option value="null">Seleciona el servicio</option>
									    <option value="S. Electricos">Servicios Electricos</option>
									    <option value="P. Electricos">Permisos Electricosl</option>
									    <option value="Componenetes">Componentesl</option>					    
									  </select>
									</div>       
				                    
				                    <div class="form-group">  
				                        <textarea class="form-control" name="message" rows="8" placeholder="Message*" required></textarea>
				                    </div>
				                    <div class="text-center">
				                        <button class="btn" type="submit" style="background-color: #FED32F; color: #023D7F	">            
				                            Contact Now <i class="fa fa-paper-plane"></i>
				                        </button>
				                    </div>
				                </form>
                        </ul>
                    </li>

					<li><a href="tel:+1305300477" title="" id="telefono"><span class="glyphicon glyphicon-earphone" style="color: rgb(2,76,111) !important; background-color: #fff !important; border-radius: 50% ;  padding: 3px; " ></span> (305) 300-477</a></li>
				</ul>
				
			</div>
			
		</div>
		

	</nav>
	
	<!-- Respuesta -->
            <div id="respuesta" style="display: none"></div>
    <!-- /Respuesta -->
</header><!-- /header -->
