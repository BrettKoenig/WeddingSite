/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

//Brett function

document.getElementById("RSVPsubmit").onclick = function CheckRsvp() 
{
	var guestList = [["Brett Koenig", "Tricia Dresbach"], ["Nick Koenig", "Emily Koenig"]];
	var counter = 0;
	var innerCounter = 0;
	var flag = false;
	while (counter < guestList.length && !flag)
	{
		while (innerCounter < guestList[counter].length && !flag)
		{
			if(document.getElementById("RSVPname").value == guestList[counter][innerCounter])
			{
				document.getElementById("RSVPname").readOnly = true;
				flag = true;
				break;
			}
			innerCounter++;
		}
		if (flag)
		{
			break;
		}
		innerCounter = 0;
		counter++;
	}
	if(flag)
	{
		var displayString;
		var displayCounter = 0;
		displayString = "<ul>";
		while(displayCounter < guestList[counter].length)
		{
			displayString = displayString + "<li>" + guestList[counter][displayCounter] + "<div class=\"radio\"><label><input type=\"radio\" name=\"optionsRadios"+ displayCounter +"\" id=\"optionsRadios1\" value=\"option1\" checked>Yes</label></div><div class=\"radio\"><label><input type=\"radio\" name=\"optionsRadios"+ displayCounter +"\" id=\"optionsRadios2\" value=\"option2\">No</label></div></li>";
			displayCounter++;
		}
		displayString = displayString + "</ul>";
		document.getElementById("displayNames").innerHTML = displayString;
		document.getElementById("displayNames").style.display = "block";
	}
};