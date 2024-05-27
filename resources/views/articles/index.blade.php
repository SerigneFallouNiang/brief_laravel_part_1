<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
     <div class="row">
      <div class="col s12">
          <h1>CRUD IN LARAVEL </h1>
          <hr>
          <a href="/ajouter" class="btn btn-primary">Ajouter un article</a>
          <hr>
          @if (session('status'))
              <div class="alert alert-succes">
                {{session('status')}}
              </div>
          @endif
         
            <table class="table">
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>nom</th>
                        <th>Date_création</th>
                        <th>Photo</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>

         
                    @foreach($articles  as $article)
                      <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article ->nom}}</td>
                        <td>{{$article ->date_création}}</td>
                        <td ><img src="{{$article ->photo}}" alt="" style="width:50px; border-radius: 50%;height:50px"></td>
                        <td>
                          <a href="/delete-article/{{$article->id}}" class="btn btn-danger">Delete</a>
                          <a href="/update-article/{{$article->id}}" class="btn btn-info">Update</a>
                          <a href="/detail/{{$article->id}}" class="btn btn-info">Détail</a>

                        


                        </td>
                        @endforeach
                    </td>
         
                  </tbody>
            </table>

        </div>
      </div>
    </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>