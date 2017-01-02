function displayVideo(num) {
  var videoDiv = document.querySelector("#video-" + num);
  videoContainer.style.display = "block";
  videoDiv.style.display = "block";
}

var videoContainer = document.querySelector("#video-container");

var closeButtonList = document.querySelectorAll('.close-button');
closeButtonList.forEach(function(element) {
  element.addEventListener("click", function() {
    this.parentElement.style.display = "none";
    videoContainer.style.display = "none";
  })
});
