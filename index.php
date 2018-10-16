<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "codeTrek_forum";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'codetrek_forum');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM questions ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["title"]. $row["tags"] . $row["description"]. "<br>";
    }
} 
else {
    echo "0 results";
}
$conn->close();
?>     

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CodeTrek Forum</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" media="screen" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">CodeTrek Forum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
       aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="n avbar-nav mr-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">Questions</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
              <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown-item disabled">Vaibhav Rathore</div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Sign out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
  <style>
  <?php
  $sql = "SELECT * FROM questions ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["title"]. $row["tags"] . $row["description"]. "<br>";
    }
} 
else {
    echo "0 results";
}
$conn->close();
?>     
  </style>

  <div class="container mt-5">
    <div class="d-flex justify-content-between mb-3 flex-column flex-md-row">
      <h3 class="font-weight-light mb-0">Questions</h3>
      <div class="d-flex flex-column flex-md-row">
        <form class="form-inline my-2 my-lg-0 mr-md-3">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Search question" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-info my-0" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <button class="btn btn-outline-primary">Ask question</button>
      </div>

    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h4 class="card-title mb-1"><a class="text-body" href="#">How do I use Git and GitHub?</a></h4>
        <p class="text-secondary">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit perspiciatis fuga laudantium dignissimos non recusandae id ducimus nobis dolores fugit, ipsa laboriosam eum exercitationem nesciunt laborum...
        </p>
        <p>
          <a href="#" class="card-link"><small>Abhishek Pokhriyal</small></a>
          <small class="text-secondary">asked on</small>
          <small class="text-secondary">Sep 27, 2018</small>
        </p>
        <div class="d-flex text-secondary">
          <div class="mr-3">
            <i class="far fa-thumbs-up"></i>
            <small>14</small>
          </div>
          <div class="mr-3">
            <i class="far fa-thumbs-down"></i>
            <small>2</small>
          </div>
          <div class="mr-3">
            <i class="far fa-comments"></i>
            <a href="#" class="text-secondary"><small>14 answers</small></a>
`         </div>
        </div>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h4 class="card-title mb-1"><a class="text-body" href="#">What will I learn from CodeTrek?</a></h4>
        <p class="text-secondary">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis eaque delectus suscipit veniam provident architecto nobis nisi corrupti rem deleniti? Quas, sequi nobis. Voluptate, magnam...
        </p>
        <p>
          <a href="#" class="card-link"><small>Vikas Rinvi</small></a>
          <small class="text-secondary">asked on</small>
          <small class="text-secondary">Sep 26, 2018</small>
        </p>
        <div class="d-flex text-secondary">
          <div class="mr-3">
            <i class="far fa-thumbs-up"></i>
            <small>20</small>
          </div>
          <div  class="mr-3">
            <i class="far fa-thumbs-down"></i>
            <small>5</small>
          </div>
          <div class="mr-3">
            <i class="far fa-comments"></i>
            <a href="#" class="text-secondary"><small>6 answers</small></a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h4 class="card-title mb-1"><a class="text-body" href="#">Where can I apply for CodeTrek?</a></h4>
        <p class="text-secondary"><?php echo result['title'] ?>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem odio temporibus unde corrupti? Mollitia consequatur, nobis aliquid ex natus exercitationem vel sit rem in voluptatum consectetur ad commodi ipsam sunt...
        </p>
        <p>
          <a href="#" class="card-link"><small>Satendra Rawat</small></a>
          <small class="text-secondary">asked on</small>
          <small class="text-secondary">Sep 25, 2018</small>
        </p>
        <div class="d-flex text-secondary">
          <div class="mr-3">
            <i class="far fa-thumbs-up"></i>
            <small>10</small>
          </div>
          <div class="mr-3">
            <i class="far fa-thumbs-down"></i>
            <small>15</small>
          </div>
          <div class="mr-3">
            <i class="far fa-comments"></i>
            <a href="#" class="text-secondary"><small>2 answers</small></a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h4 class="card-title mb-1"><a class="text-body" href="#">When is CodeTrek going to start?</a></h4>
        <p class="text-secondary">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, vitae nostrum natus et aspernatur at consectetur nesciunt itaque vel asperiores blanditiis quas fugit, veritatis adipisci? Nulla nisi fugiat sunt sed...
        </p>
        <p>
          <a href="#" class="card-link"><small>Mohit Gusain</small></a>
          <small class="text-secondary">asked on</small>
          <small class="text-secondary">Sep 25, 2018</small>
        </p>
        <div class="d-flex text-secondary">
          <div class="mr-3">
            <i class="far fa-thumbs-up"></i>
            <small>22</small>
          </div>
          <div class="mr-3">
            <i class="far fa-thumbs-down"></i>
            <small>8</small>
          </div>
          <div class="mr-3">
            <i class="far fa-comments"></i>
            <a href="#" class="text-secondary"><small>10 answers</small></a>
          </div>
        </div></div>
      </div>
        
  <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h4 class="card-title mb-1"><a class="text-body" href="#"><?php  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["title"]. $row["tags"] . $row["description"]. "<br>";
    }
} 
else {
    echo "0 results";
}
?>
</a></h4>
<h4 class="card-title mb-1"><a class="text-body" href="#"><?php echo $row["title"]?></a></h4>
        <p class="text-secondary"><?php echo $row["description"]?></p>
    
          <a href="#" class="card-link"><small>Rama Dhiman</small></a>
          <small class="text-secondary">asked on</small>
          <small class="text-secondary">Oct 15, 2018</small>
        </p>
        <div class="d-flex text-secondary">
          <div class="mr-3">
            <i class="far fa-thumbs-up"></i>
            <small>22</small>
          </div>
          <div class="mr-3">
            <i class="far fa-thumbs-down"></i>
            <small>8</small>
          </div>
          <div class="mr-3">
            <i class="far fa-comments"></i>
            <a href="#" class="text-secondary"><small>10 answers</small></a>
          </div>
        </div>
      </div>
    
  <footer class="bg-light py-3 text-center mt-5">
    <span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
  </footer>
</body>
</html>
    </div> 
  </button>
  </body>
  </html>
