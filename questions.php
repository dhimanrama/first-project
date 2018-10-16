<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CodeTrek</title>
    
<script type="text/javascript" src="js/main.js"></script>    
   
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     
     <script type="text/javascript" src="js/main.js"></script>  </head>  
  

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
  <a class="navbar-brand" href="#">CodeTRek Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
  </div>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="fa fa-cog">
          </a>
      
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>  
          
        </div>
      </div>
    </nav> 
    <br>
    <div class="container">
  <button type="button" class="btn btn-outline-light text-dark">Ask question</button></div
  >
  <br>
  <div class="container">
  <div class="card" style="width: 68rem;">
  <div class="card-body">

    <form name="form" action="thankyou.php" method="POST">
      <div class="form-group">
      <h5 class="card-title">Title
      <span style="color:red;font-size:15px">*</span></h5>
      <input type="text" class="form-control" name="answer" placeholder="Enter a short and proper tittle for your question">
      <br>
    <div class="form-group">
      <label1 for="comment">Description</label1>
      <span style="color:red;font-size:15px">*</span>
      <textarea class="form-control" rows="5" name="description" placeholder="enter a detailed description"></textarea>
      <br>
    </div>
    <div class="form-group">
    <h5 class="card-title">Add tags</h5>
    <input type="text" class="form-control" id="exampleInput" placeholder="Enter a short and proper tittle for your question" name="tags">
     <div class="form-group">
            <small class="text-secondary">Tags will help others to find your question faster. Add comma separated tags. For ex: <span class="font-weight-light font-italic">codetrek, bootstrap, frontend</span></small>
</div>
  <br>
  <button type="submit" href="thankyou.php" class="btn btn-primary" onclick="myfunction()">post your question</button>
  
<script src="js/main.js"></script>
</form>
  </div>
</div>
  </div></form></div></div></div></span></a></div></div></nav>
</body>
  <footer class="bg-light py-3 text-center mt-5">
    <span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
</footer>
</html>