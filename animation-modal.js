const animationButtons = document.querySelectorAll(".animation-button");
const dialog = document.createElement("dialog");
dialog.classList.add("animation-modal");

animationButtons.forEach((button) => {
  button.addEventListener("click", () => {
    if (button.classList.contains("info")) {
      dialog.innerHTML = `
          <div class="dialog-content">
              <button class="close-button">X</button>
              <img src="./assets/animations/info.gif" alt="Infographic Design with Animation">
          </div>
      `;
    } else if (button.classList.contains("halloween")) {
      dialog.innerHTML = `
          <div class="dialog-content">
              <button class="close-button">X</button>
              <img src="./assets/animations/halloween.gif" alt="Halloween Animation">
          </div>
      `;
    } else if (button.classList.contains("goat")) {
      dialog.innerHTML = `
          <div class="dialog-content">
              <button class="close-button">X</button>
              <video controls autoplay loop>
                  <source src="assets/animations/goat.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div>
      `;
    } else if (button.classList.contains("irony")) {
      dialog.innerHTML = `
          <div class="dialog-content">
              <button class="close-button">X</button>
              <video controls autoplay loop>
                  <source src="assets/animations/irony.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div>
      `;
    }

    const img = dialog.querySelector("img");
    const video = dialog.querySelector("video");
    if (img) {
      img.onload = () => {
        if (img.width > img.height) {
          dialog.style.minWidth = "80%";
        } else {
          dialog.style.minHeight = "80%";
        }
      };
    } else if (video) {
      video.onloadedmetadata = () => {
        if (video.videoWidth > video.videoHeight) {
          dialog.style.minWidth = "80%";
        } else {
          dialog.style.minHeight = "80%";
        }
      };
    }

    document.body.appendChild(dialog);

    dialog.showModal();

    dialog.addEventListener("click", (event) => {
      if (event.target === dialog) {
        dialog.style.minWidth = "unset";
        dialog.style.minHeight = "unset";
        dialog.close();
        dialog.remove();
      }
    });

    dialog.querySelector(".close-button").addEventListener("click", (event) => {
      event.stopPropagation();
      dialog.style.minWidth = "unset";
      dialog.style.minHeight = "unset";
      dialog.close();
      dialog.remove();
    });
  });
});
