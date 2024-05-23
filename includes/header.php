

<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >

                    <img src="assets/img/logo.png" />
                </a>

            </div>
<?php if($_SESSION['login'])
{
?> 

            <div class="right-div">
                <a href="logout.php" class="btn btn-default btn-lg "><span class="glyphicon glyphicon-off"></span>
                    LOG ME OUT
                </a>
            </div>

            <div class="right-div">

                <!-- Trigger the modal with a button -->
                <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-envelope"></span>
                COMPOSE<b style="color: red;" class="glyphicon glyphicon-pencil"></b>
               </a>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CHAT ROOM</h4>
                      </div>
                      <div class="modal-body">
                        <p>hello how can we help you today</p>
                      <form action="sendmessage.php" method="POST">
                          <div class="form-group">
                              <label for="comment">Write a Message:</label>
                              <textarea class="form-control" type="text" name="message" rows="5" id="comment"></textarea>
                            </div>
                        <button type="submit" name="submit" class="btn btn-success btn-lg" style="width: 20%;">CONTINUE</button>
                      </form>
                            

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" >Close</button>
                      </div>
                    </div>
                  

                  </div>
                </div>
                  <!----------------------ENDIND OF MODEL------------------------->
            </div>

            <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>    
<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>

                               <li>

                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Books <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="issued-books.php">Isued Books</a></li>
                                </ul>
                            </li>
                            

                             <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My Profile</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                          
      <li><a href="index.php">HOME</a></li>
      <li><a href="signup.php">SIGN UP</a></li>
    
                         
                            <li><a href="adminlogin.php">ADMIN DASHBOARD</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php } ?>