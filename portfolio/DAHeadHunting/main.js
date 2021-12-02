$(function() {
    $('#nav-icon1').click(function(){
        $(this).toggleClass('open');
    });
});
$(document).ready(function(){
    $('#nav-icon1').click(function(event){
        $('.nav-list').toggleClass('active');
    })
})