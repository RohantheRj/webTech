// Get elements from the DOM
const nameInput = document.getElementById('nameInput');
const studentName = document.getElementById('studentName');
const studentImage = document.getElementById('studentImage');

// Event listener for input change
nameInput.addEventListener('input', function() {
  if (nameInput.value.trim() !== '') {
    // If student name is present, change font color and size
    studentName.textContent = nameInput.value;
    studentName.style.color = 'red';
    studentName.style.fontSize = '18px';
  } else {
    // If input is empty, show default image
    studentName.textContent = '';
    studentImage.src = 'default-image.jpg';
  }
});

// Event listener for image mouse events
studentImage.addEventListener('mouseover', function() {
  // Increase image size on mouse hover
  studentImage.style.width = '250px';
});

studentImage.addEventListener('mouseout', function() {
  // Reset image size on mouse out
  studentImage.style.width = '200px';
});

studentImage.addEventListener('click', function() {
  // Double image size on click
  studentImage.style.width = '400px';
});

studentImage.addEventListener('mouseup', function() {
  // Reset image size on mouse up
  studentImage.style.width = '200px';
});
