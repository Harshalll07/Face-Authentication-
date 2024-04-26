// Generate a random puzzle
function generatePuzzle() {
  // Your puzzle generation logic here (e.g., random characters, math problem, etc.)
  return "5 + 3 = ?";
}

// Draw a simple puzzle on canvas
function drawPuzzle(puzzle) {
  const canvas = document.getElementById("captcha-canvas");
  const ctx = canvas.getContext("2d");
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.font = "24px Arial";
  ctx.fillText(puzzle, 50, 50);
}

// Verify the user input
function verifyInput() {
  const input = document.getElementById("captcha-input").value;
  // Your verification logic here
  if (input === "8") {
    alert("CAPTCHA passed!");
  } else {
    alert("CAPTCHA failed! Please try again.");
    resetCaptcha();
  }
}

// Reset CAPTCHA
function resetCaptcha() {
  const puzzle = generatePuzzle();
  drawPuzzle(puzzle);
  // Clear input
  document.getElementById("captcha-input").value = "";
}

// Initialize CAPTCHA
function initCaptcha() {
  const puzzle = generatePuzzle();
  drawPuzzle(puzzle);
  const verifyButton = document.getElementById("verify-button");
  verifyButton.addEventListener("click", verifyInput);
}

// Initialize CAPTCHA with mouse tracking
window.addEventListener("load", function() {
  initCaptcha();
  const canvas = document.getElementById("captcha-canvas");
  let mouseDown = false;
  canvas.addEventListener("mousedown", function() {
    mouseDown = true;
  });
  canvas.addEventListener("mouseup", function() {
    mouseDown = false;
  });
  canvas.addEventListener("mousemove", function(event) {
    if (mouseDown) {
      // Collect mouse tracking data
      const mouseX = event.clientX - canvas.getBoundingClientRect().left;
      const mouseY = event.clientY - canvas.getBoundingClientRect().top;
      console.log("Mouse X:", mouseX, "Mouse Y:", mouseY);
    }
  });
});
