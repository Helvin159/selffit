<?php
/**
 * Order tracking form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/form-tracking.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $post;
?>

<form action="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" method="post" class="woocommerce-form woocommerce-form-track-order track_order">

	<p><?php esc_html_e( 'Para rastrear su pedido, ingrese su ID de pedido en el cuadro a continuación y presione el botón "Seguir". Esto se le proporcionó en su recibo y en el correo electrónico de confirmación que debería haber recibido.', 'woocommerce' ); ?></p>

	<p class="form-row form-row-first"><label for="orderid"><?php esc_html_e( 'Solicitar ID', 'woocommerce' ); ?></label> <input class="input-text" type="text" name="orderid" id="orderid" value="<?php echo isset( $_REQUEST['orderid'] ) ? esc_attr( wp_unslash( $_REQUEST['orderid'] ) ) : ''; ?>" placeholder="<?php esc_attr_e( 'Encontrado en tu email de confirmación de orden.', 'woocommerce' ); ?>" /></p><?php // @codingStandardsIgnoreLine ?>
	<p class="form-row form-row-last"><label for="order_email"><?php esc_html_e( 'Correo Electrónico de Facturas', 'woocommerce' ); ?></label> <input class="input-text" type="text" name="order_email" id="order_email" value="<?php echo isset( $_REQUEST['order_email'] ) ? esc_attr( wp_unslash( $_REQUEST['order_email'] ) ) : ''; ?>" placeholder="<?php esc_attr_e( 'Correo electrónico que usó durante el pago.', 'woocommerce' ); ?>" /></p><?php // @codingStandardsIgnoreLine ?>
	<div class="clear"></div>

	<p class="form-row"><button type="submit" class="button" name="track" value="<?php esc_attr_e( 'Rastrear Pedidos', 'woocommerce' ); ?>"><?php esc_html_e( 'Rastrear Pedidos', 'woocommerce' ); ?></button></p>
	<?php wp_nonce_field( 'woocommerce-order_tracking', 'woocommerce-order-tracking-nonce' ); ?>

</form>
