function Alert(wrapper) {

    function show (message, cssClass, duration) {
        var id = 'alert' + Math.floor((Math.random()*1000)+1);
        var elem = $('<div></div>').attr('id', id).attr('class', 'alert alert-' + cssClass);
        elem.hide();
        html =  '<strong>' + message + '</strong>';
        html += '<a class="close pull-right" data-dismiss="alert" href="#">&times;</a>';
        elem.html(html);
        $(wrapper).append(elem);
        elem.html();
        doAnimation(elem, duration);
        return elem;
    }
    function doAnimation(elem, duration) {
        if(duration == undefined) {
            duration = 3000;
        }
        if(this.timeoutId != null) {
            window.clearTimeout(this.timeoutId);
        }
        window.setTimeout(function () {
            hide(elem.attr('id'));
        }, duration);
        elem.fadeIn();
    }
    function hide(id) {
        $('#' + id).fadeOut(500, function() {
            $(this).remove();
        });
    }

    this.success = function(message, duration) {
        return show(message, 'success', duration);
    };
    this.error = function(message, duration) {
        return show(message, 'danger', duration);
    };
    this.info = function(message, duration) {
        return show(message, 'info', duration);
    };
    this.warning = function(message, duration) {
        return show(message, 'warning', duration);
    };
}