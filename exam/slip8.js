alert("Exams are near. Have you started preparing?");
let userResponse = prompt("Are you preparing for the exams? (yes/no)");
if (userResponse !== null) {
  if (userResponse.toLowerCase() === "yes") {
    alert("That's great! Keep up the good work!");
  } else if (userResponse.toLowerCase() === "no") {
    alert("It's time to start studying! Good luck!");
  } else {
    alert("Invalid response. Please enter 'yes' or 'no'.");
  }
}

let confirmation = confirm("Are you ready for the exams?");

if (confirmation) {
  alert("Best of luck for your exams!");
} else {
  alert("Time to buckle down and study!");
}
