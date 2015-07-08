////file:app/webroot/js/application.js
$(document).ready(function(){
// Caching the movieName textbox:
var container = $('#container');
 
// Defining a placeholder text:
container.defaultText('Search Container');
 
// Using jQuery UI's autocomplete widget:
container.autocomplete({
minLength    : 1,
source        : 'loadplans/autoComplete'
});
 
});
 
// A custom jQuery method for placeholder text:
 
$.fn.defaultText = function(value){
 
var element = this.eq(0);
element.data('defaultText',value);
 
element.focus(function(){
if(element.val() == value){
element.val('').removeClass('defaultText');
}
}).blur(function(){
if(element.val() == '' || element.val() == value){
element.addClass('defaultText').val(value);
}
});
 
return element.blur();
}