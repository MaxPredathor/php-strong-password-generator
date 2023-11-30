const video = document.getElementById("video");

video.addEventListener("ended", () => {
  video.classList.add("d-none");
});
