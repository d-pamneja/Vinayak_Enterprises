document.addEventListener("DOMContentLoaded", function () {
  // Get the current path and extract the file name
  var path = window.location.pathname;
  var page = path.split("/").pop(); // Extract file name from URL path

  console.log("Current page:", page); // Debugging line

  // Get all nav links with the class 'navActive'
  var navLinks = document.querySelectorAll(".nav .navActive");

  navLinks.forEach(function (link) {
    var href = link.getAttribute("href");

    console.log("Link href:", href); // Debugging line

    // Compare href with the current page
    if (href === page) {
      link.classList.add("active");
    } else {
      link.classList.remove("active"); // Optionally remove 'active' class from other links
    }
  });
});
