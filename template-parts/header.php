<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container header-container">
      <a class="navbar-brand" href="#">
        <img src="../images/logo.png" alt="Pluto">
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar__list">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <button class="nav-link" href="#" data-toggle="modal" data-target="#searchModal">
              <i class="fa fa-search"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Modal -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form class="header__form">
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Search for Keywords</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Search for Keywords">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>