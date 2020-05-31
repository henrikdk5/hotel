
//for spinner buttons  

$(function ($) {
       $('#handleCounter1').handleCounter({
    minimum: 1,
    maximize: 100,
   
           
    })
          
        $('#handleCounter2').handleCounter({
    minimum: 1,
    maximize: 100,
             
           })
       
     
       
       });
      
   

//for datepicker

addEventListener('DOMContentLoaded', function () {  
  document.getElementById('rooms').addEventListener('change', generateInputs());
  document.getElementById('number1').addEventListener('change', generateInputs());

    
	pickmeup('.range', {
		mode : 'range',
        separator: '    to   ',
        position :'bottom',
//        hide_on_select : true,
        format: 'd b-y',
      
	});
//pickmeup('.range').show();


    
});

function generateInputs() {
  //Find inputsne brugeren kan ændre
  let roomSelect =  document.getElementById('rooms');
  let roomCount = document.getElementById('number1');

  //Find ud af hvad der er valgt i inputsne.
  let sku = roomSelect.value;
  let numberOfRooms = roomCount.value;
    
  //Find parent som variablerne ligger i.
  let parentElement = document.getElementById('product-list');

  //Og tøm den, sådan der ikke er gamle værdier
  $('#product-list').empty();

  let roomNode = document.createElement('input');
  roomNode.setAttribute('type', 'hidden');
  roomNode.setAttribute('name', 'products[0][plan_id]');
  roomNode.setAttribute('value', sku);

  let roomAmountNode = document.createElement('input');
  roomAmountNode.setAttribute('type', 'hidden');
  roomAmountNode.setAttribute('name', 'products[0][amount]');
  roomAmountNode.setAttribute('value', numberOfRooms);

  parentElement.appendChild(roomNode);
  parentElement.appendChild(roomAmountNode);
}

// map
function initMap() {
        var uluru = {lat:  19.735121, lng: -155.014044};  
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }    
// map
















// image slider main
$(document).ready(function(){
    
 
                $('.single').slick({
                autoplay : true,
                  pauseOnFocus : false,
                    pauseOnHover : false,
                 arrows : false,
                    draggable : false,
                         });
              
                $('.left').click(function(){
                  $('.single').slick('slickPrev');
                })

                $('.right').click(function(){
                  $('.single').slick('slickNext');
                })
                
                
                
                 
                $('.room').slick({
                autoplay : false,
                  slidesToShow :3,
                  pauseOnFocus : true,
                
                 arrows : false,
                    draggable : true,
                 swipeToSlide : true,
                  });
    
                
                $('.review').slick({
                    
                autoplay : true,
                    autoplaySpeed : 6000,
                  pauseOnFocus : true,
                 pauseOnHover : false,
                 arrows : false,
                    draggable : true,
             
                    
                         });
    
    
    
    
   
        });



//scrolltotop
 
   $(function () {
  $.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '600' , // Distance from top before showing element (px)
    topSpeed: 300 , // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 500, // Animation in speed (ms)
    animationOutSpeed: 500, // Animation out speed (ms)
  scrollText: '^',
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });
});
