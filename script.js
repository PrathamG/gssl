jQuery(document).ready(function($) {
	$(".polc-pnl").click(function(){
		jQuery(".filler-img").attr("src", $(this).attr("src"));
		$(".filler").show();
	});
	$(".begone").click(function(){
		$(".filler").hide();
	});

	$(".popup").click(function(evt){
		evt.stopImmediatePropagation();
		if(!$('.mob-pnl').is(":visible"))
		{
			$('html, body').css({
	    		overflow: 'hidden',
	    		height: '100%'
			});
			$(".mob-nav .fas").hide();
			$(".mob-nav .far").show();
			$('.mob-pnl').fadeIn(200);
			console.log("boom");
		}
		else if($('.mob-pnl').is(":visible"))
		{
			$('html, body').css({
	    		overflow: 'auto',
	    		height: 'auto'
			});
			$(".mob-nav .far").hide();
			$(".mob-nav .fas").show();
			$('.mob-pnl').fadeOut(200);
			console.log("zoom");
		}
	});

	$(".abt-mob-pnl").click(function(evt){
		id = this.id;
		evt.stopImmediatePropagation();
		console.log('.mob-sublink#t' + id);
		if(!$('.mob-sublink#t' + id).is(":visible"))
		{
			$('.mob-sublink#t' + id).slideDown(200);
			console.log("boom");
		}
		else
		{
			console.log("zoom");
			$('.mob-sublink#t' + id).slideUp(200);	
		}
	});

	$(window).scroll(function()
	{
	    console.log($(window).scrollTop())
	    if ($(window).scrollTop() > 300)
	    {
	    	$('.mob-nav').addClass('mob-nav-fix');
	    }
	    if($(window).scrollTop() < 300)
	    {
	    	$('.mob-nav').removeClass('mob-nav-fix');
	    }
	});

	$("#abt").mouseenter(function(evt){
		evt.stopImmediatePropagation();
		$('.menu-abt').slideDown(200);
		console.log("boom");
	})
	$(".menu-abt").mouseleave(function(evt){
		evt.stopImmediatePropagation();
		$('.menu-abt').slideUp(200);
		console.log("zoom");
	});

	$("#infr").mouseenter(function(evt){
		evt.stopImmediatePropagation();
		$('.menu-infr').slideDown(200);
		console.log("boom");
	});
	$(".menu-infr").mouseleave(function(evt){
		evt.stopImmediatePropagation();
		$('.menu-infr').slideUp(200);
		console.log("zoom");
	});

	$(".navbar-item").mouseenter(function(evt){
		evt.stopImmediatePropagation();
		$('.menu-infr').slideUp(200);
		$('.menu-abt').slideUp(200);
		console.log("zoom");
	});
});
