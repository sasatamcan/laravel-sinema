$(document).ready(function(){
    let placeholder = '';
    $('#img_delete').on('click', function (){
        $('#img_preview').attr('src', placeholder);
        $('#img_fileUpload').val('');
        $('#img_fileValue').val('');
        return false;
    }) 
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#img_fileUpload").change(function () {
        readURL(this);
    }); 
})

