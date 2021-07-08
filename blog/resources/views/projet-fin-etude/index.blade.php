<!DOCTYPE html>
<head>
  <title>Page d'accueil</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{ asset('css\footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('css\SubsMenu.css') }}"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ asset('js\LoadInfopartenaire.js') }}"></script>
</head>
<body>
  <div class="w3-top">
      @include('projet-fin-etude.header')
  </div><br><br><br><br>
    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" style="z-index:3;">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active w3-black"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1" class="w3-black"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2" class="w3-black"></li>
    </ol>
    <div class="carousel-inner" style="border:2px solid black;">
      <div class="carousel-item active">
        <img src="https://www.mascir.com/wp-content/uploads/2020/11/preview-2-650x325.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cdn-07.9rayti.com/rsrc/cache/widen_750/uploads/2016/05/Concours-ENSIAS-2016.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/MANAGEM-LOGO.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon w3-black" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon w3-black" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <div id="band" class="container text-center">
    <h3>THE BAND</h3>
    <p><em>We love music!</em></p>
    <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo" data-toggle="collapse">
          <img src="{{asset('image/img1.jpg')}}" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo" class="collapse">
          <p>Guitarist and Lead Vocalist</p>
          <p>Loves long walks on the beach</p>
          <p>Member since 1988</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo2" data-toggle="collapse">
          <img src="{{asset('image/img2.png')}}" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo2" class="collapse">
          <p>Drummer</p>
          <p>Loves drummin'</p>
          <p>Member since 1988</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
          <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo3" class="collapse">
          <p>Bass player</p>
          <p>Loves math</p>
          <p>Member since 2005</p>
        </div>
      </div>
    </div>
  </div>

  <!-- /888888888888888888888888888888888888888888888888888 -->
    <div id="tour" class="bg-1">
    <div class="container">
      <h3 class="text-center">TOUR DATES</h3>
      <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
      <ul class="list-group">
        <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
        <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
        <li class="list-group-item">November <span class="badge">3</span></li> 
      </ul>
      
      <div class="row text-center">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="paris.jpg" alt="Paris" width="400" height="300">
            <p><strong>Paris</strong></p>
            <p>Friday 27 November 2015</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="newyork.jpg" alt="New York" width="400" height="300">
            <p><strong>New York</strong></p>
            <p>Saturday 28 November 2015</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
            <p><strong>San Francisco</strong></p>
            <p>Sunday 29 November 2015</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /888888888888888888888888888888888888888888888888888 -->
     <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                <input type="number" class="form-control" id="psw" placeholder="How many?">
              </div>
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
                <button type="submit" class="btn btn-block">Pay 
                  <span class="glyphicon glyphicon-ok"></span>
                </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
            <p>Need <a href="#">help?</a></p>
          </div>
        </div>
      </div>
    </div>
  <!-- /888888888888888888888888888888888888888888888888888 -->
  <div id="contact" class="container">
    <h3 class="text-center">Contact</h3>
    <p class="text-center"><em>We love our fans!</em></p>

    <div class="row">
      <div class="col-md-4">
        <p>Fan? Drop a note.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
        <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <h3 class="text-center">From The Blog</h3>  
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
      <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
      <li><a data-toggle="tab" href="#menu2">Peter</a></li>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h2>Mike Ross, Manager</h2>
        <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h2>Chandler Bing, Guitarist</h2>
        <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h2>Peter Griffin, Bass player</h2>
        <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
      </div>
    </div>
  </div>

<!-- /888888888888888888888888888888888888888888888888888 -->

  <hr style="border:3px solid blue;">
  <footer>  @include('projet-fin-etude.footer')</footer>
</body>
</html>




 <!--  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://www.mapexpress.ma/wp-content/uploads/2020/05/Universit%C3%A9-Cadi-Ayyad.jpg" alt="New York" width="1200" height="700">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>The atmosphere in New York is lorem ipsum.</p>
          </div>      
        </div>

        <div class="item">
          <img src="https://cdn-07.9rayti.com/rsrc/cache/widen_750/uploads/2016/05/Concours-ENSIAS-2016.jpg" alt="Chicago" width="1200" height="700">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago - A night we won't forget.</p>
          </div>      
        </div>
      
        <div class="item">
          <img src="https://www.mascir.com/wp-content/uploads/2020/11/preview-2-650x325.jpg" alt="Los Angeles" width="1200" height="700">
          <div class="carousel-caption">
            <h3>LA</h3>
            <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
          </div>      
        </div>
        <div class="item">
          <img src="http://www.mastervalue.ma/wp-content/uploads/2017/11/Reminex.png" alt="Los Angeles" width="1200" height="700">
          <div class="carousel-caption">
            <h3>LA</h3>
            <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
          </div>      
        </div>
        <div class="item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/MANAGEM-LOGO.png" alt="Los Angeles" width="1200" height="700">
          <div class="carousel-caption">
            <h3>LA</h3>
            <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
          </div>      
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
 -->