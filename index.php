<?php
session_start('phi');
$_SESSION['auth'] = true;
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Coming+Soon" rel="stylesheet">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <meta charset="utf-8">
  <title>Feedback zum Tutorium - INFO1</title>
</head>
<body>
  <header><h2>Feedback zum Tutorium - INFO1</h2></header>
  <main>
    <div id="intro">
		<!-- Die 2000er haben angerufen, sie wollen ihre Stylesheets zurÃ¼ck! -->
      Hier hast du die Möglichkeit, anonym zu einem spezifischen Tutoriumstermin oder allgemein Feedback zu hinterlassen. <br />
      Ich möchte mich ständig verbessern und nur durch euer Feedback kann ich feststellen, ob ich meinen Job gut mache oder ob es Dinge gibt, die man verbessern kann.<br />
      <span>Trotz Anonymität gilt: Bitte bleibe sachlich und, wenn möglich, konstruktiv.</span>
    </div>
    <div id="feedbackbox">
        <textarea autofocus="true" name="text" required="true" form="feedback" placeholder="Fragen? Wünsche? Positives? Negatives?"></textarea>
      <form id="feedback" action="send.php" method="POST">
        Pseudonym:&nbsp;<input type="text" required="true" name="name" placeholder="Anonym" value="Anonym">
          <input type="submit" value="Absenden">
      </form>
    </div>
  </main>
  <footer>
    Dein Feedback wird anonym versendet, es werden lediglich Datum und Uhrzeit der Einsendung gespeichert. Dies dient nur dazu, das Feedback leichter einem spezifischen Tutorium oder Termin zuordnen zu können.<br />
	<a class="github-button" href="https://github.com/elogy/feedbackscript/fork" data-size="large" data-show-count="true" aria-label="Fork elogy/feedbackscript on GitHub">Fork this on GitHub</a>
  </footer>
</body>
</html>

