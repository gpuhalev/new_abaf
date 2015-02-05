$(function() {
		$(".grayOutlineRoundedCV p").click(displayCV);
		$(".grayOutlineRoundedCV img").click(displayCV);
		function displayCV(){
			var person = $(this).attr("name");
			var element = $(".hiddenCV[name=" + person + "]");
			if(element.css('display')=='none'){
				element.show("slow", "swing");
			}else{
				element.hide("slow", "swing");
			}
		}
});