
<?php
include "header_script.php";
?>

<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $db->logo; ?>" type="image/gif" sizes="16x16">
    <title><?php echo $site->get_page_name(); ?></title>

    <?php include 'header_lib.php'; ?>

    <script>
        $(document).ready(function() {
            $('#datatable').dataTable({
                "sScrollX": "100%",
                "sScrollY": "100%",
                "sScrollXInner": "100%",
            });

            $("[data-toggle=tooltip]").tooltip();
        } );
    </script>


    <?php
        $ut_info=$theme->get_theme($login_user['theme']);
        $bg_color=$ut_info['bg_color'];
        $font_color=$ut_info['font_color'];
    ?>

    <!-- End Datatable Style Sheet -->

    <script src="style/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
        var bg_color="<?php echo "$bg_color"; ?>";
    </script>

<div id="theme_color">
    <style type="text/css">
        :root {
            --bg-color: <?php echo "$bg_color"; ?>;
            --font-color: <?php echo "$font_color"; ?>;
        } 
    </style>
</div>
    <link rel="stylesheet" type="text/css" href="style/stylesheets/theme.css">

</head>



<body class="theme-blue">

    <!-- Demo page code -->


    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
        .watermark_body{
            background: url(<?php echo $db->logo; ?>);
            
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">