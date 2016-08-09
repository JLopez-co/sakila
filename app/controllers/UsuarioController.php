<?php

class UsuarioController extends BaseController{
    
    public function getIndex(){
        
        $usuarios = Usuario::paginate(5);
        
        
        $tipo = array("1" => "Cedula de Ciudadania",
                      "2" => "Targeta de Identidad",
                      "3" => "Cedula Extranjera" 
            );
        
        //$usuarios = null;
        
        return View::make("usuario.index",["usuario" => $usuarios],["tipo" => $tipo]);
    }
    
    public function getInsert(){
        
        $tipo = array("1" => "Cedula de Ciudadania",
                      "2" => "Targeta de Identidad",
                      "3" => "Cedula Extranjera" 
            );
        
        return View::make("usuario.insert",array("tipo" => $tipo));
        
    }
    
    public function postIndex(){
        
        $user = new Usuario();
        
        $user->Primer_Nombre =          Input::get("nom1");
        $user->Segundo_Nombre =         Input::get("nom2");
        $user->Primer_Apellido =        Input::get("ape1");
        $user->Segundo_Apellido =       Input::get("ape2");
        $user->Direccion_Residencia =   Input::get("dire");
        $user->Tel_Residencia =         Input::get("tel");
        $user->Celular =                Input::get("cel");
        $user->User_Name =              Input::get("user");
        $user->Password =               Input::get("pass");
        
        if(Input::get("activo") != null){
            
            $user->Activo = 1;
        }else{
            $user->Activo = 0;
        }
        
        $user->Tipo_Documento = Input::get("tipoD");
        $user->Documento = Input::get("docu");
        
        $user->save();
        
        
        return Redirect::to("usuario/index");
        
    }
    
    public function getBusqueda(){
        
        $usuarios = Usuario::select("Primer_Nombre","Segundo_Nombre","Id_Usuario")
                ->wherein("Id_Usuario",array(1,2,4,7))
                ->orderBy("Primer_Nombre","desc")
                ->first();
        
        echo "$usuarios->Primer_Nombre";
        /*foreach ($usuarios as $usuario){    
            
            echo "<pre>";
            echo $usuario->Id_Usuario." ";
            echo $usuario->Primer_Nombre." ";
            echo $usuario->Segundo_Nombre." ";
            echo "</pre>";
            echo "<hr>";
            
        }*/
        
    }
    
    
}
