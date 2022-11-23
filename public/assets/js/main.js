console.clear();
$(document).ready(function () {
  function IsEmail(email) {
    var regex =
      /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email)) {
      return false;
    } else {
      return true;
    }
  }
  /* Register <Start> */
  $("#RegisterBtn").click(function (e) {
    e.preventDefault();

    if (
      $("#FullName").val() &&
      $("#Email").val() &&
      IsEmail($("#Email").val()) == true &&
      $("#Password").val() &&
      $("#Cpassword").val()
    ) {
      if ($("#Password").val() == $("#Cpassword").val()) {
        $.ajax({
          url: "assets/php/action.php",
          method: "POST",
          data: `FullName=${$("#FullName").val()}&Email=${$(
            "#Email"
          ).val()}&Password=${$("#Password").val()}&action=RegisterBtn`,
          success: function (response) {
            console.log(response);
            switch (response) {
              case "Logged":
                console.error("You Are Logged");
                window.replace("index.php");
                break;
              case "EmailExist":
                $(".alert").remove();
                $("#alerts").append(
                  `<div id="alertEmailExist" class="alert alert-danger">This Email Already Exist</div>`
                );
                break;
            }
          },
        });
      } else {
        $(".ErrorCpassword").text("The same password must be used");
      }
    } else {
      if (!$("#FullName").val()) {
        $(".ErrorFullName").text("This field is required");
        $("#FullName").css("border", "1px solid var(--bs-red)");
      }

      if (IsEmail($("#Email").val()) == false) {
        $("#alerts").append(
          `<div id="alertEmailExist" class="alert alert-danger">Please Enter A Valid Email</div>`
        );
      }

      if (!$("#Email").val()) {
        $(".ErrorEmail").text("This field is required");
        $("#Email").css("border", "1px solid var(--bs-red)");
      }

      if (!$("#Password").val()) {
        $(".ErrorPassword").text("This field is required");
        $("#Password").css("border", "1px solid var(--bs-red)");
      }

      if (!$("#Cpassword").val()) {
        $(".ErrorCpassword").text("This field is required");
        $("#Cpassword").css("border", "1px solid var(--bs-red)");
      }
    }
  });

  $("#FullName").change(function () {
    if ($("#FullName").val()) {
      $(".ErrorFullName").text("");
      $("#FullName").removeAttr("style");
    }
  });

  $("#Email").change(function () {
    if ($("#Email").val()) {
      $(".ErrorEmail").text("");
      $("#Email").removeAttr("style");
      $("#alertEmailExist").remove();
    }
  });

  $("#Password").change(function () {
    if ($("#Password").val()) {
      $(".ErrorPassword").text("");
      $("#Password").removeAttr("style");
    }
  });

  $("#Cpassword").change(function () {
    if ($("#Cpassword").val()) {
      if ($("#Cpassword").val() == $("#Password").val()) {
        $(".ErrorCpassword").text("");
        $("#Cpassword").removeAttr("style");
      }
    }
  });
  /* Register <End> */

  /* Login <Start> */

  $("#LoginBtn").click(function (e) {
    e.preventDefault();
    if ($("#Email").val() && $("#Password").val()) {
      $.ajax({
        url: "assets/php/action.php",
        method: "POST",
        data: `Email=${$("#Email").val()}&Password=${$(
          "#Password"
        ).val()}&action=Login`,
        success: function (response) {
          switch (response) {
            case "Logged":
              console.error("You Are Logged");
              break;

            case "EmaiNotExist":
              $(".alert").remove();
              $("#alerts").append(
                `<div id="alertEmailNotExist" class="alert alert-danger">This Email Not Exist</div>`
              );
              break;

            case "EmailOrPasswordIncorect":
              $(".alert").remove();
              $("#alerts").append(
                `<div id="alertPasswordNotExist" class="alert alert-danger">Email Or Password Is Incorect</div>`
              );
              break;
          }
        },
      });
    } else {
      if (!$("#Email").val()) {
        $(".ErrorEmail").text("This field is required");
        $("#Email").css("border", "1px solid var(--bs-red)");
      }

      if (!$("#Password").val()) {
        $(".ErrorPassword").text("This field is required");
        $("#Password").css("border", "1px solid var(--bs-red)");
      }
    }
  });

  $("#Email").change(function () {
    if ($("#Email").val()) {
      $(".ErrorEmail").text("");
      $("#Email").removeAttr("style");
      $("#alertEmailNotExist").remove();
    }
  });

  $("#Password").change(function () {
    if ($("#Password").val()) {
      $(".ErrorPassword").text("");
      $("#Password").removeAttr("style");
      $("#alertPasswordNotExist").remove();
    }
  });
  /* Login <End> */
});
