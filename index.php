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
                    <li class="flex-stretch "><a class="text-white" href="index.php">User List</a></li>
                    <li class="flex-stretch"><a class="text-white" href="add_user.php">Add New User</a></li>
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
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Email</th>
            <th>Classes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        error_reporting(E_ERROR | E_PARSE);

        // Read the JSON data from the file
        $json_data = file_get_contents('data.json');
        $data = explode("\n", $json_data);

        // Loop through the data and display the fields
        foreach ($data as $item) {
            $item = json_decode($item, true);
            echo "<tr><td>".$item['name']."</td><td>".$item['type']."</td><td>".$item['email']."</td><td>".$item['classes']."</td></tr>";
        }
        ?>
    </tbody>
</table>
<a class="btn btn-info" href="add_user.php">Add Data</a>


            </div>
        </article>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</body>

</html>