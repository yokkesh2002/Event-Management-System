<?php session_start(); ?>
<?php
    include('connect/connection.php');

    if(isset($_POST["register"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $check_query = mysqli_query($connect, "SELECT * FROM register where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                    window.location.replace('../index.php');
                </script>
                <?php
            }else{
                
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
                $result = mysqli_query($connect, "INSERT INTO register (email, password, status) VALUES ('$email', '$password_hash', 0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='yokkesh2002hackerone@gmail.com';
                    $mail->Password='uulzhzdxnllpxjpu';
    
                    $mail->setFrom('yokkesh2002hackerone@gmail.com', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Email verification code";
                    $mail->Body="<p>Dear Candidate, </p> <h3>Your verification OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>TMS Team</b>";
                    
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('OTP Verification/otp verify.php');
                                </script>
                                <?php
                            }
                }
            }
        }
    }

?>