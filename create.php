<?php

$dir = filter_var($_REQUEST['dir'], FILTER_SANITIZE_URL);

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file = filter_var($_REQUEST['file'], FILTER_SANITIZE_URL);
    $new = __DIR__ . '/Doc'. $dir . $file;
    $action = touch($new);

    if($action) {
        header("Location: /index.php?action=source&file=" . $dir . $file);
    } else {
        echo "Error when creating entry ", $dir, $file;
    }
}

?>

<form method='post' action='#'>
  <p>
    <label> File to create: <input type="text" name="file" /></label>
  </p>
  <p>
    <button type="submit">Create</button>
  </p>
</form>
