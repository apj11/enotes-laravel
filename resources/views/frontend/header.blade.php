   <nav class="navbar navbar-expand-md navbar-light bg-light container">
      <a class="navbar-brand" href="home.php">
        <img src="images/logo.PNG" style="display: inline-block;">
        <span style="display: inline-block;"></span>
      </a>
    </nav>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <header class="container">
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
             <li><a href="{{route('index')}}">HOME</a>
              <span><a class="sr-only">(current)></a></span></li>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('programs.index')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PROGRAMS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="see/seedownload.php">SEE</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="hseb/downloadhseb.php">HSEB</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="bachelor/bachelordownload.php">Bachelor</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="master/masterdownload.php">Master</a>
            </div>
            </li>
          <li class="nav-item">
             <li><a href="{{route('abouts.index')}}">ABOUT</a>
          </li>
          <li class="nav-item">
             <li><a href="{{route('contacts.index')}}">CONTACT US</a>
          </li>
        </ul>

      </div>
    </header>
  </nav>
