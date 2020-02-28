function uploadProfile(id, photo){

    console.log(id)
    console.log(photo);

    formData = new FormData();
    formData.append('photo', photo);
    formData.append('id', id);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/api/upload_profile',
        processData: false,
        contentType: false,
        type: 'POST',
        data: formData,
        success: function(data) {
            $("#profile_thumb").attr("src", data.location);
            $("#profile_photo").addClass("is-valid");
            $(".custom-file-label").html('<p class="text-success">Foto alterada com sucesso!!!</p>');
        },
        error: function(data) {
            console.log(data.response);
            $("#profile_photo").addClass("is-invalid");
            $(".custom-file-label").html('<p class="text-danger">'+data.responseJSON.errors.photo+'</p>');
        }
    });
}