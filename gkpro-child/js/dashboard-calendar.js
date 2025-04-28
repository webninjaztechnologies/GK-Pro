jQuery(document).ready(function($){
    // wait a tick for React to finish
    setTimeout(function(){
      // grab the event‐list out of React's DOM
      var eventsHtml = $('#tutor_calendar_wrapper .tutor-calendar-listing').html();
      // inject into a smaller box
      $('#my-small-sidebar-events').html(eventsHtml);
    }, 500);
});
  