var lazyLoadInstance = new LazyLoad({
  elements_selector: ".lazy"
});

$(document).ready(function() {
  var tab = [];

  // Menu links
  $(".link__project a").each(function(i) {
    tab[i] = new item($(this));
    tab[i].link();
  });

  // Menu links constructor
  function item(thus) {
    this.id = $(thus).get(0).id;

    this.link = function() {
      thus.click(function(evt) {
        $(".link__project a").removeClass("active");
        $("#" + this.id.replace("to", "") + " div div:first-child").trigger(
          "click"
        );

        evt.stopPropagation();
      });
    };
  }
});
