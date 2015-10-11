<nav class="navbar navbar-inverse navbar-fixed-top" style="background: black; border-color: black" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Edit me</a>
            </div>
            <!-- Top Menu Items -->
			<ul class="nav navbar-left top-nav">
				<li>
					<a href="#menu-toggle" class="fa fa-exchange" id="menu-toggle" title="Toggle View"></a>
				</li>
				<!--<li class="dropdown">
					<a href="#" title="Create New Project" type="button" id="create-snip" data-toggle="modal" data-target="#createModal">New</a>
				</li>				
				<li>
					<a href="#menu-toggle" class="glyphicon glyphicon-cloud-download" id="download" data-toggle="tooltip" title="Download"></a>
				</li>-->
				<li>
					<a href="#menu-toggle" class="fa fa-floppy-o" id="save" data-toggle="tooltip" title="Save"></a>
				</li>
				<?php include('newnav.inc.php'); ?>
				<?php include('editnav.inc.php'); ?>
				<?php include('viewnav.inc.php'); ?>
				<?php include('codenav.inc.php'); ?>				
				<?php include('runnav.inc.php'); ?>
				<?php include('settingsnav.inc.php'); ?>
				
			</ul>
            <ul class="nav navbar-right top-nav">                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
        </nav>



