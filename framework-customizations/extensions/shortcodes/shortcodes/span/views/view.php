<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<span
    <?if(!empty($atts['span_class'])) echo "class='{$atts['span_class']}'"?>
    <?if(!empty($atts['span_id'])) echo "id='{$atts['span_id']}'"?>
    <?if(!empty($atts['span_data_attrs'])) echo $atts['span_data_attrs']?>
>

    <?if(!empty($atts['span_icon'])):?>
        <i class="<?=$atts['span_icon']?>"></i>
    <?endif;?>

	<?if(!empty($atts['span_content'])) echo $atts['span_content']?>
</span>
