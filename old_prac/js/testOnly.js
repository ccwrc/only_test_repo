
$(document).ready(function () {

    var endpointTypicode = 'http://jsonplaceholder.typicode.com';

// GET /posts?_embed=comments

//    $.ajax({
//        url: endpointTypicode + '/albums',
//        method: 'GET'
//    }).then(function (data) {
//        console.log(data);
//    });

    var idsAlbums = new Array();
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
                            // idsAlbumsWithPhotosWithTitleContainsVoluptate[photo.albumId] = photo.albumId;
                            idsAlbums.push(photo.albumId);
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



    function loadAlbumsFromTypicode(endpoint) {
        $.ajax({
            url: endpoint + '/albums',
            data: {},
            type: "GET",
            dataType: "json"
        })
                .done(function (json) {
                    var albums = json;
                    $.each(albums, function (object, album) {
//                       if (album.id in testA) {
//                           console.log("bla");
//                       }

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

// console.log(test);

    var test2 = [3, 5, 7, 3];
    console.log(test2);
    console.log(idsAlbums);

    if ($.inArray(3, idsAlbums) !== -1) {
        console.log("jest");
    } else {
        console.log("nie ma");
    }


});
