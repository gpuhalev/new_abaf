	<?php include 'menus/mainHeader.html'?>
    <script src="http://www.balkan-athletics.eu/scripts/slideshowFunc.js"></script>
    <script src="./scripts/FileTree/jquery.easing.js" type="text/javascript"></script>
    <script src="./scripts/FileTree/jqueryFileTree.js" type="text/javascript"></script>
    <link href="./scripts/FileTree/jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript">
			$(document).ready( function() {
				$('#fileTreeContainer').fileTree({
					root: '/results/',
					script: './scrripts/FileTree/jqueryFileTree.asp',
					expandSpeed: 1000,
					collapseSpeed: 1000
				}, function(file) {
					alert(file);
				});
			});
		</script>
    <title>RESULTS | BALKAN ATHLETICS OFFICIAL WEBSITE</title>
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
                    
					<div id="fileTreeContainer" style="display:block; float:left;">
                    
                    </div>
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




</body>
</html>
