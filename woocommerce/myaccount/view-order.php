<?php
/**
 * View Order - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 10.1.0
 */

defined( 'ABSPATH' ) || exit;

$notes = $order->get_customer_order_notes();
$status = $order->get_status();

// Status colors
$status_classes = array(
	'completed'  => 'bg-green/10 text-green border-green/20',
	'processing' => 'bg-blue/10 text-blue border-blue/20',
	'on-hold'    => 'bg-yellow/10 text-yellow-dark border-yellow/20',
	'pending'    => 'bg-yellow/10 text-yellow-dark border-yellow/20',
	'cancelled'  => 'bg-red/10 text-red border-red/20',
	'refunded'   => 'bg-dark-4/10 text-dark-4 border-dark-4/20',
	'failed'     => 'bg-red/10 text-red border-red/20',
);
$status_class = isset( $status_classes[ $status ] ) ? $status_classes[ $status ] : 'bg-gray-1 text-dark-4 border-gray-3';
?>

<div class="mb-6">
    <a href="<?php echo esc_url( wc_get_endpoint_url( 'orders' ) ); ?>"
        class="inline-flex items-center gap-1.5 text-custom-sm text-dark-4 hover:text-dark transition-colors mb-4">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 12H5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M12 19L5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
        <?php esc_html_e( 'Wróć do zamówień', 'pokrovce' ); ?>
    </a>
    <h2 class="font-semibold text-xl text-dark">
        <?php printf( esc_html__( 'Zamówienie #%s', 'pokrovce' ), esc_html( $order->get_order_number() ) ); ?>
    </h2>
</div>

<!-- Order Status Card -->
<div class="bg-gray-1 rounded-xl p-5 mb-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 bg-[#E67E22]/10 rounded-xl">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                        stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 6H21" stroke="#E67E22" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                        stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div>
                <p class="text-dark-4 text-custom-sm"><?php esc_html_e( 'Data zamówienia', 'pokrovce' ); ?></p>
                <p class="font-medium text-dark">
                    <?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?>
                </p>
            </div>
        </div>
        <span
            class="inline-flex self-start sm:self-auto px-4 py-2 rounded-lg text-sm font-medium border <?php echo esc_attr( $status_class ); ?>">
            <?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>
        </span>
    </div>
</div>

<?php if ( $notes ) : ?>
<!-- Order Updates -->
<div class="bg-blue/5 border border-blue/20 rounded-xl p-5 mb-6">
    <h3 class="font-medium text-dark mb-4 flex items-center gap-2">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                stroke="#3C50E0" stroke-width="2" />
            <path d="M12 8V12" stroke="#3C50E0" stroke-width="2" stroke-linecap="round" />
            <path d="M12 16H12.01" stroke="#3C50E0" stroke-width="2" stroke-linecap="round" />
        </svg>
        <?php esc_html_e( 'Aktualizacje zamówienia', 'pokrovce' ); ?>
    </h3>
    <div class="space-y-3">
        <?php foreach ( $notes as $note ) : ?>
        <div class="bg-white rounded-lg p-4">
            <p class="text-dark-4 text-xs mb-2">
                <?php echo esc_html( date_i18n( __( 'j F Y, H:i', 'pokrovce' ), strtotime( $note->comment_date ) ) ); ?>
            </p>
            <div class="text-dark-3 text-custom-sm">
                <?php echo wpautop( wptexturize( $note->comment_content ) ); ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<?php do_action( 'woocommerce_view_order', $order_id ); ?>