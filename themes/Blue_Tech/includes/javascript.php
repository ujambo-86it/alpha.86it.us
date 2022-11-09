<?php
#---------------------------------------------------------------------------------------#
# THEME SYSTEM FILE                                                                     #
#---------------------------------------------------------------------------------------#
# CMS INFO                                                                              #
# PHP-Nuke Copyright (c) 2006 by Francisco Burzi phpnuke.org                            #
# Nuke Evolution Xtreme (c) 2010 : Enhanced PHP-Nuke Web Portal System                  #
# PHP-Nuke Titanium (c) 2021     : Enhanced PHP-Nuke Web Portal System                  #
#---------------------------------------------------------------------------------------#
#                                                                                       #
# Special Honorable Mentions                                                            #
#---------------------------------------------------------------------------------------#
# killigan                                                                              # 
# -[04/17/2010] Updated Nuke Sentinel to version 2.6.01                                 # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#
# SgtLegend                                                                             #   
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
# -[04/18/2010] Updated the installer/upgrade files and display                         #
# -[04/19/2010] Improved load time for global variables                                 #
# -[04/21/2010] Upgraded Swift mail to version 4.0.6                                    #
# -[04/21/2010] Upgraded HTML Purifier to version 4                                     # 
#---------------------------------------------------------------------------------------#
# Technocrat                                                                            # 
# -[04/22/2010] Added speed tweaks to the cache and PHP version compare                 #  
#---------------------------------------------------------------------------------------#
# Eyecu                                                                                 # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#
# Wolfstar                                                                              # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) 
exit('Access Denied');
global $domain;
?>
<!-- 80sPXL W00 Thin V1 Font Info CSS -->
<link href="//db.onlinewebfonts.com/c/783dd6c2d08bdc67012a0eec73fc1702?family=80sPXLW00-Thin" rel="stylesheet" type="text/css"//>

<!-- our project just needs Font Awesome Solid + Brands -->
<link href="/assets/fontawesome-free-6.2.0-web/css/all.css" rel="stylesheet">
<link href="/assets/fontawesome-free-6.2.0-web/css/v5-font-face.css" rel="stylesheet">

<link rel="stylesheet" href="assets/bootstrap-icons-1.9.1/bootstrap-icons.css"/>

<link rel="stylesheet" href="assets/bootstrap-3.4.1/css/bootstrap.min.css"/> 

<script src="assets/jquery/jquery.js"></script>

<script src="assets/bootstrap-3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="includes/ajax/libs/animate.min.css"/>

<!-- Modal -->
<div class="modal fade" id="myCopyRight" tabindex="-1" role="dialog" aria-labelledby="CenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content modal-popout-bg">
      
      <div class="modal-header">

        <h1 class="modal-title" id="CenterTitle">
      <font size="2" class="display-1" color="#000000"><i class="bi bi-arrow-right-square-fill"></i> Theme Name: <?=THEME?>
                 <br /><i class="bi bi-arrow-right-square-fill"></i> Markup Language(s): XHTML, HTML5, HTML4
                 <br /><i class="bi bi-arrow-right-square-fill"></i> Copyright: <i class="far fa-copyright"></i> Brandon Maintenance Management
                 <br /><i class="bi bi-arrow-right-square-fill"></i> Creation Date: <?=THEME_DATE?> 
                 <br /><i class="bi bi-arrow-right-square-fill"></i> Author: <?=THEME_AUTHOR?>
                 <br /><i class="bi bi-arrow-right-square-fill"></i> License: GNU/GPL
                 <br /><i class="bi bi-arrow-right-square-fill"></i> Core Support: PHP-Nuke Titanium v3.0.0b <> v4.x.x
        </font>
        </h1>
      </div>
  </font>

      <div class="modal-body">

  <h1 class="display-1"><font size="4" color="black"><i class="bi bi-sliders"></i> Theme Overview</font></h1> 

  <div class="lead">
  <font size="2" color="black"><strong>
  This PHP-Nuke Titanium theme is using Bootstrap v3.4.1 and XHTML. By default it has Video Background support and 2 java scrolling marguee's in the header.   
  </div></font></strong>

  <div class="card-header">
  <font color="#000000"><strong>Features</strong></font>
  </div>
  <div class="card-body">
  <h4 class="card-title">
  <font color="#000000">
  <hr />
  <i class="bi bi-pen"></i> Blog Signature Mod Support
  <br /><i class="devicon-java-plain-wordmark colored"></i> Javascript
  <br /><i class="devicon-javascript-plain colored"></i> Advanced Resolution Checking
  <br /><i class="devicon-php-plain colored"></i> Fluid Resizeable Layout
  <br /><i class="devicon-html5-plain colored"></i> Video Background Support
  <br /><i class="devicon-bootstrap-plain-wordmark colored"></i> BootStrap v3.4.1 Support
  <br /><i class="devicon-devicon-plain-wordmark"></i> Devicon v2.10.1 Support
  <br /><i class="devicon-css3-plain colored"></i> 2 Scrolling Marquees
  <br /><i class="devicon-php-plain colored"></i> Network Advertising and Personal Advertising Support
  <br /><i class="devicon-facebook-plain colored"></i> Titanium SDK v5 (adds facebook Support)
  <br /><i class="bi bi-display"></i> Current Theme Resoltiuon: <?=$_COOKIE["theme_resolution"]?> 
  <hr />
  </h5>
  </font>
  </div>


  </div>
  
  <div class="modal-footer">
  <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
  </div>
    </div>
  </div>
</div>
<?

?>
