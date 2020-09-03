<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <title>Contact Us Form In Php</title>
</head>
<body>

     <div class="bg-img">
  <div class="container">
    <div class="topnav">
      <a href="index.html">HOME</a>
      <a href="#news">EVENTS</a>
      <a href="contactform.php">SUGGESTIONS</a>
      <a href="team.html">TEAM</a>
    </div>

  </div>
</div>

    <div class="container-form">
        
                
                    <div class="card-title">
                        <h2> Write Us! </h2>
                        
                    
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="Name" class="form-control mb-4">
                            <input type="email" name="Email" placeholder="E-mail" class="form-control mb-4">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-4">
                            <textarea name="msg" class="form-control mb-2" placeholder="Message"></textarea>
                            <div class="row">
                                 <div class="col-xxs-1 m-auto">
                            <button class="btn btn-success" name="btn-send"> Send Message </button>
                                 </div>
                            </div>
                        </form>
                    </div>
               
            
       
    </div>
</body>
</html>