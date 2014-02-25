/**
 * Created by lukas on 25.02.14.
 */
$(document).ready(function () {
    $('.hasChild').click(function () {
        $(this).parent().children('ul.sub-nav').toggle(300);
    });
    $('.hasChild:not(.current)').parent().children('ul.sub-nav').toggle(20);
});
