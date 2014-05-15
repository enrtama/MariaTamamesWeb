// JavaScript Document

$(document).ready(function(){
  $(".text p").each(function() {
    $(this).wrapInner($("<span />"));
    
    /*
    var output = $(this).html();
    $(this).html(output.replace(/<br>/gi, "</span><br /><span>"));
    */
  });
  
  $(".textePlus").each(function() {
    var btn = this;
    var width = $("a", btn).width();
    var id = $("#" + $(this).attr("id") + "-over");
    
    $("a", btn).click(function(e) {
      e.preventDefault();
      id.leave = false;
      
      if(!$(id).hasClass("show")) {
        if($(id).hasClass("slideToggle")) {
          if(!$(id).hasClass("active")) {
            if(!id.animated) {
              id.animated = true;
              
              $(btn).toggleClass("active", true);
              
              if($(btn).hasClass("expand")) {
                $("a", btn).animate({width:"900px"}, function() {
                  $(id).toggleClass("active", true);
                  $(id).slideToggle(function() {
                    id.animated = false;
                    
                    $(id).toggleClass("show", true);
                    
                    if(id.leave) {
                      id.leave = false;                
                      $("a", btn).trigger("mouseleave");
                    }
                  });
                });
              } else {
                $(id).toggleClass("active", true);
                $(id).slideToggle(function() {
                  id.animated = false;
                  
                  $(id).toggleClass("show", true);
                  
                  if(id.leave) {
                    id.leave = false;                
                    $("a", btn).trigger("mouseleave");
                  }
                });
              }
            }
          } else {
            $(id).toggleClass("show", true);
            $(btn).toggleClass("active", true);
          }
        } else {
          $(id).toggleClass("show", true);
          $(btn).toggleClass("active", true);
        }
      } else {
        $(id).toggleClass("show", false);
        $(btn).toggleClass("active", false);
        
        if($(id).hasClass("slideToggle")) {
          if($(id).hasClass("active")) {
            if(!id.animated) {
              id.animated = true;
              $(id).slideToggle(function() {
                id.animated = false;
                
                if($(btn).hasClass("expand")) {
                  $("a", btn).animate({width:width});
                }
              });
            }
          }
          $(id).toggleClass("active", false);
        } else {
          $(id).hide();
        }
      }
    });
    
    if(!$(btn).hasClass("clickOnly")) {
      $("a", btn).mouseenter(function() {
        if(!$(id).hasClass("show")) {
          if($(id).hasClass("slideToggle")) {
            id.leave = false;
            
            //$(btn).toggleClass("active", true);
            
            if(!$(id).hasClass("active") && !id.animated) {
              id.animated = true;
              
              if($(btn).hasClass("expand")) {
                $("a", btn).animate({width:"900px"}, function() {
                  $(id).toggleClass("active", true);
                  $(id).slideToggle(function() {
                    id.animated = false;
                    
                    if(id.leave) {
                      id.leave = false;                
                      $("a", btn).trigger("mouseleave");
                    }
                  });
                });
              } else {
                $(id).toggleClass("active", true);
                $(id).slideToggle(function() {
                  id.animated = false;
                  
                  if(id.leave) {
                    id.leave = false;                
                    $("a", btn).trigger("mouseleave");
                  }
                });
              }
            }
          } else {
            $(id).show();
          }
        }
      }).mouseleave(function() {
        if(!$(id).hasClass("show")) {
          if($(id).hasClass("slideToggle")) {
          
            //$(btn).toggleClass("active", false);
            
            if(!id.animated) {
              if($(id).hasClass("active")) {
                id.animated = true;
                $(id).toggleClass("active", false);
                
                $(id).slideToggle(function() {
                  id.animated = false;
                  
                  if($(btn).hasClass("expand")) {
                    $("a", btn).animate({width:width});
                  }
                });
              }
            } else {
              id.leave = true;
            }
          } else {
            $(id).hide();
          }
        }
      });
    }
  });
});