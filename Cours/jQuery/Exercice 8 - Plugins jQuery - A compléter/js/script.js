$("#mygallery").justifiedGallery({
    randomize:true,
    selector:'.fresco',
    margins:5,
});


$(document).ready(function () {
    $(".fresco").on("click", function (event) {
      // the page will scroll up without this
      event.preventDefault();

      // Fresco API code goes here
      Fresco.show($(".fresco")[0]);
    });
  });

  
sc