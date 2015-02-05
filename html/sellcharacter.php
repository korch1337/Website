<div class="messagepop pop">
    <form method="post" id="new_message" action="/messages">
        <p><label for="price">Enter your price: </label><input type="text" size="30" name="price" id="price" /></p>
        <p><input type="submit" value="Confirm" name="commit" id="message_submit"/> or <a class="close" href="/">Cancel</a></p>
    </form>
</div>

function deselect(e) {
  $('.pop').slideFadeToggle(function() {
    e.removeClass('selected');
  });    
}

$(function() {
  $('#contact').on('click', function() {
    if($(this).hasClass('selected')) {
      deselect($(this));               
    } else {
      $(this).addClass('selected');
      $('.pop').slideFadeToggle();
    }
    return false;
  });

  $('.close').on('click', function() {
    deselect($('#contact'));
    return false;
  });
});

$.fn.slideFadeToggle = function(easing, callback) {
  return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
};
