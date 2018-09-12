<!DOCTYPE html>
<html>
<head>
	
	<script src="js\jquery.js" type="text/javascript"> </script>
	<link rel=StyleSheet href="css\bootstrap.css" type="text/css" media="screen">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js\fontawesome-all.js"></script>
	
	<title>Modificar usuario</title>
</head>
<body>
<form   action=""  method="post" id="form1" class="form">
			 					 
			 					  
			 					<div class="container-fluid">
									<div class="row">
									<div class="col-md-12" style="text-align: center; background-color:#3B579D;">
						               	<a href="http://www.sedessapientiae.edu.ar/index-2.htm">
						               		<img class="imagen" src="img/cabecera1.png" >
						               	</a>					
									</div>
								</div>
			 					



			 					<br>

			 					<div class="container">
							      <div class="col-md-10 col-md-offset-1">
							        
							        <div class="form-row">
							          <div class="form-group col-md-6">
							            <div class="input-group">
							         	<span class="input-group-addon"><i class="fas fa-user"></i></span>
							            <input type="text" id="apellido" name="apellido" class="form-control"  placeholder="Apellidos" value="{{ $Personas->apellido }}" required>
							         	</div>
							     </div>
							          
							         <div class="form-group col-md-6">
							         	<div class="input-group">
							         	<span class="input-group-addon"><i class="fas fa-user"></i></span>
							            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres" value="{{ $Personas->nombre }}" required>
							         	</div>
							         </div>
							        </div>
							        
							        <div class="form-row">
							        <div class="form-group col-md-6">
							         	<div class="input-group">
							          		<span class="input-group-addon"><i class="fas fa-address-card"></i></span>
							         	<input type="text" class="form-control" name="dni" id="dni" placeholder="Dni" value="{{ $Personas->dni }}" required>
							        	</div>
							        </div>
							        
							        <div class="form-group col-md-6">
							          	<div class="input-group">
							          		<span class="input-group-addon"><i class="fas fa-envelope"></i></span>
							          	<input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" value="{{ $Personas->email }}" required>
							        	</div>
							        </div>
							        </div>
							        
							        <div class="form-row">
							          <div class="form-group col-md-6">
							            <div class="input-group">
							            <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
										<input type="date" class="form-control" name="edad" id="edad" placeholder="Edad"  value="{{ $Personas->edad }}" required>
							            </div>
							          </div>
							          
							        
							          <div class="form-group col-md-6">

							            <div class="input-group">
							            <span class="input-group-addon"><i class="fas fa-phone-square"></i></span>
							            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" value="{{ $Personas->telefono }}" required>
							          	</div>
							          </div>
							        </div>
							        
							        <div class="form-row">
							          <div class="form-group col-md-6">
							       		<div class="input-group">
							            <span class="input-group-addon"><i class="fas fa-globe-americas"></i></span>
										<input type="text" name="ciudadP" id="ciudadP" placeholder="Ciudad de procedencia" class="form-control" value="{{ $Personas->ciudadProcedencia }}" required>
							    		</div>
							    	</div>
							        
							        <div class="form-group col-md-6">
								        <div class="input-group">
							            <span class="input-group-addon"><i class="fas fa-university"></i></span>
										<input type="text" name="areaCon" id="areaCon" placeholder="Area de conocimiento" class="form-control" value="{{ $Personas->areaConocimiento }}" required>
										</div>
									</div>
									</div>


									<!--<p>Nivel/es en el/los que ejerces:</p>
										<div class="center-on-page">
										  <input type="radio" name="optradio" checked="checked" value="inicial"/>
										  <label for="optradio">Inicial</label>
										 
										  <input type="radio" name="optradio" value="primaria"/>
										  <label for="optradio">Primario</label>
										 
										
										  <input type="radio" name="optradio" value="secundaria">
										  <label>Secundario</label>
											
										
										  <input type="radio" name="optradio" value="terciario">
										  <label>Terciario</label>
										
										  <input type="radio" name="optradio" value="universitario">
										  <label>Universitario</label>
										  
										  <input type="radio" id="idradio" name="optradio" value="otro">
										  	<label>Otro:</label>
										  	<input type="hidden" name="otro" id="campoOtro" >
										   
										</div>-->
										
									

										<b><p>Nivel/es en el/los que ejerces:</p></b>
										<div class="center-on-page">
	  
										  <input type="radio" name="optradio" id="rb1" value="{{ $Personas->nivelEjerce }}" />
										  <label for="rb1">Inicial</label> 
										  <input type="radio" name="optradio" id="rb2" value="{{ $Personas->nivelEjerce }}"/> 
										  <label for="rb2">Primario</label>
										  <input type="radio" name="optradio" id="rb3" value="{{ $Personas->nivelEjerce }}" /> 
										  <label for="rb3">Secundario</label>
										  <input type="radio" name="optradio" id="rb4" value="{{ $Personas->nivelEjerce }}" />
										  <label for="rb4">Terciario</label>
										  <input type="radio" name="optradio" id="rb5" value="{{ $Personas->nivelEjerce }}" />
										  <label for="rb5">Universitario</label>
	  									  <input type="radio" id="idradio" name="optradio" value="{{ $Personas->nivelEjerce }}">
	  									  <label for="idradio">Otro</label>
	  									  <input type="hidden" name="otro" id="campoOtro">
  										</div>
  									
									
									<hr class="style1">

									
									<b>Concurriras en condicion de:</b>
									
									
									<hr class="style1">

									
									
									<b>Sos actualmente estudiante del Sedes/ docente del Sedes o Pío XII?</b>
									<select data-style="btn-light"  name="estudianteActual" required>
										<option value="si">Si</option> 
			    						<option value="no">No</option>
									</select>
										
									<hr class="style1">

							        

									 <button type= "submit" id="sub" name="nsubmit" class="btn btn-light">Registrar</button>
					      			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					      		
					      		
					      		</form>
					     	</div>
					   	 </div>
					  </div>

					
					  			

					  			<script type="text/javascript">
											$("input[name='optradio']").click(function() {  
										        if($("#idradio").is(':checked')) {  
										            
										            $('#campoOtro').attr('type','text');
										            
										   	} 
										    else 
										    {  
										            $('#campoOtro').attr('type','hidden');  
										    }  
										    
											});  
								</script>
</body>
</html>