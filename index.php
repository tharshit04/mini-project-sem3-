<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Traffic manager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://traffic.delhipolice.gov.in/dtpg20info/">Emergency</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">about</a>
        </li>
        </ul>
        
    </div>
    </nav>
    
    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/traffic1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Rapid Urbanization</h3>
            <p> The rapid growth of urban areas in India has led to increased vehicular density</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="img/traffic2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Population Growth</h3>
            <p>With a growing population, there is a corresponding increase in the number of vehicles</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="img/traffic3jpg.webp" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Poor Traffic Management</h3>
            <p>Inefficient traffic management and lack of effective enforcement of traffic rules contribute significantly to congestion</p>
        </div>   
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">About</h3>
        </div>
        <div class="conatiner-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="img/traffic4.jpeg" class="img-fluid aboutimg" >
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>
                        Traffic Congestion
                    </h2>
                    <p>
                        Addressing the problem of traffic congestion requires a comprehensive and integrated approach, combining investments in infrastructure development, the promotion of public transit systems, implementation of intelligent traffic management solutions, and the encouragement of alternative modes of transportation. As cities grapple with the mounting challenges posed by congestion, finding innovative and sustainable solutions becomes imperative for fostering livable, efficient, and environmentally friendly urban spaces.
                    </p>
                </div>
            </div>  
        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Manage IT</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label for="validationServerUsername">Username</label>
                    <input type="text" name="user" id="validationServerUsername" autocomplete="off" class="form-control" placeholder="Enter Username" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>    
                </div>
                <div class="form-group">
                    <label for="validationemail">Email ID</label>
                    <input type="text" name="email" id="validationemail" autocomplete="off" class="form-control" placeholder="Email" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Mobile number">
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="date" autocomplete="off" class="form-control" placeholder="Date of submission">
                </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type of Traffic</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="type">
                    <option selected>Choose...</option>
                    <option value="Road Closure">Road Closure</option>
                    <option value="Parking issue">Parking issue</option>
                    <option value="Congestion">Congestion</option>
                    <option value="Accident">Accidents</option>
                    <option value="Signal Malfunction">signal malfunction</option>
                </select>
                <div class="form-group">
                    <label for="validationdescription">Description of the Issue</label>
                    <input type="text" name="description" id="validationdescription" autocomplete="off" class="form-control" placeholder="Description">
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Action Taken</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="action">
                    <option selected>Choose...</option>
                    <option value="Traffic Police">By Traffic Police</option>
                    <option value="Local authorities">By Local authorities</option>
                    <option value="General Public">By General Public</option>
                    <option value="N/A">None Taken</option>
                </select>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Submitters Affiliation</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="affiliation">
                    <option selected>Choose...</option>
                    <option value="Resident">Resident</option>
                    <option value="Law Enforcement">Law enforcement</option>
                    <option value="Commuter">Commuter</option>
                    <option value="N/A">Rather not Say</option>
                </select>
                <div class="form-group">
                    <label>Additional-Comments</label>
                    <textarea class="form-control" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
    <section class="my-5">
        <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
               <a href="index.php"> TrafficManager.com</a>
            </div>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>