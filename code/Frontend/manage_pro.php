<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="homepage.php">Portakal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
    <form class="form-horizontal" action="/action_page.php" method="POST">
      <div class="form-group">
        <h1>Manage account</h1>
        <label for="usr">Username:</label>
        <input type="text" class="form-control" id="usr">
      </div>

      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
      </div>

      <div class="form-group">
        <label for="mail">E-mail:</label>
        <input type="email" class="form-control" id="mail">
      </div>  

      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control" id="city">
      </div>   

      <div class="form-group">
        <label for="street">Street no:</label>
        <input type="number" min="0" class="form-control" id="street">
      </div>  

      <div class="form-group">
        <label for="apt">Apartment name:</label>
        <input type="text" class="form-control" id="apt">
      </div>  

      <div class="form-group">
        <label for="zip">Zip code:</label>
        <input type="number" min="0" class="form-control" id="zip">
      </div>   

      <div class="form-group">
        <label for="exp">Experience</label>
        <input type="number" min="0" class="form-control" id="exp">
      </div>  

      <div class="form-group">
      <label for="service">Service Type:</label>
        <div class="radio-group">
          <label class="radio-inline">
            <input type="radio" name="radio">Repair
          </label>
          <label class="radio-inline">
            <input type="radio" name="radio">Cleaning
          </label>
          <label class="radio-inline">
            <input type="radio" name="radio">Painting
          </label>
          <label class="radio-inline">
            <input type="radio" name="radio">Moving
          </label> 
          <label class="radio-inline">
            <input type="radio" name="radio">Private Lesson
          </label>          
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-0 col-sm-0">
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </div>
  </form>
  </div>
</body>
</html>