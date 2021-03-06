<!DOCTYPE html>
<html>
<head>
   

</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body, html {
    height: 100%;
    background-size: cover;
}

.flex-container-background {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    overflow: auto;
    width: auto;
}

.flex-container {
    display: -webkit-flex;
    display: flex;
}

.flex-item {
    margin: auto;
    margin-top: 0px;
    background: transparent;
}

.flex-item-0 {
    margin: auto;
    width: 100%;
    background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, 0));
}

.flex-item-1 {
    margin: auto;
    margin-top: 50px;
    background: rgba(0, 0, 0, .5);
    width: 500px;
    border-radius: 10px;
}

@media screen and (max-width: 540px) {
    .flex-item-1 {
        margin-top: 0px;
        width: 300px;
    }
}

@media screen and (max-width: 340px) {
    .flex-item-1 {
        margin-top: 0px;
        width: auto;
    }
}

h1[id="form_header"] {
    line-height: 60px;
    margin-left: 20px;
    font-family: Roboto-Thin;
    font-size: 50px;
    text-align: center;
    color: white;
}

/* Bordered form */
form {
    border: 2px solid #f1f1f1;
    border-radius: 10px;
}

h2 {
    font-family: OpenSans-Light;
    color: white;
    font-size: 40px;
    margin-left: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
}

.flex-item-login {
    margin: auto;
    margin-top: 0px;
    margin-bottom: 5px;
    background-color: transparent;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    font-family: Roboto-Regular;
    color: #212121;
    font-size: 18px;
    width: 90%;
    height: 40px;
    margin: 10px;
    padding: 1px 1px;
    bottom: 0;
    border: 0;
    box-sizing: border-box;
    background-color: white;
    border-radius: 3px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    border: none;
    color: white;
    font-family: OpenSans-Regular;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 10px;
    cursor: pointer;
    border-radius: 3px;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
    background-color: #3e8e41;
}
button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
    </style>

<body >
     <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Travelancar Banking</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
        <form action="proccess_login.php?action=login" method="POST" >
             <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>
            
                <div class="flex-item">
                    <input type="text" name="nama" placeholder="Username" required class="login-input">
                    </div>
                    <div class="flex-item">
                    <input type="password" name="sandi" placeholder="PIN" required class="login-input" >
                    </div>
                    <div>
                    <button type="submit" value="Login" class="login-input" style="height:40px;" >Login</button>
                    </div>
               
        </form>
    </div>
   </div>

    </div>

</body>
</html>