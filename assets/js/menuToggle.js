function menuToggle() {
    var x = $("#main").css("margin-left"); //200 => 0, 0 => 200
    var y = x == "0px" ? "200px" : "0px";
    // y = 200
  
    $("#menu").css("margin-left", "-" + x);
  
    $("#main").css("margin-left", y);
  }
  
  function changeLangugeToggle(){
    var popoverContent = document.querySelector('#popuper.show-popuper');
    if(!popoverContent){
        $("#popuper").addClass("show-popuper");
    }
    
  }
  
  $(document).click(function() {
    closeLangugeToggle();
  });
  function closeLangugeToggle(){
    var popoverButton = document.querySelector('.select-language.active');
    var popoverContent = document.querySelector('#popuper.show-popuper');
  
    if (popoverContent && popoverButton) {
        popoverButton.classList.remove('active');
        popoverContent.classList.remove('show-popuper');
    }else if(popoverContent){
      $(".select-language").addClass("active");
    }
  }