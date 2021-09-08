$(document).ready(function() {
    $(".changer").click(function () {
        var a=$(this).val();
        $("#msgreceiver").val(a).selected;
    })
});

