<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Persona;
use App\User;
use Illuminate\Support\Facades\Session;

class PersonaController extends Controller
{
    public function selectcategoria(){
    	
    	$cat=categoria::pluck('descripcion','id');
    	return view ('registro', compact('cat'));

    }

    public function agregar (Request $request){



    //validar contra la base si el dni y el correo ya existe

        
        $personas=Persona::where('dni',$request->dni)->get();
        
            if($personas->count() == 0 ) { //no existe

                $personas=Persona::where('email',$request->email)->get();
                    
                        if($personas->count() == 0 ) {   

                         $personas= new Persona;
                            $personas-> dni= $request->dni;
                            $personas-> nombre= $request->nombre;
                            $personas-> apellido= $request->apellido;
                            $nivel = $request->optradio;
                            if ($nivel == 'otro') {
                                $nivel = $request->otro;
                            }
                            $personas-> nivelEjerce = $nivel;
                            $personas-> email= $request->email;
                            $personas-> edad= $request->edad;
                            $personas-> telefono= $request->telefono;
                            $personas-> areaConocimiento = $request->areaCon;
                            $personas-> ciudadProcedencia = $request->ciudadP;
                            $personas-> estudianteActual = $request->estudianteActual;
                            $personas->categoria_id= $request->categorias;
                            //$users-> password= bcrypt($request->password);
                            $personas->save();
                            
                            
                            $email=$request->email;
                            $nombre=$request->nombre;

                            try { 
                                        // Send mail to User his Password
                                        \Mail::send('emails.confirmation_code', ['email' => $email, 'nombre' => $nombre], function ($m) use ($email,$nombre) {
                                            $m->from('formulario@sedessapientiae.com', 'Sedes Sapientiae');
                                            $m->to($email, $nombre)->subject('Asunto del mensaje');
                                     });
                                } 
                                catch (Exception $e) 
                                   { 
                                        abort(303); 
                         
                                    }
                           
                            return redirect('home');
                        }           

                        else
                        {
                            Session::flash('mensaje1', "El correo ya se encuentra registrado"); 
                            return redirect ('registro');
                        }       
                    
            }       
            
                                else
                                {
                                    Session::flash('mensaje', "El usuario ya se encuentra registrado"); 
                                    return redirect ('registro');
                                }   

                 
    


  }

}
