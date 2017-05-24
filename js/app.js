
$(document).ready(function () {

    var endpointTypicode = 'http://jsonplaceholder.typicode.com';

//    $.ajax({
//        url: endpointTypicode + '/albums',
//        method: 'GET'
//    }).then(function (data) {
//        console.log(data);
//    });

    var idsAlbumsWithPhotosWithTitleContainsVoluptate = [];
    var idsUsersWithPhotosWithTitleContainsVoluptate = [];

    function loadPhotosFromTypicode(endpoint) {

        $.ajax({
            url: endpoint + '/photos',
            data: {},
            type: "GET",
            dataType: "json"
        })
                .done(function (json) {
                    var photos = json;
                    $.each(photos, function (object, photo) {
                        if (photo.title.match(/voluptate/i)) {
                            idsAlbumsWithPhotosWithTitleContainsVoluptate.push(photo.albumId);
                        }
                    });
                })
                .fail(function () {
                    // do something
                })
                .always(function () {
                    // do something
                });
    }

    loadPhotosFromTypicode(endpointTypicode);


    var testArray = [3, 5, 7, 3];
    console.log(testArray);
    console.log(idsAlbumsWithPhotosWithTitleContainsVoluptate);

    if ($.inArray(4, idsAlbumsWithPhotosWithTitleContainsVoluptate) !== -1) {
        console.log("jest");
    } else {
        console.log("ni ma");
    }



});
