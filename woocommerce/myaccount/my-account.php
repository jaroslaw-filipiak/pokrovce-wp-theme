<?php
/**
 * My Account page - Styled for Pokrovce theme
 *
 * @package Pokrovce
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

$current_user = wp_get_current_user();
?>

<div class="myaccount-wrapper">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <!-- Sidebar Navigation -->
        <div class="lg:col-span-1">
            <?php do_action( 'woocommerce_account_navigation' ); ?>
        </div>

        <!-- Content Area -->
        <div class="lg:col-span-3">
            <div class="woocommerce-MyAccount-content bg-white rounded-2xl shadow-1 border border-gray-3 p-6 sm:p-8">
                <?php do_action( 'woocommerce_account_content' ); ?>
            </div>
        </div>

    </div>
</div>