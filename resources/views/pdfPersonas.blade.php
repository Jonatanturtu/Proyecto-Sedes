<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Listado de personas</title>
	<link rel="stylesheet" type="text/css" href="css/tablaPdf.css">
</head>
<body>
<table>
            <table class="table table-responsive table-hover" id="tablaUsuarios">     
                   <thead>
                        <tr class="info">
                            <th>Dni</th> 
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Teléfono</th>  

                            
                        </tr>
                    </thead>
                
                <tbody> 
                    
                    @foreach($personas as $Personas)
                    <tr> 
                        <td>{{ $Personas->dni }}</td>
                        <td>{{ $Personas->nombre }}</td>
                        <td>{{ $Personas->apellido }}</td>
                        <td>{{ $Personas->email }}</td>
                        <td>{{ $Personas->edad }}</td>
                        <td>{{ $Personas->telefono }}</td>               
                    </tr>

                        @endforeach 
                </tbody>          
            
            </table>

</body>
</html>