var admin_mosque_fetch_success = function(response) {
    console.log(response);
    $('#fajar').val((typeof(response[0]) != "undefined") ? response[0].jamah : "");
    $('#zuhar').val((typeof(response[1]) != "undefined") ? response[1].jamah : "");
    $('#asar').val((typeof(response[2]) != "undefined") ? response[2].jamah : "");
    $('#maghrib').val((typeof(response[3]) != "undefined") ? response[3].jamah : "");
    $('#isha').val((typeof(response[4]) != "undefined") ? response[4].jamah : "");
    $('#jumua').val((typeof(response[5]) != "undefined") ? response[5].jamah : "");
}

var public_mosque_fetch_success = function(response) {
    $('#fajar_1').html((typeof(response[0]) != "undefined") ? response[0].jamah : "");
    $('#zuhar').html((typeof(response[1]) != "undefined") ? response[1].jamah : "");
    $('#asar').html((typeof(response[2]) != "undefined") ? response[2].jamah : "");
    $('#maghrib').html((typeof(response[3]) != "undefined") ? response[3].jamah : "");
    $('#isha').html((typeof(response[4]) != "undefined") ? response[4].jamah : "");
    $('#jumua').html((typeof(response[5]) != "undefined") ? response[5].jamah : "");
    console.log(response);
}

$(function(){
    $('#mosques_admin').change(function(e) {
        var salahTimes = [];
        salahTimes = fetchSalahTimes(this.value, admin_mosque_fetch_success);
    });
    
    $('#mosques').change(function(e) {
        var salahTimes = [];
        salahTimes = fetchSalahTimes(this.value, public_mosque_fetch_success);
    })
})


function fetchSalahTimes(mosqueId, callback) {
    $.ajax({
        url: "/salahApp/public/salah/getTimings",
        data: {"id" : mosqueId},
        dataType: 'json',
        success: callback,
        error: function(e) {
            
        }
    });
}