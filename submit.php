<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interested in Mobile Launch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: ;
            margin: 0;
            padding: 0;

            height: 100vh;
        }

        form {
            background-color: skyblue;
            padding: 50px;
            border-radius: 10px;
            display: inline-block;


            justify-content: center;
            align-items: center;

            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 50%;
            min-height: 100px;
            margin-top: 100px;
            margin-left: 300px;
            margin-right: 300px;



        }

        label,
        input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body style="background-image:url('2917.webp');background-position: center center;  background-size: cover;

">

    <h2 style="text-align: center;color: black;background-color: white;font-size:50px;">Interested in Mobile Launch
    </h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <center>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
            <input type="checkbox" id="intersted" name="intersted">I am intersted
            <input type="submit" value="Submit">
        </center>
    </form>
    <center>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            // Display submitted data
        
            echo "<div style='margin-top: 20px;'>";
            echo "<h3>Submitted Information:</h3>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Phone Number:</strong> $phone</p>";
            echo "</div>";
        }
        ?>
    </center>
</body>

</html>