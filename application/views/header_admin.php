<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/jquery.jqplot.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.donutRenderer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jqPlot/plugins/jqplot.bubbleRenderer.min.js"></script>
    
    
    <!-- END: load jqplot -->
    <script src="<?php echo base_url(); ?>/assets/js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupDashboardChart('chart1');
            setupLeftMenu();
			setSidebarHeight();
			drawPointsChart('points-chart');
            drawDonutChart('donuts-chart');
            drawBarchart('bar-chart');
            drawBubbleChart('bubble-chart');

        });
		
    </script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                    <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="Logo" /></div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="<?php echo base_url(); ?>/assets/img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li><a href="#">Config</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                        <br />
                        <span class="small grey">Last Login: 3 hours ago</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="<?php echo base_url(); ?>index.php/admin/index"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href="javascript:"><span>Controls</span></a>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>index.php/admin/form_control">Forms</a> </li>
                        <li><a href="<?php echo base_url(); ?>index.php/admin/button">Buttons</a> </li>
                        <li><a href="<?php echo base_url(); ?>index.php/admin/form-control">Full Page Example</a> </li>
                        <li><a href="<?php echo base_url(); ?>index.php/admin/table_tmp">Page with Sidebar Example</a> </li>
                    </ul>
                </li>
                <li class="ic-typography"><a href="<?php echo base_url(); ?>index.php/admin/typography"><span>Typography</span></a></li>
				<li class="ic-charts"><a href="<?php echo base_url(); ?>index.php/admin/chart"><span>Charts & Graphs</span></a></li>
                <li class="ic-grid-tables"><a href="<?php echo base_url(); ?>index.php/admin/table_tmp"><span>Data Table</span></a></li>
                <li class="ic-gallery dd"><a href="javascript:"><span>Image Galleries</span></a>
               		 <ul>
                        <li><a href="<?php echo base_url(); ?>index.php/admin/gallery_img">Pretty Photo</a> </li>
                        <li><a href="<?php echo base_url(); ?>index.php/admin/gallery_fil">Gallery with Filter</a> </li>
                    </ul>
                </li>
                <li class="ic-notifications"><a href="<?php echo base_url(); ?>index.php/admin/notification"><span>Notifications</span></a></li>
                <li class="ic-notifications"><a href="<?php echo base_url(); ?>index.php/admin/bank"><span>Bank</span></a></li>

            </ul>
        </div>
        <div class="clear">
        </div>
