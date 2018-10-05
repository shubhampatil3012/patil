<!doctype html>
<html>
<head>
  <style>
    .newspaper1 {
        -webkit-columns: 100px 3; /* Chrome, Safari, Opera */
        -moz-columns: 100px 3; /* Firefox */
        columns: 100px 3;
    }
    /* Split the screen in half */
    .split {
      height: 100%;
      width: 50%;
      position: fixed;
      z-index: 1;
      top: 0;
      overflow-x: hidden;
      padding-top: 20px;
    }
  </style>
  <title> Kerala floods </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function(){
          $('[data-toggle="popover"]').popover();
      });
  </script>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="icon.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
      <font color="white">HELPING HANDS</font>        (Donation camp)
    </a>
  </nav>
<div class="jumbotron">
  <marquee direction="left"><h1 class="display-4"><font color="tomato">Donation for people of kerela!!</font></h1></marquee>
  <p class="lead">It is the duty of every patriotic citizen of India to voluntarily donate within their means,<br>
    to help the flood affected people of Kerala.
  </p>  <hr class="my-4">
  <p class="lead" align="center"><h3>We are the way your help will reach them..</h3></p>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 28rem;">
        <img class="card-img-top" src="money.png" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">Donate Amount.</h2><br>
          <p class="card-text">You can use the Net banking
          services of banks like<ul type=disc>
          <li> State Bank of India</li>
          <li> Federal Bank</li>
          <li> South Indian Bank</li>
          <li> HDFC Bank</li>
          <li>ICICI Bank</li>
          <li>Catholic Syrian Bank.</li></ul>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Continue</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Fill the following form to donate</h4>
                </div>
                <div class="modal-body">
                  
                  <form method="POST">
                    <div>
                      <label>first Name</label>
                      <input name="f1" type="text">
                    </div>
                    <div>
                      <label>Last name</label>
                      <input name="l1" type="text">
                    </div>
                    <fieldset>
                      <div>
                        <legend>Select Bank</legend>
                        <div>
                          <div>
                            <input type="radio" name="gf[]" value="1" >
                            <label>
                                      **1.State bank of India.
                            </label>
                          </div>
                          <div>
                            <input type="radio" name="gf[]" value="2">
                            <label>
                                      **2.Federal State bank.
                            </label>
                          </div>
                          <div>
                            <input type="radio" name="gf[]" value="3">
                            <label>
                                      **3.South Indian Bank.
                            </label>
                          </div>
                          <div>
                            <input type="radio" name="gf[]" value="4" >
                            <label>
                                    **4. HDFC bank.
                            </label>
                          </div>
                          <div>
                            <input type="radio" name="gf[]"  value="5">
                            <label>
                                      **5.    ICICI.
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <div>
                      <label>Username.</label>
                      <input name="s1" type="text">
                    </div>
                    <div class="form-group">
                      <label>Password:</label>
                      <input type="password" name="p1">
                    </div>
                    <div>
                      <label><input type="checkbox"> Remember me</label>
                    </div>
                    <div>
                      <button type="submit" name="submit">Submit</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="col">
      <img class="img-responsive" src="kerala.jpg" alt="Chania">
      <img class="img-responsive" src="flood.jpg" alt="Chania">
    </div>
    <div class="col">
      <div class="card" style="width: 28rem;">
        <img class="card-img-top" src="food.png" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">Donate other necessities.</h2><br>
            <p class="card-text">Food , toothpaste , Candles , Mosquitoe reppellent , Blankets, Clothes , sanitary Napkins, Brush , Soaps .
            <div class="container">
              <a href="#" data-toggle="popover" title="" data-content="1.Mumbai        2.Pune              3.Nasik      4.Nagpur                  5.Thane" ><u>Click here to know the centers</u></a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron" align ="center">
  <p class="lead">To contact us.<br>Phone no.:9820274632<br>em@il id.:helpinghands*@gmail.com
  </p>
</div>
</body>
</html>
<?php
    $server="localhost";
    $username="root";
    $pass="";
    $database="Kerala";
    $conn=mysqli_connect($server,$username,$pass,$database);
    if($conn)
      {echo "connected" ;}
    else {
      echo"not connected";
    }
    

    if (isset($_POST["submit"]))
    {
        $n =$_POST["f1"];
        $name = $_POST["l1"];
        $use= $_POST["s1"];
        $pas= $_POST["p1"];
        $e= $_POST["gf"];
        $bank_no=implode('',$e);
        
        $sql="insert into flood(fName,lName,Bno,User,Pass)values('$n','$name',$bank_no,'$use','$pas')";
        
        if(mysqli_query($conn,$sql))
        {
          echo "inserted";
        }
        else
        {
          echo "not inserted";
        }
    }
?>


