$(function () {
  $(document).on("submit", 'form[name="form_cliente"]', function () {
    var forma = $(this);
    var dados = forma.serialize();
    $.ajax({
      url: "../../model/insert.php",
      data: dados,
      dataType: "json",
      type: "POST",
      beforeSend: function () {
        $(".msg").text("");
        forma.find(".load").fadeIn("fast");
      },
      success: function (resposta) {
        if (resposta.error === "success") {
          $(".msg").text(resposta.msg);
          setTimeout(function () {
            $(location).attr("href", "select.php");
          }, 2000);
        } else {
          $(".msg").text(resposta.msg);
        }
      },
      complete: function () {
        forma.find(".load").fadeOut("fast");
      },
    });
    return false;
  });

  $(document).on("click", ".deleteClientes", function () {
    var forma = $(this);
    var cli_id = forma.attr("cli_id");
    dados = { cli_id: cli_id };

    $.ajax({
      url: "../../model/delete.php",
      data: dados,
      dataType: "json",
      type: "POST",
      beforeSend: function () {
        $(".load").fadeIn("fast");
      },
      success: function (resposta) {
        if (resposta.error === "success") {
          $('.msg[cli_id="' + cli_id + '"]').text(resposta.msg);
          setTimeout(function () {
            $(location).attr("href", "select.php");
          }, 2000);
        } else {
          $(".msg").text(resposta.msg);
        }
      },
      complete: function () {
        $(".load").fadeOut("fast");
      },
    });
    return false;
  });

  $(document).on("submit", 'form[name="form_update_cliente"]', function () {
    var forma = $(this);
    var dados = forma.serialize();
    $.ajax({
      url: "../../model/update.php",
      data: dados,
      dataType: "json",
      type: "POST",
      beforeSend: function () {
        $(".msg").text("");
        forma.find(".load").fadeIn("fast");
      },
      success: function (resposta) {
        if (resposta.error === "success") {
          $(".msg").text(resposta.msg);
          setTimeout(function () {
            $(location).attr("href", "select.php");
          }, 2000);
        } else {
          $(".msg").text(resposta.msg);
        }
      },
      complete: function () {
        forma.find(".load").fadeOut("fast");
      },
    });
    return false;
  });
});
