var lazyLoadInstance = new LazyLoad({
  elements_selector: ".lazy"
});

$(document).ready(function() {
  var tab = [];
  var headerOffset = $('header').get(0).offsetHeight;

  // Position about
  $('.about').css('top', headerOffset );
  $(window).on('resize', function(){
      headerOffset = $('header').get(0).offsetHeight;
  });


  // Menu links
  $(".link__project a").each(function(i) {
    tab[i] = new item($(this));
    tab[i].link();
  });

  function item(thus) {
    this.id = $(thus).get(0).id;

    this.link = function() {
      thus.click(function(evt) {
        $(".link__project a, #about-nav, #overview-nav").removeClass("active");  
        $("#" + this.id).addClass("active");
        $("#" + this.id.replace("to", "") + " div div:first-child").trigger(
          "click"
        );

        evt.stopPropagation();
      });
    };
  }
});
