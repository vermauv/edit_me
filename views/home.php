<?php //include("/includes/dbconnection.inc.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
       <!-- <link rel="stylesheet" type="text/css" href="../css/style.css" />-->
		<link rel="stylesheet" type="text/css" href="../css/sb-admin.css"/>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
		<script src="../js/lib/aceEditor/ace.js" type="text/javascript" charset="utf-8"></script>
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css" media="screen">
        #editor {
            display: block;
            position: relative;       
            float:left;
            min-width:1100px; 
            min-height:580px;
        }
	</style>		
    </head>
    <body class="mainBody"> 
		<div id="wrapper">
		<?php include 'nav.inc.php';?>		
		
	 <div id="page-wrapper">
            <!--///////////////////////////////////////////////////////////////////////-->
            <!-- Content-->
            <div class="container-fluid">
              <div class="row" style="margin-left: 10px;">    
                    <div class="col-lg-12">
                        <div id="editor"></div>
                   </div>
              </div>            
            <!--///////////////////////////////////////////////////////////////////////-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	 <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/twilight");
        editor.getSession().setMode("ace/mode/javascript");
        
        editor.setShowPrintMargin(false);
        editor.renderer.setShowGutter(false);
        editor.renderer.setHighlightGutterLine(false);
        function changetheme()
        {
            x=document.getElementById("theme").value;
            editor.setTheme(x);
        }
    </script>
    </body>
    </html>