define(["jquery"], function($) {
    return {

        notifications_add_form_extra: function() {
            $('#module').change(function() {
                var data = {
                    module: $(this).val()
                };

                var url = M.cfg.wwwroot + "/local/kopere_dashboard/view-ajax.php?classname=notificationsutil&method=add_form_extra";
                $('#restante-form').load(url, data);
            });
        },
    };
});
