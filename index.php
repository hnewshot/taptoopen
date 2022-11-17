
<?php 
    $imageId= $_GET['i'];
    $title = $_GET['t'];
    $url = $_GET['u'];
    // $title= base64_decode($_GET['t']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- Primary Meta Tags -->
    <title><?php echo $title ?></title>
    <meta name="title" content="<?php echo $title ?>" />
    
    <!--Open Graph Metadata-->
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="True Guess" />
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:image" content="https://newsdesk-24.com/wp-content/uploads/2022/10/<?php echo $imageId ?>.jpg" />
    
    <!--Twitter Card Metadata-->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:title" content="<?php echo $title ?>" />
    <meta property="twitter:url" content="<?php echo $url ?>" />
    <meta property="twitter:image" content="https://newsdesk-24.com/wp-content/uploads/2022/11/<?php echo $imageId ?>.jpg" />

    <!--<meta http-equiv = "refresh" content="0; url=https://bit.ly/ipl-2022-app-download" />-->


</head>
<body>
    
</body>
</html>
