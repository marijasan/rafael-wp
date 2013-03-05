$(document).ready(function(){
  var $projects = $('#projects'),
      $images = $('#project .images'),
      $content = $('#content');

  $projects.imagesLoaded(function(){
    $(this).masonry({
      itemSelector: '.project',
      columnWidth: 320
    })
  })
  
  if ($images.length) {
    
    $images.wrap($('<div class="images_container"></div>'))
    var $container = $('#project .images_container')
    var ww = $(window).width()
    $container.css({
      overflow: 'hidden',
      width: ww,
      marginLeft: - (ww - $content.width()) / 2
    })
    $images.css({
      paddingLeft: (ww - $content.width()) / 2
    })
    
    $images.imagesLoaded(function(){
      $images.css({
        width: $images.find('.image, .video').sumWidth()
      })
    })
  };
})

$.fn.sumWidth = function () {
  sum = 0
  $(this).each(function(){
    sum += $(this).outerWidth()
  })
  return sum
}
