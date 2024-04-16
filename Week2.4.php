<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
            <header><!--place navbar here--></header>
                <style>
                    body { font-family: 'Times New Roman', Times, serif;}
                    .login-container {width: 300px; margin: 0 auto;}
                    .login-container h2 {text-align: center;}
                    .form-group {margin-bottom: 15px; }
                    .form-group label {display: block; margin-bottom: 5px;}
                    .form-group input [type="text"],
                    .form-group input[type="password"]
                    .form-group textarea{
                        width: 100%; padding: 8px; border: 2px solid #ccc;
                        box-sizing: border-box;}
                    .form-group textarea {
                        height: 100px; /* Set a default height for textarea */
                        }
                    .form-group input[type="checkbox"] {
                        margin-right: 5px;
                        }
                        .form-group label[for] { /* Ensure labels have a "for" attribute */
                            cursor: pointer; /* Make labels clickable */
                            }

                        .buttons {
                            text-align: center;
                            margin-top: 20px;
                            }

                        .buttons input[type="submit"],
                        .buttons input[type="button"] {
                            padding: 8px 15px;
                            margin-right: 10px;
                            border: none;
                            background-color: #4CAF50; /* Green button color */
                            color: white;
                            cursor: pointer;}
                </style>
            </head>
        <body>
        <div class="login-container">
    <h2>Login Form</h2>
    <form action="" method="post"> <div class="form-group">
        <label for="username">Username:</label>
        <textarea id="username" name="username" rows="4" cols="50"></textarea>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelped" placeholder="">
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" class="form-control" aria-describedby="cityHelped" placeholder="">
      </div>
      <div class="form-group">
        <label for="employment">Employment:</label>
        <input type="text" id="employment" name="employment" class="form-control" aria-describedby="employmentHelped" placeholder="">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" class="form-control" aria-describedby="emailHelped" placeholder="">
      </div>
      <div class="form-group">
        <label for="webserver">Web Server:</label>
        <input type="text" id="webserver" name="webserver" class="form-control" aria-describedby="webserverHelped" placeholder="">
      </div>
      <div class="form-group">
        <label for="role">Please specify your role:</label>
        <br>
        <input type="checkbox" id="admin" name="role[]" value="admin">
        <label for="admin">Admin</label>
        <br>
        <input type="checkbox" id="engineer" name="role
    </form>
    </body>
</html>