// DOM elements
const localBtn = document.getElementById("local-btn");

// function to get user coordinates
const getCoords = () => {
  if ("geolocation" in navigator) {
    // check if browser supports geolocation
    console.log("Geolocation ok");
    navigator.geolocation.getCurrentPosition(position => {
      // if yes, get current position and store in variables
      const lat = position.coords.latitude;
      const lon = position.coords.longitude;
      window.location = `http://localhost:5000/index.php?lat=${lat}&lon=${lon}`; // redirect to same page passing coords in url
    });
  } else {
    console.log("Geolocation is not available");
  }
};

localBtn.addEventListener("click", getCoords); // listen for click event on button to run function
