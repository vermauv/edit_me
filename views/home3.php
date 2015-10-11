<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
    <title>Edit Me</title>
    <link href="../css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>	
    <link href="../css/simple-sidebar.css" rel="stylesheet" type="text/css"/>
	<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="../css/sb-admin.css" rel="stylesheet" type="text/css"/>	
	<link rel="stylesheet" type="text/css" href="../select2/select2.css"/>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/select2.min.js"></script>	
	<script src="../js/lib/aceEditor/ace.js" type="text/javascript" charset="utf-8"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	
	<style type="text/css" media="screen">
        #editor {       
			height:555px;
			border-width: 0px 10px 0px 10px; 
			border-style: solid;
			border-color: #000000;
		
        }
	</style>
	<style type="text/css">
		.label{
			color:black;
		}
		rowone {
			margin-right: 15px;
			margin-left: 15px;
		}
		</style>
</head>

<body style="background-color:black">
	<?php include 'nav.inc.php';?>
    <div id="wrapper">
        <!-- Sidebar 
			margin-left: 20px; -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                   <form role="search">
						<div class="form-group input-group">
							<input type="text" class="form-control" placeholder="Search">
							<span class="input-group-btn" style=" padding-right: 20px;"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
						</div>
					</form>
                </li>
            </ul>
        </div>			
    </div>
	<div class="rowone">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Library</a></li>
		  <li class="active">Data</li>
		</ol>
	</div>
	<div class="content">
			<div>						
				<div id="editor"></div>                     
			</div>
	</div> 
	
    <!-- /#wrapper -->

    
    <!-- Menu Toggle Script -->
    <script>
	$(document).ready(function(){
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
		$("#editor").click(function(e) {
			$("#wrapper").toggleClass("toggled");
		});
	});
    </script>
	<script>
	
	
			
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/katzenmilch");
        editor.getSession().setMode("ace/mode/javascript");
        
        editor.setShowPrintMargin(false);
        editor.renderer.setShowGutter(true);
        editor.renderer.setHighlightGutterLine(true);
        function changetheme()
        {
            x=document.getElementById("theme").value;
            editor.setTheme(x);
        }
    </script>
	<?php include('modals.inc.php');?>
</body>

</html>
