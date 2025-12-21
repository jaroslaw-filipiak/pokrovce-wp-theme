<?php
/**
 * Edit account form - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 9.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' );
?>

<div class="mb-6">
	<h2 class="font-semibold text-xl text-dark"><?php esc_html_e( 'Dane konta', 'pokrovce' ); ?></h2>
	<p class="text-dark-4 text-custom-sm mt-1"><?php esc_html_e( 'Zarządzaj danymi swojego konta i hasłem', 'pokrovce' ); ?></p>
</div>

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?>>

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<!-- Personal Info Section -->
	<div class="bg-gray-1 rounded-xl p-5 mb-6">
		<h3 class="font-medium text-dark mb-4 flex items-center gap-2">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			<?php esc_html_e( 'Dane osobowe', 'pokrovce' ); ?>
		</h3>
		
		<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
			<div>
				<label for="account_first_name" class="block text-dark font-medium mb-2 text-custom-sm">
					<?php esc_html_e( 'Imię', 'pokrovce' ); ?> <span class="text-red">*</span>
				</label>
				<input type="text" 
					class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
					name="account_first_name" 
					id="account_first_name" 
					autocomplete="given-name" 
					value="<?php echo esc_attr( $user->first_name ); ?>" 
					required />
			</div>
			<div>
				<label for="account_last_name" class="block text-dark font-medium mb-2 text-custom-sm">
					<?php esc_html_e( 'Nazwisko', 'pokrovce' ); ?> <span class="text-red">*</span>
				</label>
				<input type="text" 
					class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
					name="account_last_name" 
					id="account_last_name" 
					autocomplete="family-name" 
					value="<?php echo esc_attr( $user->last_name ); ?>" 
					required />
			</div>
		</div>

		<div class="mb-4">
			<label for="account_display_name" class="block text-dark font-medium mb-2 text-custom-sm">
				<?php esc_html_e( 'Nazwa wyświetlana', 'pokrovce' ); ?> <span class="text-red">*</span>
			</label>
			<input type="text" 
				class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
				name="account_display_name" 
				id="account_display_name" 
				value="<?php echo esc_attr( $user->display_name ); ?>" 
				required />
			<p class="text-dark-4 text-xs mt-1">
				<?php esc_html_e( 'Ta nazwa będzie widoczna w sekcji konta i w recenzjach.', 'pokrovce' ); ?>
			</p>
		</div>

		<div>
			<label for="account_email" class="block text-dark font-medium mb-2 text-custom-sm">
				<?php esc_html_e( 'Adres email', 'pokrovce' ); ?> <span class="text-red">*</span>
			</label>
			<input type="email" 
				class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
				name="account_email" 
				id="account_email" 
				autocomplete="email" 
				value="<?php echo esc_attr( $user->user_email ); ?>" 
				required />
		</div>
	</div>

	<?php do_action( 'woocommerce_edit_account_form_fields' ); ?>

	<!-- Password Section -->
	<div class="bg-gray-1 rounded-xl p-5 mb-6">
		<h3 class="font-medium text-dark mb-4 flex items-center gap-2">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect x="3" y="11" width="18" height="11" rx="2" stroke="#E67E22" stroke-width="2"/>
				<path d="M7 11V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V11" stroke="#E67E22" stroke-width="2" stroke-linecap="round"/>
			</svg>
			<?php esc_html_e( 'Zmiana hasła', 'pokrovce' ); ?>
		</h3>
		
		<p class="text-dark-4 text-custom-sm mb-4">
			<?php esc_html_e( 'Pozostaw pola puste, jeśli nie chcesz zmieniać hasła.', 'pokrovce' ); ?>
		</p>

		<div class="space-y-4">
			<div>
				<label for="password_current" class="block text-dark font-medium mb-2 text-custom-sm">
					<?php esc_html_e( 'Obecne hasło', 'pokrovce' ); ?>
				</label>
				<input type="password" 
					class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
					name="password_current" 
					id="password_current" 
					autocomplete="off"
					placeholder="<?php esc_attr_e( 'Wpisz obecne hasło', 'pokrovce' ); ?>" />
			</div>
			<div>
				<label for="password_1" class="block text-dark font-medium mb-2 text-custom-sm">
					<?php esc_html_e( 'Nowe hasło', 'pokrovce' ); ?>
				</label>
				<input type="password" 
					class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
					name="password_1" 
					id="password_1" 
					autocomplete="off"
					placeholder="<?php esc_attr_e( 'Wpisz nowe hasło', 'pokrovce' ); ?>" />
			</div>
			<div>
				<label for="password_2" class="block text-dark font-medium mb-2 text-custom-sm">
					<?php esc_html_e( 'Potwierdź nowe hasło', 'pokrovce' ); ?>
				</label>
				<input type="password" 
					class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
					name="password_2" 
					id="password_2" 
					autocomplete="off"
					placeholder="<?php esc_attr_e( 'Powtórz nowe hasło', 'pokrovce' ); ?>" />
			</div>
		</div>
	</div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<div class="flex items-center gap-4">
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" 
			class="bg-[#E67E22] text-white font-medium py-3 px-6 rounded-lg hover:bg-[#E67E22]/90 transition-colors duration-200 flex items-center gap-2" 
			name="save_account_details">
			<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16L21 8V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M17 21V13H7V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7 3V8H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			<?php esc_html_e( 'Zapisz zmiany', 'pokrovce' ); ?>
		</button>
		<input type="hidden" name="action" value="save_account_details" />
	</div>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
