<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sport Port</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!--Login Form css - added by us-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Sport Port</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php#sports">Offered Sports</a>
            </li>
<!--             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"></a>
            </li> -->
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/loginregister.php">Login / Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section style=>
    <div id="page">
        <h1>Login or Register</h1>
        <section id="loginForm">
            <h3>Login</h3>
            <form method="post" id="login" action="php/processing.php">
                <fieldset>
                    <label for="loginEmail">Email:
                        <input type="text" maxlength="32" name="loginEmail" id="loginEmail">
                    </label>
                    <label for="loginPassword">Password:
                        <input type="password" maxlength="20" name="loginPassword" id="loginPassword">
                    </label>
                </fieldset>
                <input type="submit" name="formSubmit" class="formSubmit" id="submitLogin" value="Login">
            </form>
        </section>
        <section id="registrationForm">
            <h3>Register</h3>
            <form method="post" id="registration" action="php/processing.php" onsubmit="return validateForm()">
                <fieldset>
                    <label for="firstName">First Name:
                        <input type="text" maxlength="32" name="firstName" id="firstName">
                    </label>
                    <div id="firstNameError" class="error"></div>

                    <label for="lastName">Last Name:
                        <input type="text" maxlength="32" name="lastName" id="lastName" aria-required="true" required>
                    </label>
                    <div id="lastNameError" class="error"></div>

                    <label for="dateOfBirth">Date of Birth:
                        <input type="date" maxlength="32" name="dateOfBirth" id="dateOfBirth" aria-required="true" required>
                    </label>
                    <div id="dateOfBirthError" class="error"></div>

                    <label for="email">E-mail:
                        <input type="text" maxlength="32" name="email" id="email" aria-required="true" required>
                    </label>
                    <div id="emailError" class="error"></div>

                    <label for="password">Password:
                        <input type="password" maxlength="20" name="password" id="password">
                    </label>
                    <div id="passwordError" class="error"></div>

                    <label for="confirm">Confirm Password:
                        <input type="password" maxlength="20" name="confirm" id="confirm">
                    </label>
                    <div id="confirmError" class="error"></div>
                </fieldset>
                <input type="submit" name="formSubmit" class="formSubmit" id="submit" value="Register">
            </form>
        </section>
        <script src="js/validation.js"></script>
    </div>
</section>

    <footer class="copyright py-4 text-center text-white" id="footer">
      <div class="container">
        <small>Copyright &copy; SportPort</small>
      </div>
    </footer>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>