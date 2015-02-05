	<?php include 'menus/mainHeader.html'?>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <title>CONTACTS | BALKAN ATHLETICS OFFICIAL WEBSITE</title>
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
                	<p class="content_mainTitle">CONTACTS</p>
                    <hr width="40%" color="#0DB10F" size="1px"><br>
               		
                    <p class="content_title">Headquarters:</p>
                    <div class="newsMain">
                    	<iframe width="450" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=bul.+%22Vasil+Levski%22+75,+1142+Sofia,+Bulgaria&amp;sll=42.690338,23.331244&amp;sspn=0.014147,0.033023&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=bulevard+%22Vasil+Levski%22+75,+1142+Sofia,+Bulgaria&amp;ll=42.690338,23.331244&amp;spn=0.003537,0.008256&amp;z=14&amp;output=embed"><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=bul.+%22Vasil+Levski%22+75,+1142+Sofia,+Bulgaria&amp;sll=42.690338,23.331244&amp;sspn=0.014147,0.033023&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=bulevard+%22Vasil+Levski%22+75,+1142+Sofia,+Bulgaria&amp;ll=42.690338,23.331244&amp;spn=0.003537,0.008256&amp;z=14" style="color:#0000FF;text-align:left">View on map</a></iframe><br />
                        
                        <p>75, Vassil Levski Blvd., 1040 Sofia, Bulgaria<br>
                        phones: (+359 2) 9885462; (+359 2) 9300669<br>
                        fax: (+359 2) 9880714<br>
                        headoffice@balkan-athletics.eu</p>
                        <img src="images/sportsPalace.jpg">
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
