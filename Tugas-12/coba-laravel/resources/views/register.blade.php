<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook - Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <Form action="/welcome" method="POST">
        @csrf
        <label>First Name:</label><br><br>
        <input type="text" name="Fname"><br><br>

        <label>Last Name:</label><br><br>
        <input type="text" name="Lname"><br><br>

        <label>Gender:</label><br><br>
        <input type="radio" name="Gender" value="1">Male<br>
        <input type="radio" name="Gender" value="2">Female<br>
        <input type="radio" name="Gender" value="3">Other<br><br>

        <label>Nationality:</label><br><br>
        <select name="Nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="WNA">WNA</option>
        </select><br><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="Language" value="Bahasa">Bahasa Indonesia<br>
        <input type="checkbox" name="Language" value="English">English<br>
        <input type="checkbox" name="Language" value="Other">Other<br><br>

        <label>Bio:</label><br><br>
        <textarea name="Bio" rows="10" cols="30"></textarea><br>
        <input type="submit" value="Sign Up">
    </Form>
</body>
</html>