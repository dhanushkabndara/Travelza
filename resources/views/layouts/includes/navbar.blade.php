

  <div class="container-fluid">
  <div class="fixed-top">
<nav class="navbar navbar-expand-xl navbar-light bg-light">
  <a href="/" class="navbar-brand"></i>TRAV<b>ELZA</b></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <div class="navbar-nav">
      <a href="/" class="nav-item nav-link active">Home</a>
      <a href="/places" class="nav-item nav-link">Places</a>
      <a href="/gallery" class="nav-item nav-link">Gallery</a>
      <a href="/hotel" class="nav-item nav-link">Your Hotel</a>
      <a href="/contact" class="nav-item nav-link">Contact</a>
      <a href="/travel" class="nav-item nav-link">Hotels</a>
    </div>
    
    <div class="navbar-nav ml-auto">
      <a href="#" class="nav-item nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a>
      <a href="#" class="nav-item nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></a>
      <a href="#" class="nav-item nav-link btn btn-secondary" ><i class="fa fa "></i> Sign in</a>
      <a href="#" class="nav-item nav-link btn btn-primary"><i class="fa fa"></i>Signup</a>
      <div class="nav-item dropdown">
      
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="{{ asset('img/hotel1.jpg') }}" class="avatar" alt="Avatar"> {{ Auth::user()->name}}<b class="caret"></b></a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></a>
          <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></a>
          <a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}"  class="dropdown-item"><i class="material-icons" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >&#xE8AC;</i> {{ __('Logout') }}</a></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</nav>



                         