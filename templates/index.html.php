<h1>Welcome</h1>
<h2>Let's get started.</h2>

<form action="" method="post">
  <div>
    <input type="text" name="foo" value="" placeholder="Lorem ipsum" />
    <button value="submit">Lorem</button>
  </div>
</form>

<?php if (isset($_POST['foo'])) : ?>

<h2>Say what?</h2>

<p><?php echo htmlentities(strrev($_POST['foo'])); ?></p>

<?php

# a little DIY analytics, see http://stackoverflow.com/a/9096581/1269964 
# make sure www-data has write access to WhoseCode directory

$foobar = str_replace('"', "'", $_POST["foo"]); # keep number of quoted fields at 3
$info = '"'.date("Y-m-d-g:i:s").'", "'.$_SERVER["REMOTE_ADDR"].'", "'.$foobar.'"'.PHP_EOL;
file_put_contents("./data/log.csv", $info, FILE_APPEND) or die("OMG!");

endif;

?>

