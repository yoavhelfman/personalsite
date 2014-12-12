	<?php $fName = basename($_SERVER['SCRIPT_NAME']); ?>

	<nav id="nav">
		<ul id="wrapper">
          <li id = "bio"><a href="index.php">Bio</a></li>
          <?php if($fName == "index.php")
            { 
            echo "<style> #bio { background-color: #D7CCC8; !important } </style>";
            }
          ?>  

          <li id = "fiction"><a href="fiction.php">Fiction</a></li>
          <?php if($fName == "fiction.php"){ 
            echo "<style> #fiction { background-color: #D7CCC8; !important } </style>";
          } 
          ?> 

          <li id = "poetry"><a href="poetry.php">Poetry</a></li>
          <?php if($fName == "poetry.php")
          { 
            echo "<style> #poetry { background-color: #D7CCC8; !important } </style>";
          } 
          ?> 
          <h1>Yoav Helfman Makes a Rudimentary Portfolio</h1>
		</ul>

	</nav>