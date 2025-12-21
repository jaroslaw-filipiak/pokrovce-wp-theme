<?php
/**
 * My Account Dashboard - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$current_user = wp_get_current_user();
?>

<div class="dashboard-content">
	<!-- Welcome Section -->
	<div class="mb-8">
		<h2 class="font-semibold text-xl text-dark mb-2">
			<?php 
			printf( 
				esc_html__( 'Witaj, %s!', 'pokrovce' ), 
				'<span class="text-[#E67E22]">' . esc_html( $current_user->display_name ) . '</span>' 
			); 
			?>
		</h2>
		<p class="text-dark-3">
			<?php 
			printf( 
				wp_kses( 
					__( 'Nie jesteś %1$s? <a href="%2$s" class="text-[#E67E22] font-medium hover:underline">Wyloguj się</a>', 'pokrovce' ), 
					array( 'a' => array( 'href' => array(), 'class' => array() ) ) 
				),
				esc_html( $current_user->display_name ),
				esc_url( wc_logout_url() )
			); 
			?>
		</p>
	</div>

	<!-- Quick Actions Grid -->
	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
		<!-- Orders Card -->
		<a href="<?php echo esc_url( wc_get_endpoint_url( 'orders' ) ); ?>" class="group bg-gray-1 rounded-xl p-5 hover:bg-[#E67E22]/10 transition-colors duration-200">
			<div class="flex items-center gap-4">
				<div class="flex items-center justify-center w-12 h-12 bg-blue/10 rounded-lg group-hover:bg-blue/20 transition-colors">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z" stroke="#3C50E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M3 6H21" stroke="#3C50E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10" stroke="#3C50E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<div>
					<h3 class="font-medium text-dark group-hover:text-[#E67E22] transition-colors"><?php esc_html_e( 'Zamówienia', 'pokrovce' ); ?></h3>
					<p class="text-dark-4 text-custom-sm"><?php esc_html_e( 'Zobacz historię', 'pokrovce' ); ?></p>
				</div>
			</div>
		</a>

		<!-- Addresses Card -->
		<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address' ) ); ?>" class="group bg-gray-1 rounded-xl p-5 hover:bg-[#E67E22]/10 transition-colors duration-200">
			<div class="flex items-center gap-4">
				<div class="flex items-center justify-center w-12 h-12 bg-green/10 rounded-lg group-hover:bg-green/20 transition-colors">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<div>
					<h3 class="font-medium text-dark group-hover:text-[#E67E22] transition-colors"><?php esc_html_e( 'Adresy', 'pokrovce' ); ?></h3>
					<p class="text-dark-4 text-custom-sm"><?php esc_html_e( 'Zarządzaj adresami', 'pokrovce' ); ?></p>
				</div>
			</div>
		</a>

		<!-- Account Details Card -->
		<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-account' ) ); ?>" class="group bg-gray-1 rounded-xl p-5 hover:bg-[#E67E22]/10 transition-colors duration-200">
			<div class="flex items-center gap-4">
				<div class="flex items-center justify-center w-12 h-12 bg-[#E67E22]/10 rounded-lg group-hover:bg-[#E67E22]/20 transition-colors">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<div>
					<h3 class="font-medium text-dark group-hover:text-[#E67E22] transition-colors"><?php esc_html_e( 'Dane konta', 'pokrovce' ); ?></h3>
					<p class="text-dark-4 text-custom-sm"><?php esc_html_e( 'Edytuj profil', 'pokrovce' ); ?></p>
				</div>
			</div>
		</a>
	</div>

	<!-- Info Section -->
	<div class="bg-blue/5 border border-blue/20 rounded-xl p-5">
		<div class="flex items-start gap-3">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mt-0.5">
				<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#3C50E0" stroke-width="2"/>
				<path d="M12 8V12" stroke="#3C50E0" stroke-width="2" stroke-linecap="round"/>
				<path d="M12 16H12.01" stroke="#3C50E0" stroke-width="2" stroke-linecap="round"/>
			</svg>
			<div>
				<p class="text-dark-3">
					<?php 
					$dashboard_desc = __( 'Z panelu konta możesz przeglądać <a href="%1$s" class="text-[#E67E22] font-medium hover:underline">ostatnie zamówienia</a>, zarządzać <a href="%2$s" class="text-[#E67E22] font-medium hover:underline">adresami rozliczeniowymi i wysyłki</a>, oraz <a href="%3$s" class="text-[#E67E22] font-medium hover:underline">edytować hasło i dane konta</a>.', 'pokrovce' );
					
					printf(
						wp_kses( $dashboard_desc, array( 'a' => array( 'href' => array(), 'class' => array() ) ) ),
						esc_url( wc_get_endpoint_url( 'orders' ) ),
						esc_url( wc_get_endpoint_url( 'edit-address' ) ),
						esc_url( wc_get_endpoint_url( 'edit-account' ) )
					);
					?>
				</p>
			</div>
		</div>
	</div>
</div>

<?php
do_action( 'woocommerce_account_dashboard' );
do_action( 'woocommerce_before_my_account' );
do_action( 'woocommerce_after_my_account' );
