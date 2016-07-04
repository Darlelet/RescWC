var exec_command = function(command) {
  if (command == "") return ;
  $("#result").append('<div id="loader" class="ui active dimmer"><div class="ui loader"></div></div>');
  $.ajax({
      type: "POST",
      url: 'php/exec.php',
      data: {command_input: command},
      timeout: 5000,
      success: function(data){
        $("#result").text(data);
        $("#previous").text(command);
        $("#command_input").val("");
        $("#streak").text(Number($("#streak").text()) + 1);
        log_file(0, data, line_num());
      },
      error: function() {
        $("#result").text("Error: command timed out: " + command);
        $("#command_input").val("");
      }
  });
};

var log_file = function(type, output, lines) {
$.ajax({
      type: "POST",
      url: 'php/log.php',
      data: {type, output, lines},
      success: function(data){
        $("#nb_log").text(data);
      }
  });
};
log_file(1, "", 0);

$("#command_input").keypress(function(e) {
    if (e.which == 13) exec_command($("#command_input").val());
});
$("#submit").click(function() {
  exec_command($("#command_input").val())
});
$("#prev-button").click(function() {
  if ($("#previous").text() != "None") exec_command($("#previous").text());
});
$("#copy_result").click(function() {
  ToClipboard('#result');
  $('#copy_message').modal('show');
});
$("#clear_log").click(function() {
  log_file(2, "", 0);
  $("#result").html("Nothing to show ATM");
});

update();
function update() {
$("#time").text(new Date().toTimeString().split(" ")[0]);
window.setTimeout(update, 100);
}

line_num();
function line_num() {
    var pre = document.getElementsByName('result'),
        pl = pre.length;
    for (var i = 0; i < pl; i++) {
        pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML;
        var num = pre[i].innerHTML.split(/\n/).length;
        for (var j = 0; j < num - 1; j++) {
            var line_num = pre[i].getElementsByTagName('span')[0];
            line_num.innerHTML += '<span class="noselect">' + (j + 1) + ' </span>';
        }
    }
    return j;
}

function ToClipboard(to_copy) {
    var txt = $("<textarea></textarea>")
    var clone = $(to_copy).clone();
    $("body").append(txt);
    $(txt).val($(clone).children().remove().end().text()).select();
    document.execCommand("copy");
    $(clone).remove();
    $(txt).remove();
}
