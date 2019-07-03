<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">| ReAlign Pilates |</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav navlist">
        <li class="navlistitem<?php getActive('index.html')?>"><a href="#">Home</a> </li>
        <li class="navlistitem<?php getActive('about.html')?>"><a href="about.html">About Pilates</a> </li>
		<li class="navlistitem<?php getActive('prices.html')?>"><a href="prices.html">Prices &amp; Schedule</a> </li>
		 <li class="navlistitem<?php getActive('aboutme.html')?>"><a href="aboutme.html">About Me</a> </li>
        <li class="navlistitem<?php getActive('contact.html')?>"><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<?php

function getActive ($page){
    if(basename($_SERVER["SCRIPT_FILENAME"])==$page) {
        echo " active";
    }
}

?>