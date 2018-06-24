
var menuOpen = false;
var menu0 = assetsPath.image + '/menu0.png';
var menu1 = assetsPath.image + '/menu1.png';

$(document).ready(function() {
   // Event-Handler für den Button
   $('#menu-btn').on('click', function(e) {
      e.stopPropagation();
      toggeleMenu();
   });

   // Event-Handler für header, main und Footer.
   // So wird die Navigation geschlossen, sobald
   // auf eines dieser Elemente geklickt wird.
   $('header, main, footer').on('click', function() {
      if(menuOpen) {
         toggeleMenu();
      }
   });
   // TODO: [DRY] Code zum animieren usw zusammenfsasen.
   // Scrollen nach rechts (->) animieren
   $('.nav-arrow-right').on('click', function() {
      // Pfeile nicht mehr animieren
      $('.nav-arrow-right').removeClass('bounce-right');
      $('.nav-arrow-left').removeClass('bounce-left');
      // Scrollen
      var navList = $('#main_nav ul');
      var scrollLeftOld = navList.scrollLeft();
      navList.animate({scrollLeft: scrollLeftOld + 200}, 800, function() {
         // Wenn die Animation abgeschlossen ist, wird überprüft,
         // ob der Pfeil nach links angezeigt werden soll.
         if(scrollLeftOld != navList.scrollLeft()) {
            $('.nav-arrow-left').show();
         }
         else {
            // kann nicht weiter gescrollt werden,
            // den entsprechenden Pfeil ausblenden
            $('.nav-arrow-right').hide();
         }
      });
   });
   // Scrollen nach links (<-) animieren
   $('.nav-arrow-left').on('click', function() {
      // Pfeile nicht mehr animieren
      $('.nav-arrow-right').removeClass('bounce-right');
      $('.nav-arrow-left').removeClass('bounce-left');
      // Scrollen
      var navList = $('#main_nav ul');
      var scrollLeftOld = navList.scrollLeft();
      navList.animate({scrollLeft: scrollLeftOld - 200}, 800, function() {
         // Wenn die Animation abgeschlossen ist, wird überprüft,
         // ob der Pfeil nach links angezeigt werden soll.
         if(scrollLeftOld != navList.scrollLeft()) {
            $('.nav-arrow-right').show();
         }
         else {
            // kann nicht weiter gescrollt werden,
            // den entsprechenden Pfeil ausblenden
            $('.nav-arrow-left').hide();
         }
      });
   });
});

// Das Menü öffnen bzw. schließen.
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
