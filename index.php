<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form-card" id="loginCard">
        <h1 class="form-title">Login Form</h1>
        <form action="handle_forms.php" method="POST" id="loginForm">
            <input type="hidden" name="form_type" value="login">
            
            <div class="input-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            
            <div class="input-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>

            <div class="button-group">
                <button type="submit" class="btn-login">Login</button>
                <button type="button" class="btn-clear" onclick="resetForm('loginForm')">Clear</button>
            </div>

            <div class="footer-link">
                <a href="javascript:void(0)" onclick="toggleForms()">Create New Account</a>
            </div>
        </form>
    </div>

    <div class="form-card register-card" id="registerCard" style="display: none;">
        <h1 class="form-title">Registration Form</h1>
        <form action="handle_forms.php" method="POST" id="registerForm">
            <input type="hidden" name="form_type" value="register">
            
            <div class="form-row">
                <div class="input-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" required>
                </div>
                <div class="input-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" required>
                </div>
                <div class="input-group">
                    <label>Department</label>
                    <select name="department">
                        <option value="Computer Science">Computer Science</option>
                        <option value="IT">IT</option>
                        <option value="Business">Business</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label>Gender</label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="Male"> Male</label>
                        <label><input type="radio" name="gender" value="Female"> Female</label>
                        <label><input type="radio" name="gender" value="Other"> Other</label>
                    </div>
                </div>
                <div class="input-group">
                    <label>Hobbies</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
                        <label><input type="checkbox" name="hobbies[]" value="Sports"> Sports</label>
                        <label><input type="checkbox" name="hobbies[]" value="Music"> Music</label>
                        <label><input type="checkbox" name="hobbies[]" value="Travel"> Travel</label>
                    </div>
                </div>
                <div class="input-group">
                    <label>Others</label>
                    <textarea name="others" rows="4"></textarea>
                </div>
            </div>

            <div class="button-group center">
                <button type="submit" class="btn-login">Register</button>
                <button type="button" class="btn-clear" onclick="resetForm('registerForm')">Clear</button>
            </div>

            <div class="footer-link">
                <a href="javascript:void(0)" onclick="toggleForms()">Already have an account? Login</a>
            </div>
        </form>
    </div>

    <script>
        function toggleForms() {
            const login = document.getElementById('loginCard');
            const register = document.getElementById('registerCard');
            if (login.style.display === "none") {
                login.style.display = "block";
                register.style.display = "none";
            } else {
                login.style.display = "none";
                register.style.display = "block";
            }
        }

        function resetForm(formId) {
            document.getElementById(formId).reset();
        }
    </script>
</body>
</html>
