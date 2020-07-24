$('div.panel-heading').hover(function () {
    $('.panel-collapse1', $(this).closest('.panel1')).collapse('show');
    }, function() {
        $('.panel-collapse1', $(this).closest('.panel1')).collapse('hide');
    });
$('div.panel-heading').hover(function () {
    $('.panel-collapse2', $(this).closest('.panel2')).collapse('show');
    }, function() {
        $('.panel-collapse2', $(this).closest('.panel2')).collapse('hide');
    });

// $(".panel-heading").mouseenter(function () {
//     $(".panel-collapse").fadeIn();
// });
// $(".panel-collapse").mouseleave(function(){
//    $(".panel-collapse").fadeOut();
// });

