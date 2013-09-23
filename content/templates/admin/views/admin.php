<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8">
</html><![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9">
</html><![endif]-->
<!--[if !IE]>
<!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title> Admin Lab Dashboard
        </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <link href="./assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />

        <link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <link href="./css/style.min.css" rel="stylesheet" />

        <link href="./css/style_responsive.css" rel="stylesheet" />

        <link href="./css/style_default.css" rel="stylesheet" id="style_color" />

        <link href="./assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="./assets/uniform/css/uniform.default.css" />

        <link href="./assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />

        <link href="./assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body class="fixed-top">

        <div id="header" class="navbar navbar-inverse navbar-fixed-top">

            <div class="navbar-inner">

                <div class="container-fluid"><a class="brand" href="./index.html"><img src="./img/logo.png" alt="Admin Lab" /></a><a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">

                        <span class="icon-bar">
                        </span>

                        <span class="icon-bar">
                        </span>

                        <span class="icon-bar">
                        </span>

                        <span class="arrow">
                        </span></a>

                    <div id="top_menu" class="nav notify-row">
                        <ul class="nav top-menu">
                            <li class="dropdown"><a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings"><i class="icon-cog"></i></a></li>
                            <li class="dropdown" id="header_inbox_bar"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-alt"></i>

                                    <span class="badge badge-important">5
                                    </span></a>
                                <ul class="dropdown-menu extended inbox">
                                    <li>

                                        <p>You have 5 new messages</p></li>
                                    <li><a href="#">

                                            <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" />
                                            </span>

                                            <span class="subject">

                                                <span class="from">Dulal Khan
                                                </span>

                                                <span class="time">Just now
                                                </span>
                                            </span>

                                            <span class="message"> Hello, this is an example messages please check 
                                            </span></a></li>
                                    <li><a href="#">

                                            <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" />
                                            </span>

                                            <span class="subject">

                                                <span class="from">Rafiqul Islam
                                                </span>

                                                <span class="time">10 mins
                                                </span>
                                            </span>

                                            <span class="message"> Hi, Mosaddek Bhai how are you ? 
                                            </span></a></li>
                                    <li><a href="#">

                                            <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" />
                                            </span>

                                            <span class="subject">

                                                <span class="from">Sumon Ahmed
                                                </span>

                                                <span class="time">3 hrs
                                                </span>
                                            </span>

                                            <span class="message"> This is awesome dashboard templates 
                                            </span></a></li>
                                    <li><a href="#">

                                            <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" />
                                            </span>

                                            <span class="subject">

                                                <span class="from">Dulal Khan
                                                </span>

                                                <span class="time">Just now
                                                </span>
                                            </span>

                                            <span class="message"> Hello, this is an example messages please check 
                                            </span></a></li>
                                    <li><a href="#">See all messages</a></li>
                                </ul></li>
                            <li class="dropdown" id="header_notification_bar"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell-alt"></i>

                                    <span class="badge badge-warning">7
                                    </span></a>
                                <ul class="dropdown-menu extended notification">
                                    <li>

                                        <p>You have 7 new notifications</p></li>
                                    <li><a href="#">

                                            <span class="label label-important"><i class="icon-bolt"></i>
                                            </span> Server #3 overloaded. 

                                            <span class="small italic">34 mins
                                            </span></a></li>
                                    <li><a href="#">

                                            <span class="label label-warning"><i class="icon-bell"></i>
                                            </span> Server #10 not respoding. 

                                            <span class="small italic">1 Hours
                                            </span></a></li>
                                    <li><a href="#">

                                            <span class="label label-important"><i class="icon-bolt"></i>
                                            </span> Database overloaded 24%. 

                                            <span class="small italic">4 hrs
                                            </span></a></li>
                                    <li><a href="#">

                                            <span class="label label-success"><i class="icon-plus"></i>
                                            </span> New user registered. 

                                            <span class="small italic">Just now
                                            </span></a></li>
                                    <li><a href="#">

                                            <span class="label label-info"><i class="icon-bullhorn"></i>
                                            </span> Application error. 

                                            <span class="small italic">10 mins
                                            </span></a></li>
                                    <li><a href="#">See all notifications</a></li>
                                </ul></li>
                        </ul>
                    </div>

                    <div class="top-nav ">
                        <ul class="nav pull-right top-menu">
                            <li class="dropdown mtop5"><a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat"><i class="icon-comments-alt"></i></a></li>
                            <li class="dropdown mtop5"><a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help"><i class="icon-headphones"></i></a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="./img/avatar1_small.jpg" alt="" />

                                    <span class="username">Mosaddek Hossain
                                    </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                                    <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
                                    <li class="divider"></li>
                                    <li><a href="./login.html"><i class="icon-key"></i> Log Out</a></li>
                                </ul></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="container" class="row-fluid">

            <div id="sidebar" class="nav-collapse collapse">

                <div class="sidebar-toggler hidden-phone">
                </div>

                <div class="navbar-inverse">

                    <form class="navbar-search visible-phone" />
                    <input type="text" class="search-query" placeholder="Search" />
                    </form>
                </div>
                <ul class="sidebar-menu">
                    <li class="has-sub active"><a href="javascript:;" class="">

                            <span class="icon-box"><i class="icon-dashboard"></i>
                            </span> Dashboard 

                            <span class="arrow">
                            </span></a>
                        <ul class="sub">
                            <li class="active"><a class="" href="./index.html">Dashboard 1</a></li>
                            <li><a class="" href="./index_2.html">Dashboard 2</a></li>
                        </ul></li>
                    <li class="has-sub"><a href="javascript:;" class="">

                            <span class="icon-box"><i class="icon-book"></i>
                            </span> UI Elements 

                            <span class="arrow">
                            </span></a>
                        <ul class="sub">
                            <li><a class="" href="./ui_elements_general.html">General</a></li>
                            <li><a class="" href="./ui_elements_buttons.html">Buttons</a></li>
                            <li><a class="" href="./ui_elements_tabs_accordions.html">Tabs & Accordions</a></li>
                            <li><a class="" href="./ui_elements_typography.html">Typography</a></li>
                        </ul></li>
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
                </ul>
            </div>

            <div id="main-content">

                <div class="container-fluid">

                    <div class="row-fluid">

                        <div class="span12">

                            <div id="theme-change" class="hidden-phone"><i class="icon-cogs"></i>

                                <span class="settings">

                                    <span class="text">Theme:
                                    </span>

                                    <span class="colors">

                                        <span class="color-default" data-style="default">
                                        </span>

                                        <span class="color-gray" data-style="gray">
                                        </span>

                                        <span class="color-purple" data-style="purple">
                                        </span>

                                        <span class="color-navy-blue" data-style="navy-blue">
                                        </span>
                                    </span>
                                </span>
                            </div><h3 class="page-title"> Dashboard <small> General Information </small></h3>
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
                                <li class="pull-right search-wrap">

                                    <form class="hidden-phone" />

                                    <div class="search-input-area">
                                        <input id=" " class="search-query" type="text" placeholder="Search" /><i class="icon-search"></i>
                                    </div>
                                    </form></li>
                            </ul>
                        </div>
                    </div>

                    <div id="page" class="dashboard">

                        <div class="row-fluid circle-state-overview">

                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                                <div class="circle-stat block">

                                    <div class="visual">

                                        <div class="circle-state-icon"><i class="icon-user turquoise-color"></i>
                                        </div>
                                        <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#4CC5CD" data-bgcolor="#ddd" />
                                    </div>

                                    <div class="details">

                                        <div class="number">+33
                                        </div>

                                        <div class="title">New Users
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                                <div class="circle-stat block">

                                    <div class="visual">

                                        <div class="circle-state-icon"><i class="icon-tags red-color"></i>
                                        </div>
                                        <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="65" data-fgcolor="#e17f90" data-bgcolor="#ddd" />
                                    </div>

                                    <div class="details">

                                        <div class="number">987$
                                        </div>

                                        <div class="title">Sales
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                                <div class="circle-stat block">

                                    <div class="visual">

                                        <div class="circle-state-icon"><i class="icon-shopping-cart green-color"></i>
                                        </div>
                                        <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="30" data-fgcolor="#a8c77b" data-bgcolor="#ddd" />
                                    </div>

                                    <div class="details">

                                        <div class="number">+320
                                        </div>

                                        <div class="title">New Orders
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                                <div class="circle-stat block">

                                    <div class="visual">

                                        <div class="circle-state-icon"><i class="icon-comments-alt gray-color"></i>
                                        </div>
                                        <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="15" data-fgcolor="#b9baba" data-bgcolor="#ddd" />
                                    </div>

                                    <div class="details">

                                        <div class="number">387
                                        </div>

                                        <div class="title">Comments
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                                <div class="circle-stat block">

                                    <div class="visual">

                                        <div class="circle-state-icon"><i class="icon-eye-open purple-color"></i>
                                        </div>
                                        <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="45" data-fgcolor="#c8abdb" data-bgcolor="#ddd" />
                                    </div>

                                    <div class="details">

                                        <div class="number">+987
                                        </div>

                                        <div class="title">Unique Visitor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                                <div class="circle-stat block">

                                    <div class="visual">

                                        <div class="circle-state-icon"><i class="icon-bar-chart blue-color"></i>
                                        </div>
                                        <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="25" data-fgcolor="#93c4e4" data-bgcolor="#ddd" />
                                    </div>

                                    <div class="details">

                                        <div class="number">478
                                        </div>

                                        <div class="title">Updates
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">

                            <div class="span8">

                                <div class="widget">

                                    <div class="widget-title"><h4><i class="icon-bar-chart"></i> Line Chart</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">

                                        <div id="site_statistics_loading"><img src="./img/loading.gif" alt="loading" />
                                        </div>

                                        <div id="site_statistics_content" class="hide">

                                            <div id="site_statistics" class="chart">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span4">

                                <div class="widget">

                                    <div class="widget-title"><h4><i class="icon-umbrella"></i> Live Chart</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">

                                        <div id="load_statistics_loading"><img src="./img/loading.gif" alt="loading" />
                                        </div>

                                        <div id="load_statistics_content" class="hide" style="margin: 0px 0 20px 0">

                                            <div id="load_statistics" class="chart" style="height: 280px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="square-state">

                            <div class="row-fluid"><a class="icon-btn span2" href="#"><i class="icon-group"></i>

                                    <div>Users
                                    </div>

                                    <span class="badge badge-important">2
                                    </span></a><a class="icon-btn span2" href="#"><i class="icon-barcode"></i>

                                    <div>Products
                                    </div>

                                    <span class="badge badge-success">4
                                    </span></a><a class="icon-btn span2" href="#"><i class="icon-bar-chart"></i>

                                    <div>Reports
                                    </div></a><a class="icon-btn span2" href="#"><i class="icon-calendar"></i>

                                    <div>Calendar
                                    </div></a><a class="icon-btn span2" href="#"><i class="icon-sitemap"></i>

                                    <div>Categories
                                    </div></a><a class="icon-btn span2" href="#"><i class="icon-tasks"></i>

                                    <div>Task
                                    </div>

                                    <span class="badge badge-important">3
                                    </span></a>
                            </div>

                            <div class="row-fluid"><a class="icon-btn span2" href="#"><i class="icon-envelope"></i>

                                    <div>Inbox
                                    </div>

                                    <span class="badge badge-info">12
                                    </span></a><a class="icon-btn span2" href="#"><i class="icon-bullhorn"></i>

                                    <div>Notification
                                    </div>

                                    <span class="badge badge-warning">3
                                    </span></a><a class="icon-btn span2" href="#"><i class="icon-plane"></i>

                                    <div>Projects
                                    </div>

                                    <span class="badge badge-info">21
                                    </span></a><a class="icon-btn span2" href="#"><i class="icon-money"></i>

                                    <div>Finance
                                    </div></a><a class="icon-btn span2" href="#"><i class="icon-thumbs-up"></i>

                                    <div>Feedback
                                    </div>

                                    <span class="badge badge-info">2
                                    </span></a><a class="icon-btn span2" href="#"><i class="icon-wrench"></i>

                                    <div>Settings
                                    </div></a>
                            </div>
                        </div>

                        <div class="row-fluid">

                            <div class="span12">

                                <div class="widget">

                                    <div class="widget-title"><h4><i class="icon-tags"></i> Recent Order List</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">
                                        <table class="table table-striped table-bordered table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th><i class="icon-leaf"></i>

                                                        <span class="hidden-phone">From
                                                        </span>
                                                    </th>
                                                    <th><i class="icon-user"></i>

                                                        <span class="hidden-phone ">Contact
                                                        </span>
                                                    </th>
                                                    <th><i class="icon-tags"></i>

                                                        <span class="hidden-phone">Amount
                                                        </span>
                                                    </th>
                                                    <th>
                                                    </th>
                                                </tr></thead><tbody>
                                                <tr>
                                                    <td class="highlight">

                                                        <div class="info">
                                                        </div><a href="#">ABC</a>
                                                    </td>
                                                    <td>Mosaddek Hossain
                                                    </td>
                                                    <td>120.00$ 

                                                        <span class="label label-success label-mini">Paid
                                                        </span><a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                                                    </td>
                                                    <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="highlight">

                                                        <div class="warning">
                                                        </div><a href="#">Lorem</a>
                                                    </td>
                                                    <td>Dulal khan
                                                    </td>
                                                    <td>2000.50$ 

                                                        <span class="label label-success label-mini">Paid
                                                        </span><a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                                                    </td>
                                                    <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="highlight">

                                                        <div class="success">
                                                        </div><a href="#">Dolor imit</a>
                                                    </td>
                                                    <td>Rafiqul Ismal
                                                    </td>
                                                    <td>490.50$ 

                                                        <span class="label label-warning label-mini">Pending
                                                        </span><a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                                                    </td>
                                                    <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="highlight">

                                                        <div class="important">
                                                        </div><a href="#">ABC</a>
                                                    </td>
                                                    <td>Sumon Ahmed
                                                    </td>
                                                    <td>1000.00$ <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                                                    </td>
                                                    <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="highlight">

                                                        <div class="success">
                                                        </div><a href="#">Vector lab</a>
                                                    </td>
                                                    <td>Mosaddek
                                                    </td>
                                                    <td>4890.60$ 

                                                        <span class="label label-warning label-mini">Paid
                                                        </span><a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                                                    </td>
                                                    <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="highlight">

                                                        <div class="warning">
                                                        </div><a href="#">Ipsum</a>
                                                    </td>
                                                    <td>Rafiqul Islam
                                                    </td>
                                                    <td>3201.60$ 

                                                        <span class="label label-success label-mini">Pending
                                                        </span><a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                                                    </td>
                                                    <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="highlight">

                                                        <div class="important">
                                                        </div><a href="#">ABC</a>
                                                    </td>
                                                    <td>Dulal Khan
                                                    </td>
                                                    <td>500.00$ <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                                                    </td>
                                                    <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="highlight">

                                                        <div class="warning">
                                                        </div><a href="#">Vector lab</a>
                                                    </td>
                                                    <td>Mosaddek Hossain
                                                    </td>
                                                    <td>5501.00$ 

                                                        <span class="label label-success label-mini">Paid
                                                        </span><a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                                                    </td>
                                                    <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a>
                                                    </td>
                                                </tr></tbody>
                                        </table>

                                        <div class="space7">
                                        </div>

                                        <div class="clearfix"><a href="#" class="btn btn-mini pull-right">All Orders</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">

                            <div class="span7">

                                <div class="widget" id="chats">

                                    <div class="widget-title"><h4><i class="icon-comments-alt"></i> Chats</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">

                                        <div class="timeline-messages">

                                            <div class="msg-time-chat"><a class="message-img" href="#"><img alt="" src="./img/avatar1.jpg" class="avatar" /></a>

                                                <div class="message-body msg-in">

                                                    <div class="text">

                                                        <p class="attribution"><a href="#">Mosaddek Hossain</a> at 1:55pm, 13th April 2013</p>

                                                        <p>Hello, How are you brother?</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="msg-time-chat"><a class="message-img" href="#"><img alt="" src="./img/avatar2.jpg" class="avatar" /></a>

                                                <div class="message-body msg-out">

                                                    <div class="text">

                                                        <p class="attribution"><a href="#">Dulal Khan</a> at 2:01pm, 13th April 2013</p>

                                                        <p>I'm Fine, Thank you. What about you? How is going on?</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="msg-time-chat"><a class="message-img" href="#"><img alt="" src="./img/avatar1.jpg" class="avatar" /></a>

                                                <div class="message-body msg-in">

                                                    <div class="text">

                                                        <p class="attribution"><a href="#">Mosaddek Hossain</a> at 2:03pm, 13th April 2013</p>

                                                        <p>Yeah I'm fine too. Everything is going fine here.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="msg-time-chat"><a class="message-img" href="#"><img alt="" src="./img/avatar2.jpg" class="avatar" /></a>

                                                <div class="message-body msg-out">

                                                    <div class="text">

                                                        <p class="attribution"><a href="#">Dulal Khan</a> at 2:05pm, 13th April 2013</p>

                                                        <p>well good to know that. anyway how much time you need to done your task?</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chat-form">

                                            <div class="input-cont">
                                                <input type="text" placeholder="Type a message here..." />
                                            </div>

                                            <div class="btn-cont"><a href="javascript:;" class="btn btn-primary">Send</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span5">

                                <div class="widget">

                                    <div class="widget-title"><h4><i class="icon-bell"></i> Notifications</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">
                                        <ul class="item-list scroller padding" data-height="365" data-always-visible="1">
                                            <li>

                                                <span class="label label-success"><i class="icon-bell"></i>
                                                </span>

                                                <span>New user registered.
                                                </span>

                                                <span class="small italic">Just now
                                                </span></li>
                                            <li>

                                                <span class="label label-success"><i class="icon-bell"></i>
                                                </span>

                                                <span>New order received.
                                                </span>

                                                <span class="small italic">15 mins ago
                                                </span></li>
                                            <li>

                                                <span class="label label-warning"><i class="icon-bullhorn"></i>
                                                </span>

                                                <span>Alerting a user account balance.
                                                </span>

                                                <span class="small italic">2 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-important"><i class="icon-bolt"></i>
                                                </span>

                                                <span>Alerting administrators staff.
                                                </span>

                                                <span class="small italic">11 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-important"><i class="icon-bolt"></i>
                                                </span>

                                                <span>Messages are not sent to users.
                                                </span>

                                                <span class="small italic">14 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-warning"><i class="icon-bullhorn"></i>
                                                </span>

                                                <span>Web server #12 failed to relosd.
                                                </span>

                                                <span class="small italic">2 days ago
                                                </span></li>
                                            <li>

                                                <span class="label label-success"><i class="icon-bell"></i>
                                                </span>

                                                <span>New order received.
                                                </span>

                                                <span class="small italic">15 mins ago
                                                </span></li>
                                            <li>

                                                <span class="label label-warning"><i class="icon-bullhorn"></i>
                                                </span>

                                                <span>Alerting a user account balance.
                                                </span>

                                                <span class="small italic">2 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-important"><i class="icon-bolt"></i>
                                                </span>

                                                <span>Alerting administrators staff.
                                                </span>

                                                <span class="small italic">11 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-important"><i class="icon-bolt"></i>
                                                </span>

                                                <span>Messages are not sent to users.
                                                </span>

                                                <span class="small italic">14 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-warning"><i class="icon-bullhorn"></i>
                                                </span>

                                                <span>Web server #12 failed to relosd.
                                                </span>

                                                <span class="small italic">2 days ago
                                                </span></li>
                                            <li>

                                                <span class="label label-success"><i class="icon-bell"></i>
                                                </span>

                                                <span>New order received.
                                                </span>

                                                <span class="small italic">15 mins ago
                                                </span></li>
                                            <li>

                                                <span class="label label-warning"><i class="icon-bullhorn"></i>
                                                </span>

                                                <span>Alerting a user account balance.
                                                </span>

                                                <span class="small italic">2 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-important"><i class="icon-bolt"></i>
                                                </span>

                                                <span>Alerting administrators support staff.
                                                </span>

                                                <span class="small italic">11 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-important"><i class="icon-bolt"></i>
                                                </span>

                                                <span>Messages are not sent to users.
                                                </span>

                                                <span class="small italic">14 hrs ago
                                                </span></li>
                                            <li>

                                                <span class="label label-warning"><i class="icon-bullhorn"></i>
                                                </span>

                                                <span>Web server #12 failed to relosd.
                                                </span>

                                                <span class="small italic">2 days ago
                                                </span></li>
                                        </ul>

                                        <div class="space5">
                                        </div><a href="#" class="pull-right">View all notifications</a>

                                        <div class="clearfix no-top-space no-bottom-space">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">

                            <div class="span6">

                                <div class="widget">

                                    <div class="widget-title"><h4><i class="icon-reorder"></i> Progress Bars</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">

                                        <div class="progress">

                                            <div style="width: 40%;" class="bar">
                                            </div>
                                        </div>

                                        <div class="progress progress-success">

                                            <div style="width: 60%;" class="bar">
                                            </div>
                                        </div>

                                        <div class="progress progress-warning">

                                            <div style="width: 80%;" class="bar">
                                            </div>
                                        </div>

                                        <div class="progress progress-danger">

                                            <div style="width: 45%;" class="bar">
                                            </div>
                                        </div>

                                        <div class="progress">

                                            <div style="width: 15%;" class="bar bar-success">
                                            </div>

                                            <div style="width: 40%;" class="bar bar-warning">
                                            </div>

                                            <div style="width: 27%;" class="bar bar-danger">
                                            </div>
                                        </div>

                                        <div class="progress progress-striped">

                                            <div style="width: 25%;" class="bar">
                                            </div>
                                        </div>

                                        <div class="progress progress-striped progress-success active">

                                            <div style="width: 40%;" class="bar">
                                            </div>
                                        </div>

                                        <div class="progress progress-striped">

                                            <div style="width: 15%;" class="bar bar-success">
                                            </div>

                                            <div style="width: 40%;" class="bar bar-warning">
                                            </div>

                                            <div style="width: 27%;" class="bar bar-danger">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span6">

                                <div class="widget">

                                    <div class="widget-title"><h4><i class="icon-bell-alt"></i> Alerts</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">

                                        <div class="alert"><button class="close" data-dismiss="alert">×</button><strong>Warning!</strong> Your monthly traffic is reaching limit. 
                                        </div>

                                        <div class="alert alert-success"><button class="close" data-dismiss="alert">×</button><strong>Success!</strong> The page has been added. 
                                        </div>

                                        <div class="alert alert-info"><button class="close" data-dismiss="alert">×</button><strong>Info!</strong> You have 198 unread messages. 
                                        </div>

                                        <div class="alert alert-error"><button class="close" data-dismiss="alert">×</button><strong>Error!</strong> The daily cronjob has failed. 
                                        </div>

                                        <span class="space5">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">

                            <div class="span8 responsive" data-tablet="span8 fix-margin" data-desktop="span8">

                                <div class="widget">

                                    <div class="widget-title"><h4><i class="icon-calendar"></i> Calendar</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">

                                        <div id="calendar" class="has-toolbar">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span4 responsive" data-tablet="span4 fix-margin" data-desktop="span4">

                                <div class="widget">

                                    <div class="widget-title"><h4><i class="icon-check"></i> To Do List</h4>

                                        <span class="tools"><a href="javascript:;" class="icon-chevron-down"></a><a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                    </div>

                                    <div class="widget-body">
                                        <ul class="todo-list">
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html"> Weekly Meeting.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-success"><i class="icon-bell"></i>Today
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Monthly Status Update.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-default"><i class="icon-bell"></i>12.00PM
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Upgrage server OS.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-success"><i class="icon-bell"></i>4 March
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Weekly technical support report.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-success"><i class="icon-bell"></i>2 Jan
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html"> Project materials.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-warning"><i class="icon-bell"></i>09 Feb
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Project Status Update.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-important"><i class="icon-bell"></i>4.30PM
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html"> Anual Project Meeting.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-important"><i class="icon-bell"></i>Today
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Prepare project materials.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-warning"><i class="icon-bell"></i>3 May
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Update salary status.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-reverse"><i class="icon-bell"></i>1 June
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Update Task Status.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-reverse"><i class="icon-bell"></i>3 April
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Project Status Report.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-important"><i class="icon-bell"></i>10.00PM
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                            <li>

                                                <div class="col1">

                                                    <div class="cont"><a href="./index.html">Update project rates.</a>
                                                    </div>
                                                </div>

                                                <div class="col2">

                                                    <span class="label label-reverse"><i class="icon-bell"></i>28 April
                                                    </span>

                                                    <span class="actions"><a href="#" class="icon"><i class="icon-ok"></i></a><a href="#" class="icon"><i class="icon-remove"></i></a>
                                                    </span>
                                                </div></li>
                                        </ul><a href="#" class="pull-right">View all todo list</a>

                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer"> 2013 &copy; Admin <a href="http://www.themescript.net">Lab</a> Dashboard. 

            <div class="span pull-right">

                <span class="go-top"><i class="icon-arrow-up"></i>
                </span>
            </div>
        </div>
        <script src="./js/jquery-1.8.3.min.js">
        </script>
        <script src="./assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js">
        </script>
        <script src="./assets/jquery-slimscroll/jquery.slimscroll.min.js">
        </script>
        <script src="./assets/fullcalendar/fullcalendar/fullcalendar.min.js">
        </script>
        <script src="./assets/bootstrap/js/bootstrap.min.js">
        </script>
        <script src="./js/jquery.blockui.js">
        </script>
        <script src="./js/jquery.cookie.js">
        </script>
        <!--[if lt IE 9]>
        <script src="./js/excanvas.js">
        </script>
        <script src="./js/respond.js">
        </script><![endif]-->
        <script src="./assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript">
        </script>
        <script src="./assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript">
        </script>
        <script src="./assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript">
        </script>
        <script src="./assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript">
        </script>
        <script src="./assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript">
        </script>
        <script src="./assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript">
        </script>
        <script src="./assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript">
        </script>
        <script src="./assets/jquery-knob/js/jquery.knob.js">
        </script>
        <script src="./assets/flot/jquery.flot.js">
        </script>
        <script src="./assets/flot/jquery.flot.resize.js">
        </script>
        <script src="./assets/flot/jquery.flot.pie.js">
        </script>
        <script src="./assets/flot/jquery.flot.stack.js">
        </script>
        <script src="./assets/flot/jquery.flot.crosshair.js">
        </script>
        <script src="./js/jquery.peity.min.js">
        </script>
        <script type="text/javascript" src="./assets/uniform/jquery.uniform.min.js">
        </script>
        <script src="./js/scripts.js">
        </script>
        <script>jQuery(document).ready(function(){App.setMainPage(true);App.init()});
        </script>
    </body>
</html>