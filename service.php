<?php
session_start();

// check are you login?
include("include/check-login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>About</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check" viewBox="0 0 16 16">
      <title>About</title>
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
  </svg>

  <header>
    <?php
    //include header layout
    include("include/header.php");
    ?>

  </header>

  <main>

    <h2 class="display-6 text-center mb-4" style="margin-top: 20px;">Compare plans</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Free</th>
            <th style="width: 22%;">Pro</th>
            <th style="width: 22%;">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sharing</th>
            <td></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited members</th>
            <td></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24">
                <use xlink:href="#check" />
              </svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <?php
  include("include/footer.php");
  ?>

  </div>



</body>

</html>