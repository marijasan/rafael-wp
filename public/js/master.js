$(document).ready(function(){
  $projects = $('#projects')
  $slideshow = $('#project .slideshow')
  $content = $('#content')

  $projects.imagesLoaded(function(){
    $(this).masonry({
      itemSelector: '.project',
      columnWidth: 320
    })
  })
  
  if ($slideshow.length) {
    resizeSlideshow()
    
    $(window).resize(resizeSlideshow)
  };
})

$.fn.sumWidth = function () {
  sum = 0
  $(this).each(function(){
    sum += $(this).outerWidth()
  })
  return sum
}

function resizeSlideshow() {
  var $images = $slideshow.find('.images')
  var ww = $(window).width()
  $slideshow.css({
    overflow: 'hidden',
    width: ww,
    marginLeft: - (ww - $content.width()) / 2
  })
  $images.css({
    paddingLeft: (ww - $content.width()) / 2
  })
  
  $images.imagesLoaded(function(){
    $images.css({
      width: $images.find('li').sumWidth()
    })
  })
}