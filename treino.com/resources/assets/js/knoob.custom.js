$(function($) {

  $(".knob").knob({
    change: function(value) {
      //console.log("change : " + value);
    },
    release: function(value) {
      //console.log(this.$.attr('value'));
      console.log("release : " + value);
    },
    cancel: function() {
      //console.log("cancel : ", this);
    },
    format : function (value) {
        return value + '%';
    },

  });

});
