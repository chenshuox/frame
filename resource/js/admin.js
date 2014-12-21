$(function(){
	$(".item").hover(function(){
		$(this).find("ul").show();
		$(this).find("a:first").addClass("on");
	}, function(){
		$(this).find("ul").hide();
		$(this).find("a:first").removeClass("on");
	});
	$("header span").click(function(){
		if($(".menu").is(":visible")) {
			$(".menu").hide();
			$(".content").css("left","0px");
		} else {
			$(".menu").show();
			$(".content").css("left","15em");
		}
	})
	
})