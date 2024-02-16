function toggleHeart(index) {
  var heartIcon = document.getElementById("heartIcon" + index);
  if (heartIcon.classList.contains("active")) {
    heartIcon.classList.remove("active");
    heartIcon.classList.remove("fas");
    heartIcon.classList.add("far");
  } else {
    heartIcon.classList.add("active");
    heartIcon.classList.remove("far");
    heartIcon.classList.add("fas");
  }
}
