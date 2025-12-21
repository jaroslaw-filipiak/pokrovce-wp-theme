<?php
/**
 * Orders - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 9.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders ); ?>

<?php if ( $has_orders ) : ?>

	<div class="mb-6">
		<h2 class="font-semibold text-xl text-dark"><?php esc_html_e( 'Historia zamówień', 'pokrovce' ); ?></h2>
		<p class="text-dark-4 text-custom-sm mt-1"><?php esc_html_e( 'Przeglądaj i śledź swoje zamówienia', 'pokrovce' ); ?></p>
	</div>

	<!-- Desktop Table -->
	<div class="hidden md:block overflow-x-auto">
		<table class="w-full border-collapse">
			<thead>
				<tr class="bg-gray-1 border-b border-gray-3">
					<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
						<th class="text-left px-4 py-3 text-dark font-medium text-custom-sm">
							<?php echo esc_html( $column_name ); ?>
						</th>
					<?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ( $customer_orders->orders as $customer_order ) {
					$order      = wc_get_order( $customer_order );
					$item_count = $order->get_item_count() - $order->get_item_count_refunded();
					$status     = $order->get_status();
					
					// Status colors
					$status_classes = array(
						'completed'  => 'bg-green/10 text-green',
						'processing' => 'bg-blue/10 text-blue',
						'on-hold'    => 'bg-yellow/10 text-yellow-dark',
						'pending'    => 'bg-yellow/10 text-yellow-dark',
						'cancelled'  => 'bg-red/10 text-red',
						'refunded'   => 'bg-dark-4/10 text-dark-4',
						'failed'     => 'bg-red/10 text-red',
					);
					$status_class = isset( $status_classes[ $status ] ) ? $status_classes[ $status ] : 'bg-gray-1 text-dark-4';
					?>
					<tr class="border-b border-gray-3 hover:bg-gray-1/50 transition-colors">
						<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
							<td class="px-4 py-4 text-dark-3 text-custom-sm">
								<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
									<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

								<?php elseif ( 'order-number' === $column_id ) : ?>
									<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" class="font-medium text-[#E67E22] hover:text-[#E67E22]/80 transition-colors">
										#<?php echo esc_html( $order->get_order_number() ); ?>
									</a>

								<?php elseif ( 'order-date' === $column_id ) : ?>
									<time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>">
										<?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?>
									</time>

								<?php elseif ( 'order-status' === $column_id ) : ?>
									<span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium <?php echo esc_attr( $status_class ); ?>">
										<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>
									</span>

								<?php elseif ( 'order-total' === $column_id ) : ?>
									<span class="font-medium text-dark">
										<?php echo wp_kses_post( $order->get_formatted_order_total() ); ?>
									</span>
									<span class="text-dark-4 text-xs ml-1">
										(<?php echo esc_html( sprintf( _n( '%s produkt', '%s produkty', $item_count, 'pokrovce' ), $item_count ) ); ?>)
									</span>

								<?php elseif ( 'order-actions' === $column_id ) : ?>
									<?php
									$actions = wc_get_account_orders_actions( $order );
									if ( ! empty( $actions ) ) {
										foreach ( $actions as $key => $action ) {
											echo '<a href="' . esc_url( $action['url'] ) . '" class="inline-flex items-center gap-1.5 text-custom-sm font-medium text-dark hover:text-[#E67E22] transition-colors mr-3">';
											if ( 'view' === $key ) {
												echo '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
											}
											echo esc_html( $action['name'] ) . '</a>';
										}
									}
									?>
								<?php endif; ?>
							</td>
						<?php endforeach; ?>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>

	<!-- Mobile Cards -->
	<div class="md:hidden space-y-4">
		<?php
		foreach ( $customer_orders->orders as $customer_order ) {
			$order      = wc_get_order( $customer_order );
			$item_count = $order->get_item_count() - $order->get_item_count_refunded();
			$status     = $order->get_status();
			
			$status_classes = array(
				'completed'  => 'bg-green/10 text-green',
				'processing' => 'bg-blue/10 text-blue',
				'on-hold'    => 'bg-yellow/10 text-yellow-dark',
				'pending'    => 'bg-yellow/10 text-yellow-dark',
				'cancelled'  => 'bg-red/10 text-red',
				'refunded'   => 'bg-dark-4/10 text-dark-4',
				'failed'     => 'bg-red/10 text-red',
			);
			$status_class = isset( $status_classes[ $status ] ) ? $status_classes[ $status ] : 'bg-gray-1 text-dark-4';
			?>
			<div class="bg-gray-1 rounded-xl p-4">
				<div class="flex items-center justify-between mb-3">
					<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" class="font-medium text-[#E67E22]">
						#<?php echo esc_html( $order->get_order_number() ); ?>
					</a>
					<span class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium <?php echo esc_attr( $status_class ); ?>">
						<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>
					</span>
				</div>
				<div class="space-y-2 text-custom-sm">
					<div class="flex justify-between">
						<span class="text-dark-4"><?php esc_html_e( 'Data:', 'pokrovce' ); ?></span>
						<span class="text-dark"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></span>
					</div>
					<div class="flex justify-between">
						<span class="text-dark-4"><?php esc_html_e( 'Suma:', 'pokrovce' ); ?></span>
						<span class="text-dark font-medium"><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></span>
					</div>
				</div>
				<div class="mt-3 pt-3 border-t border-gray-3">
					<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" class="inline-flex items-center gap-1.5 text-custom-sm font-medium text-dark hover:text-[#E67E22] transition-colors">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<?php esc_html_e( 'Zobacz szczegóły', 'pokrovce' ); ?>
					</a>
				</div>
			</div>
			<?php
		}
		?>
	</div>

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) : ?>
		<div class="flex items-center justify-center gap-3 mt-8">
			<?php if ( 1 !== $current_page ) : ?>
				<a href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>" 
				   class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-3 text-dark-3 hover:bg-gray-1 transition-colors">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M19 12H5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12 19L5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<?php esc_html_e( 'Poprzednia', 'pokrovce' ); ?>
				</a>
			<?php endif; ?>

			<span class="text-dark-4 text-custom-sm">
				<?php printf( esc_html__( 'Strona %1$d z %2$d', 'pokrovce' ), $current_page, $customer_orders->max_num_pages ); ?>
			</span>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>
				<a href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>" 
				   class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-3 text-dark-3 hover:bg-gray-1 transition-colors">
					<?php esc_html_e( 'Następna', 'pokrovce' ); ?>
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12 5L19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

<?php else : ?>

	<div class="text-center py-12">
		<div class="flex items-center justify-center w-20 h-20 bg-gray-1 rounded-full mx-auto mb-6">
			<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z" stroke="#8D93A5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M3 6H21" stroke="#8D93A5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10" stroke="#8D93A5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</div>
		<h3 class="font-semibold text-lg text-dark mb-2"><?php esc_html_e( 'Brak zamówień', 'pokrovce' ); ?></h3>
		<p class="text-dark-4 mb-6"><?php esc_html_e( 'Nie złożyłeś jeszcze żadnego zamówienia.', 'pokrovce' ); ?></p>
		<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" 
		   class="inline-flex items-center gap-2 bg-[#E67E22] text-white font-medium py-3 px-6 rounded-lg hover:bg-[#E67E22]/90 transition-colors">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M3 6H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			<?php esc_html_e( 'Przeglądaj produkty', 'pokrovce' ); ?>
		</a>
	</div>

<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
