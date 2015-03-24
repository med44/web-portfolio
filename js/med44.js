//BUTTON COLOR CHANGE
  //=================
	$(document).ready(function(){
	    $('#navLink a').click(function(){
	        $(this).addClass('selected');
	        $(this).siblings().removeClass('selected');
	    });