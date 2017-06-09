function loadWebcam() {

    var player = document.getElementById('player');
    var snapshotCanvas = document.getElementById('snapshot');
    var captureButton = document.getElementById('capture');

    var handleSuccess = function (stream) {
        // Attach the video stream to the video element and autoplay.
        player.srcObject = stream;
    };

    captureButton.addEventListener('click', function () {
        var context = snapshotCanvas.getContext('2d');
        // Draw the video frame to the canvas.
        // context.drawImage(player, 0, 0, snapshotCanvas.width,
        //   snapshotCanvas.height);
        context.drawImage(player, 200, 100, 220, 277, 0, 0, 220, 277, );
    });

    navigator.mediaDevices.getUserMedia({ video: true })
        .then(handleSuccess);

    //  var canvas = document.getElementById("snapshot"); 
    //  var canvas = document.getElementById("snapshot");

    /* REGISTER DOWNLOAD HANDLER */
    /* Only convert the canvas to Data URL when the user clicks. 
       This saves RAM and CPU ressources in case this feature is not required. */
    function dlCanvas() {

        var dt = snapshotCanvas.toDataURL('image/jpg');
        /* Change MIME type to trick the browser to downlaod the file instead of displaying it */
        dt = dt.replace(/^data:image\/[^;]*/, 'data:application/octet-stream');

        /* In addition to <da>'s "download" attribute, you can define HTTP-style headers */
        dt = dt.replace(/^data:application\/octet-stream/, 'data:application/octet-stream;headers=Content-Disposition%3A%20attachment%3B%20filename=Caaaaaanvas.jpg');

        //this.href = dt;
        return dt;
    };

    $("#dlbtn").click(function () {
        var currentdate = new Date();
        var datetime = currentdate.getDate() + "-"
            + (currentdate.getMonth() + 1) + "-"
            + currentdate.getFullYear() + "-----"
            + currentdate.getHours() + "-"
            + currentdate.getMinutes() + "-"
            + currentdate.getSeconds();
        
        $("#companyText").val(datetime);
        var photo = dlCanvas();
        $(this).attr('download', datetime + '.jpg');
        $(this).attr('href', photo);
    });
}
