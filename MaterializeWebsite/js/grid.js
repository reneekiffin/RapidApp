$(function(){	//When document has loaded
  $(".grid").on({	//sets selector to all inputs of type "text"
      mouseenter: function(){	//whenever it is focused (clicked or tabbed to)
        $(this).css(" width", "500px"); //alter the css of that particular element
      },
      mouseleave: function(){	//whenever it is blurred (clicked off or tabbed off)
        $(this).css("width", "250px");	//alter the css of that particular element
      }
  })
})
