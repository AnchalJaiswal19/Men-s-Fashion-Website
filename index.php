
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validator</title>
    <link rel="stylesheet" href="new.css">
    
</head>
<body>
        <div class="container">
        <h1>Register With Us</h1>
        <form action="connect.php" method="post" id="form" class="form">
        <div class="input">
        <label for="username">Username</label>
        <input
            type="text"
            name="username"
            id="username"
            placeholder="Username"
            autocomplete="off"
        />
        <small>Error message</small>
        </div>
        <div class="input">
        <label for="email">Email</label>
        <input
            type="text"
            name="email"
            id="email"
            placeholder="Email"
            autocomplete="off"
        />
        <small>Error message</small>
        </div>
            <div class="input">
            <label for="password">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
            />
            <small>Error message</small>
        </div>
        <div class="input">
        <label for="c-password">Confirm Password</label>
        <input
            type="password"
            name="cpassword"
            id="c-password"
            placeholder="Confirm Password"
        />
        <small>Error message</small>
        </div>
        <button type="submit">Submit data</button>
        </form>
        </div>

        

        
        
</body>
</html>