$(document).ready(function(){
  var $projects = $('#projects')
  
  $projects.imagesLoaded(function(){
    $(this).masonry({
      itemSelector: '.project',
      columnWidth: 320
    })
  })
})