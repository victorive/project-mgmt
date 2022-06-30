(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);


// change of tabs

// function openTabs(e, tabId) {
// 	var i, mycontainhide;

// 	mycontainhide = document.getElementsByClassName('mycontainhide');
// 	for (i = 0; i < mycontainhide.length; i++) {
// 		mycontainhide[i].style.display = "none";
// 	}

// 	document.getElementById(tabId).style.display = "block";
// }

// window.onload = function() {
// 	openTabs(event, 'dashboard');
// }


// ======================= NAV FIXED ON SCROLL ===========

function scrolldiv(){
	var header = document.getElementById('topnavid');
		header.classList.toggle("sticky", scrollY > 0);
	}

