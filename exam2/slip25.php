<?php
// Create a new DOM document
$doc = new DOMDocument();

// Create the root element
$cricketTeam = $doc->createElement("CricketTeam");

// Create the first team element for Australia
$teamAustralia = $doc->createElement("Team");
$teamAustralia->setAttribute("country", "Australia");

// Create the player element and set its value
$player1 = $doc->createElement("player", "Steve Smith");
$teamAustralia->appendChild($player1);

// Create the runs element and set its value
$runs1 = $doc->createElement("runs", "7090");
$teamAustralia->appendChild($runs1);

// Create the wicket element and set its value
$wicket1 = $doc->createElement("wicket", "17");
$teamAustralia->appendChild($wicket1);

// Append the team element to the root element
$cricketTeam->appendChild($teamAustralia);

// Create the second team element for India
$teamIndia = $doc->createElement("Team");
$teamIndia->setAttribute("country", "India");

// Create the player element and set its value
$player2 = $doc->createElement("player", "Virat Kohli");
$teamIndia->appendChild($player2);

// Create the runs element and set its value
$runs2 = $doc->createElement("runs", "12169");
$teamIndia->appendChild($runs2);

// Create the wicket element and set its value
$wicket2 = $doc->createElement("wicket", "4");
$teamIndia->appendChild($wicket2);

// Append the team element to the root element
$cricketTeam->appendChild($teamIndia);

// Create the third team element for England
$teamEngland = $doc->createElement("Team");
$teamEngland->setAttribute("country", "England");

// Create the player element and set its value
$player3 = $doc->createElement("player", "Joe Root");
$teamEngland->appendChild($player3);

// Create the runs element and set its value
$runs3 = $doc->createElement("runs", "9035");
$teamEngland->appendChild($runs3);

// Create the wicket element and set its value
$wicket3 = $doc->createElement("wicket", "28");
$teamEngland->appendChild($wicket3);

// Append the team element to the root element
$cricketTeam->appendChild($teamEngland);

// Append the root element to the document
$doc->appendChild($cricketTeam);

// Save the XML file
$xmlFilePath = "cricket.xml"; // Specify the file path
$doc->save($xmlFilePath);

// Output success message
echo "Elements added successfully!";
echo "<br>";
echo "XML file created at: " . realpath($xmlFilePath); // Output the full path
?>
