 
       $("#findpostcode").click(function(event){
       
              event.preventDefault();
               $(".alert").hide();
               if($("#address").val()!=""){
               
                   $.ajax({
                      type: "GET", 
                      url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($("#address").val())+"&sensor=false&key=AIzaSyBZh2v5meZMf36-4RQCNi1qbKI0ZcPPbu0",
                      dataType: "xml",
                      success: processXML
                      });  //end of AJAX call               
               
                function processXML(xml){
                  var status = $(xml).find("status").text();
                 
                 if(status == "OK") {
                 
                   //find postcode
                   var postcode= [];
                   $(xml).find("address_component").each(function(){
                      if ($(this).find("type").text()=="postal_code"){
                        postcode.push($(this).find("long_name").text());
                        
                             $("#success").html("The Postcode is: "+ postcode[0]).fadeIn();
                             }
                             });
                 //create map
                  function initMap() {
			     //latitude longitude
			     
				 $(xml).find("location").each(function(){
				   
					// creating var VERY IMPORTANT TO MAKE THE TEXT A NUMBER ADD THE +
					var lat=+($(this).find('lat').text());
					var lng=+($(this).find('lng').text());
				
					// Create a map object and display
  					var map = new google.maps.Map(document.getElementById('map'), {
    					center: {lat: lat, lng: lng},
   	 					scrollwheel: true,
    					zoom: 15
  					});//end of var map
			  });//end of lat lng find
			  }//end of creating map
			initMap();
			
                        
                      } //end of if(status == "OK") 
                else{
                    $("#map").hide();
                    $("#fail").fadeIn();
                    
                   }
                   }     //end of processXML function
                }//end of -- if($("#address").val()!="")
               
               else{
                  $("#noCity").fadeIn();
               }
               
               
         
         }); //end of click function
  
    