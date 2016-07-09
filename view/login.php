<?php $nauth = (isset($_SESSION['auth']) && $_SESSION['auth'] == 0) ? 1 : 0; ?>
<?php unset($_SESSION['auth']); ?>
<div class="ui icon <?php echo ($nauth) ? 'red' : 'violet'; ?> message">
  <i class="<?php echo ($nauth) ? 'ban' : 'protect'; ?> icon"></i>
  <div class="content">
    <div class="header">
      <?php echo ($nauth) ? 'Invalid username or password' : 'No so fast! You need to login first'; ?>
    </div>
    <p><?php echo ($nauth) ? 'Please correct your credentials' :
    'Just use the credentials you set earlier in the <u>conf.php</u> file'; ?></p>
  </div>
</div>
<div class="ui inverted yellow segment">
<form class="ui form" action="php/auth.php" method="post">
  <div class="field">
  <div class="two fields">
    <label>Username</label>
    <div class="field">
      <input type="text" name="username" placeholder="Your username">
    </div>
    <label>Password</label>
    <div class="field">
      <input type="password" name="password" placeholder="Your password">
    </div>
  </div>
</div>
<input type="submit" class="ui black button" value="Connection"></input>
</form>
</div>
