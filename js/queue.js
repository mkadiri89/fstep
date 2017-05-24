$(function(){
    $(document).ready(function(){
        var $form = $('form#queue-application-form');
        var $organisation = $form.find('div.organisation-form');
        $organisation.hide().find(':input').attr('disabled', true);
    });

    $('.type-toggle').click(function(){
        var value = $(this).find('input').attr('value');
        var $form = $('form#queue-application-form');
        var $citizen = $form.find('div.citizen-form');
        var $organisation = $form.find('div.organisation-form');

        switch (value) {
            case 'citizen':
                $citizen.show().find(':input').attr('disabled', false);
                $organisation.hide().find(':input').attr('disabled', true);
                $form.attr('action', 'index.php?action=saveCitizen');
                break;

            case 'organisation':
                $citizen.hide().find(':input').attr('disabled', true);
                $organisation.show().find(':input').attr('disabled', false);
                $form.attr('action', 'index.php?action=saveOrganisation');
                break;

            case 'anonymous':
                $citizen.hide().find(':input').attr('disabled', true);
                $organisation.hide().find(':input').attr('disabled', true);
                $form.attr('action', 'index.php?action=saveAnonymous');
                break;
            default:
                alert("Incorrect form switching action");
        }
    });
});