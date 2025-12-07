<?php
/**
 * Template part for displaying Testimonials section
 *
 * @package pokrovce
 */

// You can replace this with actual testimonials from custom post type or ACF
$testimonials = array(
    array(
        'name'    => 'John Smith',
        'role'    => 'Verified Buyer',
        'avatar'  => get_template_directory_uri() . '/images/users/user-01.jpg',
        'rating'  => 5,
        'content' => 'Great quality products and fast shipping. The customer service was excellent and helped me with my order promptly.',
    ),
    array(
        'name'    => 'Sarah Johnson',
        'role'    => 'Verified Buyer',
        'avatar'  => get_template_directory_uri() . '/images/users/user-02.jpg',
        'rating'  => 5,
        'content' => 'I love shopping here! The products always exceed my expectations. Will definitely be ordering again soon.',
    ),
    array(
        'name'    => 'Mike Davis',
        'role'    => 'Verified Buyer',
        'avatar'  => get_template_directory_uri() . '/images/users/user-03.jpg',
        'rating'  => 4,
        'content' => 'Best online shopping experience I have had. The website is easy to navigate and checkout was seamless.',
    ),
);
?>
<section class="overflow-hidden pb-16.5">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <div class="swiper testimonial-carousel common-carousel p-5">
            <!-- section title -->
            <div class="mb-10 flex items-center justify-between">
                <div>
                    <span class="flex items-center gap-2.5 font-medium text-dark mb-1.5">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-08.svg" alt="icon" width="17" height="17">
                        <?php esc_html_e( 'Testimonials', 'pokrovce' ); ?>
                    </span>
                    <h2 class="font-semibold text-xl xl:text-heading-5 text-dark">
                        <?php esc_html_e( 'User Feedbacks', 'pokrovce' ); ?>
                    </h2>
                </div>

                <div class="flex items-center gap-3">
                    <button class="swiper-button-prev" aria-label="Previous">
                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4881 4.43057C15.8026 4.70014 15.839 5.17361 15.5694 5.48811L9.98781 12L15.5694 18.5119C15.839 18.8264 15.8026 19.2999 15.4881 19.5695C15.1736 19.839 14.7001 19.8026 14.4306 19.4881L8.43056 12.4881C8.18981 12.2072 8.18981 11.7928 8.43056 11.5119L14.4306 4.51192C14.7001 4.19743 15.1736 4.161 15.4881 4.43057Z" fill=""/>
                        </svg>
                    </button>

                    <button class="swiper-button-next" aria-label="Next">
                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill=""/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="swiper-wrapper">
                <?php foreach ( $testimonials as $testimonial ) : ?>
                    <div class="swiper-slide">
                        <div class="rounded-lg bg-white shadow-1 p-6">
                            <!-- stars -->
                            <div class="flex items-center gap-1 mb-4">
                                <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                                    <svg class="<?php echo $i < $testimonial['rating'] ? 'fill-[#FFA645]' : 'fill-gray-4'; ?>" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99961 0.958374L11.6354 6.28838L17.5384 7.14671L13.269 11.3117L14.2712 17.1909L8.99961 14.4259L3.72798 17.1909L4.73023 11.3117L0.460938 7.14671L6.36386 6.28838L8.99961 0.958374Z"/>
                                    </svg>
                                <?php endfor; ?>
                            </div>

                            <p class="text-dark mb-6"><?php echo esc_html( $testimonial['content'] ); ?></p>

                            <div class="flex items-center gap-3">
                                <img src="<?php echo esc_url( $testimonial['avatar'] ); ?>" alt="<?php echo esc_attr( $testimonial['name'] ); ?>" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <h4 class="font-medium text-dark"><?php echo esc_html( $testimonial['name'] ); ?></h4>
                                    <p class="text-custom-sm text-dark-4"><?php echo esc_html( $testimonial['role'] ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

