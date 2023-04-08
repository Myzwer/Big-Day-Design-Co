import "../sass/frontend.scss";

(function ($) {
  // Begin jQuery
  $(function () {
    // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".nav-dropdown").toggle();
      // Close one dropdown when selecting another
      $(".nav-dropdown").not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $("html").click(function () {
      $(".nav-dropdown").hide();
    });
    // Toggle open and close nav styles on click
    $("#nav-toggle").click(function () {
      $("nav ul").slideToggle();
    });
    // Hamburger to X toggle
    $("#nav-toggle").on("click", function () {
      this.classList.toggle("active");
    });
  }); // end DOM ready
})(jQuery); // end jQuery

// Set the date we're counting down to
const countDownDate = new Date("June 1, 2023 00:00:00").getTime();

// Update the countdown every 1 second
var x = setInterval(function () {
  // Get the current date and time
  const now = new Date().getTime();

  // Calculate the time remaining between now and the countdown date
  const timeRemaining = countDownDate - now;

  // Calculate days, hours, minutes, and seconds
  const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

  // Update the HTML with the new values, if the elements exist
  if (document.getElementById("days")) {
    document.getElementById("days").innerHTML = days;
  }
  if (document.getElementById("hours")) {
    document.getElementById("hours").innerHTML = hours;
  }
  if (document.getElementById("minutes")) {
    document.getElementById("minutes").innerHTML = minutes;
  }
  if (document.getElementById("seconds")) {
    document.getElementById("seconds").innerHTML = seconds;
  }

  // If the countdown is over, display a message
  if (timeRemaining < 0) {
    clearInterval(x);
    if (document.getElementById("days")) {
      document.getElementById("days").innerHTML = "EXPIRED";
    }
    if (document.getElementById("hours")) {
      document.getElementById("hours").innerHTML = "EXPIRED";
    }
    if (document.getElementById("minutes")) {
      document.getElementById("minutes").innerHTML = "EXPIRED";
    }
    if (document.getElementById("seconds")) {
      document.getElementById("seconds").innerHTML = "EXPIRED";
    }
  }
}, 1000);
