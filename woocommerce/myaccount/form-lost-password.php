<?php
/**
 * Lost password form - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 9.2.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>

<div class="max-w-md mx-auto">
	<div class="bg-white rounded-2xl shadow-1 border border-gray-3 p-6 sm:p-8">
		<div class="text-center mb-6">
			<div class="flex items-center justify-center w-16 h-16 bg-yellow/10 rounded-full mx-auto mb-4">
				<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="3" y="11" width="18" height="11" rx="2" stroke="#FBBF24" stroke-width="2"/>
					<path d="M7 11V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V11" stroke="#FBBF24" stroke-width="2" stroke-linecap="round"/>
					<circle cx="12" cy="16" r="1" fill="#FBBF24"/>
				</svg>
			</div>
			<h2 class="font-semibold text-xl text-dark"><?php esc_html_e( 'Zapomniałeś hasła?', 'pokrovce' ); ?></h2>
			<p class="text-dark-4 text-custom-sm mt-2">
				<?php esc_html_e( 'Wpisz swój email lub nazwę użytkownika, a wyślemy Ci link do resetowania hasła.', 'pokrovce' ); ?>
			</p>
		</div>

		<form method="post" class="woocommerce-ResetPassword lost_reset_password space-y-5">

			<div>
				<label for="user_login" class="block text-dark font-medium mb-2 text-custom-sm">
					<?php esc_html_e( 'Email lub nazwa użytkownika', 'pokrovce' ); ?> <span class="text-red">*</span>
				</label>
				<input type="text" 
					class="w-full bg-gray-1 border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
					name="user_login" 
					id="user_login" 
					autocomplete="username"
					placeholder="<?php esc_attr_e( 'Wpisz email lub nazwę', 'pokrovce' ); ?>" 
					required />
			</div>

			<?php do_action( 'woocommerce_lostpassword_form' ); ?>

			<input type="hidden" name="wc_reset_password" value="true" />
			<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
			
			<button type="submit" 
				class="w-full bg-[#E67E22] text-white font-medium py-3.5 px-6 rounded-lg cursor-pointer hover:bg-[#E67E22]/90 transition-colors duration-200 flex items-center justify-center gap-2">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<?php esc_html_e( 'Wyślij link resetujący', 'pokrovce' ); ?>
			</button>

			<div class="text-center">
				<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="text-[#E67E22] text-custom-sm font-medium hover:text-[#E67E22]/80 transition-colors">
					<?php esc_html_e( '← Wróć do logowania', 'pokrovce' ); ?>
				</a>
			</div>

		</form>
	</div>
</div>

<?php do_action( 'woocommerce_after_lost_password_form' ); ?>
