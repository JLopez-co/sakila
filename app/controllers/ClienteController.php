<?php


class ClienteController extends BaseController{
    
    public function getIndex(){
        
        /*$cliente = DB::table("Cliente")->join("Usuario","Cliente.Id_Usuario","=","Usuario.Id_Usuario")
                ->select("Primer_Nombre + ' ' + Segundo_Nombre as Nombres",
                         "Primer_Apellido + ' ' + Segundo_Apellido as Apellidos","Documento","User_Name")
                ->orderBy("Primer_Apellido","desc")
                ->get(); */
        
        
        $cliente = DB::select("Select CONCAT(Primer_Nombre ,' ', Segundo_Nombre) as Nombres, CONCAT(Primer_Apellido ,' ', Segundo_Apellido) as Apellidos, "
                . "Documento, User_Name FROM Cliente c INNER JOIN Usuario u ON "
                . "c.Id_Usuario = u.Id_Usuario ORDER BY Apellidos");
        
        $tipo = array("1" => "Cedula de Ciudadania",
                      "2" => "Targeta de Identidad",
                      "3" => "Cedula Extranjera" 
            );
        //$cliente = null;
        
        return View::make("cliente.index",["cliente" => $cliente],["tipo" => $tipo]);
    }
    
    public function getInsert(){
        
        $tipo = array("1" => "Cedula de Ciudadania",
                      "2" => "Targeta de Identidad",
                      "3" => "Cedula Extranjera" 
            );
        
        return View::make("cliente.insert",array("tipo" => $tipo));
        
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
        
        $clie = new Cliente();
        
        $clie->Direccion_Laboral = Input::get("direccion");
        $clie->Telefono_Oficina = Input::get("telOf");
        $clie->Id_Usuario = $user->Id_Usuario;
        
        $clie->save();
        
        return Redirect::to("cliente/index");
        
    }
    
}
