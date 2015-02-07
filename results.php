	<?php include 'menus/mainHeader.html'?>
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
               		<p class="content_title">Coming soon...</p>
                    <?php
						$iterator = new RecursiveIteratorIterator(
										new RecursiveDirectoryIterator('./results/'), RecursiveDirectoryIterator::SKIP_DOTS);
						
						foreach($iterator as $file) {
							if($file->isDir()) {
								echo "$file <br>";
								//echo strtoupper($file->getRealpath()), PHP_EOL;
							}
						}
											?>
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
