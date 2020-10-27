$(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");

    swal({
          title: "Are you sure To Delete?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          })
          .then((willDelete) => {
          if (willDelete) {
              window.location.href = link;

          } else {
              swal("Your imaginary file is safe!");
          }

      });
});

$(document).on("click", "#retun_order", function(e){
    e.preventDefault();
    var link = $(this).attr("href");

    swal({
          title: "Are you sure To Return Order ?",
          text: "Once Return, you will not be able to again cancel this!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          })
          .then((willDelete) => {
          if (willDelete) {
              window.location.href = link;

          } else {
              swal("Your Return Order is Safe..!");
          }

      });
});