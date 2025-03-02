document.addEventListener("DOMContentLoaded", () => {
  // Video background fallback
  const video = document.getElementById("hero-video");

  if (video) {
    // If video fails to load, add a fallback background image
    video.addEventListener("error", () => {
      const hero = document.querySelector(".hero");
      if (hero) {
        hero.style.backgroundImage = 'url("images/hero-bg.jpg")';
        video.style.display = "none";
      }
    });
  }

  // Additional home page specific JavaScript can be added here
});
