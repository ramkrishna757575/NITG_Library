<nav class="navbar navbar-default navbar-fixed-top" role="navigation">      
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lib-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="lib-nav">
      <ul id="hide_nav1" class="nav navbar-nav navbar-left">     
        <li><a href="../index.php">Logo</a></li>
      </ul>
      <a id="nav-menu" class="nav-menu navbar-right">&#9776;</a>
      <ul id="hide_nav" class="nav navbar-nav navbar-right menu">
        <?php 
          $page = "pages/"; $lib_catalog = "lib_catalog.php"; $acc_info = "account_info.php"; 
          $login = "login.php"; $register = "register.php"; $developers = "developers.php";
          $contactus = "contact_us.php"; 
        ?>
        <li <?php if(isset($active_page)) {if($active_page==="lib_catalog") echo 'class="active"';} ?>>
          <a href = <?php if(isset($active_page)) {if($active_page==="home") {echo $page.$lib_catalog;}else {echo $lib_catalog;}}?>>Library Catalog</a>
        </li>
        <li class="hide" <?php if(isset($active_page)) {if($active_page==="acc_info") echo 'class="active"';} ?>>
          <a href = <?php if(isset($active_page)) {if($active_page==="home") {echo $page.$acc_info;}else {echo $acc_info;}}?>>Account Info</a>
        </li>
        <li <?php if(isset($active_page)) {if($active_page==="login") echo 'class="active"';} ?>>
          <a id="no-login" data-toggle="modal" data-target="#loginModal"
          href = <?php if(isset($active_page)) {if($active_page==="home") {echo $page.$login;}else {echo $login;}}?>>Login</a>
        </li>
        <li <?php if(isset($active_page)) {if($active_page==="register") echo 'class="active"';} ?>>
          <a id="no-register" data-toggle="modal" data-target="#registerModal"
          href = <?php if(isset($active_page)) {if($active_page==="home") {echo $page.$register;} else {echo $register;}}?>>Register</a>
        </li>
        <li <?php if(isset($active_page)) {if($active_page==="developers") echo 'class="active"';} ?>>
          <a href = <?php if(isset($active_page)) {if($active_page==="home") {echo $page.$developers;}else {echo $developers;}}?>>Developers</a>
        </li>
        <li <?php if(isset($active_page)) {if($active_page==="contactus") echo 'class="active"';} ?>>
          <a href = <?php if(isset($active_page)) {if($active_page==="home") {echo $page.$contactus;}else {echo $contactus;}}?>>Contact Us</a>
        </li>
      </ul>
    </div>
  </div>  
</nav>