$(function(){
    $('.type-toggle').click(function(){
        var value = $(this).find('input').attr('value');
        var $citizen = $('form div.citizen-form');
        var $organisation = $('form div.organisation-form');

        switch (value) {
            case 'citizen':
                $citizen.show();
                $organisation.hide();
                break;
            case 'organisation':
                $citizen.hide();
                $organisation.show();
                break;
            default:
                $citizen.hide();
                $organisation.hide();
        }
    });
});