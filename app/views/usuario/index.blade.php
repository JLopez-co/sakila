<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuarios</title>
        {{HTML::style("bootstrap/bootstrap/css/bootstrap.css")}}
        {{HTML::style("bootstrap/bootstrap/css/usuario.css")}}
    </head>
    <body>
        <header class="col-md-12">
            <hgroup class="col-md-7 col-md-offset-1">
                <h1>SISTEMA MENSA</h1><br>
            </hgroup>
            
        </header>
        <nav class="col-md-6 col-md-offset-1">
            <ul>
                <li>{{HTML::link("usuario/index","Usuario")}}</li>
                <li>{{HTML::link("cliente/index","Cliente")}}</li>
            </ul>
        </nav>
        <section class="col-md-12" id="registro">
            <article class="col-md-8 col-md-offset-2">
                <h2>Registrar Usuario</h2>
                {{Form::open(array("class" => "form-horizontal"))}}
                <fieldset>
                    <div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="nom1" style="text-align: left;">Primer Nombre</label>
                            <div>
                                {{Form::text(
                                                "nom1",null,
                                                ["placeholder" => "Nombre 1",
                                                 "id" => "nom1",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="nom2">Segundo Nombre</label>
                            <div>
                                {{Form::text(
                                                "nom2",null,
                                                ["placeholder" => "Nombre 2",
                                                 "id" => "nom2",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="ape1">Primer Apellido</label>
                            <div>
                                {{Form::text(
                                                "ape1",null,
                                                ["placeholder" => "Apellido 1",
                                                 "id" => "ape1",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="ape2">Segundo Apellido</label>
                            <div>
                                {{Form::text(
                                                "ape2",null,
                                                ["placeholder" => "Apellido 2",
                                                 "id" => "ape2",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="dire">Direccion Residencia</label>
                            <div>
                                {{Form::text(
                                                "dire",null,
                                                ["placeholder" => "Direccion",
                                                 "id" => "dire",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="tel">Tel Residencia</label>
                            <div>
                                {{Form::text(
                                                "tel",null,
                                                ["placeholder" => "Telefono",
                                                 "id" => "tel",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="cel">Celular</label>
                            <div>
                                {{Form::text(
                                                "cel",null,
                                                ["placeholder" => "Celular",
                                                 "id" => "cel",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-7">
                            
                            
                                <label class="col-md-3 control-label" for="activo">Activo</label>
                                
                                {{Form::checkbox("activo",0,false,["id" => "activo-0"])}}
                        </div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="user">Nombre Usuario</label>
                            <div>
                                {{Form::text(
                                                "user",null,
                                                ["placeholder" => "Usuario",
                                                 "id" => "user",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="pass">Contraseña</label>
                            <div>
                                {{Form::password(
                                                "pass",null,
                                                ["placeholder" => "Contraseña",
                                                 "id" => "pass",
                                                 "class" => "form-control input-md general"
                                                 
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        
                        
                        <div class="form-group col-md-7">
                            
                                <label class="col-md-9 control-label" for="tipoD">Tipo de Documento</label>
                                
                                {{Form::select("tipoD",$tipo,[
                                                 "id" => "tipoD",
                                                 "class" => "form-control input-md general"
                                                ])}}
                            
                            
                        </div>
                        
                        
                        <div class="form-group col-md-6">
                            
                            <label class="col-md-9 control-label" for="docu">Documento</label>
                            <div>
                                {{Form::text(
                                                "docu",null,
                                                ["placeholder" => "Documento",
                                                 "id" => "docu",
                                                 "class" => "form-control input-md general"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="col-md-9 control-label" for="Button"></label>
                            <div class="col-md-4">

                                <button id="Button" name="Button" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </div>
                    
                </fieldset>
                {{Form::close()}}
            </article>
        </section>
        <section class="col-md-12" id="listado">
            <article class="col-md-7 col-md-offset-2">
                <h2>Usuarios Registrados</h2>
                @if($usuario != null)
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Documento</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuario as $user)
                        <tr>
                            <td>{{$user->Primer_Nombre}}  {{$user->Segundo_Nombre}}</td>
                            <td>{{$user->Primer_Apellido}}  {{$user->Segundo_Apellido}}</td>
                            <td>{{$user->Documento}}</td>
                            <td>{{$user->User_Name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$usuario->links()}}
                @endif
                @if($usuario == null)
                    <div id="no">
                        <p>No se encuantran Usuarios Registrados</p>
                    </div>
                @endif
                
            </article> 
        </section>
        <footer>
            
        </footer>
    </body>
</html>
