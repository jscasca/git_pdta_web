
$(document).ready(function() {                       
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();
        //console.log(windowpos);
        if (windowpos >= 148) {
            $("#left-logo").fadeIn("Slow",function(){});
        } 
        if(windowpos<148)
        {
			$("#left-logo").fadeOut("Slow",function(){});
        }
    });
    	               
	$("#show-menu").click(function(){
		console.log("clicking");
		console.log($("main-menu").css("left"));
		$("#main-menu").animate({left:"-70%"},750);
		/*
		if($("#main-menu").css("left")=="0px")
		{
			$("#main-menu").animate({left:"-70%"},750);
		}
		else
		{
			$("#main-menu").animate({left:"0%"},750);
		}	*/
	});
    });
