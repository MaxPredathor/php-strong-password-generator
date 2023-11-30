const video = document.getElementById("video");
const form = document.getElementById("form");

video.addEventListener("ended", () => {
  video.classList.add("d-none");
  form.classList.remove("d-none");
});
