@extends('layouts.app')

@section('content')

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


    <link rel=StyleSheet href="css\bootstrap.min.css" type="text/css" media="screen">
    <script src="js\bootstrap.min.js" type="text/javascript"> </script>
    <script src="js\jquery.js" type="text/javascript"> </script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js\fontawesome-all.js"></script>
    

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-body">
                 <div class="panel-heading">   
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                        </div>
                    @endif


                    
                    
                        <table  class="table table-hover table-condensed">
                          <thead>     
                            
                            <tr>
                                <th>Dni</th> 
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Teléfono</th>  
                                <th>Área de Conocimiento</th> 
                                <th>Ciudad de Procedencia</th> 
                                <th>Estudiante Actual</th> 
                                <th>Nivel que ejerce</th> 
                                
                            </tr>


                          </thead>
                            
                            @foreach($per as $Personas)
                              <tr> 
                                <td>{{ $Personas->dni }}</td>
                                <td>{{ $Personas->nombre }}</td>
                                <td>{{ $Personas->apellido }}</td>
                                <td>{{ $Personas->email }}</td>
                                <td>{{ $Personas->edad }}</td>
                                <td>{{ $Personas->telefono }}</td>
                                <td>{{ $Personas->areaConocimiento }}</td>
                                <td>{{ $Personas->ciudadProcedencia }}</td>
                                <td>{{ $Personas->estudianteActual }}</td>
                                <td>{{ $Personas->nivelEjerce }}</td>
                                
                                <td><!--<input type="button" name="Modificar" value="Modificar" style="font-size: 16px;" class="btn btn-primary form-control">--> 

                                    <!--a href="{{route('Listado.edit', $Personas->id)}}">Editar</a>-->                                    
                                    {{ Form::open(['route' => ['Listado.edit', $Personas->id], 'method' => 'get']) }} 



                                    <button type="submit" name="editar" style="font-size: 16px;" class=" btn btn-primary form-control">Editar </button>

                                    {{ Form::close() }}



                                    {{ Form::open(['route' => ['Listado.destroy', $Personas->id], 'method' => 'delete']) }} 



                                    <button type="submit" name="eliminar" style="font-size: 16px;" class=" btn btn-primary form-control">Eliminar </button>

                                    {{ Form::close() }}

                                 </td>
                                    
                                          


                               
                              </tr>
                            @endforeach  
                                
                        </table>
                         <!--BOTON AGREGAR--> 
                        <div style="position: relative;"> 
                            <button style="font-size: 16px;" class="btn btn-primary" data-toggle="modal" data-target="#ventanaAgregar">Agregar </button>
                        </div>          
                                <div class="modal fade" id="ventanaAgregar" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"  data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                                <h4 class="modal-title">REGISTRAR NUEVO USUARIO</h4>
                                            </div>
                                             <div class="modal-body">


                                                <form   action="{{url('/inserta')}}"  method="post" id="form1" class="form">

                                                   
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                                    <input type="text" id="apellido" name="apellido" class="form-control"  placeholder="Apellidos"  required>
                                                    </div>
                                                  
                                                  
                                                    <br>
                                                    
                                                    
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres" required>
                                                    </div>
                                                    <br>
                                                    
                                                    
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-address-card"></i></span>
                                                    <input type="text" class="form-control" name="dni" id="dni" placeholder="Dni" required>
                                                    </div>
                                                    
                                                   
                                                    <br>
                                                    
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" required>
                                                    </div>
                                                    <br>
                                                    
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                                    <input type="date" class="form-control" name="edad" id="edad" placeholder="Edad" required>
                                                    </div>
                                                    <br>
                                                    
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-phone-square"></i></span>
                                                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
                                                    </div>
                                                    <br>
                                                    
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-globe-americas"></i></span>
                                                    <input type="text" name="ciudadP" id="ciudadP" placeholder="Ciudad de procedencia" class="form-control" required>
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-university"></i></span>
                                                    <input type="text" name="areaCon" id="areaCon" placeholder="Area de conocimiento" class="form-control " required>
                                                    </div>

                                                    
                                                    <br>

                                                    <b><p>Nivel/es en el/los que ejerces:</p></b>
                                                    <div class="center-on-page">
                  
                                                      <input type="radio" name="optradio" id="rb1" value="inicial" />
                                                      <label for="rb1">Inicial</label> 
                                                      <input type="radio" name="optradio" id="rb2" value="primario"/> 
                                                      <label for="rb2">Primario</label>
                                                      <input type="radio" name="optradio" id="rb3" value="secundario" /> 
                                                      <label for="rb3">Secundario</label>
                                                      <input type="radio" name="optradio" id="rb4" value="terciario" />
                                                      <label for="rb4">Terciario</label>
                                                      <input type="radio" name="optradio" id="rb5" value="universitario" />
                                                      <label for="rb5">Universitario</label>
                                                      <input type="radio" id="idradio" name="optradio" value="otro">
                                                      <label for="idradio">Otro</label>
                                                      <input type="hidden" name="otro" id="campoOtro">
                                                    </div>

                                                    <hr class="style1">
                                                    
                                                    <b>Concurriras en condicion de:</b>
                                                    {{Form::select('categorias',$cat)}}
                                                    
                                                    <hr class="style1">

                                                    <b>Sos actualmente estudiante del Sedes/ docente del Sedes o Pío XII?</b>
                                                    <select data-style="btn-primary"  name="estudianteActual" required>
                                                        <option value="si">Si</option> 
                                                        <option value="no">No</option>
                                                    </select>

                                                    <hr class="style1">

                                                    <button type= "submit" id="sub" name="nsubmit" class="btn btn-primary">Registrar</button>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 


                                                    
                                                </form>





                                            </div>
                                        </div>
                                    </div>
                                </div>
                           

                    {{ $per->links() }}


                </div>
            </div>
        </div>
    </div>
</div>

                                

@endsection
