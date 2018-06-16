
var menuOpen = false;
var menu0 = assetsPath.image + '/menu0.png';
var menu1 = assetsPath.image + '/menu1.png';

$(document).ready(function() {
   $('#menu-btn').on('click', function(e) {
      e.stopPropagation();
      toggeleMenu();
   });

   $('header, main, footer').on('click', function() {
      if(menuOpen) {
         toggeleMenu();
      }
   });
});

function toggeleMenu() {
   if(!menuOpen) {
      $('#main_nav').show('slow');
		$('#menu-btn').attr('src', menu1);
      // Zustand der Navigation merken
      menuOpen = true;
   }
   else {
      $('#main_nav').hide('slow');
		$('#menu-btn').attr('src', menu0);
      // Zustand der Navigation merken
      menuOpen = false;
   }
}
