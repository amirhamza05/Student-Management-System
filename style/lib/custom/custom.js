
window.success = function(msg) {
    var dom = '<div class="top-alert"><div class="alert alert-success-alt alert-dismissable fade in " role="alert"><i class="glyphicon glyphicon-ok"></i> ' + msg + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div></div>';
    var jdom = $(dom);
    jdom.hide();
  $("body").append(jdom);
  jdom.fadeIn();
  setTimeout(function() {
    jdom.fadeOut(function() {
      jdom.remove();
    });
  }, 2000);
}



  function hideModal(){
  $(".modal").removeClass("in");
  $(".modal-backdrop").remove();
  $('body').removeClass('modal-open');
  $('body').css('padding-right', '');
  $(".modal").hide();
}

function loader(divname){
  document.getElementById(divname).innerHTML = "<img src='https://public.udvash.com/Content/Image/ajax-loader.gif' />";
}
function close_loader(divname){
  document.getElementById(divname).innerHTML = "";
}