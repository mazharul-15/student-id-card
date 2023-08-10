<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-index.css">
    <title>PHP Form</title>
</head>
<body>
    <form action="id.php" method = "POST" enctype = "multipart/form-data">
        <h1>Create Your Virtual ID</h1>
        <!-- Name Field -->
        <div class = "form-field">
            <label for="field" class = "label--required">Name</label>
            <section>
                <input type="text" name="std_name" id="field" placeholder = "Your Name" required>
            </section>
        </div>

        <!-- Phone Field -->
        <div class = "form-field">
            <label for="phone" class = "label--required">Phone</label>
            <section>
                <input type="tel" name="std_phone" id="phone" placeholder = "(234) 234-2342" required>
            </section>
        </div>

        <!-- Email Field -->
        <div class = "form-field">
            <label for="email" class = "label--required">Email</label>
            <section>
                <input type="email" name="std_email" id="email" placeholder = "somebody@gmail.com" required>
            </section>
        </div>
        
        <!-- Course Field -->
        <div class="form-field">
            <label for="course" class = "label--required">Course</label>
            <section>
                <input type="text" name="std_course" id="course" placeholder = "Name of Your Course">
            </section>
        </div>

        <!-- Batch Field -->
        <div class="form-field">
            <label for="batch" class = "label--required">Batch No</label>
            <section>
                <input type="text" name="std_batch" id="batch" placeholder = "Your Batch No">
            </section>
        </div>

        <!-- Image Field -->
        <div class="form-field">
            <label for="image" class = "label--required">Upload image</label>
            <input type="file" name="std_image" id="image">
        </div>

        <!-- Button -->
        <div class="form-buttons">
            <input type="submit" value="Generate ID" name = "generate_id_button" class = "a-btn--filled">
        </div>
    </form>
    <script>
        console.log("Hey I am Javascript...");
    </script>
</body>
</html>