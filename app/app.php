<?php
date_default_timezone_set('America/Los_Angeles');

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/triangles.php";

$app = new Silex\Application();

$app->get("/", function() {
    return "Home";
});
$app->get("/new_triangles", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Make a triangle!</title>
        </head>
        <body>
            <div class='container'>
                <h1>Triangle Maker</h1>
                <p>Enter the dimensions of your triangle to see what kind it is.</p>
                <form action='/view_triangle'>
                    <div class='form-group'>
                      <label for='length1'>Enter one side:</label>
                      <input id='length1' name='length1' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                      <label for='length2'>Enter second side:</label>
                      <input id='length2' name='length2' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                      <label for='length3'>Enter third side:</label>
                      <input id='length3' name='length3' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Create</button>
                </form>
            </div>
        </body>
        </html>
        ";
});
$app->get("/view_triangle", function() {
  $my_triangle = new Triangle($_GET['length1'], $_GET['length2'], $_GET['length3']);
  if ($my_triangle->isNot()) {
      return "<h1>You did not make a triangle</h1>";
  } else if ($my_triangle->isEquilateral()) {
      return "<h1>You made an equilateral triangle!</h1>";
  } else if ($my_triangle->isIsosceles()) {
      return "<h1>You made an isosceles triangle!</h1>";
  } else if ($my_triangle->isScalene()) {
      return "<h1>You made a scalene triangle!</h1>";
  } else {
      return "<h1>whatever</h1>";
  }
});
return $app;


?>
