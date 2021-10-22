var index;
var indexMini;
var slideTimer;

$(document).ready(function() {
	index = $(".slideshow-img").size() - 1;
	changeImage();

	$(".slideshow-buttons").click(function() {
		$($(".slideshow-img")[index]).fadeOut(1000);
		index = $(this).attr("url");
		$($(".slideshow-img")[index]).fadeIn(1000).css("display","inline-block");;
		$(".active").removeClass("active");
		$(this).addClass("active");

		clearTimeout(slideTimer);

		slideTimer = setTimeout("changeImage()", 5000);
	});

	indexMini = $(".slideshow-img-mini").size() - 1;
	changeImageMini();

	$(".slideshow-buttons").click(function() {
		$($(".slideshow-img-mini")[indexMini]).fadeOut(1000);
		indexMini = $(this).attr("url");
		$($(".slideshow-img-mini")[indexMini]).fadeIn(1000).css("display","inline-block");;
		$(".active").removeClass("active");
		$(this).addClass("active");

		clearTimeout(slideTimer);

		slideTimer = setTimeout("changeImage()", 5000);
	});
});

function changeImage() {
	$($(".slideshow-img")[index]).fadeOut(1000);
	
	index++;
	// restart from the start after last image
	if (index == $(".slideshow-img").size()) {
		index = 0;
	}
	
	$($(".slideshow-img")[index]).fadeIn(1000).css("display","inline-block");;

	$(".active").removeClass("active");
	$(".slideshow-buttons").each(function() {
		if ($(this).attr("url") == index) {
			$(this).addClass("active");
		}
	});

	slideTimer = setTimeout("changeImage()", 5000);
}

function changeImageMini() {
	$($(".slideshow-img-mini")[indexMini]).fadeOut(1000);

	indexMini++;
	if (indexMini == $(".slideshow-img-mini").size())
		indexMini = 0;

	$($(".slideshow-img-mini")[indexMini]).fadeIn(1000).css("display","inline-block");;

	$(".active").removeClass("active");
	$(".slideshow-buttons").each(function() {
		if ($(this).attr("url") == indexMini) {
			$(this).addClass("active");
		}
	});

	slideTimer = setTimeout("changeImageMini()", 5000);
}