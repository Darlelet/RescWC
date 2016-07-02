<?php include 'header.php'; ?>
<header>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
</header>
<body>
<div class="ui warning segment">
  <div>Previous command: <a class="ui label" id="prev-button"><i class="terminal icon"></i><span id="previous">None</span></a></div>
  <br>
  <div>Command streak:   <button id="streak" class="ui inverted green button">0</button></div>
</div>

<div class="ui inverted yellow segment">
<pre>
<div class="ui fluid action input">
  <input type="text" id= "command_input" placeholder="Run a command..." type="submit" autocomplete="off">
  <button class="ui black button" id="submit" type="submit"><i class="terminal icon"></i>Run</button>
</div>
<div class="ui divider"></div>
<button id="copy_result" class="ui basic button">
  <i class="icon external"></i>
  Copy the command output
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
<div class="ui inverted segment" name="result" id="result">Nothing to show ATM</div>
</pre>
</div>
</body>
<footer><center>
  <div class="ui red segment">
    Made in <i class="france flag"></i>by <a target="_blank" href="https://twitter.com/Darlelet">Darlelet</a> using <a href="http://semantic-ui.com">Semantic UI</a>
    | Just having fun w/ LINUX commands (could be used as a rescue console)
  </div>
</center></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script src="process.js"></script>
