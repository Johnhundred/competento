console.log("Stuff.");

jQuery("document").ready(function(){
    var $ = jQuery.noConflict();

    // Events
    $("a").click(function(e){
        e.preventDefault();
        console.log("Stuff.");
    });
});
