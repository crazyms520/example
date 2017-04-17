function previewAD() {
    var thisId = $(this).attr('id');
    $('.' + thisId).html($(this).val()); }
$('select').on('change', previewAD);
$('input[type=text]').on('keyup', previewAD);
$(function() { $('[data-toggle="popover"]').popover() })
});
var openFile = function(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function() {
        var dataURL = reader.result;
        var output = document.getElementById('output');
        output.src = dataURL; };
    reader.readAsDataURL(input.files[0]);
    $('#import_img').val(''); };
