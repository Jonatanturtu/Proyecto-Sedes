@extends('layouts.app')

@section('content')

<html>
<head>
	
	
	
<title>Modificar usuario</title>



</head>

<body>
<form   action="{{route('Listado.update', $Personas->id)}}"  method="post" id="form1" class="form">

								
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="_method" value="PUT">

			 					 
			 			  
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


							
									
								<div class="form-group col-md-8">
									<b><p>Nivel/es en el/los que ejerces:</p></b>
									<div class="center-on-page">
  
									  <input type="radio" name="optradio" id="rb1" value="Inicial" />
									  <label for="rb1">Inicial</label> 
									  <input type="radio" name="optradio" id="rb2" value="Primario"/> 
									  <label for="rb2">Primario</label>
									  <input type="radio" name="optradio" id="rb3" value="Secundario" /> 
									  <label for="rb3">Secundario</label>
									  <input type="radio" name="optradio" id="rb4" value="Terciario" />
									  <label for="rb4">Terciario</label>
									  <input type="radio" name="optradio" id="rb5" value="Universitario" />
									  <label for="rb5">Universitario</label>
  									  <input type="radio" id="idradio" name="optradio" value="Otro">
  									  <label for="idradio">Otro</label>
  									  <input type="hidden" name="otro" id="campoOtro">
									

  									
									
									<hr class="style1">

									
									<b>Concurriras en condicion de:</b>
                                    {{Form::select('categorias',$cat)}}
									</div>
									
									<hr class="style1">

									
									
									<b>Sos actualmente estudiante del Sedes/ docente del Sedes o Pío XII?</b>
									<select data-style="btn-light"  name="estudianteActual" required>
										<option value="{{ $Personas->estudianteActual }}">Si</option> 
			    						<option value="{{ $Personas->estudianteActual }}">No</option>
									</select>
										
									<hr class="style1">

							        

									 <button type= "submit" id="sub" name="nsubmit" class="btn btn-primary">Registrar</button>
					      			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					      		</div>
					      		
					      		</form>
					     	</div>
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

@endsection