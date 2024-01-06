// Get the elements by class name
let circles = document.getElementsByClassName("circle");

// Loop through the circles and add a click event listener to each one
for (let i = 0; i < circles.length; i++) {
  circles[i].addEventListener("click", function () {
    // Remove the active class from the current circle
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    // Add the active class to the clicked circle
    this.className += " active";
    // Change the content and image according to the clicked circle
    switch (i) {
      case 0:
        document.querySelector(".left h2").innerHTML =
          "DIGITAL LEARNING INFRASTRUCTURE";
        document.querySelector(".left h3").innerHTML =
          "Usability enhancement and Training for Transaction Portal for Customers";
        document.querySelector(".right img").src =
          "./../full-stack-test/files/images/DL-learning.svg";
        break;
      case 1:
        document.querySelector(".left h2").innerHTML = "TECHNOLOGY SOLUTIONS";
        document.querySelector(".left h3").innerHTML =
          "Customized software development and integration for various domains";
        document.querySelector(".right img").src =
          "./../full-stack-test/files/images/DL-Technology.jpg";
        break;
      case 2:
        document.querySelector(".left h2").innerHTML =
          "COMMUNICATION STRATEGIES";
        document.querySelector(".left h3").innerHTML =
          "Effective and engaging content creation and delivery for diverse audiences";
        document.querySelector(".right img").src =
          "./../full-stack-test/files/images/DL-Communication.jpg";
        break;
    }
  });
}
