<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="bioCheck.php" method="post">
    <div class="form-group">
      <label for="bio">Update Bio : (enter html data) </label>
      <textarea class="form-control" rows="5" id="bio" name="bio"></textarea><br>
      <label for="interest">Interest</label>
      <textarea class="form-control" rows="1" id="interest" name="interest"></textarea>
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </form>
</div>

</body>
</html>