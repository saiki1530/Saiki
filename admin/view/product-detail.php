

<?php
session_start();

// checking session is valid for not 
if (strlen($_SESSION['id'] == 0)) {
    header('location:../logout.php');
} else {

?>

<?php include "header.php";?>
<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
            <a href="manage_product.php" ><img class="main-logo" src="img/logo/logo.png" alt="" width="150px" style="margin-top: -40px; margin-left:-50px;"/></a>
            <strong><img src="img/logo/logosn.png" alt="" style="margin-bottom: 30px;"/></strong>
            </div>
            <div class="nalika-profile " style="margin-top: -40px;">
                <div class="profile-dtl">
                    <a href="#"><img src="img/notification/4.png" alt="" /></a>
                    <h2><?=$_SESSION['login']?></h2>
                </div>
                <div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- menu trái -->
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="manage_product.php">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Ecommerce</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">


                                <li><a title="Product List" href="product-list.php"><span class="mini-sub-pro">Product
                                            List</span></a></li>
                                <li><a title="Product Edit" href="product-edit.php"><span class="mini-sub-pro">Product
                                            Edit</span></a></li>
                                <li><a title="Product Detail" href="product-detail.php"><span
                                            class="mini-sub-pro">Product Detail</span></a></li>
                                <li><a title="Product Cart" href="product-cart.php"><span class="mini-sub-pro">Product
                                            Cart</span></a></li>
                                <li><a title="Product Payment" href="product-payment.php"><span
                                            class="mini-sub-pro">Product Payment</span></a></li>


                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i
                                    class="icon nalika-mail icon-wrap"></i> <span
                                    class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="#"><span class="mini-sub-pro">Inbox</span></a>
                                </li>
                                <li><a title="View Mail" href="#"><span class="mini-sub-pro">View
                                            Mail</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i
                                    class="icon nalika-pie-chart icon-wrap"></i> <span
                                    class="mini-click-non">Miscellaneous</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="file-manager.php"><span class="mini-sub-pro">File
                                            Manager</span></a></li>
                                <li><a title="Blog" href="blog.php"><span class="mini-sub-pro">Blog</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i
                                    class="icon nalika-diamond icon-wrap"></i> <span
                                    class="mini-click-non">Interface</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="google-map.php"><span class="mini-sub-pro">Google
                                            Map</span></a></li>

                            </ul>
                        </li>
                        <li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i
                                    class="icon nalika-bar-chart icon-wrap"></i> <span
                                    class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="#"><span class="mini-sub-pro">Bar
                                            Charts</span></a></li>

                            </ul>
                        </li>

                        <!-- <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i
                                    class="icon nalika-new-file icon-wrap"></i> <span
                                    class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Login" href="login.php"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.php"><span
                                            class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.php"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.php"><span
                                            class="mini-sub-pro">Password Recovery</span></a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                    <a href="manage_product.php"><img class="main-logo" src="img/logo/logo.png" width="50px" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail nalika-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-folder" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="icon nalika-user" aria-hidden="true"></i>
															<span class="admin-name"><?php echo $_SESSION['login']?> </span>
															<i class="icon nalika-down-arrow nalika-angle-dw"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.php"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="lock.php"><span class="icon nalika-diamond author-log-ic"></span> Lock</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li>
                                                        <li><a href="login.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-chat"></i> Latest News</h2>
                                                                        <p>You have 10 New News.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/4.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/1.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/2.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/3.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/4.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/1.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/2.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/1.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/2.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/3.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Projects" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-happiness"></i> Recent Activity</h2>
                                                                        <p> You have 20 Recent Activity.</p>
                                                                    </div>
                                                                    <div class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>New User Registered</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">1 hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>New Order Received</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">2 hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>New Order Received</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">3 hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>New Order Received</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">4 hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>New User Registered</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">5 hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>New Order</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">6 hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>New User</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">7 hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>New Order</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">9 hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-gear"></i> Settings Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                            <label class="onoffswitch-label" for="example">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Disable Chat</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                            <label class="onoffswitch-label" for="example3">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Enable history</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                            <label class="onoffswitch-label" for="example4">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show charts</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                            <label class="onoffswitch-label" for="example7">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Update everyday</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                            <label class="onoffswitch-label" for="example2">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Global search</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                            <label class="onoffswitch-label" for="example6">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Offline users</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                            <label class="onoffswitch-label" for="example5">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="manage_product.php">Dashboard v.1</a></li>
                                                <li><a href="manage_product-1.php">Dashboard v.2</a></li>
                                                <li><a href="manage_product-3.php">Dashboard v.3</a></li>
                                                <li><a href="product-list.php">Product List</a></li>
                                                <li><a href="product-edit.php">Product Edit</a></li>
                                                <li><a href="product-detail.php">Product Detail</a></li>
                                                <li><a href="product-cart.php">Product Cart</a></li>
                                                <li><a href="product-payment.php">Product Payment</a></li>
                                                <li><a href="analytics.php">Analytics</a></li>
                                                <li><a href="widgets.php">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.php">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.php">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.php">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="file-manager.php">File Manager</a></li>
                                                <li><a href="contacts.php">Contacts Client</a></li>
                                                <li><a href="projects.php">Project</a></li>
                                                <li><a href="project-details.php">Project Details</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="blog-details.php">Blog Details</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="500.php">500 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.php">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.php">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.php">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.php">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.php">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.php">Tree View</a>
                                                </li>
                                                <li><a href="preloader.php">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.php">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.php">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.php">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.php">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.php">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.php">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.php">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.php">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.php">Static Table</a>
                                                </li>
                                                <li><a href="data-table.php">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.php">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.php">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.php">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.php">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.php">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.php">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.php">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.php">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.php">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.php">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.php">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.php">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.php">Login</a>
                                                </li>
                                                <li><a href="register.php">Register</a>
                                                </li>
                                                <li><a href="lock.php">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.php">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Product Details</h2>
												<p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-t-0 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<div class="single-product-pr">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
									<div id="myTabContent1" class="tab-content">
										<div class="product-tab-list tab-pane fade active in" id="single-tab1">
											<img src="img/product/bg-1.jpg" alt="" />
										</div>
										<div class="product-tab-list tab-pane fade" id="single-tab2">
											<img src="img/product/bg-2.jpg" alt="" />
										</div>
										<div class="product-tab-list tab-pane fade" id="single-tab3">
											<img src="img/product/bg-3.jpg" alt="" />
										</div>
										<div class="product-tab-list tab-pane fade" id="single-tab4">
											<img src="img/product/bg-1.jpg" alt="" />
										</div>
										<div class="product-tab-list tab-pane fade" id="single-tab5">
											<img src="img/product/bg-2.jpg" alt="" />
										</div>
									</div>
									<ul id="single-product-tab">
										<li class="active">
											<a href="#single-tab1"><img src="img/product/1.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#single-tab2"><img src="img/product/2.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#single-tab3"><img src="img/product/3.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#single-tab4"><img src="img/product/1.jpg" alt="" /></a>
										</li>
									</ul>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
									<div class="single-product-details res-pro-tb">
										<h1>Product ITEM TITLE</h1>
										<span class="single-pro-star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										<div class="single-pro-price">
											<span class="single-regular">$150.00</span><span class="single-old"><del>$20.00</del></span>
										</div>
										<div class="single-pro-size">
											<h6>Size</h6>
											<span>S</span> <span>M</span> <span>L</span> <span>XL</span> <span>XXL</span>
										</div>
										<div class="color-quality-pro">
											<div class="color-quality-details">
												<h5>Color</h5>
												<span class="red"></span> <span class="green"></span> <span class="yellow"></span> <span class="black"></span> <span class="white"></span>
											</div>
											<div class="color-quality">
												<h4>Quality</h4>
												<div class="quantity">
													<div class="pro-quantity-changer">
														<input type="text" value="1" />
													</div>
												</div>
											</div>
											<div class="clear"></div>
											<div class="single-pro-button">
												<div class="pro-button">
													<a href="#">ADD TO Cart</a>
												</div>
												<div class="pro-viwer">
													<a href="#"><i class="fa fa-heart"></i></a>
													<a href="#"><i class="fa fa-eye"></i></a>
												</div>
											</div>
											<div class="clear"></div>
											<div class="single-social-area">
												<h3>share this on</h3>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
												<a href="#"><i class="fa fa-feed"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
											</div>
										</div>
										<div class="single-pro-cn">
											<h3>OVERVIEW</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- Single pro tab End-->
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<div class="single-tb-pr">
                    		<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<ul id="myTab" class="tab-review-design">
										<li class="active"><a href="#description">description</a></li>
										<li><a href="#reviews"><span><i class="fa fa-star"></i><i class="fa fa-star"></i></span> reviews (1) <span><i class="fa fa-star"></i><i class="fa fa-star"></i></span></a></li>
										<li><a href="#INFORMATION">INFORMATION</a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div class="product-tab-list product-details-ect tab-pane fade active in" id="description">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
															ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
															mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
															beatae vitae dicta sunt explicabo.</p>
														<p class="pro-b-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labo nisi ut aliquip ex
															ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut labore et dolore magna aliqua. Ut enim ad , quis nostrud exercitation ullamco
															laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="product-tab-list tab-pane fade" id="reviews">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">
														<div class="review-content-section">
															<div class="card-block">
																<div class="text-muted f-w-400">
																	<p>No reviews yet.</p>
																</div>
																<div class="m-t-10">
																	<div class="txt-primary f-18 f-w-600">
																		<p>Your Rating</p>
																	</div>
																	<div class="stars stars-example-css detail-stars">
																		<div class="review-rating">
																			<fieldset class="rating">
																				<input type="radio" id="star5" name="rating" value="5">
																				<label class="full" for="star5"></label>
																				<input type="radio" id="star4half" name="rating" value="4 and a half">
																				<label class="half" for="star4half"></label>
																				<input type="radio" id="star4" name="rating" value="4">
																				<label class="full" for="star4"></label>
																				<input type="radio" id="star3half" name="rating" value="3 and a half">
																				<label class="half" for="star3half"></label>
																				<input type="radio" id="star3" name="rating" value="3">
																				<label class="full" for="star3"></label>
																				<input type="radio" id="star2half" name="rating" value="2 and a half">
																				<label class="half" for="star2half"></label>
																				<input type="radio" id="star2" name="rating" value="2">
																				<label class="full" for="star2"></label>
																				<input type="radio" id="star1half" name="rating" value="1 and a half">
																				<label class="half" for="star1half"></label>
																				<input type="radio" id="star1" name="rating" value="1">
																				<label class="full" for="star1"></label>
																				<input type="radio" id="starhalf" name="rating" value="half">
																				<label class="half" for="starhalf"></label>
																			</fieldset>
																		</div>
																		<div class="clear"></div>
																	</div>
																</div>
																<div class="input-group mg-b-15 mg-t-15">
																	<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
																	<input type="text" class="form-control" placeholder="User Name">
																</div>
																<div class="input-group mg-b-15">
																	<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
																	<input type="text" class="form-control" placeholder="Last Name">
																</div>
																<div class="input-group mg-b-15">
																	<span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
																	<input type="text" class="form-control" placeholder="Email">
																</div>
																<div class="form-group review-pro-edt mg-b-0-pr">
																	<button type="submit" class="btn btn-primary waves-effect waves-light">Submit
																		</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-tab-list tab-pane fade" id="INFORMATION">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
															ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
															mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
															beatae vitae dicta sunt explicabo.</p>
														<p class="pro-b-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labo nisi ut aliquip ex
															ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut labore et dolore magna aliqua. Ut enim ad , quis nostrud exercitation ullamco
															laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        

</body>
<?php include "footer.php";?>
    <script>
        $(function() {
            $('select.styled').customSelect();
        });
    </script>

    </html>
<?php } ?>
