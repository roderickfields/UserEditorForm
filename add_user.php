<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cool Website</title>
    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>User Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="flex-none nav">
                <ul class="container display-flex">
                    <li class="flex-stretch"><a class="text-white" href="index.php">User List</a></li>
                    <li class="flex-stretch"><a class="text-white"  href="add_user.php">Add New User</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <article class="article card soft" id="article1">
            <div class="article-body">
                <p>No user selected</p>
            </div>
        </article>
        <article class="article card soft" id="article1">
            <div class="display-flex flex-aligh-center">
                <div class="flex-stretch">
                    <h2>User List</h2>
                </div>
            </div>
            <div class="article-body">
                <?php
                // Check if the form is submitted
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Define the file path where the JSON data will be stored
                    $file_path = 'data.json';

                    // Retrieve the form data
                    $name = $_POST['name'];
                    $type = $_POST['type'];
                    $email = $_POST['email'];
                    $classes = $_POST['classes'];

                    // Create an array with the form data
                    $form_data = array(
                        'name' => $name,
                        'type' => $type,
                        'email' => $email,
                        'classes' => $classes
                    );

                    // Convert the array to JSON format
                    $json_data = json_encode($form_data);

                    // Write the JSON data to the file
                    if (file_put_contents($file_path, $json_data . "\n", FILE_APPEND)) {
                        echo "Data saved successfully.";
                    } else {
                        echo "Error saving data.";
                    }
                }
                ?>
<form method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">Type:</label>
    <input type="text" class="form-control" name="type" id="type">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>

  <div class="mb-3">
    <label for="classes" class="form-label">Classes:</label>
    <input type="text" class="form-control" name="classes" id="classes">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-info" href="index.php">View Data</a>
</form>


                

            </div>
        </article>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</body>

</html>