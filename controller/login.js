$(function () {
  $(document).on("submit", 'form[name="form_login"]', function (e) {
    e.preventDefault();

    var forma = $(this);
    var dados = forma.serialize();

    $.ajax({
      url: "../model/validar.php",
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
            window.location.href = "../view/cliente/home.php";
          }, 2000);
        } else {
          $(".msg").text(resposta.msg);
        }
      },
      error: function (xhr, status, error) {
        console.log("Erro na solicitação AJAX:", error);
      },
      complete: function () {
        forma.find(".load").fadeOut("fast");
      },
    });
  });
});
