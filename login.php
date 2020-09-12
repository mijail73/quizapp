<!doctype html>
<html lang="en">

<head>
    <script src="assets/src/js/script.js"></script>
    <title>The Quiz App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">The Quiz App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/quizapp/quizhomepage.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/quizapp/check_results.php">Check Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/quizapp/upload_subject.php">Add Questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/quizapp/delete_subject.php">Delete Questions</a>
                </li>
            </ul>
            <span class="navbar-text">
                User Logged in:
            </span>
            <span class="navbar-text">
                <a class="nav-link" href="logout.php">Logout</a>
            </span>
        </div>
    </nav>
    <div class="container" style="margin-top:20px;">
        <form id="loginForm" action="handlers/login_handler.php" method="POST" name="loginForm">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row" id="confirmPasswordDiv" style="display: none;">
                <label for="inputPassword4" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-group row" id="firstnameDiv" style="display: none;">
                <label for="firstnamelabel" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="form-group row" id="lastnameDiv" style="display: none;">
                <label for="lastnamelabel" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" id="loginButton" name="loginButton" value="0">Log in</button>
                </div>
            </div>
            <div class="form-group row" onclick="toogleSignup();">
                <div class="col-sm-10">
                    <p id="toggleMessage"><a href="#" id="toggleMessageTag" style="text-align:center; font-size:1.2rem; color:black;"><b>If you don't have an account, click here to sign up</b></a></p>
                </div>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>