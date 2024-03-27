<?php






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiaster</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- stylesheet -->
    <style>
        body{
            background: linear-gradient(0.25turn,#78c0a8, #f2e9e1, #f69d3c);
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
            width: 450px;
            height: 500px;
            display: flex;
            flex-direction: column;
            padding: 30px 15px 0 15px;
            border-radius: 30px;
            backdrop-filter: blur(-15px);
            transform: 3s;
            background:linear-gradient(0.25turn,#78c0a8, #f2e9e1, #f69d3c) ;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, 
                        rgba(0, 0, 0, 0.20) 0px 5px 10px;

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

        .two {
            
            padding-top: 20px;
           color: rgb(0, 0, 0);
            padding-left: 2px;
            font-size: 15px;
            margin-top: 10px;
            text-align: center;
        }

        .label a {
            text-decoration: none;
            color: white;
        }
        .me{
            padding-left:5px ;
        }
        .btn {
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
        .btn:hover{
            background-color:#542437 ;
            transform: none;
            transition:2s;
        }
    </style>
</head>

<body>

    <div class="box">

       <form method="post" action="curd.php">
        <div class="container">
            
            <div class="top">
               
                <header>Create Account</header>

            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="First Names*" required name="fn">
                <i class="fa fa-solid fa-user"></i>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Last Names" required name="ln">
                <i class="fa fa-solid fa-user"></i>
            </div>
            <div class="input-field">
                <input type="number" class="input" placeholder="Mobile*" required name="mobile">
                <i class="fa fa-phone"></i>
            </div>
            <div class="input-field">
                <input type="text" class="input" placeholder="Email*" required name="email">
                <i class="fa fa-envelope"></i>
            </div>
            <div class="input-field">

                <input type="password" class="input" placeholder="Password*" required name="pass">
                <i class="fa fa-solid fa-lock"></i>
            </div>
           

                <button class="btn" name="save">Create Account</button>

            
                <div class="two">
                    <label for="#">Have an account?<a href="sign up.php">Sign in</a></label>

                </div>
            </div>
        </div>
       </form>
    </div>

</body>

</html>


