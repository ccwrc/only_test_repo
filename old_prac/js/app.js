
$(document).ready(function () {

    var endpointTypicode = 'http://jsonplaceholder.typicode.com';
    var endUsers = [];

    $.getJSON(endpointTypicode + '/db', function (data) {
        var albumId = [];
        var userId = [];
        
        $.each(data.photos, function (key, val) {
          //  if (val.title.match(/voluptate/i)) { // case insensitive
            if (val.title.match(/voluptate/)) { // case sensitive    
                albumId.push(val.albumId);
            }  
        }); 
        $.each(data.albums, function (key, val) {
            if ($.inArray(val.id, albumId) !== -1) {
                userId.push(val.userId);
            }
        });
        $.each(data.users, function (key, val) {
            if (val.address.zipcode.match(/\d\d\d\d\d-\d\d\d\d/) && $.inArray(val.id, userId) !== -1) {
                endUsers.push(val);
            }
        });
    });

    console.log(endUsers);

});
