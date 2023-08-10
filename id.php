<?php
    if(isset($_POST['generate_id_button'])) {
        $name = $_POST['std_name'];
        $phone = $_POST['std_phone'];
        $email = $_POST['std_email'];
        $course = $_POST['std_course'];
        $batchno = $_POST['std_batch'];
        // image saving section
        $image_name = $_FILES['std_image']['name'];
        $tmp_name = $_FILES['std_image']['tmp_name'];
        move_uploaded_file($tmp_name, "upload/".$image_name);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-id.css">
    <title>
        Identity Card
        |PHP
    </title>
</head>
<body>
    <div class="id-card">
        <header>
            <h1>DarunIT SID</h1>
        </header>

        <article>
            <img src="upload/<?php if(isset($image_name)) {echo $image_name;} ?>" alt="My Pic">
            <div class="text-area">
                <h2><?php if(isset($name)) {echo $name;} ?></h2>
                <h3>Course- <?php if(isset($course)) {echo $course;} ?></h3>
                <ul>
                    <li>
                        Phone- <?php if(isset($phone)) {echo $phone;} ?>
                    </li>
                    <li>
                        Email- <?php if(isset($email)) {echo $email;} ?>
                    </li>
                    <li>
                        Batch No- <?php if(isset($batchno)) {echo $batchno;} ?>
                    </li>
                </ul>
            </div>
        </article>
    </div>
</body>
</html>