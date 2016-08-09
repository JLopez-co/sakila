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
                <h1>Peliculas Registradas</h1>
            </hgroup>
        </header>
        <section class="col-md-12">
            <article class="col-md-8 col-md-offset-2">
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Rating</th>
                            <th>Special Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($film as $fil)
                        <tr>
                            <td>{{$fil->title}}</td>
                            <td>{{$fil->rating}}</td>
                            <td>{{$fil->special_features}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$film->links()}}
            </article>
        </section>
        <footer>
            
        </footer> 
    </body>
</html>
