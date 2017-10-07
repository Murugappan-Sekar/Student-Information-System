
<!DOCTYPE html>
<html lang="en">
<style type="text/css">

</style>

<head>
    <title>Student Information System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<script>
    function startup() {
        //animation: type 5s steps(100, end) infinite;    
    }
    function intranetClick() {
        var x = document.getElementById('frame');
        x.src = "http://www.ssn.net/";
    }
    function ssnClick() {
        var x = document.getElementById('frame');
        x.src = "http://www.ssn.edu.in";
        //
    }
    function homeClick() {
        var x = document.getElementById('frame');
        x.src = "SIS.html";
        //
    }
    function loginClick() {
        var x = document.getElementById('frame');
        x.src = "login.html";
        //
    }
    function signClick() {
        var x = document.getElementById('frame');
        x.src = "signup.html";
    }
</script>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand active" id="company">STUDENT INFOSYS</a>
            </div>
            <ul class="nav navbar-nav">
                <div class="btn-group">
                    <button class="btn btn-default navbar-btn" onclick="homeClick()"><span class="glyphicon glyphicon-home"></span>Home</button>
                    <button class="btn btn-default navbar-btn" onClick="ssnClick()" id="ssnButton"><span class="glyphicon glyphicon-education"></span>About SSN</button>
                    <button class="btn btn-default navbar-btn" onclick="intranetClick()"><span class="glyphicon glyphicon-cloud"></span>Intranet</button>
                    <button class="btn btn-default navbar-btn disabled" onclick="alert('login required')" data-toggle="tooltip" title="Login Required"><span class="glyphicon glyphicon-download"></span>Inbox</button>
                    <button class="btn btn-default navbar-btn disabled" onclick="alert('login required')" data-toggle="tooltip" title="Login Required"><span class="glyphicon glyphicon-upload"></span>Outbox</button>
                    <button class="btn btn-default navbar-btn disabled" onclick="alert('login required')" data-toggle="tooltip" title="Login Required"><span class="glyphicon glyphicon-briefcase"></span>Update BIO</button>
                    <button class="btn btn-success navbar-btn" onclick="loginClick()"><span class="glyphicon glyphicon-log-in"></span> Log in</button>
                    <button class="btn btn-primary navbar-btn" onclick="signClick()"><span class="glyphicon glyphicon-user"></span> Sign Up</button>
                </div>
            </ul>


            <div class="navbar-form navbar-right">
                <div class="form-group">
                    <select class="form-control" id="cat">
                        <option>Name</option>
                        <option>RegNo</option>
                        <option>Interest</option>
                        <option>Department</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button class="btn btn-default disabled navbar-btn" data-toggle="tooltip" onclick="alert('login required')" title="Login Required">Submit</button>
                <!--<button class="btn btn-default disabled" data-toggle="tooltip" title="Login Required">Submit</button>-->
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div id="aboutSSN">
        <iframe src="SIS.html" style="border:2px solid grey;" id="frame" name="iframe_a" height="570" width="1365"></iframe>
    </div>

</body>

</html>