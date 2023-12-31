// Minimizing the side menu
$('.btn').click(function () {
  $('.menu').toggleClass('close');
  $('.all-contetn-inner').toggleClass('close');
  localStorage.setItem("menu-close", JSON.stringify(false));
});
$('.btn.back').click(function () {
  localStorage.setItem("menu-close", JSON.stringify(false));
});
$('.btn.burger').click(function () {
  localStorage.setItem("menu-close", JSON.stringify(true));
});

// Changing the position of the content
document.addEventListener("DOMContentLoaded", () => {
  const navMain = document.getElementById("nav-main");
  const main = document.getElementById("main");
  const navProj = document.getElementById("nav-projects");
  const proj = document.getElementById("projects");

  navMain.addEventListener("click", () => {
    proj.classList.remove('open');
    main.classList.add("open");
  });
  navProj.addEventListener("click", () => {
    main.classList.remove('open');
    proj.classList.add("open");
  });
});

// Adding a file
$("#FileInput").on('change', function (e) {
  var labelVal = $(".filelabel-title").text();
  var oldfileName = $(this).val();
  fileName = e.target.value.split('\\').pop();

  if (oldfileName == fileName) { return false; }
  var extension = fileName.split('.').pop();

  if (extension == 'doc' || extension == 'docx' || extension == 'pdf') {
    $(".filelabel i").removeClass().addClass('fa fa-file-word-o');
    $(".filelabel i, .filelabel .filelabel-title").css({ 'color': '#2388df' });
    $(".filelabel").css({ 'border': ' 2px solid #2388df' });

    if (fileName) {
      if (fileName.length > 10) {
        $(".filelabel .filelabel-title").text(fileName.slice(0, 4) + '...' + extension);
      }
      else {
        $(".filelabel .filelabel-title").text(fileName);
      }
    }
    else {
      $(".filelabel .filelabel-title").text(labelVal);
    }
  }
  else {
    $(".filelabel i").removeClass().addClass('fa fa-file-o');
    $(".filelabel i, .filelabel .filelabel-title").css({ 'color': 'red' });
    $(".filelabel").css({ 'border': ' 2px solid red' });

    $(".filelabel .filelabel-title").text("Ошибка!");
  }
});

// Stay on the form Projects after deleting an item
if (JSON.parse(localStorage.getItem("position"))) {
  $(".shell.main").removeClass("open");
  $(".shell.projects").addClass("open");
}
if (JSON.parse(localStorage.getItem("menu-close"))) {
  $(".menu").removeClass("close");
  $(".all-contetn-inner").removeClass("close");
}

$("#nav-projects").click(function () {
  localStorage.setItem("position", JSON.stringify(true));
})

$("#nav-main").click(function () {
  localStorage.clear();
})
