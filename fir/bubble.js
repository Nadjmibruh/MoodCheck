const bubbleArea = document.getElementById("bubble-area");
const popSound = document.getElementById("pop-sound");

function createBubble() {
  const bubble = document.createElement("div");
  bubble.classList.add("bubble");

  // Random horizontal position
  bubble.style.left = Math.random() * 100 + "vw";
  bubble.style.animationDuration = (6 + Math.random() * 9) + "s";

  // Remove on pop
  bubble.addEventListener("click", () => {
    popSound.currentTime = 0;
    popSound.play();
    bubble.remove();
  });

  // Auto-remove when animation ends
  bubble.addEventListener("animationend", () => {
    bubble.remove();
  });

  bubbleArea.appendChild(bubble);
}

// Generate bubbles at intervals
setInterval(createBubble, 2000);
