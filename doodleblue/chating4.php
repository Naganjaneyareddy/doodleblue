<?PHP @include_once "header.php"; ?>
<div class="chat-wrapper pt-5">
    <div class="container border">
	    <div class="row">
	        <div class="col-md-4 bg-white border-right">
	            <div class=" row border-bottom padding-sm">
	                <div class="input-group p-3">
	                    <input type="text" class="form-control" placeholder="Search" aria-label="username" aria-describedby="button-addon2">
	                    <div class="input-group-append">
	                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
	                    </div>
	                </div>
	            </div>
	            <ul class="friend-list mt-3">
	                <li class="active bounceInDown">
	                    <a href="chating4.php" class="clearfix">
	                        <img src="images/avatar-s-5.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact D</strong>
	                        </div>
	                        <div class="last-message text-muted">Hello, Are you there?</div>
	                        <small class="time text-muted">Just now</small>
	                        <small class="chat-alert label label-danger">1</small>
	                    </a>
	                </li>
	                <li>
	                    <a href="chating1.php" class="clearfix">
	                        <img src="images/avatar-s-1.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact A</strong>
	                        </div>
	                        <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
	                        <small class="time text-muted">5 mins ago</small>
	                        <small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
	                    </a>
	                </li>
	                <li>
	                    <a href="chating2.php" class="clearfix">
	                        <img src="images/avatar-s-2.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact B</strong>
	                        </div>
	                        <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
	                        <small class="time text-muted">Yesterday</small>
	                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
	                    </a>
	                </li>
	                <li>
	                    <a href="chating3.php" class="clearfix">
	                        <img src="images/avatar-s-3.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact C</strong>
	                        </div>
	                        <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
	                        <small class="time text-muted">Yesterday</small>
	                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
	                    </a>
	                </li>
	                <li>
	                    <a href="chating5.php" class="clearfix">
	                        <img src="images/avatar-s-6.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact E</strong>
	                        </div>
	                        <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
	                        <small class="time text-muted">Yesterday</small>
	                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
	                    </a>
	                </li>
	                <li>
	                    <a href="#" class="clearfix">
	                        <img src="images/avatar-s-7.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact F</strong>
	                        </div>
	                        <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
	                        <small class="time text-muted">Yesterday</small>
	                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
	                    </a>
	                </li>
	                <li>
	                    <a href="#" class="clearfix">
	                        <img src="images/avatar-s-8.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact G</strong>
	                        </div>
	                        <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
	                        <small class="time text-muted">Yesterday</small>
	                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
	                    </a>
	                </li>
	                <li>
	                    <a href="#" class="clearfix">
	                        <img src="images/avatar-s-9.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact H</strong>
	                        </div>
	                        <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
	                        <small class="time text-muted">5 mins ago</small>
	                        <small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
	                    </a>
	                </li>
	                <li>
	                    <a href="#" class="clearfix">
	                        <img src="images/avatar-s-10.png" alt="" class="img-circle">
	                        <div class="friend-name">	
	                            <strong>Contact I</strong>
	                        </div>
	                        <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
	                        <small class="time text-muted">5 mins ago</small>
	                        <small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
	                    </a>
	                </li>
	            </ul>
	        </div>
	        <div class="col-md-8 bg-white pt-3">
	            <div class="chat-message">
	                <ul class="chat">
	                    <li class="left clearfix">
	                        <span class="chat-img pull-left">
	                        <img src="images/avatar-s-4.png" alt="User Avatar">
	                        </span>
	                        <div class="chat-body clearfix">
	                            <div class="header">
	                                <strong class="primary-font">Sara</strong>
	                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	                            </p>
	                        </div>
	                    </li>
	                    <li class="right clearfix">
	                        <span class="chat-img pull-right">
	                        <img src="images/avatar-s-5.png" alt="User Avatar">
	                        </span>
	                        <div class="chat-body clearfix">
	                            <div class="header">
	                                <strong class="primary-font">Contact D</strong>
	                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
	                            </p>
	                        </div>
	                    </li>
	                    <li class="left clearfix">
	                        <span class="chat-img pull-left">
	                        <img src="images/avatar-s-4.png" alt="User Avatar">
	                        </span>
	                        <div class="chat-body clearfix">
	                            <div class="header">
	                                <strong class="primary-font">Sarah</strong>
	                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	                            </p>
	                        </div>
	                    </li>
	                    <li class="right clearfix">
	                        <span class="chat-img pull-right">
	                        <img src="images/avatar-s-5.png" alt="User Avatar">
	                        </span>
	                        <div class="chat-body clearfix">
	                            <div class="header">
	                                <strong class="primary-font">Contact D</strong>
	                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
	                            </p>
	                        </div>
	                    </li>
	                    <li class="left clearfix">
	                        <span class="chat-img pull-left">
	                        <img src="images/avatar-s-4.png" alt="User Avatar">
	                        </span>
	                        <div class="chat-body clearfix">
	                            <div class="header">
	                                <strong class="primary-font">Sarah</strong>
	                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	                            </p>
	                        </div>
	                    </li>
	                    <li class="right clearfix">
	                        <span class="chat-img pull-right">
	                        <img src="images/avatar-s-5.png" alt="User Avatar">
	                        </span>
	                        <div class="chat-body clearfix">
	                            <div class="header">
	                                <strong class="primary-font">Contact D</strong>
	                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
	                            </p>
	                        </div>
	                    </li>
	                    <li class="right clearfix">
	                        <span class="chat-img pull-right">
	                        <img src="images/avatar-s-5.png" alt="User Avatar">
	                        </span>
	                        <div class="chat-body clearfix">
	                            <div class="header">
	                                <strong class="primary-font">Contact D</strong>
	                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
	                            </div>
	                            <p>
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
	                            </p>
	                        </div>
	                    </li>
	                </ul>
	            </div>
	            <div class="chat-box bg-white">
	                <div class="input-group">
	                    <input class="form-control border no-shadow no-rounded" placeholder="Type your message here">
	                    <span class="input-group-btn">
	                    <button class="btn btn-success no-rounded" type="button">Send</button>
	                    </span>
	                </div>
	                <!-- /input-group -->	
	            </div>
	        </div>
	    </div>
	</div>
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<?PHP @include_once "footer.php"; ?>