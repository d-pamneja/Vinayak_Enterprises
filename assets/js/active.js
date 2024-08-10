document.addEventListener("DOMContentLoaded", function () {
  var path = window.location.pathname;
  var page = path.split("/").pop(); // Get the file name from the URL

  var navLinks = document.querySelectorAll(".nav");
  navLinks.forEach(function (link) {
    if (link.getAttribute("href") === page) {
      link.classList.add("active");
    }
  });
});
