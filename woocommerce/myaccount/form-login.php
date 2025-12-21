<?php
/**
 * Login Form - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 9.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="myaccount-login-wrapper">
	
	<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
	
	<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
		
		<!-- Login Column -->
		<div class="login-column">
			<div class="bg-white rounded-2xl shadow-1 border border-gray-3 p-6 sm:p-8">
				<div class="flex items-center gap-3 mb-6">
					<div class="flex items-center justify-center w-12 h-12 bg-[#E67E22]/10 rounded-xl">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H15" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M10 17L15 12L10 7" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M15 12H3" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<div>
						<h2 class="font-semibold text-xl text-dark"><?php esc_html_e( 'Logowanie', 'pokrovce' ); ?></h2>
						<p class="text-dark-4 text-custom-sm"><?php esc_html_e( 'Zaloguj się do swojego konta', 'pokrovce' ); ?></p>
					</div>
				</div>

				<form class="woocommerce-form woocommerce-form-login login space-y-5" method="post" novalidate>
					<?php do_action( 'woocommerce_login_form_start' ); ?>

					<div>
						<label for="username" class="block text-dark font-medium mb-2 text-custom-sm">
							<?php esc_html_e( 'Email lub nazwa użytkownika', 'pokrovce' ); ?> <span class="text-red">*</span>
						</label>
						<input type="text" 
							class="w-full bg-gray-1 border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
							name="username" 
							id="username" 
							autocomplete="username" 
							placeholder="<?php esc_attr_e( 'Wpisz email lub nazwę', 'pokrovce' ); ?>"
							value="<?php echo ( ! empty( $_POST['username'] ) && is_string( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" 
							required />
					</div>

					<div>
						<label for="password" class="block text-dark font-medium mb-2 text-custom-sm">
							<?php esc_html_e( 'Hasło', 'pokrovce' ); ?> <span class="text-red">*</span>
						</label>
						<input type="password" 
							class="w-full bg-gray-1 border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
							name="password" 
							id="password" 
							autocomplete="current-password"
							placeholder="<?php esc_attr_e( 'Wpisz hasło', 'pokrovce' ); ?>" 
							required />
					</div>

					<?php do_action( 'woocommerce_login_form' ); ?>

					<div class="flex items-center justify-between">
						<label class="flex items-center gap-2 cursor-pointer">
							<input type="checkbox" name="rememberme" id="rememberme" value="forever" 
								class="w-4 h-4 accent-[#E67E22] border-gray-3 rounded" />
							<span class="text-dark-3 text-custom-sm"><?php esc_html_e( 'Zapamiętaj mnie', 'pokrovce' ); ?></span>
						</label>
						<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="text-[#E67E22] text-custom-sm font-medium hover:text-[#E67E22]/80 transition-colors">
							<?php esc_html_e( 'Zapomniałeś hasła?', 'pokrovce' ); ?>
						</a>
					</div>

					<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
					
					<button type="submit" 
						class="w-full bg-[#E67E22] text-white font-medium py-3.5 px-6 rounded-lg cursor-pointer hover:bg-[#E67E22]/90 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#E67E22]/50" 
						name="login">
						<?php esc_html_e( 'Zaloguj się', 'pokrovce' ); ?>
					</button>

					<?php do_action( 'woocommerce_login_form_end' ); ?>
				</form>
			</div>
		</div>

		<!-- Register Column -->
		<div class="register-column">
			<div class="bg-gray-1 rounded-2xl p-6 sm:p-8">
				<div class="flex items-center gap-3 mb-6">
					<div class="flex items-center justify-center w-12 h-12 bg-green/10 rounded-xl">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M8.5 11C10.7091 11 12.5 9.20914 12.5 7C12.5 4.79086 10.7091 3 8.5 3C6.29086 3 4.5 4.79086 4.5 7C4.5 9.20914 6.29086 11 8.5 11Z" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M20 8V14" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M23 11H17" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<div>
						<h2 class="font-semibold text-xl text-dark"><?php esc_html_e( 'Rejestracja', 'pokrovce' ); ?></h2>
						<p class="text-dark-4 text-custom-sm"><?php esc_html_e( 'Utwórz nowe konto', 'pokrovce' ); ?></p>
					</div>
				</div>

				<form method="post" class="woocommerce-form woocommerce-form-register register space-y-5" <?php do_action( 'woocommerce_register_form_tag' ); ?>>
					<?php do_action( 'woocommerce_register_form_start' ); ?>

					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
					<div>
						<label for="reg_username" class="block text-dark font-medium mb-2 text-custom-sm">
							<?php esc_html_e( 'Nazwa użytkownika', 'pokrovce' ); ?> <span class="text-red">*</span>
						</label>
						<input type="text" 
							class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
							name="username" 
							id="reg_username" 
							autocomplete="username"
							placeholder="<?php esc_attr_e( 'Wybierz nazwę użytkownika', 'pokrovce' ); ?>" 
							value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" 
							required />
					</div>
					<?php endif; ?>

					<div>
						<label for="reg_email" class="block text-dark font-medium mb-2 text-custom-sm">
							<?php esc_html_e( 'Adres email', 'pokrovce' ); ?> <span class="text-red">*</span>
						</label>
						<input type="email" 
							class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
							name="email" 
							id="reg_email" 
							autocomplete="email"
							placeholder="<?php esc_attr_e( 'Wpisz adres email', 'pokrovce' ); ?>" 
							value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" 
							required />
					</div>

					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
					<div>
						<label for="reg_password" class="block text-dark font-medium mb-2 text-custom-sm">
							<?php esc_html_e( 'Hasło', 'pokrovce' ); ?> <span class="text-red">*</span>
						</label>
						<input type="password" 
							class="w-full bg-white border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
							name="password" 
							id="reg_password" 
							autocomplete="new-password"
							placeholder="<?php esc_attr_e( 'Utwórz hasło', 'pokrovce' ); ?>" 
							required />
					</div>
					<?php else : ?>
					<div class="bg-blue/10 border border-blue/20 rounded-lg p-4">
						<p class="text-blue text-custom-sm flex items-center gap-2">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="currentColor" stroke-width="1.5"/>
								<path d="M8 5.33333V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
								<path d="M8 10.6667H8.00667" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
							<?php esc_html_e( 'Link do ustawienia hasła zostanie wysłany na Twój email.', 'pokrovce' ); ?>
						</p>
					</div>
					<?php endif; ?>

					<?php do_action( 'woocommerce_register_form' ); ?>

					<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
					
					<button type="submit" 
						class="w-full bg-dark text-white font-medium py-3.5 px-6 rounded-lg cursor-pointer hover:bg-dark-2 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-dark/50" 
						name="register">
						<?php esc_html_e( 'Zarejestruj się', 'pokrovce' ); ?>
					</button>

					<?php do_action( 'woocommerce_register_form_end' ); ?>
				</form>

				<!-- Benefits -->
				<div class="mt-6 pt-6 border-t border-gray-3">
					<p class="text-dark font-medium mb-3"><?php esc_html_e( 'Korzyści z posiadania konta:', 'pokrovce' ); ?></p>
					<ul class="space-y-2">
						<li class="flex items-center gap-2 text-dark-3 text-custom-sm">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<?php esc_html_e( 'Szybsze składanie zamówień', 'pokrovce' ); ?>
						</li>
						<li class="flex items-center gap-2 text-dark-3 text-custom-sm">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<?php esc_html_e( 'Śledzenie statusu zamówień', 'pokrovce' ); ?>
						</li>
						<li class="flex items-center gap-2 text-dark-3 text-custom-sm">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<?php esc_html_e( 'Historia zakupów', 'pokrovce' ); ?>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<?php else : ?>

	<!-- Login only (no registration) -->
	<div class="max-w-md mx-auto">
		<div class="bg-white rounded-2xl shadow-1 border border-gray-3 p-6 sm:p-8">
			<div class="text-center mb-6">
				<div class="flex items-center justify-center w-16 h-16 bg-[#E67E22]/10 rounded-full mx-auto mb-4">
					<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H15" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M10 17L15 12L10 7" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M15 12H3" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<h2 class="font-semibold text-xl text-dark"><?php esc_html_e( 'Logowanie', 'pokrovce' ); ?></h2>
				<p class="text-dark-4 text-custom-sm"><?php esc_html_e( 'Zaloguj się do swojego konta', 'pokrovce' ); ?></p>
			</div>

			<form class="woocommerce-form woocommerce-form-login login space-y-5" method="post" novalidate>
				<?php do_action( 'woocommerce_login_form_start' ); ?>

				<div>
					<label for="username" class="block text-dark font-medium mb-2 text-custom-sm">
						<?php esc_html_e( 'Email lub nazwa użytkownika', 'pokrovce' ); ?> <span class="text-red">*</span>
					</label>
					<input type="text" 
						class="w-full bg-gray-1 border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
						name="username" 
						id="username" 
						autocomplete="username" 
						value="<?php echo ( ! empty( $_POST['username'] ) && is_string( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" 
						required />
				</div>

				<div>
					<label for="password" class="block text-dark font-medium mb-2 text-custom-sm">
						<?php esc_html_e( 'Hasło', 'pokrovce' ); ?> <span class="text-red">*</span>
					</label>
					<input type="password" 
						class="w-full bg-gray-1 border border-gray-3 outline-none rounded-lg placeholder:text-dark-4 py-3 px-4 focus:border-[#E67E22] focus:ring-2 focus:ring-[#E67E22]/20 transition-all duration-200" 
						name="password" 
						id="password" 
						autocomplete="current-password" 
						required />
				</div>

				<?php do_action( 'woocommerce_login_form' ); ?>

				<div class="flex items-center justify-between">
					<label class="flex items-center gap-2 cursor-pointer">
						<input type="checkbox" name="rememberme" id="rememberme" value="forever" 
							class="w-4 h-4 accent-[#E67E22] border-gray-3 rounded" />
						<span class="text-dark-3 text-custom-sm"><?php esc_html_e( 'Zapamiętaj mnie', 'pokrovce' ); ?></span>
					</label>
					<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="text-[#E67E22] text-custom-sm font-medium hover:text-[#E67E22]/80 transition-colors">
						<?php esc_html_e( 'Zapomniałeś hasła?', 'pokrovce' ); ?>
					</a>
				</div>

				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				
				<button type="submit" 
					class="w-full bg-[#E67E22] text-white font-medium py-3.5 px-6 rounded-lg cursor-pointer hover:bg-[#E67E22]/90 transition-colors duration-200" 
					name="login">
					<?php esc_html_e( 'Zaloguj się', 'pokrovce' ); ?>
				</button>

				<?php do_action( 'woocommerce_login_form_end' ); ?>
			</form>
		</div>
	</div>

	<?php endif; ?>

</div>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
