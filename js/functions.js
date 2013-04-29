$('.dropdown-menu input, .dropdown-menu label').click(function(e) {
    e.stopPropagation();
});



$('#email').data('holder',$('#email').attr('placeholder'));

$('#email').focusin(function(){
    $(this).attr('placeholder', '');
});

$('#email').focusout(function(){
    $(this).attr('placeholder', $(this).data('holder'));
});


$('#password').data('holder',$('#password').attr('placeholder'));

$('#password').focusin(function(){
    $(this).attr('placeholder', '');
});

$('#password').focusout(function(){
    $(this).attr('placeholder', $(this).data('holder'));
});



$('#repassword').data('holder',$('#repassword').attr('placeholder'));

$('#repassword').focusin(function(){
    $(this).attr('placeholder', '');
});

$('#repassword').focusout(function(){
    $(this).attr('placeholder', $(this).data('holder'));
});

// login form elements

$('#logemail').data('holder',$('#logemail').attr('placeholder'));

$('#logemail').focusin(function(){
    $(this).attr('placeholder', '');
});

$('#logemail').focusout(function(){
    $(this).attr('placeholder', $(this).data('holder'));
});


$('#logpassword').data('holder',$('#logpassword').attr('placeholder'));

$('#logpassword').focusin(function(){
    $(this).attr('placeholder', '');
});

$('#logpassword').focusout(function(){
    $(this).attr('placeholder', $(this).data('holder'));
});

// clear default placeholder from search bar on focus

$('#mainSearch').data('holder',$('#mainSearch').attr('placeholder'));

$('#mainSearch').focusin(function(){
    $(this).attr('placeholder', '');
});

$('#mainSearch').focusout(function(){
    $(this).attr('placeholder', $(this).data('holder'));
});
