<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Movie</title>
</head>
<body>
  <h1>Edit Movie</h1>
  <form class="" action="/movies/{{$movie->id}}" method="post">
    @csrf
    @method('put')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$movie->title}}">
    <label for="rating">Rating</label>
    <input type="text" name="rating" value="{{$movie->rating}}">
    <label for="total_gross">Total Gross</label>
    <input type="text" name="total_gross" value="{{$movie->total_gross}}">
    <button type="submit" name="button">Update</button>
  </form>
</body>
</html>
