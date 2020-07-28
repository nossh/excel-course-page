<?php
  session_start();

  if (!(isset($_SESSION['email'])) || $_SESSION['email'] == "") {
    header("location: signup.php");
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Excel Training For Beginners | Nossh Inc.</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="js/modernizr.custom.js"></script>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

<!-- 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="js/jquery.cbpFWSlider.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpFWSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease'
				}
				- destroy:
				$( selector ).cbpFWSlider( 'destroy' );
				*/

				$( '#cbp-fwslider' ).cbpFWSlider();

			} );
		</script>
</head>
<body>
	<!---header--->
<div class="header">
	<div class="wrap">
		<div class="logo">
			<h3>Microsoft Excel</h3>
		</div>
		
		<div class="clear"> </div>	
    </div>
</div>
<div class="content">
<div class="wrap">	
	<div class="text">	
		<h2>Excel Training for Beginners</h2>
		<p>Master Excel for business operation at the quickest time possible</p>
	</div>	
	<div class="form">	
		
	</div>
</div>


 

<div class="slider">	
<div class="wrap">
     <div class="container">

     	<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        1.1 Excel Course Content
      </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li><a>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/UNjI8qTEn6g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </a></li>
            
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        1.2 Excel Worksheet Overview</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/84LSfeMdSyM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
       1.3 How to create a workbook, Select cells, enter text, numbers and dates in Excel workbook</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/cGX4oilhgxw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        1.4 How to enter a range of data, edit cell contents, adjust row and column size, align cell content</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZxhyBNO1yxE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        1.5 How to copy, cut, paste and clear cells, paste techniques, open, rename, preview and print worksheet</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Yqk0QW0sRi0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        2.1 Formatting Data and Cells</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JcBWzsjzDaA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
        2.2 Formatting Headers, Footer and Page</a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NMnfBxc69_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
        2.3 Manipulating Worksheets and Data Filter</a>
      </h4>
    </div>
    <div id="collapse8" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZgZNvfHLuVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
        3.1 Working With Formulas and Functions</a>
      </h4>
    </div>
    <div id="collapse9" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EO8FD2JEo3w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
        3.2 Conditional Logics and 3D Formulas</a>
      </h4>
    </div>
    <div id="collapse10" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3SLDg5OTo2o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
        4.1 Excel Data Analysis with Charts</a>
      </h4>
    </div>
    <div id="collapse11" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vS_gIdk1k_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
        4.2 Creating and Formatting Tables</a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/84LSfeMdSyM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
        4.3 Excel Data Analysis with PivotTables and PivotChar</a>
      </h4>
    </div>
    <div id="collapse13" class="panel-collapse collapse">
      <div class="panel-body">
          <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            <li>
              <a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wPpt58rj_dA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </li>
            <div class="clear"> </div>  
          </ul>
         </div>
      </div>
    </div>
  </div>

</div> 


		
	  <div class="clear"> </div>	
     </div>	
	 
</div>
</div>
</div>

<div class="footer-bottom">
<div class="wrap">
   <div class="copy-right">
		 <p>Copyright 2020. All Rights Reserved</p>
   </div>
	<div class="copy">
		 
   </div>
</div>
</div>
</body>
</html>