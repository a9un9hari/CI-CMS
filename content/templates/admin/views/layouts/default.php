<!DOCTYPE html>
<!--[if IE 8]><html lang="en" class="ie8"></html><![endif]-->
<!--[if IE 9]><html lang="en" class="ie9"></html><![endif]-->
<!--[if !IE]><!--><html lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title><?php echo $template['title']; ?></title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="{theme_path}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{theme_path}assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="{theme_path}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{theme_path}css/style.min.css" rel="stylesheet" />
    <link href="{theme_path}css/style_responsive.css" rel="stylesheet" />
    <link href="{theme_path}css/style_default.css" rel="stylesheet" id="style_color" />
    <link href="{theme_path}assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link href="{theme_path}assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="{theme_path}assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="{theme_path}assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body class="fixed-top">
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="./index.html">
                    <img src="{theme_path}img/logo.png" alt="Admin Lab" />
                </a>
                <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="arrow"></span>
                </a>
                <div id="top_menu" class="nav notify-row">
                    <ul class="nav top-menu">
                        <li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings"><i class="icon-cog"></i></a>
                        </li>
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-alt"></i><span class="badge badge-important">5</span></a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                            <img src="{theme_path}img/avatar-mini.png" alt="avatar" />
                                        </span>
                                        <span class="subject">
                                            <span class="from">Dulal Khan</span>
                                            <span class="time">Just now</span>
                                        </span>
                                        <span class="message"> Hello, this is an example messages please check</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                            <img src="{theme_path}img/avatar-mini.png" alt="avatar" />
                                        </span>
                                        <span class="subject">
                                            <span class="from">Rafiqul Islam</span>
                                            <span class="time">10 mins</span>
                                        </span>
                                        <span class="message"> Hi, Mosaddek Bhai how are you ?</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                            <img src="{theme_path}img/avatar-mini.png" alt="avatar" />
                                        </span>
                                        <span class="subject">
                                            <span class="from">Sumon Ahmed</span>
                                            <span class="time">3 hrs</span>
                                        </span>
                                        <span class="message"> This is awesome dashboard templates</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                            <img src="{theme_path}img/avatar-mini.png" alt="avatar" />
                                        </span>
                                        <span class="subject">
                                            <span class="from">Dulal Khan</span>
                                            <span class="time">Just now</span>
                                        </span>
                                        <span class="message"> Hello, this is an example messages please check </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-bell-alt"></i>
                                <span class="badge badge-warning">7</span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <li>
                                    <p>You have 7 new notifications</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span> 
                                        Server #3 overloaded. 
                                        <span class="small italic">34 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-warning"><i class="icon-bell"></i></span> 
                                        Server #10 not respoding. 
                                        <span class="small italic">1 Hours</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span> 
                                        Database overloaded 24%. 
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success"><i class="icon-plus"></i></span> 
                                        New user registered. 
                                        <span class="small italic">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-info"><i class="icon-bullhorn"></i></span> 
                                        Application error. 
                                        <span class="small italic">10 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all notifications</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                <i class="icon-comments-alt"></i>
                            </a>
                        </li>
                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                                <i class="icon-headphones"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{theme_path}img/avatar1_small.jpg" alt="" />
                                <span class="username"><?php echo $user['username'] ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                                <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url('logout'); ?>"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="container" class="row-fluid">
        <div id="sidebar" class="nav-collapse collapse">
            <div class="sidebar-toggler hidden-phone"></div>
            <div class="navbar-inverse">
                <form class="navbar-search visible-phone" />
                    <input type="text" class="search-query" placeholder="Search" />
                </form>
            </div>
            <ul class="sidebar-menu">
                <li class="has-sub active">
                    <a href="<?php echo site_url('admin/dashboard') ?>" class="">
                        <span class="icon-box"><i class="icon-dashboard"></i></span> Dashboard 
                    </a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-user"></i></span> User 
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo site_url('admin/users/create') ?>">Add User</a></li>
                        <li><a class="" href="<?php echo site_url('admin/users') ?>">List User</a></li>
                    </ul>
                </li>
                <!--
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span> UI Elements 
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="./ui_elements_general.html">General</a></li>
                        <li><a class="" href="./ui_elements_buttons.html">Buttons</a></li>
                        <li><a class="" href="./ui_elements_tabs_accordions.html">Tabs & Accordions</a></li>
                        <li><a class="" href="./ui_elements_typography.html">Typography</a></li>
                    </ul>
                </li>
                    <li class="has-sub"><a href="javascript:;" class="">

                            <span class="icon-box"><i class="icon-cogs"></i>
                            </span> Components 

                            <span class="arrow">
                            </span></a>
                        <ul class="sub">
                            <li><a class="" href="./calendar.html">Calendar</a></li>
                            <li><a class="" href="./data_table.html">Data Table</a></li>
                            <li><a class="" href="./grids.html">Grids</a></li>
                            <li><a class="" href="./charts.html">Visual Charts</a></li>
                            <li><a class="" href="./messengers.html">Conversations</a></li>
                            <li><a class="" href="./gallery.html"> Gallery</a></li>
                        </ul></li>
                    <li class="has-sub"><a href="javascript:;" class="">

                            <span class="icon-box"><i class="icon-tasks"></i>
                            </span> Form Stuff 

                            <span class="arrow">
                            </span></a>
                        <ul class="sub">
                            <li><a class="" href="./form_layout.html">Form Layouts</a></li>
                            <li><a class="" href="./form_component.html">Form Components</a></li>
                            <li><a class="" href="./form_wizard.html">Form Wizard</a></li>
                            <li><a class="" href="./form_validation.html">Form Validation</a></li>
                        </ul></li>
                    <li class="has-sub"><a href="javascript:;" class="">

                            <span class="icon-box"><i class="icon-fire"></i>
                            </span> Icons 

                            <span class="arrow">
                            </span></a>
                        <ul class="sub">
                            <li><a class="" href="./font_awesome.html">Font Awesome</a></li>
                            <li><a class="" href="./glyphicons.html">Glyphicons</a></li>
                        </ul></li>
                    <li class="has-sub"><a href="javascript:;" class="">

                            <span class="icon-box"><i class="icon-map-marker"></i>
                            </span> Maps 

                            <span class="arrow">
                            </span></a>
                        <ul class="sub">
                            <li><a class="" href="./maps_google.html"> Google Maps</a></li>
                            <li><a class="" href="./maps_vector.html"> Vector Maps</a></li>
                        </ul></li>
                    <li class="has-sub"><a href="javascript:;" class="">

                            <span class="icon-box"><i class="icon-file-alt"></i>
                            </span> Sample Pages 

                            <span class="arrow">
                            </span></a>
                        <ul class="sub">
                            <li><a class="" href="./profile.html">Profile</a></li>
                            <li><a class="" href="./blank.html">Blank Page</a></li>
                            <li><a class="" href="./sidebar_closed.html">Sidebar Closed Page</a></li>
                            <li><a class="" href="./pricing_tables.html">Pricing Tables</a></li>
                            <li><a class="" href="./faq.html">FAQ</a></li>
                            <li><a class="" href="./errors.html">Errors</a></li>
                        </ul></li>
                    <li><a class="" href="./login.html">

                            <span class="icon-box"><i class="icon-user"></i>
                            </span> Login Page</a></li>
                    -->
                </ul>
            </div>

            <div id="main-content">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                            <div id="theme-change" class="hidden-phone"><i class="icon-cogs"></i>
                                <span class="settings">
                                    <span class="text">Theme:</span>
                                    <span class="colors">
                                        <span class="color-default" data-style="default"></span>
                                        <span class="color-gray" data-style="gray"></span>
                                        <span class="color-purple" data-style="purple"></span>
                                        <span class="color-navy-blue" data-style="navy-blue"></span>
                                    </span>
                                </span>
                            </div>
                            <h3 class="page-title"> {module_name} <small> {module_desc} </small></h3>
                            <ul class="breadcrumb">
                                <li><a href="#"><i class="icon-home"></i></a>
                                    <span class="divider">&nbsp;
                                    </span></li>
                                <li><a href="#">Admin Lab</a>

                                    <span class="divider">&nbsp;
                                    </span></li>
                                <li><a href="#">Dashboard</a>

                                    <span class="divider-last">&nbsp;
                                    </span></li>
                            </ul>
                        </div>
                    </div>

                    <div id="page" class="dashboard">
                        <?php echo $template['body'] ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <?php echo $template['partials']['footer'] ?>
        </div>

        <script src="{theme_path}js/jquery-1.8.3.min.js"></script>
        <script src="{theme_path}assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="{theme_path}assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{theme_path}assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="{theme_path}assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="{theme_path}js/jquery.blockui.js"></script>
        <script src="{theme_path}js/jquery.cookie.js"></script>

        <!--[if lt IE 9]>
            <script src="{theme_path}js/excanvas.js"></script>
            <script src="{theme_path}js/respond.js"></script>
        <![endif]-->
        <script src="{theme_path}assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="{theme_path}assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="{theme_path}assets/flot/jquery.flot.js"></script>
        <script src="{theme_path}assets/flot/jquery.flot.resize.js"></script>
        <script src="{theme_path}assets/flot/jquery.flot.pie.js"></script>
        <script src="{theme_path}assets/flot/jquery.flot.stack.js"></script>
        <script src="{theme_path}assets/flot/jquery.flot.crosshair.js"></script>
        <script src="{theme_path}js/jquery.peity.min.js"></script>
        <script src="{theme_path}assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="{theme_path}js/scripts.js"></script>

        <script>
            jQuery(document).ready(function(){
                // App.setMainPage(true);
                App.init();
            });
        </script>
    </body>
</html>