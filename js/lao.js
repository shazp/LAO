$(document).ready(function() {
	
	
	
$('img[delayedsrc]').each(function(){
  $(this).attr('src', $(this).attr('delayedsrc'));
 
});
   
   
       $('#myCarousel,#mySecondCarousel,#myThirdCarousel,#myFourthCarousel,#myFifthCarousel,#mySixthCarousel,#mySeventhCarousel,#myEighthCarousel,#myNinthCarousel,#myTenthCarousel').carousel();
    
});

