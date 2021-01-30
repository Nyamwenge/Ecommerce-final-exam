$(document).ready(function () { 
  
  $('ul.navbar-nav > li') 
          .click(function (e) { 
      $('ul.navbar-nav > li') 
          .removeClass('active'); 
      $(this).addClass('active'); 
  }); 
}); 

$(function(){<!--from  w ww .j  a  v a  2s  .c  o  m-->
  // prevents jumping
  $("a.pop-me-over").hover( function (e) {
      e.preventDefault();
      return true;
  });
  $(".pop-me-over").popover();
  });//]]> 

  