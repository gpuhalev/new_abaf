	<?php 
		include 'menus/mainHeader.html';
		include ("./scripts/phpFileTree/php_file_tree.php");
	?>

    <title>RESULTS | BALKAN ATHLETICS OFFICIAL WEBSITE</title>
    <script src="./scripts/phpFileTree/jquery-1.3.2" type="text/javascript"></script>
	<script src="./scripts/phpFileTree/php_file_tree_jquery.js" type="text/javascript"></script>
    <link href="./scripts/phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
	<!--START HEAD WRAPPER-->
	<div id="head_wrapper">
    
    </div>
    

	<!--END HEAD WRAPPER-->
    
	<!--START MAIN WRAPPER -->
    <div id="main_wrapper">
    	
        
        
        <!--START HEADER-->     	
        <?php include'menus/header.html'?>
 	
    	<?php include'menus/mainMenu.html'?>

      
        </div>
        <!--END HEADER-->
        
        <!--START PAGE WRAPPER-->
        <div id="page_wrapper">
            
            <?php include'menus/leftSidebar.html'?>
            <!--START CONTENT WRAPPER -->
            <div id="content">
            	<div class="content_wrapper">
                	<p class="content_mainTitle">Results</p>
                    <hr width="40%" color="#0DB10F" size="1px"><br>
                    <div id="resultsMain"><?php echo php_file_tree("./results/", "[link]");?></div>
                </div>
                <!--END CONTENT WRAPPER-->
                    
                
            </div>
            <!--END CONTENT WRAPPER-->
            
            <?php include'menus/rightSidebar.html'?>
            
            
            
        </div>
        <!--END PAGE WRAPPER-->
        
       	<?php include'menus/mainFooter.html'?>
        
	</div>
    <!-- END MAIN WRAPPER-->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>
