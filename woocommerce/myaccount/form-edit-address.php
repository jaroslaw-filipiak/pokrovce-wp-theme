<?php
/**
 * Edit address form - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 9.3.0
 */

defined( 'ABSPATH' ) || exit;

$page_title = ( 'billing' === $load_address ) ? esc_html__( 'Adres rozliczeniowy', 'pokrovce' ) : esc_html__( 'Adres wysyłki', 'pokrovce' );
$page_icon = ( 'billing' === $load_address ) ? 
	'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="4" width="22" height="16" rx="2" stroke="#E67E22" stroke-width="2"/><path d="M1 10H23" stroke="#E67E22" stroke-width="2"/></svg>' :
	'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 21V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V21" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 21H20" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M1 21V8L5 4H19L23 8V21" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

do_action( 'woocommerce_before_edit_account_address_form' ); ?>

<?php if ( ! $load_address ) : ?>
	<?php wc_get_template( 'myaccount/my-address.php' ); ?>
<?php else : ?>

	<div class="mb-6">
		<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address' ) ); ?>" 
		   class="inline-flex items-center gap-1.5 text-custom-sm text-dark-4 hover:text-dark transition-colors mb-4">
			<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M19 12H5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M12 19L5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			<?php esc_html_e( 'Wróć do adresów', 'pokrovce' ); ?>
		</a>
		<div class="flex items-center gap-3">
			<div class="flex items-center justify-center w-12 h-12 bg-[#E67E22]/10 rounded-xl">
				<?php echo $page_icon; ?>
			</div>
			<div>
				<h2 class="font-semibold text-xl text-dark">
					<?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title, $load_address ); ?>
				</h2>
				<p class="text-dark-4 text-custom-sm"><?php esc_html_e( 'Edytuj szczegóły adresu', 'pokrovce' ); ?></p>
			</div>
		</div>
	</div>

	<form method="post" novalidate class="woocommerce-address-fields">
		<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

		<div class="bg-gray-1 rounded-xl p-5 mb-6">
			<div class="woocommerce-address-fields__field-wrapper grid grid-cols-1 sm:grid-cols-2 gap-4">
				<?php
				foreach ( $address as $key => $field ) {
					// Add custom classes to fields
					$field['class'][] = 'pokrovce-form-row';
					if ( isset( $field['type'] ) && 'country' === $field['type'] ) {
						$field['class'][] = 'sm:col-span-2';
					}
					woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $field['value'] ) );
				}
				?>
			</div>
		</div>

		<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

		<div class="flex items-center gap-4">
			<button type="submit" 
				class="bg-[#E67E22] text-white font-medium py-3 px-6 rounded-lg hover:bg-[#E67E22]/90 transition-colors duration-200 flex items-center gap-2" 
				name="save_address">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16L21 8V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M17 21V13H7V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M7 3V8H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<?php esc_html_e( 'Zapisz adres', 'pokrovce' ); ?>
			</button>
			<?php wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>
			<input type="hidden" name="action" value="edit_address" />
		</div>
	</form>

<?php endif; ?>

<?php do_action( 'woocommerce_after_edit_account_address_form' ); ?>
