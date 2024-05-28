<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Articles</title>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-end mb-3">
            <a href="/add" class="btn btn-primary">Ajouter un article</a>
        </div>
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$article->image}}" class="card-img-top" alt="Image de l'article">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->titre}}</h5>
                            <p class="card-text">{{$article->description}}</p>
                            <p class="card-text">Popularité: {{$article->popularite}}</p>
                            <a href="/edit-article/{{$article->id}}" class="btn btn-warning">Modifier</a>
                            <form action="{{ url('article/'. $article->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
