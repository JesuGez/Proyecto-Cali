// Bootstrap range slider

progressBarCount('.progress-range-counter');

function progressBarCount($progressCount) {
    var elements = document.querySelectorAll($progressCount);
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('input', function(event) {
            getValueOfRangeSlider = this.value;
            getParentElement = this.closest(".custom-progress").querySelector('.range-count-number');


            
            
            setValueOfRangeCountValue = getParentElement.innerHTML = getValueOfRangeSlider;
            setValueOfAttributeValue = getParentElement.setAttribute("data-rangeCountNumber", getValueOfRangeSlider)
            if(setValueOfRangeCountValue > 0 && setValueOfRangeCountValue < 100){

               if( $('#porcentajer').text() > 0 && $('#porcentajer').text() < 100){
               
                  $("#cab_estado").find('option').removeAttr("selected");
                  $("#cab_estado").val('EN_PROCESO')
                 
                 
               } 
               if( $('#porcentajet').text() > 0 && $('#porcentajet').text() < 100){

                   $("#cab_estadot").find('option').removeAttr("selected");
                   $("#cab_estadot").val('EN_PROCESO')
           	  	   
           	  	  
               } 
  
            
            }

         

            if(setValueOfRangeCountValue == 100){


            	if( $('#porcentajer').text() == 100){
                  $("#cab_estado").find('option').removeAttr("selected");
           	  	  
                  $("#cab_estado").val('FINALIZADO')
               } 
               if( $('#porcentajet').text() == 100){
                  $("#cab_estadot").find('option').removeAttr("selected");
           	  	  
                  $("#cab_estadot").val('FINALIZADO')
               } 
            }

            if(setValueOfRangeCountValue == 0){


              if( $('#porcentajer').text() == 0){
               
                  $("#cab_estado").find('option').removeAttr("selected");
                  
                  $("#cab_estado").val('ABIERTO')
               } 
               if( $('#porcentajet').text() == 0){
                  $("#cab_estadot").find('option').removeAttr("selected");
                  
                  $("#cab_estadot").val('ABIERTO')
               } 
            }
            
        });
    }
 
}
