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
<?php if ($opt['enable_log']) include 'view/log_buttons.php'; ?>
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
