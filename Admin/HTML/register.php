

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> SignUp and SignIn Form</title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css'><link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="neuro/style.css">

</head>
<body>
<body class="light">
    <canvas></canvas>
    <div class="notify-wrap">
        <!-- <img src="noun-check-mark-1049529.svg" alt=""> -->
        <div class="pill pill-it">
            <div class="notify">
                <svg class="checkit" id="check" version="1.1" viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g>
                        <path
                            d="m667.19 0-2.1875 24.062c-201.25 148.75-308.44 332.5-385 490-45.938 30.625-78.75 72.188-98.438 24.062-24.062-63.438-76.562-183.75-148.75-207.81 30.625-35 59.062-43.75 94.062-39.375 45.938 6.5625 87.5 94.062 105 133.44 94.062-157.5 266.88-336.88 435.31-424.38z" />
                        <use x="32.8125" y="592.8125" xlink:href="#v" />
                        <use x="40.839844" y="592.8125" xlink:href="#c" />
                        <use x="46.234375" y="592.8125" xlink:href="#a" />
                        <use x="53.652344" y="592.8125" xlink:href="#i" />
                        <use x="61.03125" y="592.8125" xlink:href="#b" />
                        <use x="66.261719" y="592.8125" xlink:href="#a" />
                        <use x="73.679688" y="592.8125" xlink:href="#h" />
                        <use x="85.316406" y="592.8125" xlink:href="#g" />
                        <use x="93.144531" y="592.8125" xlink:href="#f" />
                        <use x="104.082031" y="592.8125" xlink:href="#e" />
                        <use x="112.503906" y="592.8125" xlink:href="#u" />
                        <use x="121.386719" y="592.8125" xlink:href="#t" />
                        <use x="128.355469" y="592.8125" xlink:href="#s" />
                        <use x="32.8125" y="603.75" xlink:href="#r" />
                        <use x="37.570312" y="603.75" xlink:href="#c" />
                        <use x="42.964844" y="603.75" xlink:href="#d" />
                        <use x="50.480469" y="603.75" xlink:href="#q" />
                        <use x="65.683594" y="603.75" xlink:href="#b" />
                        <use x="70.914062" y="603.75" xlink:href="#p" />
                        <use x="78.699219" y="603.75" xlink:href="#a" />
                        <use x="89.925781" y="603.75" xlink:href="#o" />
                        <use x="99.078125" y="603.75" xlink:href="#d" />
                        <use x="106.59375" y="603.75" xlink:href="#n" />
                        <use x="114.378906" y="603.75" xlink:href="#m" />
                        <use x="125.972656" y="603.75" xlink:href="#l" />
                        <use x="133.988281" y="603.75" xlink:href="#c" />
                        <use x="139.382812" y="603.75" xlink:href="#d" />
                        <use x="146.898438" y="603.75" xlink:href="#k" />
                        <use x="150.648438" y="603.75" xlink:href="#a" />
                        <use x="158.066406" y="603.75" xlink:href="#j" />
                        <use x="164.546875" y="603.75" xlink:href="#b" />
                    </g>
                </svg>
            </div>
            <div class="theme-text">

                <span id="theme-text"></span>
            </div>
        </div>
    </div>
    <!-- Theme switcher -->

    <div class="say-hello">
        <div id="say-hello"></div>
    </div>


    <section class="theme">
        <div class="theme-item">
            <div href="" class="theme-btn" id="themeButton">
                <svg class="theme-icon" id="darkIcon" aria-hidden="true" focusable="false" data-prefix="fad"
                    data-icon="moon-stars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="svg-inline--fa fa-moon-stars fa-w-16 fa-7x">
                    <g class="fa-group">
                        <path fill="currentColor"
                            d="M320 32L304 0l-16 32-32 16 32 16 16 32 16-32 32-16zm138.7 149.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208z"
                            class="fa-secondary"></path>
                        <path fill="currentColor"
                            d="M332.2 426.4c8.1-1.6 13.9 8 8.6 14.5a191.18 191.18 0 0 1-149 71.1C85.8 512 0 426 0 320c0-120 108.7-210.6 227-188.8 8.2 1.6 10.1 12.6 2.8 16.7a150.3 150.3 0 0 0-76.1 130.8c0 94 85.4 165.4 178.5 147.7z"
                            class="fa-primary"></path>
                    </g>
                </svg>
                <svg class="theme-icon" id="lightIcon" aria-hidden="true" focusable="false" data-prefix="fad"
                    data-icon="sun" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="svg-inline--fa fa-sun fa-w-16 fa-7x">
                    <g class="fa-group">
                        <path fill="currentColor"
                            d="M502.42 240.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.41-94.8a17.31 17.31 0 0 0-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4a17.31 17.31 0 0 0 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.41-33.5 47.3 94.7a17.31 17.31 0 0 0 31 0l47.31-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3a17.33 17.33 0 0 0 .2-31.1zm-155.9 106c-49.91 49.9-131.11 49.9-181 0a128.13 128.13 0 0 1 0-181c49.9-49.9 131.1-49.9 181 0a128.13 128.13 0 0 1 0 181z"
                            class="fa-secondary"></path>
                        <path fill="currentColor" d="M352 256a96 96 0 1 1-96-96 96.15 96.15 0 0 1 96 96z"
                            class="fa-primary">
                        </path>
                    </g>
                </svg>
            </div>
        </div>

    </section>
<!-- partial:index.partial.html -->
<html>
  <div class="container">
    <div class="blueBg">
      <div class="box signin">
        <h2>Already Have An Account?</h2>
        <button class="signinBtn" >Sign in</button> 
      </div>
      <div class="box signup">
      <h2>Welcome To Admin Login</h2>
        <!--<h2>Don't Have An Account?</h2>-->
        <!--<button class="signupBtn">Sign Up</button>-->
      </div>
    </div>
    <div class="formBx">
      <div class="form signinForm">
         <form action="PHP/index2.php" method="post">
            <h3>Sign In</h3>
            <input type="email"    name="email"    placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <i class="bi bi-eye-slash"></i>
            <div class="social">
              <i class='bx bxl-facebook-circle facebook'></i>
              <i class='bx bxl-google google' ></i>
              <i class='bx bxl-twitter twitter' ></i>
              <i class='bx bxl-linkedin-square linkdein' ></i>
            </div>
            <input type="submit" value="Login" name="login">
            <a href="ForgotPassword/recover_psw.php" class="forgot">Forgot Password</a>
          </form>
      </div>


          <!--signup form-->

      <div class="form signupForm">
         <form action="PHP/register2.php" method="post">
            <h3>Sign Up</h3>
            
            <input type="email"    name="email"       placeholder="Email Address" required="">
            <input type="password" name="password"    placeholder="Password" required="">
            <input type="submit" value="Register"     name="register" required="">
            
                
            
          </form>
      </div>
    </div>
  </div>
</html>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script><script  src="Js/script.js"></script>

</body>
<script src='https://res.cloudinary.com/liquidtime/raw/upload/v1673967142/fluid_attlxi.js'></script><script  src="neuro/script.js"></script>
</html>
<script>
  const toggle = document.getElementById('togglePassword');
  const password = document.getElementById('password');

  toggle.addEventListener('click', function(){
      if(password.type === "password"){
          password.type = 'text';
      }else{
          password.type = 'password';
      }
      this.classList.toggle('bi-eye');
  });
</script>
