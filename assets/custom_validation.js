$('.mobilevalidate').focusout(function(){
   $('.validation_error').empty();
   var thismobile = $(this);
   var regex = /^[6789]\d{9}$/; 
   if(thismobile.val()!=''){
      if(!$.isNumeric(thismobile.val()) || !regex.test(thismobile.val())){
         $('.validation_error').text('Please Enter Valid Mobile Number');
      }else if(thismobile.val().length!=10){
         $('.validation_error').text('Please Enter 10 Digits Mobile Number');
      }
   }
});
// $('.mobilevalidate').keypress(function(e){
//    $('.validation_error').empty();
//    var keyCode = e.keyCode || e.which;
//    var regex = /^[0-9]+$/;
//    var isValid = regex.test(String.fromCharCode(keyCode));
//    $(this).val($(this).val().substring(0, 10));
//    if ($(this).val()!='' && !isValid) {
//       $('.validation_error').text("Only Numbers allowed");
//    }
//    return isValid;
// });