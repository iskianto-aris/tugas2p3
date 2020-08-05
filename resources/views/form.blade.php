<!DOCTYPE html>
<html lang="en">

<!--
    - Code by. Aris Iskianto
    - Berlatih HTML hari 1
    - Course @Sanbercode
    - Senin 20-07-2020
 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up SanberBook</title>
</head>

<body>
    <div>
        <h1>Buat ACCOUNT Baru!</h1>
        <h3>Sign Up Form</h3>
    </div>

    <div>
        <form action="welcome.html">
            <label for="fname">First Name :</label><br>
            <input type="text" id="fname"><br>
            <label for="lname">Last Name :</label><br>
            <input type="text" id="lname">

            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>

            <p>Nationality:</p>
            <select name='nationality'>
                <option value='indonesia'>Indonesia</option>
                <option value='malaysia'>Malaysia</option>
                <option value='singapura'>Singapura</option>
                <option value='korea'>Korea</option>
                <option value='jepang'>Jepang</option>
              </select>

            <p>Language Spoken :</p>
            <input type="checkbox" id="language1" name="language1" value="Indonesia">
            <label for="language1"> Bahasa Indonesia</label><br>
            <input type="checkbox" id="language2" name="language2" value="English">
            <label for="language2"> English</label><br>
            <input type="checkbox" id="language3" name="language3" value="Other">
            <label for="language3"> Other</label><br><br>

            <label for="bio">Bio :</label><br><br>
            <textarea cols="50" rows="7" id="bio"></textarea><br><br>

            <input type="submit" value="submit">
        </form>
    </div>

</body>

</html>
