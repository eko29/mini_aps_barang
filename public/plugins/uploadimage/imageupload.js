    function profil(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function () {
        profil(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();
                
                $('.fileinput-button').hide();

            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        $('.fileinput-button').show();
    }

    function readURL10(a) {
        // console.log(a);
        if (a.files && a.files[0]) {
            
            var ret = $("#image_" + $(a).attr('id-image'));
            var gmb = $("#gmb_" + $(a).attr('id-image'));
            var wrap_ = $("#wrap_" + $(a).attr('id-image'));
            var tampil_ = $("#tampil_" + $(a).attr('id-image'));
            var reader = new FileReader();

            reader.onload = function (e) {
                wrap_.hide();

                ret.attr('src', e.target.result);
                gmb.val(a.files[0].name);
                tampil_.show();

                //$('.image-title_' + $(e).attr('id-image')).html(e.files[0].name);
            };
            //console.log("dskfj");
            reader.readAsDataURL(a.files[0]);

        } else {
            removeUpload11(a);
        }
    }
    function removeUpload11(a) {
        var lom = $("#tampil_" + $(a).attr('id-tombol'));
        var wrapp_ = $("#wrap_" + $(a).attr('id-tombol'));
        var file_upload_input = $("#upload_p_" + $(a).attr('id-tombol'));
        var gmb = $("#upload_p_" + $(a).attr('id-tombol'));
        gmb.val("");
        file_upload_input.replaceWith(file_upload_input.clone());
        lom.hide();
        wrapp_.show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
