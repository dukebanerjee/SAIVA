$(document).ready(function() {
  $('#block-system-main-menu li').hover(
    function() {
      $('ul:first', $(this)).show();
    },
    function() {
      $('ul', $(this)).hide();
    }
  );
});
