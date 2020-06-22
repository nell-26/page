function slowScroll(id){
    var offset;
    
    if(id == "#styles"){
    offset=65;
    
    }else offset=0;
    
    console.log($(id).offset());
    $('html, body').animate({
        scrollTop: $(id).offset().top + offset
        }, 1500);
        
        return false;
    }

    
    function slowScroll(id){
        var offset;
        
        if(id == "#styles2"){
        offset=-15;
        
        }else offset=0;
        
        console.log($(id).offset());
        $('html, body').animate({
            scrollTop: $(id).offset().top + offset
            }, 1000);
            
            return false;
        }
  