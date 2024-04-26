<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "Variables and datatypes in PHP"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP Tut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container my-3">
    <h2>Variables</h2>
    <p>Variables are used to store information.</p>
    <p>A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).</p>

    <?php 
        $name = "Muhammad Bilal";
        $income= 20000;

        echo "This is $name and his income is $income"
    ?>

    <h2 class="my-3">More on Variables</h2>
    <h4>Rules for PHP variables:</h4>
    <ul>
        <li>A variable starts with the $ sign, followed by the name of the variable</li>
        <li>A variable name must start with a letter or the underscore character</li>
        <li>A variable name cannot start with a number</li>
        <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
        <li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
    </ul>

    <h2 class="my-3">DataTypes in PHP</h2>
    <p>Variables can store data of different types, and different data types can do different things.</p>
    <ul>
        <li>String</li>
        <li>Integer</li>
        <li>Float (floating point numbers - also called double)</li>
        <li>Boolean</li>
        <li>Array</li>
        <li>Object</li>
        <li>NULL</li>
        <li>Resource</li>
    </ul>

    <p>The <b>var_dump()</b> function returns the data type and the value:</p>
    <!-- php datatype examples -->
    <?php
    // String - sequence of characters
        $name = "Bilal";
        $friend = 'Ali';
        echo "$name ka friend is $friend";


        // Integer - Non decimal number
        $income = 455;
        $debts = -655;
        echo "<br>";
        echo $income;
        echo "<br>";
        echo $debts;
        echo "<br>";


        // Boolean - Can be either true or false
        $x = true;
        $is_friend = false;
        // echo $x;
        // echo "<br>";
        // echo $is_friend;
        // echo "<br>";
        echo var_dump($x);
        echo "<br>";
        echo var_dump($is_friend);
        echo "<br>";


        // Object - Instances of classes
        // Employee is a class ---> harry can be one object
        
        
        // Array - Used to store multiple values in a single variable
        $friends = array("rohan", "shubham", "skillf", "Larry");
        echo var_dump($friends);
        echo "<br>";
        echo $friends[0];
        echo "<br>";
        echo $friends[1];
        echo "<br>";
        echo $friends[2];
        echo "<br>";
        echo $friends[3];
        echo "<br>";
        //echo $friends[4]; // will throw an error as the size of array is 4


        // NULL
        $name = NULL;
        echo var_dump($name);
        ?>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>