var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});

AOS.init();


// Contact : PNG illustration
let el = document.querySelector('.avatar')

el.addEventListener('mousemove', (e) => {
    let thisPX = el.getBoundingClientRect().left
    let thisPY = el.getBoundingClientRect().top
    let boxWidth = el.getBoundingClientRect().width
    let boxHeight = el.getBoundingClientRect().height
    let scrollTop = document.documentElement.scrollTop + document.body.scrollTop

    let mouseX = e.pageX - thisPX
    let mouseY = e.pageY - scrollTop - thisPY
    let X
    let Y

    X = mouseX - boxWidth / 2
    Y = boxHeight / 2 - mouseY

    el.style.transform = `perspective(300px) rotateY(${X / 10}deg) rotateX(${Y / 10}deg)`
    el.style.boxShadow = `${-X / 20}px ${Y / 20}px 50px rgba(0, 0, 0, 0.3)`
        })


el.addEventListener('mouseleave', () => {
    el.style.transform = `perspective(300px) rotateY(0deg) rotateX(0deg`
    el.style.boxShadow = ''
})



// Function to submit the Money form if all fields are filled
var modal = document.getElementById("donationModal");

// Get the button that opens the modal
var btn = document.querySelector(".donate-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
//email
function validateAndSubmit() {
  var emailInput = document.getElementById('emailInput').value;
  var errorText = document.getElementById('errorText');

  // Regular expression to check if the input is a valid email address
  var emailRegex = /\S+@\S+\.\S+/;

  if (!emailRegex.test(emailInput)) {
    errorText.innerText = "Please enter a valid email address.";
    return;
  }

  // If validation passes, clear any previous error message
  errorText.innerText = "";

  // If you want to send the email to the server for storage, you can do it here
  // You can use XMLHttpRequest, fetch API, or any other method to send data to the server
  // For demonstration purposes, I'll just log the email to console
  console.log("Valid email: " + emailInput);

  // If you want to submit the form after validation, uncomment the line below
  document.getElementById('emailForm').submit();
}

