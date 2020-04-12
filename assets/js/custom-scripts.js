/* Custom JS */

const email = document.querySelector("#emailAddress");
const clickToCopy = document.querySelector(".clickToCopy");
const clickOrTap = document.querySelector(".clickOrTap");

if ( navigator.userAgent.match(/Android/i)
|| navigator.userAgent.match(/webOS/i)
|| navigator.userAgent.match(/iPhone/i)
|| navigator.userAgent.match(/iPad/i)
|| navigator.userAgent.match(/iPod/i)
|| navigator.userAgent.match(/BlackBerry/i)
|| navigator.userAgent.match(/Windows Phone/i)
) {
    //$email.attr("title", "Click to Copy");
    clickOrTap.textContent = "Tap to Copy";
} else {
    //$email.attr("title", "Click to Copy");
    clickToCopy.style.display = "none";
    //clickToCopy.style.opacity = "0";
    clickOrTap.textContent = "Click to Copy";
    // email.hover(function() {
    //     clickToCopy.show();
    // }, function() {
    //     clickToCopy.hide();
    // });     
}

// email.onclick = function() {
//   document.execCommand("copy");
// }

// email.addEventListener("click", () => {
//     document.execCommand("copy");
    
// });

email.addEventListener("click", () => {
    document.execCommand("copy");
});

email.addEventListener("copy", function(event) {
  event.preventDefault();
  if (event.clipboardData) {
    event.clipboardData.setData("text/plain", email.textContent);
    console.log(event.clipboardData.getData("text"));
    clickOrTap.textContent = "Copied!";
  }
  
});

/* Get current year for footer */

const currYear = document.querySelector("#current-year");
let date = new Date();
let year = date.getFullYear();
currYear.textContent = year;