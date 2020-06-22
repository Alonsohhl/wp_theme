jQuery(function ($) {
  $("img.lazyload").lazyload();

  $("#container").imagesLoaded(function () {
    console.log("img loaded");
  });
});
// render();
