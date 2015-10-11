 <div class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">
                Edit Me
          </a>
        </div>

        <div class="collapse navbar-collapse" >
          <ul class="nav navbar-nav">
			<?php	
				echo '<li><a href="processingcomplaint.php">Processing Complaints</a></li>'."\n";				
				echo '<li><a href="history.php">History</a></li>';				
			?>
			
          </ul>
		  <ul align="right" class="nav navbar-nav"><li><a href="logout.php"> Logout</a></li><ul>
        </div>
      </div>
    </div>