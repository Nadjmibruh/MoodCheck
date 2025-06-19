// Sidebar toggle
function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  sidebar.classList.toggle("expanded");
  sidebar.classList.toggle("collapsed");
}

// Music track switcher
function changeMusic(trackName) {
  const audio = document.getElementById("backgroundMusic");
  const source = document.getElementById("musicSource");

  const musicTracks = {
    ocean: "ocean.wav",
    instrumental: "instrument.mp3",
    rain: "rain.wav",
    nature: "nature.wav"
  };

  source.src = musicTracks[trackName];
  audio.load();

  const checkbox = document.getElementById("toggleMusicCheckbox");
  if (checkbox.checked) {
    audio.play().catch(e => console.warn("Autoplay blocked:", e));
  }
}

// Toggle music on/off
function toggleMusicCheckbox() {
  const audio = document.getElementById("backgroundMusic");
  const checkbox = document.getElementById("toggleMusicCheckbox");
  if (checkbox.checked) {
    audio.play().catch(e => console.warn("Play blocked:", e));
  } else {
    audio.pause();
  }
}

// Set music volume
function setVolume() {
  const audio = document.getElementById("backgroundMusic");
  const volume = document.getElementById("volumeSlider").value;
  audio.volume = volume;
}

// Preview uploaded profile picture
function previewProfileImage(event) {
  const reader = new FileReader();
  reader.onload = function () {
    const output = document.getElementById('profilePreview');
    output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
}

// On page load
window.addEventListener("DOMContentLoaded", () => {
  const audio = document.getElementById("backgroundMusic");
  const checkbox = document.getElementById("toggleMusicCheckbox");
  const volumeSlider = document.getElementById("volumeSlider");
  const sidebar = document.getElementById("sidebar");

  // Autoplay will only work if user has interacted
  if (checkbox && checkbox.checked) {
    audio.play().catch(e => console.warn("Autoplay prevented until user interacts:", e));
  }

  // Set initial volume
  if (volumeSlider) {
    audio.volume = volumeSlider.value;
  }

  // Make sure sidebar has default class
  if (!sidebar.classList.contains("collapsed") && !sidebar.classList.contains("expanded")) {
    sidebar.classList.add("collapsed");
  }
});

// Preview uploaded profile picture
window.addEventListener("DOMContentLoaded", () => {
  const profileInput = document.getElementById("profileImageInput");
  const profilePreview = document.getElementById("profilePreview");

  if (profileInput && profilePreview) {
    profileInput.addEventListener("change", (event) => {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          profilePreview.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  }
});
