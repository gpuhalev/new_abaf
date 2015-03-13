$(function(){
		$(".sub_title_text").append(" &#9656;");
	
		$("#header_img").click(function(){goToIndex();});
		$("#slideshow").click(function(){goToIndex();});
		function goToIndex(){
			window.location='http://www.balkan-athletics.eu/';
		}
		/*$("#slideshow > div:gt(0)").hide();
	       setInterval(change, 20000);
		function change(){
			$('#slideshow > div:first')
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .end()
		    .appendTo('#slideshow');
		}*/
		
		$(".sub_title_text").click(function(){
			var menuName = $(this).attr("name");
			var element = $(".hiddenRightMenu[name=" + menuName + "]");
			
			if(element.css('display')=='none'){
				element.show("fast", "linear");
			}else{
				element.hide("fast", "linear");
			}	
		});
		
});