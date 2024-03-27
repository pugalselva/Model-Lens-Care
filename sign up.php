<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- stylesheet -->
    <style>
         body {
            background: linear-gradient(0.25turn,#78c0a8, #ebf8e1, #f69d3c);
        }

        * {
            margin: 0;
            padding: 0;
           
        }
    
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }

        .container {
            width: 350px;
            height: 350px;
            display: flex;
            flex-direction: column;
            padding: 30px 15px 0 15px;
            border-radius: 10px;
            backdrop-filter: blur(-15px);
            transform: 3s;
            background: linear-gradient(0.25turn,#78c0a8, #f2e9e1, #f69d3c);
            box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, 
                        rgba(0, 0, 0, 0.05) 0px 5px 10px;


        }

        header {
            color: rgb(0, 0, 0);
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        .input-field .input {
            height: 45px;
            width: 87%;
            border: 2px;
            border-radius: 30px;
            border-color: black;
            color: rgb(0, 0, 0);
            font-size: 15px;
            padding: 0 0 0 45px;
            background: rgba(0, 0, 0, 0.1);
            outline: black;

        }

        .input-field i {
            position: relative;
            top: -33px;
            left: 17px;
            color: rgb(9, 8, 8);
           
        }

        .submit {
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            width: 100%;
            color: rgb(243, 238, 238);
            background-color: rgb(24, 41, 44);
            transition: 3s;
            cursor: pointer;


        }

        .submit:hover {
            box-shadow: 1px 5px 7px 1px rgb(23, 20, 30);
        }

        .two-col {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            color: rgb(0, 0, 0);
            padding-left: 2px;
            font-size: small;
            margin-top: 10px;
        }

        .one {
            display: flex;
        }

        .label a {
            text-decoration: none;
            color: white;
        }
        .me{
            padding-left:5px ;
        }
        .one-col {
            padding-top: 20px;
           color: rgb(0, 0, 0);
            padding-left: 2px;
            font-size: 15px;
            margin-top: 10px;
            text-align: center;
        }
    </style>

</head>

<body>

    <div class="box">

        <div class="container">
            <div class="top">
               
                <header>Sign in</header>

            </div>

            <div class="input-field">
                <input type="email" class="input" placeholder="Username" required>
                <i class="fa fa-solid fa-user"></i>
            </div>
            <div class="input-field">

                <input type="password" class="input" id="pass" placeholder="password" onclick="display()" required>
                
                <i class="fa fa-solid fa-lock"></i>
            </div>
            <div class="input-field">

                <input type="submit" class="submit" value="Login" onclick="validate()">

            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id=" check">
                    <label for="check" class="me">Remember Me</label>

                </div>
                <div class="two">
                    <label for="#"><a href="#">Forget Password</a></label>
                </div> 
            
            </div>
            <div class="one-col">
                <label for="">New Member? <a href="Regiaster.php">Create an Account </a></label>

            </div>
        </div>
    </div>
    

</body>

</html>