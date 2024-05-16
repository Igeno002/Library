<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">

                <a href="logout.php" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-off"></span> 
                LOG ME OUT
                </a>
            </div>



<div class="right-div">
                
           
                <!-- Trigger the modal with a button -->
                <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-envelope"></span>
                CHATROOM<b style="color:red;">(2)</b>
               </a>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">WELCOME IN OUR CHAT ROOM</h4>
                      </div>
                      <div class="modal-body">
                      
                        <div class="well">
                              <table class="table ">
                                  <tr>
                                    <td rowspan="0" class="col-md-2">
                                        <img src="assets/img/avatar.png" alt="Avatar" class="avatar" style="width: 100%; border-radius: 50%;">
                                    </td>
                                    <td><b>ITANGISHAKA IGENO ISAAC</b></td>
                                  </tr>

                                  <tr>
                                    <td>Hy I want your Help are ready<b style="font-size: 120%; color: green;">(3)</b>
                                    <!-- Trigger the modal with a button -->
                                    <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal1">
                                    Reply</b>
                                   </a>
                                    </td>
                                  </tr>
                              </table>
                               <hr style="border-color: black;"> 




                                <table class="table ">
                                  <tr>
                                    <td rowspan="0" class="col-md-2">
                                        <img src="assets/img/1.png" alt="Avatar" class="avatar" style="width: 100%; border-radius: 50%;">
                                    </td>
                                    <td><b>UWISEZERENO Liliane</b></td>
                                  </tr>

                                  <tr>
                                    <td>Hy I want your Help are ready<b style="font-size: 120%; color: green;">(1)</b>
                                    <!-- Trigger the modal with a button -->
                                    <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal1">
                                    Reply</b>
                                   </a>
                                    </td>
                                  </tr>
                              </table>
                               <hr style="border-color: black;"> 






                                   <!------------STARTING OF MODEL -------------->
                                    <!-- Modal -->



                <div id="myModal1" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content col-md-11" >
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>ITANGISHAKA IGENO Isaac</b></h4><hr>
                        <p style="background-color: blueviolet; color:white;margin-right: 50%;">Hy I want your Help are ready</p>
                        <p style="margin-left: 40%; color: red; background-color: black;">Hy I want your Help are ready</p>
                      </div>
                      <div class="modal-body">
                        
                      <form>
                          <div class="form-group">
                              <label for="comment">Write a Message:</label>
                              <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>

                          <button type="button" class="btn btn-success btn-lg" style="width: 20%;">Send</button>
                      </form>
                            

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  

                  </div>
                </div>
          <!-------------ENDING OF MODEL---------------->


                              
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

            </div>

                <!--------------------------end of modal--------------------->

            </div>



        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                           
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Categories <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">Add Category</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.php">Manage Categories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Authors <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.php">Add Author</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-authors.php">Manage Authors</a></li>
                                </ul>
                            </li>
 <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Books <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">Add Book</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">Manage Books</a></li>
                                </ul>
                            </li>

                           <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Issue Books <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">Issue New Book</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-issued-books.php">Manage Issued Books</a></li>
                                </ul>
                            </li>



                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">STUDENT <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="reg-students.php">REGISTED STUDENT|USER </a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">MANAGE USER <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-admin.php">ADD USER</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="user-profile.php">USER PROFILE</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">CHANGE PASSWORD</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>