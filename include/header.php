<!DOCTYPE html>
<!--[if lt IE 9]> <html class="no-touch lt-ie10 lt-ie9 nojs" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-touch lt-ie10 ie9 nojs" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="nojs" lang="en">
<!--<![endif]-->
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">

    <?php /*<link href="/dist/core.bundle.css" rel="stylesheet" />*/ ?>
    <?php
        $theme = (isset($_GET['theme'])) ? $_GET['theme'] : 'beach' ;
    ?><link href="/dist/<?php echo $theme; ?>.bundle.css" rel="stylesheet" title="<?php echo $theme; ?>"/>
    <link href="/dist/dev.css" rel="stylesheet" />
    <?php
        if((isset($_GET['width']))) :
            echo "<style>.wrapper,.container{width:".$_GET['width']."px;max-width:".$_GET['width']."px}</style>";
        endif;
    ?>

    <!--[if lt IE 10]>
        <link rel="stylesheet" href="/dist/<?php echo $theme; ?>.bundle.ie9.css">
    <![endif]-->

</head>
<body>

<div class="outer">
<?php include 'utils.php' ?>
