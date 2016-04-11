(function(){

  $(document).ready(function() {
    
    $(".js-course-toggle").click(function() {
      $(this).siblings('.js-course-detail').toggle(0);
      $(this).children('i').toggleClass('fa-chevron-down').toggleClass('fa-chevron-up');
    });

    $(".js-course-nav").click(function() {
    	$(".course-nav-item").removeClass('active');
    	$(this).parent(".course-nav-item").addClass('active');

    	$(".js-course-page").addClass('hide');
    	$(".js-" + $(this).attr('data')).removeClass('hide');
    });

    $(".js-nav-sub-link").click(function() {
      $(".js-nav-sub").toggleClass('hide');
    });

  });

})();