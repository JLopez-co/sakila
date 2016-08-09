<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista Peliculas</title>
        {{HTML::style("bootstrap/bootstrap/css/bootstrap.css")}}
    </head>
    <body>
        <header class="col-md-12">
            <hgroup class="col-md-8 col-md-offset-2">
                <h1>Clientes Registrados</h1>
            </hgroup>
        </header>
        <section class="col-md-12">
            <article class="col-md-8 col-md-offset-2">
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Activo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($custo as $customer)
                        <tr>
                            <td>{{$customer->first_name}}  {{$customer->last_name}}</td>
                            @if($customer->active == 0)
                            <td>Inactivo</td>
                            @endif
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$custo->links()}}
            </article>
        </section>
        <footer>
            
        </footer> 
    </body>
</html>
