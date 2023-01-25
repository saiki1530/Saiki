
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


                                <li><a title="Product List" href="product-list.php"><span
                                            class="mini-sub-pro">Product
                                            List</span></a></li>
                                <li><a title="Product Edit" href="product-edit.php"><span
                                            class="mini-sub-pro">Product
                                            Edit</span></a></li>
                                <li><a title="Product Detail" href="product-detail.php"><span
                                            class="mini-sub-pro">Product Detail</span></a></li>
                                <li><a title="Product Cart" href="product-cart.php"><span
                                            class="mini-sub-pro">Product
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
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="icon nalika-menu-task"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
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
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle"><i
                                                            class="icon nalika-mail" aria-hidden="true"></i><span
                                                            class="indicator-ms"></span></a>
                                                    <div role="menu"
                                                        class="author-message-top dropdown-menu animated zoomIn">
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
                                                                        <p>Please done this project as soon
                                                                            possible.
                                                                        </p>
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
                                                                        <p>Please done this project as soon
                                                                            possible.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"><i
                                                            class="icon nalika-alarm" aria-hidden="true"></i><span
                                                            class="indicator-nt"></span></a>
                                                    <div role="menu"
                                                        class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-tick"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16
                                                                            Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon
                                                                            possible.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-cloud"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16
                                                                            Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon
                                                                            possible.
                                                                        </p>
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
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="icon nalika-user"></i>
                                                        <span class="admin-name">Quang Sang</span>
                                                        <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.php"><span
                                                                    class="icon nalika-home author-log-ic"></span>
                                                                Register</a>
                                                        </li>
                                                        <li><a href="#"><span
                                                                    class="icon nalika-user author-log-ic"></span>
                                                                My
                                                                Profile</a>
                                                        </li>
                                                        <li><a href="lock.php"><span
                                                                    class="icon nalika-diamond author-log-ic"></span>
                                                                Lock</a>
                                                        </li>
                                                        <li><a href="#"><span
                                                                    class="icon nalika-settings author-log-ic"></span>
                                                                Settings</a>
                                                        </li>
                                                        <li><a href="login.php"><span
                                                                    class="icon nalika-unlocked author-log-ic"></span>
                                                                Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#"
                                                        data-toggle="dropdown" role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"><i
                                                            class="icon nalika-menu-task"></i></a>

                                                    <div role="menu"
                                                        class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab"
                                                                    href="#Notes">News</a>
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
                                                                        <h2><i class="icon nalika-chat"></i> Latest
                                                                            News
                                                                        </h2>
                                                                        <p>You have 10 New News.</p>
                                                                    </div>
                                                                    <div
                                                                        class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/4.jpg"
                                                                                                alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using
                                                                                                Lorem
                                                                                                Ipsum is that it has
                                                                                                a
                                                                                                more-or-less normal.
                                                                                            </p>
                                                                                            <span>Yesterday 2:45
                                                                                                pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/1.jpg"
                                                                                                alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using
                                                                                                Lorem
                                                                                                Ipsum is that it has
                                                                                                a
                                                                                                more-or-less normal.
                                                                                            </p>
                                                                                            <span>Yesterday 2:45
                                                                                                pm</span>
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
                                                                        <h2><i class="icon nalika-happiness"></i>
                                                                            Recent
                                                                            Activity</h2>
                                                                        <p> You have 20 Recent Activity.</p>
                                                                    </div>
                                                                    <div
                                                                        class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div
                                                                                            class="projects-st-heading">
                                                                                            <h2>New User Registered
                                                                                            </h2>
                                                                                            <p> The point of using
                                                                                                Lorem
                                                                                                Ipsum is that it has
                                                                                                a
                                                                                                more or less normal.
                                                                                            </p>
                                                                                            <span
                                                                                                class="project-st-time">1
                                                                                                hours ago</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div
                                                                                            class="projects-st-heading">
                                                                                            <h2>New Order Received
                                                                                            </h2>
                                                                                            <p> The point of using
                                                                                                Lorem
                                                                                                Ipsum is that it has
                                                                                                a
                                                                                                more or less normal.
                                                                                            </p>
                                                                                            <span
                                                                                                class="project-st-time">2
                                                                                                hours ago</span>
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
                                                                        <h2><i class="icon nalika-gear"></i>
                                                                            Settings
                                                                            Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.
                                                                        </p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
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
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example3">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example3">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
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
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example4">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example4">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
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
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example7">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example7">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
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
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example2">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example2">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
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
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example6">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example6">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
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
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example5">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example5">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
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
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="manage_product.php">Dashboard</a></li>

                                                <li><a href="product-list.php">Product List</a></li>
                                                <li><a href="product-edit.php">Product Edit</a></li>
                                                <li><a href="product-detail.php">Product Detail</a></li>
                                                <li><a href="product-cart.php">Product Cart</a></li>
                                                <li><a href="product-payment.php">Product Payment</a></li>


                                            </ul>
                                        </li>

                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous
                                                <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="file-manager.php">File Manager</a></li>

                                                <li><a href="blog.php">Blog</a></li>

                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob"
                                                href="#">Interface
                                                <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.php">Google Map</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="#">Bar Charts</a>
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
                                                <h2>Dashboard One</h2>
                                                <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left"
                                                title="Download Report" class="btn"><i
                                                    class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <div class="preloader-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mt-b-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute">
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                    <div class="tsperloader"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mt-b-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute01">
                                    <div class="tsperloader1" id="tsperloader1_four"></div>
                                    <div class="tsperloader1" id="tsperloader1_three"></div>
                                    <div class="tsperloader1" id="tsperloader1_two"></div>
                                    <div class="tsperloader1" id="tsperloader1_one"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mt-b-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute02">
                                    <div class="tsperloader2" id="tsperloader2_four"></div>
                                    <div class="tsperloader2" id="tsperloader2_three"></div>
                                    <div class="tsperloader2" id="tsperloader2_two"></div>
                                    <div class="tsperloader2" id="tsperloader2_one"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute03">
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                    <div class="tsperloader3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute05">
                                    <div class="tsperloader5" id="tsperloader5_one"></div>
                                    <div class="tsperloader5" id="tsperloader5_two"></div>
                                    <div class="tsperloader5" id="tsperloader5_three"></div>
                                    <div class="tsperloader5" id="tsperloader5_four"></div>
                                    <div class="tsperloader5" id="tsperloader5_five"></div>
                                    <div class="tsperloader5" id="tsperloader5_six"></div>
                                    <div class="tsperloader5" id="tsperloader5_seven"></div>
                                    <div class="tsperloader5" id="tsperloader5_eight"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute06">
                                    <div class="tsperloader6" id="tsperloader6_one"></div>
                                    <div class="tsperloader6" id="tsperloader6_two"></div>
                                    <div class="tsperloader6" id="tsperloader6_three"></div>
                                    <div class="tsperloader6" id="tsperloader6_four"></div>
                                    <div class="tsperloader6" id="tsperloader6_five"></div>
                                    <div class="tsperloader6" id="tsperloader6_six"></div>
                                    <div class="tsperloader6" id="tsperloader6_seven"></div>
                                    <div class="tsperloader6" id="tsperloader6_eight"></div>
                                    <div class="tsperloader6" id="tsperloader6_nine"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute07">
                                    <div class="tsperloader7" id="tsperloader7_one"></div>
                                    <div class="tsperloader7" id="tsperloader7_two" style="left:20px;"></div>
                                    <div class="tsperloader7" id="tsperloader7_three" style="left:40px;"></div>
                                    <div class="tsperloader7" id="tsperloader7_four" style="left:60px;"></div>
                                    <div class="tsperloader7" id="tsperloader7_five" style="left:80px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute08">
                                    <div class="tsperloader8" id="tsperloader8_one"></div>
                                    <div class="tsperloader8" id="tsperloader8_two"></div>
                                    <div class="tsperloader8" id="tsperloader8_three"></div>
                                    <div class="tsperloader8" id="tsperloader8_four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute09">
                                    <div class="tsperloader9" id="tsperloader9_one"></div>
                                    <div class="tsperloader9" id="tsperloader9_two"></div>
                                    <div class="tsperloader9" id="tsperloader9_three"></div>
                                    <div class="tsperloader9" id="tsperloader9_four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute10">
                                    <div id="ts-preloader-absolute-one01">
                                        <div class="tsperloader10-one"></div>
                                        <div class="tsperloader10-one"></div>
                                        <div class="tsperloader10-one"></div>
                                        <div class="tsperloader10-one"></div>
                                        <div class="tsperloader10-one"></div>
                                        <div class="tsperloader10-one"></div>
                                        <div class="tsperloader10-one"></div>
                                        <div class="tsperloader10-one"></div>
                                        <div class="tsperloader10-one"></div>
                                    </div>
                                    <div id="ts-preloader-absolute-two02">
                                        <div class="tsperloader10-two"></div>
                                        <div class="tsperloader10-two"></div>
                                        <div class="tsperloader10-two"></div>
                                        <div class="tsperloader10-two"></div>
                                        <div class="tsperloader10-two"></div>
                                        <div class="tsperloader10-two"></div>
                                        <div class="tsperloader10-two"></div>
                                        <div class="tsperloader10-two"></div>
                                        <div class="tsperloader10-two"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute11">
                                    <div class="tsperloader11"></div>
                                    <div class="tsperloader11"></div>
                                    <div class="tsperloader11"></div>
                                    <div class="tsperloader11"></div>
                                    <div class="tsperloader11"></div>
                                    <div class="tsperloader11"></div>
                                    <div class="tsperloader11"></div>
                                    <div class="tsperloader11"></div>
                                    <div class="tsperloader11"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute12">
                                    <div class="tsperloader12" id="first_tsperloader12"></div>
                                    <div class="tsperloader12" id="second_tsperloader12" style="float:right;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute14">
                                    <div class="tsperloader14" id="tsperloader14_one"></div>
                                    <div class="tsperloader14" id="tsperloader14_two"></div>
                                    <div class="tsperloader14" id="tsperloader14_three"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute16">
                                    <div class="tsperloader16" id="tsperloader16_one"></div>
                                    <div class="tsperloader16" id="tsperloader16_two"></div>
                                    <div class="tsperloader16" id="tsperloader16_three"></div>
                                    <div class="tsperloader16" id="tsperloader16_four"></div>
                                    <div class="tsperloader16" id="tsperloader16_big"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute17">
                                    <div class="tsperloader17" id="tsperloader17_one"></div>
                                    <div class="tsperloader17" id="tsperloader17_two"></div>
                                    <div class="tsperloader17" id="tsperloader17_three"></div>
                                    <div class="tsperloader17" id="tsperloader17_four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute20">
                                    <div class="tsperloader20" id="tsperloader20_one"></div>
                                    <div class="tsperloader20" id="tsperloader20_two"></div>
                                    <div class="tsperloader20" id="tsperloader20_three"></div>
                                    <div class="tsperloader20" id="tsperloader20_four"></div>
                                    <div class="tsperloader20" id="tsperloader20_five"></div>
                                    <div class="tsperloader20" id="tsperloader20_six"></div>
                                    <div class="tsperloader20" id="tsperloader20_seven"></div>
                                    <div class="tsperloader20" id="tsperloader20_eight"></div>
                                    <div class="tsperloader20" id="tsperloader20_nine"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute21">
                                    <div class="tsperloader21" id="first_tsperloader21"></div>
                                    <div class="tsperloader21" id="second_tsperloader21"></div>
                                    <div class="tsperloader21" id="third_tsperloader21"></div>
                                    <div class="tsperloader21" id="forth_tsperloader21"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-tb-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute22">
                                    <div class="tsperloader22" id="first_tsperloader22"></div>
                                    <div class="tsperloader22" id="second_tsperloader22"></div>
                                    <div class="tsperloader22" id="third_tsperloader22"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute23">
                                    <div class="tsperloader23" id="tsperloader23_one"></div>
                                    <div class="tsperloader23" id="tsperloader23_two"></div>
                                    <div class="tsperloader23" id="tsperloader23_three"></div>
                                    <div class="tsperloader23" id="tsperloader23_four"></div>
                                    <div class="tsperloader23" id="tsperloader23_five"></div>
                                    <div class="tsperloader23" id="tsperloader23_six"></div>
                                    <div class="tsperloader23" id="tsperloader23_seven"></div>
                                    <div class="tsperloader23" id="tsperloader23_eight"></div>
                                    <div class="tsperloader23" id="tsperloader23_big"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute24">
                                    <div id="tsperloader24"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute26">
                                    <div class="tsperloader_loader2">
                                        <div class="tsperloader25_1"></div>
                                        <div class="tsperloader25_2"></div>
                                        <div class="tsperloader25_3"></div>
                                        <div class="tsperloader25_4"></div>
                                        <div class="tsperloader25_5"></div>
                                        <div class="tsperloader25_6"></div>
                                        <div class="tsperloader25_7"></div>
                                        <div class="tsperloader25_8"></div>
                                        <div class="tsperloader25_9"></div>
                                        <div class="tsperloader25_10"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-t-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute30">
                                    <div id="absolute30">
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-t-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute53">
                                    <div id="tscssload-global">
                                        <div id="tscssload-top" class="tscssload-mask">
                                            <div class="tscssload-plane"></div>
                                        </div>
                                        <div id="tscssload-middle" class="tscssload-mask">
                                            <div class="tscssload-plane"></div>
                                        </div>
                                        <div id="tscssload-bottom" class="tscssload-mask">
                                            <div class="tscssload-plane"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="preloader-single mg-t-30">
                            <div class="ts_preloading_box">
                                <div id="ts-preloader-absolute52">
                                    <div class="tscssload-triangles">
                                        <div class="tscssload-tri tscssload-invert"></div>
                                        <div class="tscssload-tri tscssload-invert"></div>
                                        <div class="tscssload-tri"></div>
                                        <div class="tscssload-tri tscssload-invert"></div>
                                        <div class="tscssload-tri tscssload-invert"></div>
                                        <div class="tscssload-tri"></div>
                                        <div class="tscssload-tri tscssload-invert"></div>
                                        <div class="tscssload-tri"></div>
                                        <div class="tscssload-tri tscssload-invert"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End-->
       

</body>

<?php include "footer.php";?>
    <script>
        $(function() {
            $('select.styled').customSelect();
        });
    </script>

    </html>
<?php } ?>