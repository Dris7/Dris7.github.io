jQuery(document).ready(function () {
  function getId(url) {
    var regExp =
      /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
      return match[2];
    } else {
      return "error";
    }
  }

  var myId = getId(jQuery("#bio iframe").attr("src"));
  jQuery("#bio iframe").attr("src", `//www.youtube.com/embed/${myId}`);
});
