<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<?php include 'php/header.php'; ?>
<div class="ui warning segment">
  <div>Previous command: <a class="ui label" id="prev-button"><i class="terminal icon"></i><span id="previous">None</span></a></div>
  <br>
  <div>Command streak:   <button id="streak" class="ui inverted violet button">0</button></div>
</div>

<div class="ui inverted yellow segment">
<div class="ui fluid action input">
  <input type="text" id= "command_input" placeholder="Run a command..." type="submit" autocomplete="off">
  <button class="ui black button" id="submit" type="submit"><i class="terminal icon"></i>Run</button>
</div>
<div class="ui divider"></div>
<button id="copy_result" class="ui basic button">
  <i class="icon external"></i>
  Copy the command output
</button>
<button id="download_log" class="ui basic button">
  <i class="icon download"></i>
  Download the log file
  <div class="ui black label">
    <i class="list icon"></i> <span id="nb_log"></span>
  </div>
</button>
<button id="clear_log" class="ui negative button">
  <i class="icon erase"></i>
  Clear the log file
</button>
<div id="copy_message" class="ui basic modal">
  <div class="ui icon header">
    <i class="icon external"></i>
    Command output successfuly copied to clipboard
  </div>
  <div class="actions">
    <div class="ui green ok inverted button">
      <i class="checkmark icon"></i>
      Alright!
    </div>
  </div>
</div>
<pre>
<div class="ui inverted segment" name="result" id="result">Nothing to show ATM</div>
</pre>
</div>
</body>
<?php include 'php/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script src="js/process.js"></script>
