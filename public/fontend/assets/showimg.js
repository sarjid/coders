 function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#two')
                .attr('src', e.target.result)
                .width(116)
                .height(122);
        };
        reader.readAsDataURL(input.files[0]);
    }
 }



