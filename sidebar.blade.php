<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="navbar-fixed-side.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<!-- css hentet fra http://www.samrayner.com/bootstrap-side-navbar/ -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2 col-lg-2">
      <nav class="navbar navbar-default navbar-fixed-side">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse nb_div" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li> 
        <div class="dropdown dd_div">
          <button class="btn dropdown-toggle dd_knappen" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> CoWorx <span class="caret"></span></button>
            <ul class="dropdown-menu dd_menu">
              <li class="dropdown-header dd_text_header"> Dine andre løsninger </li>
                <li class="dd_text_item"><a href="#"> Google </a></li>
                <li class="dd_text_item"><a href="#"> Microsoft </a></li>
                <li class="dd_text_item"><a href="#"> Apple </a></li>
              <li class="dropdown-header dd_text_header"> Brukerinnstillinger </li>
                <li class="dd_text_item"> <a href="#"> Logg ut </a> </li>
            </ul>
        </div>
        </li>

        <li>
            <p> Kevin Benjamin Zeppo Adriaansen
              <span class="sr-only">(current)</span>
            </p>
        </li>
        <li><a href="#">Min profil</a></li>
        <li><a href="#">Rom liste </a></li>

          <!-- Henter navn fra rom-objekter opprettet i web.php route -->
          <li class="room_list">
            @foreach ($rooms['rooms'] as $room)
              <ul> 
                <span class="glyphicon glyphicon-calendar glyphicon_style calendar_glyp"></span>
                {{ $room['name'] }}
              </ul>
            @endforeach
          </li>

        </li>

        <li><a href="#">Brukere (999) </a> </li>
        <li><a href="#">Administrative </a> </li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
      </nav>
    </div>
    <div class="col-sm-10 col-lg-10">
      <!-- your page content -->
    </div>
  </div>
</div>

</body>
</html>