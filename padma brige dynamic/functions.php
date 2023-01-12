 <?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-1', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

register_sidebar([
    'name'=>'Logo',
    'id'=>'logo',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Top',
    'id'=>'herotop',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Img',
    'id'=>'heroimg',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Img2',
    'id'=>'heroimg2',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Img3',
    'id'=>'heroimg3',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Title',
    'id'=>'herotitle',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Title2',
    'id'=>'herotitle2',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Title3',
    'id'=>'herotitle3',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar(array(
    'name'=>'Photo Image-1',
    'id'=>'p_img1',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo body-1',
    'id'=>'p_body_1',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo Image-2',
    'id'=>'p_img2',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo body-2',
    'id'=>'p_body_2',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo Image-3',
    'id'=>'p_img3',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo body-3',
    'id'=>'p_body_3',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo Image-4',
    'id'=>'p_img4',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo body-4',
    'id'=>'p_body_4',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo line left',
    'id'=>'lineleft',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo title',
    'id'=>'phototitle',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo line right',
    'id'=>'lineright',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo Card 1',
    'id'=>'photocard1',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo Card 2',
    'id'=>'photocard2',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo Card 3',
    'id'=>'photocard3',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Photo Card 4',
    'id'=>'photocard4',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'News title',
    'id'=>'newstitle',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Footer left',
    'id'=>'footerleft',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'Footer Right',
    'id'=>'footerright',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'FooterBottomLeft',
    'id'=>'footerbottomleft',
    'before_widget'=> '',
    'after_widget'=> '',
));
register_sidebar(array(
    'name'=>'FooterBottomRight',
    'id'=>'footerbottomright',
    'before_widget'=> '',
    'after_widget'=> '',
));


register_nav_menus([
    'TM'=> 'primary',
    'BM'=>'Bottom'
]);



?>