

		// SAME HEIGHT AS WIDTH

function landscape(oneDiv) {
	var divWidth = oneDiv.width();
	oneDiv.height(divWidth *3/4);
}

function square(oneDiv) {
   var divWidth = oneDiv.width();
   oneDiv.height(divWidth);
}

		// ANCHOR LINK ANIMATION


$( document ).ready(function() {

         // LAZY LOAD

   $(".art img").lazyload({
    threshold : 200
   });

   landscape($('.art'));

   landscape($('iframe'));

   square($('.circle'));

   $(window).resize(function(event) {
      landscape($('.art'));

      landscape($('iframe'));

      square($('.circle'));
   });


   		// ANCHOR LINKS

   	$('.home-head .slot-0-1-2-3 ul li').first().click(function(event) {
   		$('html, body').animate({scrollTop:$('.art-feats').position().top}, 200);
   	});
   	$('.home-head .slot-0-1-2-3 ul li').last().click(function(event) {
   		$('html, body').animate({scrollTop:$('.feat-vids').position().top}, 300);
   	});


      


});


