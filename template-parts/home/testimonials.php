<?php
/**
 * Template part for displaying Testimonials section
 *
 * @package pokrovce
 */

// You can replace this with actual testimonials from custom post type or ACF
$testimonials = array(
    array(
        'name'    => 'Monika',
        'role'    => '',
        'avatar'  => get_template_directory_uri() . '/images/users/user-01.jpg',
        'rating'  => 5,
        'content' => 'Materiał naprawdę solidny, dopasowanie do krzeseł zgodne z opisem. W miejscach zgiętych lekko się unosi (przez gumkę), ale u mnie krzesła są pod stołem więc nie rzuca się w oczy. Pokrowiec dobrze maskuje krzesło, nawet jak spód jest ciemny - wszystko ładnie przykrywa. Jestem zadowolona',
    ),
    array(
        'name'    => 'Sara',
        'role'    => '',
        'avatar'  => get_template_directory_uri() . '/images/users/user-02.jpg',
        'rating'  => 5,
        'content' => 'Pokrowce trochę zgniecione -jak to welur, ale wyglądają bardzo dobrze i są porządnie uszyte. Jestem zadowolona',
    ),
    array(
        'name'    => 'Mariusz',
        'role'    => '',
        'avatar'  => get_template_directory_uri() . '/images/users/user-03.jpg',
        'rating'  => 4,
        'content' => 'Wszystko jak w opisie. Wykonanie solidne, materiał ładny i dobrej jakości. Mam krzesła skandynawskie kupione kiedyś w BRW i pokrowce pasują idealnie. Polecam',
    ),
);
?>
<section class="overflow-hidden py-16.5">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <div class="swiper testimonial-carousel common-carousel p-5">
            <!-- section title -->
            <div class="mb-10 flex items-center justify-between">
                <div>

                    <h2 class="font-semibold text-xl xl:text-heading-5 text-dark">
                        <?php esc_html_e( 'Ostatnie opinie o naszych produktach', 'pokrovce' ); ?>
                    </h2>
                </div>

                <div class="flex items-center gap-3">
                    <button class="swiper-button-prev" aria-label="Previous">
                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evfnodd"
                                d="M15.4881 4.43057C15.8026 4.70014 15.839 5.17361 15.5694 5.48811L9.98781 12L15.5694 18.5119C15.839 18.8264 15.8026 19.2999 15.4881 19.5695C15.1736 19.839 14.7001 19.8026 14.4306 19.4881L8.43056 12.4881C8.18981 12.2072 8.18981 11.7928 8.43056 11.5119L14.4306 4.51192C14.7001 4.19743 15.1736 4.161 15.4881 4.43057Z"
                                fill="" />
                        </svg>
                    </button>

                    <button class="swiper-button-next" aria-label="Next">
                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z"
                                fill="" />
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
                            <svg class="<?php echo $i < $testimonial['rating'] ? 'fill-[#FFA645]' : 'fill-gray-4'; ?>"
                                width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99961 0.958374L11.6354 6.28838L17.5384 7.14671L13.269 11.3117L14.2712 17.1909L8.99961 14.4259L3.72798 17.1909L4.73023 11.3117L0.460938 7.14671L6.36386 6.28838L8.99961 0.958374Z" />
                            </svg>
                            <?php endfor; ?>
                        </div>

                        <p class="text-dark mb-6"><?php echo esc_html( $testimonial['content'] ); ?></p>

                        <div class="flex items-center gap-3">
                            <div>
                                <p class="font-medium text-dark"><?php echo esc_html( $testimonial['name'] ); ?></p>
                                <?php if ( ! empty( $testimonial['role'] ) ) : ?>
                                <p class="text-custom-sm text-dark-4"><?php echo esc_html( $testimonial['role'] ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>