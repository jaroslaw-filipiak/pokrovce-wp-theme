<?php
/**
 * My Addresses - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 9.3.0
 */

defined( 'ABSPATH' ) || exit;

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing'  => __( 'Adres rozliczeniowy', 'pokrovce' ),
			'shipping' => __( 'Adres wysyłki', 'pokrovce' ),
		),
		$customer_id
	);
} else {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing' => __( 'Adres rozliczeniowy', 'pokrovce' ),
		),
		$customer_id
	);
}
?>

<div class="mb-6">
	<h2 class="font-semibold text-xl text-dark"><?php esc_html_e( 'Twoje adresy', 'pokrovce' ); ?></h2>
	<p class="text-dark-4 text-custom-sm mt-1">
		<?php esc_html_e( 'Poniższe adresy będą używane domyślnie na stronie płatności.', 'pokrovce' ); ?>
	</p>
</div>

<div class="grid grid-cols-1 <?php echo ( count( $get_addresses ) > 1 ) ? 'md:grid-cols-2' : ''; ?> gap-6">
	<?php foreach ( $get_addresses as $name => $address_title ) : 
		$address = wc_get_account_formatted_address( $name );
		$icon = ( 'billing' === $name ) ? 
			'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="4" width="22" height="16" rx="2" stroke="#3C50E0" stroke-width="2"/><path d="M1 10H23" stroke="#3C50E0" stroke-width="2"/></svg>' :
			'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 21V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V21" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 21H20" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M1 21V8L5 4H19L23 8V21" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
		$bg_color = ( 'billing' === $name ) ? 'bg-blue/10' : 'bg-green/10';
	?>
		<div class="bg-gray-1 rounded-xl p-5">
			<div class="flex items-center justify-between mb-4">
				<div class="flex items-center gap-3">
					<div class="flex items-center justify-center w-10 h-10 <?php echo esc_attr( $bg_color ); ?> rounded-lg">
						<?php echo $icon; ?>
					</div>
					<h3 class="font-medium text-dark"><?php echo esc_html( $address_title ); ?></h3>
				</div>
				<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" 
				   class="inline-flex items-center gap-1.5 text-custom-sm font-medium text-[#E67E22] hover:text-[#E67E22]/80 transition-colors">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M18.5 2.50001C18.8978 2.10219 19.4374 1.87869 20 1.87869C20.5626 1.87869 21.1022 2.10219 21.5 2.50001C21.8978 2.89784 22.1213 3.4374 22.1213 4.00001C22.1213 4.56262 21.8978 5.10219 21.5 5.50001L12 15L8 16L9 12L18.5 2.50001Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<?php echo $address ? esc_html__( 'Edytuj', 'pokrovce' ) : esc_html__( 'Dodaj', 'pokrovce' ); ?>
				</a>
			</div>
			
			<?php if ( $address ) : ?>
				<address class="not-italic text-dark-3 text-custom-sm leading-relaxed">
					<?php echo wp_kses_post( $address ); ?>
				</address>
			<?php else : ?>
				<div class="flex items-center gap-2 text-dark-4 text-custom-sm">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2"/>
						<path d="M12 8V12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
						<path d="M12 16H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
					</svg>
					<?php esc_html_e( 'Nie ustawiłeś jeszcze tego adresu.', 'pokrovce' ); ?>
				</div>
			<?php endif; ?>

			<?php do_action( 'woocommerce_my_account_after_my_address', $name ); ?>
		</div>
	<?php endforeach; ?>
</div>
