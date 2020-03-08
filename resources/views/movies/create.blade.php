<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Movie</title>
</head>
<body>
  <h1>Create Movie</h1>
  <form class="" action="/movies" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title">
    <label for="rating">Rating</label>
    <input type="text" name="rating">
    <label for="total_gross">Total Gross</label>
    <input type="text" name="total_gross">
    <button type="submit" name="button">Submit</button>
  </form>
</body>
</html>
