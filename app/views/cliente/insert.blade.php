<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar cliente</title>
        {{HTML::style("bootstrap/bootstrap/css/bootstrap.css")}}
        
    </head>
    <body>
        <header>
            <hgroup>
                <h1>Registrar CLiente</h1>
            </hgroup>
        </header>
        <section class="col-md-12">
            <article class="col-md-10">
                {{Form::open(array("class" => "form-horizontal"))}}
                <fieldset>
                    <div id="registro">
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="nom1" style="text-align: left;">Primer Nombre</label>
                            <div>
                                {{Form::text(
                                                "nom1",null,
                                                ["placeholder" => "Nombre 1",
                                                 "id" => "nom1",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="nom2">Segundo Nombre</label>
                            <div>
                                {{Form::text(
                                                "nom2",null,
                                                ["placeholder" => "Nombre 2",
                                                 "id" => "nom2",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="ape1">Primer Apellido</label>
                            <div>
                                {{Form::text(
                                                "ape1",null,
                                                ["placeholder" => "Apellido 1",
                                                 "id" => "ape1",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="ape2">Segundo Apellido</label>
                            <div>
                                {{Form::text(
                                                "ape2",null,
                                                ["placeholder" => "Apellido 2",
                                                 "id" => "ape2",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="dire">Direccion Residencia</label>
                            <div>
                                {{Form::text(
                                                "dire",null,
                                                ["placeholder" => "Direccion",
                                                 "id" => "dire",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="tel">Tel Residencia</label>
                            <div>
                                {{Form::text(
                                                "tel",null,
                                                ["placeholder" => "Telefono",
                                                 "id" => "tel",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="cel">Celular</label>
                            <div>
                                {{Form::text(
                                                "cel",null,
                                                ["placeholder" => "Celular",
                                                 "id" => "cel",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="user">Nombre Usuario</label>
                            <div>
                                {{Form::text(
                                                "user",null,
                                                ["placeholder" => "Usuario",
                                                 "id" => "user",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="pass">Contraseña</label>
                            <div>
                                {{Form::password(
                                                "pass",null,
                                                ["placeholder" => "Contraseña",
                                                 "id" => "pass",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            
                                <label class="col-md-9 control-label" for="activo">Activo</label>
                                
                                {{Form::checkbox("activo",0,false,["id" => "activo-0"])}}
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                                <label class="col-md-9 control-label" for="tipoD">Tipo de Documento</label>
                                
                                {{Form::select("tipoD",$tipo,[
                                                 "id" => "tipoD",
                                                 "class" => "form-control input-md"
                                                ])}}
                            
                            
                        </div>
                        
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="docu">Documento</label>
                            <div>
                                {{Form::text(
                                                "docu",null,
                                                ["placeholder" => "Documento",
                                                 "id" => "docu",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="direccion">Direccion Laboral</label>
                            <div>
                                {{Form::text(
                                                "direccion",null,
                                                ["placeholder" => "Direccion Laboral",
                                                 "id" => "direccion",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                            <label class="col-md-9 control-label" for="telOf">Tel Oficina</label>
                            <div>
                                {{Form::text(
                                                "telOf",null,
                                                ["placeholder" => "Telefono O",
                                                 "id" => "telOf",
                                                 "class" => "form-control input-md"
                                                ]
                                )}}
                            </div>
                            
                        </div>
                        
                        
                        <div class="form-group col-md-4">
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
        <footer>
            
        </footer>
    </body>
</html>

