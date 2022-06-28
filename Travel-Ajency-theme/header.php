
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="nav_image">
                <a class="" href="<?php echo get_site_url(); ?>"><img src= <?php echo get_option('logo'); ?>></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php  
                wp_nav_menu(array(
                  'theme_location' =>  'header-menu',
                  'menu_class' => 'nav navbar-nav mr-auto', 
                  'add_li_class' => 'nav-item',
                  "container" => false, 
                  "link_class" => "nav-link"
                ));
            ?>
                        <li class="nav-item">
                        <a class="nav-link" href="./blog.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/icon.webp" alt=""></a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <?php wp_head();?>
  