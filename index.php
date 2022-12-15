<html>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>
            LAB 9
        </title>
    </head>

    <body>
        <form action="auth.php" method="get">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pass" id="pwd">
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="radio" value="option1" checked>
                <label class="form-check-label" for="radio1">First Radio</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="radio" value="option2">
                <label class="form-check-label" for="radio2">Second Radio</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="radio" value="op3">
                <label class="form-check-label">Third disabled radio</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="check">Example Checkbox</label>
            </div>
            
            <button type="submit" class="btn btn-primary ">Sign In</button>
        </form>
    </body>

</html>

