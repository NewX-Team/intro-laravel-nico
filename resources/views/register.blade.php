<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register Page</h1>
    <form action="{{ route('handleRegister') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <p>Gender:</p>
        <input type="radio" name="" id="">
        <label for="female">Male</label> <br>
        <input type="radio" name="" id="">
        <label for="female">Female</label> <br>
        <input type="radio" name="" id="">
        <label for="female">Other</label> <br>  <br>

        <div>
            <div>
                <label for="">Nationality</label>
            </div>
            <br>
            <div>
                <select name="nationality" id="nationality">
                    <option value="">Japan</option>
                    <option value="">South Korea</option>
                    <option value="">Nort Korea</option>
                    <option value="">Taiwan</option>
                </select>
            </div>
        </div>

        <br>

        <div>
            <div>
                <label for="spoken">Language Spoken:</label>
                <br>
                <br>
                <div>
                    <input type="checkbox" name="indonesia" id="indonesia">
                    <label for="indonesia">Bahasa Indonesia</label>
                </div>
                <div>
                    <input type="checkbox" name="english" id="english">
                    <label for="english">English</label>
                </div>
                <div>
                    <input type="checkbox" name="Japan" id="Japan">
                    <label for="japan">Japanese</label>
                </div>
            </div>
        </div>
         <br>

         <div>
            <label for="bio">Bio:</label>
            <br>
            <br>
            <textarea rows="5" cols="40" id=""></textarea>
         </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>