$(document).ready(function() {
    $('.popup').popup();

    load_tickets();
});

var load_tickets = function() {
    $.ajax({
        'url' : '/dashboard_tickets_whmcs_ajax/getStoreNames',
        'type' : 'GET',
        'success' : function(data_a) {
            var store_names = JSON.parse(data_a);

            $.ajax({
                'url' : '/dashboard_tickets_whmcs_ajax/getLimitedTicketParents',
                'type' : 'GET',
                'success' : function(data) {
                
                    $(".table_loader").hide();
                
                    var all_tickets = JSON.parse(data);
                    var index;
                    var html = "";
            
                    for (index = 0; index < all_tickets.length; ++index) {
                        html += "<tr><td>" + all_tickets[index]["name"] + "</td><td>" + store_names[all_tickets[index]["storeid"]] + "</td><td>" + all_tickets[index]["lastreply"] + "</td><td>" + all_tickets[index]["subject"] + "</td><td>" + all_tickets[index]["status"] + "</td><td>" + all_tickets[index]["history"] + "</td><td><a class='tiny positive ui button' href='/dashboard_ticket_detail/" + all_tickets[index]["storeid"] + "/" + all_tickets[index]["tid"] + "'>Details</a></td></tr>";
                    }
                    
                    $("#all_tickets_table").html(html);
                }
            });
        
        }
    });
}

var current_time = 0;
var progress = function() {
    current_time = current_time + 1;
    $(".progress").css("width", (current_time/600*100) + "%");
    $(".reload_eta").text("Reloading in " + Math.round(60 - (current_time/10)) + " seconds...");
    if(current_time > 600) {
        current_time = 0;
        $(".table_loader").show();
        $("#all_tickets_table").html("");
        load_tickets();
    }
};

setInterval(progress, 100); // call every 1000 milliseconds

progress();