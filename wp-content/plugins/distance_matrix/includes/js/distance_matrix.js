$("#distance-matrix").submit(function(e){

    isFormValid = true;
    
    if(!isFormValid){
        alert("Form is not valid :(");
        e.preventDefault();
    }
});