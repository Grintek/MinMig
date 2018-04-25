$(document).ready( function ()
{

    $('#buttonHello').on('click',function () {
        $.ajax({
            url: "/models/ModelUserShar.php",
            
            success: function (data) {


                alert(data);
            }
        });


        var drawingCanvas = document.getElementById('myCanvas');
        if (drawingCanvas && drawingCanvas.getContext) {
            var context = drawingCanvas.getContext('2d');

            context.fillStyle = "green";
            context.beginPath();
            context.arc(100, 100, 50, 0, Math.PI * 2, true);
            context.closePath();
            context.stroke();
            context.fill();

            context.beginPath();
            context.fillStyle = "blue";
            context.font = "35px Arial";
            context.fillText("id", 100, 100);
            context.fill();


        }
    });


});
