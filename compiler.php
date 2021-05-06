<!DOCTYPE html>
<html>
<head>


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Online Compiler</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/logo.png">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
</head>
<body>
<div class="main">

  <div class="row">
  <div class="col-sm-12">
  <nav class="navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="home.php">Online Compiler</a>
    </div>
    
</nav>
</div>
</div>


<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Online Compiler</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">

</div>

</div>




<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>
<option value="Python27">Python27</option>
<option value="Python3">Python3</option>


</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success" value="Compile"><br><br><br>
<input type="submit" id="st" class="btn btn-success" value="Run"><br><br><br>


</form>

<script type="text/javascript">

  $(document).ready(function(){

     $("#st").click(function(){

           $("#div").html("Loading ......");


     });

  });


</script>

<script>

$(document).ready(function(){
    
    $('form').on('submit', function(e){
      
      e.preventDefault();

      $.ajax({
            type: "POST", 
            cache: false, 
            url: "compile.php", 
            datatype: "html", 
            data: $('form').serialize(), 
            success: function(result) { 

                $('#div').html(result);
            }
        });
    });
});
</script>

<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>

</div>
</div>

<div class="col-sm-4">


</div>
</div>
</div>
<br><br><br>
<!--<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
 BEGIN: Powered by Supercounters.com 
<center><script type="text/javascript" src="http://widget.supercounters.com/online_i.js"></script><script type="text/javascript">sc_online_i(1360839,"ffffff","e61c1c");</script><br><noscript><a href="http://www.supercounters.com/">Free Online Counter</a></noscript>
</center>
 END: Powered by Supercounters.com 

</div>
-->
</div>
</div>
</div>
</body>
</html>
