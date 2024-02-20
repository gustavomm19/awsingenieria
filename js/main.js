$(document).ready(function () {
  var selector = "#translate";
  $(selector).on("click", function (e) {
    e.preventDefault();
    startLang($(this));
  });

  // var prueba = $(document).attr('title');
  // console.log(prueba);

  var formulario = document.getElementById("formulario"),
    nombre = formulario.nombre,
    correo = formulario.correo,
    asunto = formulario.asunto,
    mensaje = formulario.mensaje,
    error = document.getElementById("error");
  succes = document.getElementById("succes");

  formulario.addEventListener("submit", validarFormulario);

  function validarFormulario(e) {
    error.innerHTML = "";
    error.style.display = "none";
    var idioma = $("html").attr("lang");
    validarNombre(e, idioma);
    validarCorreo(e, idioma);
    validarMensaje(e, idioma);

    // if(error.innerHTML == null || error.innerHTML == ''){
    // 	succes.style.display = 'block';
    // 	if(idioma == 'es'){
    // 		succes.innerHTML = '<p data-lang="enviado">Enviado exitosamente</p>';
    // 	}else{
    // 		succes.innerHTML = '<p data-lang="enviado">Message sended succesfully</p>';
    // 	}
    // }
  }

  function validarNombre(e, idioma) {
    idioma = $(document).attr("title") === "AWS Ingenieria" ? "es" : "en";
    if (nombre.value == "" || nombre.value == null) {
      e.preventDefault();
      $(succes).css("display", "none");
      $(exc).css("display", "none");
      console.log("Por favor completa el nombre");
      error.style.display = "block";
      if (idioma == "es") {
        error.innerHTML =
          error.innerHTML +
          '<li data-lang="nombre-error">Por favor ingrese un nombre</li>';
      } else {
        error.innerHTML =
          error.innerHTML +
          '<li data-lang="nombre-error">Please enter a name</li>';
      }
    }
  }

  function validarCorreo(e, idioma) {
    idioma = $(document).attr("title") === "AWS Ingenieria" ? "es" : "en";
    if (correo.value == "" || correo.value == null) {
      e.preventDefault();
      $(succes).css("display", "none");
      $(exc).css("display", "none");
      console.log("Por favor completa el correo");
      error.style.display = "block";
      if (idioma == "es") {
        error.innerHTML =
          error.innerHTML +
          '<li data-lang="correo-error">Por favor ingrese un correo</li>';
      } else {
        error.innerHTML =
          error.innerHTML +
          '<li data-lang="correo-error">Please enter an email adres</li>';
      }
    }
  }

  function validarMensaje(e, idioma) {
    idioma = $(document).attr("title") === "AWS Ingenieria" ? "es" : "en";
    if (mensaje.value == "" || mensaje.value == null) {
      e.preventDefault();
      $(succes).css("display", "none");
      $(exc).css("display", "none");
      console.log("Por favor completa un mensaje");
      error.style.display = "block";
      if (idioma == "es") {
        error.innerHTML =
          error.innerHTML +
          '<li data-lang="mensaje-error">Por favor escriba un mensaje</li>';
      } else {
        error.innerHTML =
          error.innerHTML +
          '<li data-lang="mensaje-error">Please write a message</li>';
      }
    }
  }

  var startLang = function (el) {
    var el = $(el);
    var text = el.attr("data-text");
    var file = el.attr("data-file");
    file = file.split(",");
    text = text.split(",");
    var index = el.attr("data-index");
    if (index >= file.length) {
      index = 0;
    }
    changeName(el, text[index]);
    changeIndex(el, index);
    loadLang(file[index]);
    $("html").attr("lang", file[index]);
  };

  var changeName = function (el, name) {
    $(el).html(name);
  };

  var changeIndex = function (el, index) {
    $(el).attr("data-index", ++index);
  };

  var loadLang = function (lang) {
    var processLang = function (data) {
      console.log(data);
      var arr = data.split("\n");
      for (var i in arr) {
        if (lineValid(arr[i])) {
          var obj = arr[i].split("=>");
          assignText(obj[0], obj[1]);
        }
      }
    };

    var assignText = function (key, value) {
      $('[data-lang="' + key + '"]').each(function () {
        var attr = $(this).attr("data-destine");
        if (typeof attr !== "undefined") {
          $(this).attr(attr, value);
        } else {
          $(this).html(value);
        }
      });
    };

    var lineValid = function (line) {
      return line.trim().length > 0;
    };

    var loader = "#loader";
    $(loader).css("display", "block");

    $.ajax({
      url: "lang/" + lang + ".txt",
      error: function () {
        $(loader).css("display", "none");
        alert("No se cargó traducción");
      },
      success: function (data) {
        $(loader).css("display", "none");
        if (lang == "es") {
          $(document).attr("title", "AWS Ingenieria");
          $(".nombre").attr("placeholder", "Nombre");
          $(".correo").attr("placeholder", "Correo");
          $(".asunto").attr("placeholder", "Asunto");
          $(".mensaje").attr("placeholder", "Mensaje");
          $(".btn").attr("value", "Enviar");
        } else {
          $(document).attr("title", "AWS Engineering");
          $(".nombre").attr("placeholder", "Name");
          $(".correo").attr("placeholder", "Email");
          $(".asunto").attr("placeholder", "Title");
          $(".mensaje").attr("placeholder", "Message");
          $(".btn").attr("value", "Send");
        }
        processLang(data);
      },
    });
    // $.ajax({
    //   url: "country.php",
    //   success: function (data) {
    //     $(selector).attr("data-index", data);
    //     startLang($(selector));
    //   },
    // });
  };
});
