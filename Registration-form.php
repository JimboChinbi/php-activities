<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Registration</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">


    <style>
      body {
        background-color: #f8f9fa;
      }

      .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      body {
        height: 100vh;
      }

      main.form-signin {
        max-width: 400px;
        padding: 15px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }
    </style>
  </head>


  <body class="d-flex justify-content-center align-items-center h-100vh">
    <div class="container">
      <h2 class="text-center">Registration</h2>

      <form method="post" action="signup.process.php">
        <div class="form-group">
          <label for="Username">Username</label>

          <input
            type="text"
            class="form-control"
            name="uname"
            id="Username"
            placeholder="Enter Username"
          />
        </div>
        

        <div class="form-group">
          <label for="password">Password</label>

          <input
            type="password"
            name="upass"
            class="form-control"
            id="Password"
            placeholder="Enter Password"
          />
        </div>
        <div class="form-group">
          <label for="uEmail">Email</label>
          <input
            type="email"
            name="uEmail"
            class="form-control"
            id="Email"
            placeholder="Enter Email"
          />
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="form-check">
            <input
              type="radio"
              class="form-check-input"
              name="gender"
              id="male"
              value="male"
            />
            <label class="form-check-label" for="male">Male</label>
          </div>
          <div class="form-check">
            <input 
              type="radio"
              class="form-check-input"
              name="gender"
              id="female"
              value="female"
            />
            <label class="form-check-label" for="female">Female</label>
          </div>
        </div>
        
        

        <button type="submit" class="btn btn-success btn-block mb-2">
          Register
        </button>
        <p class="text-center">Already have an <a href="login.html" style="text-decoration: none;">Account?</a></p>
      </form>
    </div>
    <script src="./js/bootstrap.bundle.js"></script>
  </body>
</html>