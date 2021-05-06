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
      <a class="navbar-brand lspace" href="home.php">Online Compiler/a>
    </div>
    

</nav>
</div>
</div>


<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Output</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">

</div>

</div>




<div class="row cspace">
<div class="col-sm-1">
</div>
<div class="col-sm-8">

<div id="div"></div>

<script type="text/javascript">

  $(document).ready(function(){

     $("#st").click(function(){

           $("#div").html("Loading ...");


     });

  });


</script>

<script>

$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      
      e.preventDefault();

      // AJAX
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
</div>

<div class="col-sm-3">

</div>
</div>
</div>
</div><br><br><br>

<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
</div>
</div>
</div>
</div>



</body>
</html>
