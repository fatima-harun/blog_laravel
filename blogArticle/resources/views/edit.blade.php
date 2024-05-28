<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter un article</h1>
    <hr>
    </ul>
<form action="/edit/traitement" method="POST">
@method('PATCH')
        @csrf

        <input type="text" class="form-control" name="id" value="{{ $articles->id }}" style="display:none;">>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">URL de l'image</label>
    <input type="text" class="form-control" name="image" value="{{ $articles->image }}">>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre</label>
    <input type="text" class="form-control" name="titre" value="{{ $articles->titre }}"> >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" value="{{ $articles->description }}">>
  </div>
  <div class="mb-3 form-check">
  <label class="form-check-label" for="exampleCheck1">Date de création</label>
    <input type="date" class="form-check-input" name="date" value="{{ $articles->date }}">>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Popularité</label>
    <input type="text" class="form-control" name="popularite" value="{{ $articles->popularite }}">>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
  
</form>
</body>
</html>