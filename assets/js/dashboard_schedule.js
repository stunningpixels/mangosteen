$(document).ready(function() {
    $(".book").click(function() {
        
        var p = $(this);
    
        $.ajax({
            'url' : '/dashboard_schedule_ajax/book/' + $(this).attr("time_slot"),
            'type' : 'GET',
            'success' : function(data) {
                var response = JSON.parse(data);
                if(response[0] == "success") {
                    p.addClass("disabled");
                    p.siblings("a").removeClass("disabled");
                    p.parent().siblings(".js_status").html('<i class="icon checkmark"></i> Booked');
                }
            }
        });
    });
    
    $(".unbook").click(function() {
        
        var p = $(this);
    
        $.ajax({
            'url' : '/dashboard_schedule_ajax/unbook/' + $(this).attr("time_slot"),
            'type' : 'GET',
            'success' : function(data) {
                var response = JSON.parse(data);
                if(response[0] == "success") {
                    p.addClass("disabled");
                    p.siblings("a").removeClass("disabled");
                    p.parent().siblings(".js_status").html('');
                }
            }
        });
    });
    
    $('.popup').popup();
});