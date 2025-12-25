<?php
/**
 * Template Name: FAQ
 * Template Post Type: page
 *
 * FAQ page template with accordion
 *
 * @package Pokrovce
 */

get_header();

// FAQ Schema data
$faq_items = array(
    // Produkty i rozmiary
    array(
        'question' => 'Jak dobrać odpowiedni rozmiar pokrowca do mojego krzesła?',
        'answer' => 'Aby dobrać odpowiedni rozmiar, zmierz szerokość i głębokość siedziska oraz wysokość oparcia krzesła. W opisie każdego produktu znajdziesz dokładne wymiary. Nasze pokrowce są elastyczne i pasują do większości standardowych krzeseł. Jeśli masz wątpliwości, skontaktuj się z nami - chętnie pomożemy dobrać odpowiedni rozmiar.'
    ),
    array(
        'question' => 'Czy pokrowce pasują do krzeseł skandynawskich?',
        'answer' => 'Tak! Nasze pokrowce są zaprojektowane tak, aby pasowały do najpopularniejszych modeli krzeseł, w tym krzeseł skandynawskich z IKEA, BRW, Agata Meble czy Jysk. Elastyczny materiał i gumka w dolnej części zapewniają dobre dopasowanie do różnych kształtów.'
    ),
    array(
        'question' => 'Z jakiego materiału wykonane są pokrowce?',
        'answer' => 'Nasze pokrowce wykonane są z wysokiej jakości tkaniny welurowej lub elastycznego materiału typu spandex. Materiały są przyjemne w dotyku, wytrzymałe i łatwe w utrzymaniu czystości. Nie mechacą się i zachowują swój kolor nawet po wielu praniach.'
    ),
    array(
        'question' => 'Czy pokrowce są wodoodporne?',
        'answer' => 'Standardowe pokrowce welurowe nie są wodoodporne, ale oferujemy również wersje z powłoką wodoodporną, idealne do kuchni lub jadalni z dziećmi. Sprawdź kategorię "Pokrowce wodoodporne" w naszym sklepie.'
    ),
    // Zamówienia i płatności
    array(
        'question' => 'Jakie są dostępne metody płatności?',
        'answer' => 'Akceptujemy płatności kartą (Visa, Mastercard), szybkie przelewy online (Przelewy24, PayU), BLIK. Możesz również zapłacić przy odbiorze (za pobraniem).'
    ),
    array(
        'question' => 'Czy mogę zamówić pokrowce na fakturę VAT?',
        'answer' => 'Tak, wystawiamy faktury VAT dla firm. Podczas składania zamówienia zaznacz opcję "Chcę otrzymać fakturę" i podaj dane firmy wraz z numerem NIP. Faktura zostanie wysłana na podany adres e-mail.'
    ),
    array(
        'question' => 'Czy mogę zmienić lub anulować zamówienie?',
        'answer' => 'Tak, możesz zmienić lub anulować zamówienie, o ile nie zostało jeszcze wysłane. Skontaktuj się z nami jak najszybciej telefonicznie lub mailowo. Po wysłaniu paczki jedyną opcją jest odmowa przyjęcia przesyłki lub zwrot towaru.'
    ),
    array(
        'question' => 'Jaka jest minimalna wartość zamówienia?',
        'answer' => 'Nie ma minimalnej wartości zamówienia - możesz zamówić nawet jeden pokrowiec. Przy zamówieniach powyżej 150 zł dostawa jest bezpłatna!'
    ),
    // Dostawa
    array(
        'question' => 'Jak długo trwa dostawa?',
        'answer' => 'Zamówienia realizujemy w ciągu 1-2 dni roboczych. Dostawa kurierem (InPost) trwa 1-2 dni robocze. Paczkomaty InPost to zazwyczaj 1-2 dni. Łącznie od złożenia zamówienia do dostawy mija zwykle 2-4 dni robocze.'
    ),
    array(
        'question' => 'Ile kosztuje dostawa?',
        'answer' => 'Koszt dostawy zależy od aktualnych stawek przewoźników (np. InPost, DPD) oraz wybranej metody dostawy. Najnowsze ceny zobaczysz w koszyku przed finalizacją zamówienia. Przy zamówieniach powyżej określonej kwoty (obecnie 200 zł) dostawa jest bezpłatna – nie dotyczy przesyłek za pobraniem.'
    ),
    array(
        'question' => 'Czy wysyłacie za granicę?',
        'answer' => 'Tak, wysyłamy do wszystkich krajów Unii Europejskiej. Koszt wysyłki międzynarodowej zależy od kraju docelowego i wagi paczki. Skontaktuj się z nami, aby uzyskać dokładną wycenę.'
    ),
    array(
        'question' => 'Jak mogę śledzić swoją przesyłkę?',
        'answer' => 'Po wysłaniu zamówienia otrzymasz e-mail z numerem przesyłki i linkiem do śledzenia. Możesz też sprawdzić status zamówienia w swoim koncie klienta na naszej stronie.'
    ),
    // Zwroty i reklamacje
    array(
        'question' => 'Czy mogę zwrócić pokrowiec, jeśli nie pasuje?',
        'answer' => 'Tak! Masz 14 dni na zwrot towaru bez podania przyczyny (zgodnie z prawem konsumenckim). Produkt musi być nieużywany, w oryginalnym opakowaniu. Koszt zwrotu pokrywa kupujący. Zwrot pieniędzy następuje w ciągu 14 dni od otrzymania przesyłki zwrotnej.'
    ),
    array(
        'question' => 'Jak złożyć reklamację?',
        'answer' => 'Reklamację można złożyć mailowo lub przez formularz kontaktowy. Opisz problem i dołącz zdjęcia wady. Rozpatrujemy reklamacje w ciągu 14 dni. Jeśli reklamacja zostanie uznana, oferujemy wymianę produktu na nowy lub zwrot pieniędzy.'
    ),
    array(
        'question' => 'Co zrobić, jeśli otrzymam uszkodzoną przesyłkę?',
        'answer' => 'Jeśli paczka jest wyraźnie uszkodzona, odmów jej przyjęcia. Jeśli zauważysz uszkodzenie po otwarciu, zrób zdjęcia i skontaktuj się z nami w ciągu 24 godzin. Wyślemy nowy produkt bezpłatnie.'
    ),
    // Pielęgnacja i pranie
    array(
        'question' => 'Jak prać pokrowce na krzesła?',
        'answer' => 'Nasze pokrowce można prać w pralce w temperaturze do 30°C, w trybie delikatnym. Używaj łagodnego detergentu, unikaj wybielaczy. Pokrowce można suszyć w suszarce bębnowej w niskiej temperaturze lub rozłożyć na płasko/powiesić do wyschnięcia. Nie ma potrzeby prasowania - materiał się nie gniecie.'
    ),
    array(
        'question' => 'Jak usunąć plamy z pokrowca?',
        'answer' => 'Świeże plamy najlepiej usuwać natychmiast wilgotną ściereczką. Do uporczywych plam użyj delikatnego środka do czyszczenia tkanin. Unikaj szorowania - może to uszkodzić strukturę materiału. Po usunięciu plamy możesz wyprać cały pokrowiec.'
    ),
    array(
        'question' => 'Czy pokrowce się mechacą?',
        'answer' => 'Nasze pokrowce wykonane są z wysokiej jakości materiałów, które są odporne na mechacenie. Przy prawidłowej pielęgnacji (pranie w niskiej temperaturze, bez suszarki) zachowują swój wygląd przez długi czas.'
    ),
);

// Build mainEntity array for schema
$main_entity = array();
foreach ($faq_items as $item) {
    $main_entity[] = array(
        '@type' => 'Question',
        'name' => $item['question'],
        'acceptedAnswer' => array(
            '@type' => 'Answer',
            'text' => $item['answer']
        )
    );
}

// FAQ Schema (BreadcrumbList is handled globally by RankMath)
$faq_schema = array(
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'name' => 'FAQ - Najczęściej zadawane pytania o pokrowce na krzesła',
    'description' => 'Znajdź odpowiedzi na pytania dotyczące pokrowców na krzesła: rozmiary, materiały, zamówienia, dostawa, zwroty i pielęgnacja.',
    'url' => get_permalink(),
    'inLanguage' => 'pl-PL',
    'mainEntity' => $main_entity
);
?>

<script type="application/ld+json">
<?php echo wp_json_encode($faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<main id="primary" class="site-main pt-25 lg:pt-15 pb-15">

    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <?php
        // RankMath Breadcrumbs (if enabled in RankMath settings)
        if (function_exists('rank_math_the_breadcrumbs')) {
            rank_math_the_breadcrumbs();
        }
        ?>

        <!-- section title -->
        <div class="mb-8">
            <span class="flex items-center gap-2.5 font-medium text-dark mb-1.5">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 18.3333C14.6024 18.3333 18.3334 14.6024 18.3334 10C18.3334 5.39763 14.6024 1.66667 10 1.66667C5.39765 1.66667 1.66669 5.39763 1.66669 10C1.66669 14.6024 5.39765 18.3333 10 18.3333Z"
                        stroke="#E67E22" stroke-width="1.5" />
                    <path
                        d="M7.57495 7.49999C7.77087 6.94304 8.15758 6.47341 8.66658 6.17426C9.17558 5.87512 9.77403 5.76577 10.3559 5.86558C10.9378 5.96539 11.4657 6.26792 11.8459 6.71959C12.2261 7.17126 12.4342 7.74292 12.4333 8.33332C12.4333 9.99999 9.93328 10.8333 9.93328 10.8333"
                        stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10 14.1667H10.0083" stroke="#E67E22" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <?php esc_html_e('Pytania i odpowiedzi', 'pokrovce'); ?>
            </span>
            <h1 class="font-semibold text-xl xl:text-heading-5 text-dark">
                <?php esc_html_e('Najczęściej zadawane pytania', 'pokrovce'); ?>
            </h1>
            <p class="text-dark-4 mt-2">
                <?php esc_html_e('Znajdź odpowiedzi na najczęstsze pytania dotyczące naszych pokrowców, zamówień i dostawy', 'pokrovce'); ?>
            </p>
        </div>

        <!-- Table of Contents -->
        <nav class="bg-gray-1 rounded-lg p-5 mb-10" aria-label="Spis treści">
            <p class="font-semibold text-dark mb-3">Przejdź do sekcji:</p>
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 text-sm">
                <li>
                    <a href="#produkty-rozmiary"
                        class="flex items-center gap-2 text-dark-4 hover:text-[#E67E22] transition-colors py-1">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Produkty i rozmiary
                    </a>
                </li>
                <li>
                    <a href="#zamowienia-platnosci"
                        class="flex items-center gap-2 text-dark-4 hover:text-[#E67E22] transition-colors py-1">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Zamówienia i płatności
                    </a>
                </li>
                <li>
                    <a href="#dostawa"
                        class="flex items-center gap-2 text-dark-4 hover:text-[#E67E22] transition-colors py-1">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Dostawa
                    </a>
                </li>
                <li>
                    <a href="#zwroty-reklamacje"
                        class="flex items-center gap-2 text-dark-4 hover:text-[#E67E22] transition-colors py-1">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Zwroty i reklamacje
                    </a>
                </li>
                <li>
                    <a href="#pielegnacja"
                        class="flex items-center gap-2 text-dark-4 hover:text-[#E67E22] transition-colors py-1">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Pielęgnacja i pranie
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Sekcja: Produkty i rozmiary -->
        <section id="produkty-rozmiary" class="mb-8 scroll-mt-24">
            <h2 class="font-semibold text-custom-lg text-dark mb-4 flex items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.11826 15.4622C4.11794 16.6668 5.97853 16.6668 9.69971 16.6668H10.3007C14.0219 16.6668 15.8825 16.6668 16.8821 15.4622M3.11826 15.4622C2.11857 14.2577 2.46146 12.429 3.14723 8.77153C3.63491 6.17055 3.87875 4.87006 4.8045 4.10175M3.11826 15.4622C3.11826 15.4622 3.11826 15.4622 3.11826 15.4622ZM16.8821 15.4622C17.8818 14.2577 17.5389 12.429 16.8532 8.77153C16.3655 6.17055 16.1216 4.87006 15.1959 4.10175M16.8821 15.4622C16.8821 15.4622 16.8821 15.4622 16.8821 15.4622ZM15.1959 4.10175C14.2701 3.33345 12.947 3.33345 10.3007 3.33345H9.69971C7.0534 3.33345 5.73025 3.33345 4.8045 4.10175M15.1959 4.10175C15.1959 4.10175 15.1959 4.10175 15.1959 4.10175ZM4.8045 4.10175C4.8045 4.10175 4.8045 4.10175 4.8045 4.10175Z"
                        stroke="#E67E22" stroke-width="1.5" />
                </svg>
                Produkty i rozmiary
            </h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Jak dobrać odpowiedni rozmiar pokrowca do mojego krzesła?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Aby dobrać odpowiedni rozmiar, zmierz szerokość i głębokość siedziska oraz wysokość
                                oparcia krzesła. W opisie każdego produktu znajdziesz dokładne wymiary. Nasze pokrowce
                                są elastyczne i pasują do większości standardowych krzeseł. Jeśli masz wątpliwości,
                                skontaktuj się z nami - chętnie pomożemy dobrać odpowiedni rozmiar.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Czy pokrowce pasują do krzeseł skandynawskich?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Tak! Nasze pokrowce są zaprojektowane tak, aby pasowały do najpopularniejszych modeli
                                krzeseł, w tym krzeseł skandynawskich z IKEA, BRW, Agata Meble czy Jysk. Elastyczny
                                materiał i gumka w dolnej części zapewniają dobre dopasowanie do różnych kształtów.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Z jakiego materiału wykonane są pokrowce?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Nasze pokrowce wykonane są z wysokiej jakości tkaniny welurowej lub elastycznego
                                materiału typu spandex. Materiały są przyjemne w dotyku, wytrzymałe i łatwe w utrzymaniu
                                czystości. Nie mechacą się i zachowują swój kolor nawet po wielu praniach.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Czy pokrowce są wodoodporne?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Standardowe pokrowce welurowe nie są wodoodporne, ale oferujemy również wersje z powłoką
                                wodoodporną, idealne do kuchni lub jadalni z dziećmi. Sprawdź kategorię "Pokrowce
                                wodoodporne" w naszym sklepie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja: Zamówienia i płatności -->
        <section id="zamowienia-platnosci" class="mb-8 scroll-mt-24">
            <h2 class="font-semibold text-custom-lg text-dark mb-4 flex items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.5 5.83333H17.5M2.5 5.83333V14.1667C2.5 15.5474 3.61929 16.6667 5 16.6667H15C16.3807 16.6667 17.5 15.5474 17.5 14.1667V5.83333M2.5 5.83333L3.33333 3.33333H16.6667L17.5 5.83333"
                        stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.33333 10H11.6667" stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                Zamówienia i płatności
            </h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Jakie są dostępne metody płatności?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Akceptujemy płatności kartą (Visa, Mastercard), szybkie przelewy online (Przelewy24,
                                PayU), BLIK. Możesz również zapłacić przy odbiorze (za pobraniem)</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Czy mogę zamówić pokrowce na fakturę VAT?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Tak, wystawiamy faktury VAT dla firm. Podczas składania zamówienia zaznacz opcję "Chcę
                                otrzymać fakturę" i podaj dane firmy wraz z numerem NIP. Faktura zostanie wysłana na
                                podany adres e-mail.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Czy mogę zmienić lub anulować zamówienie?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Tak, możesz zmienić lub anulować zamówienie, o ile nie zostało jeszcze wysłane.
                                Skontaktuj się z nami jak najszybciej telefonicznie lub mailowo. Po wysłaniu paczki
                                jedyną opcją jest odmowa przyjęcia przesyłki lub zwrot towaru.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Jaka jest minimalna wartość zamówienia?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Nie ma minimalnej wartości zamówienia - możesz zamówić nawet jeden pokrowiec. Przy
                                zamówieniach powyżej 150 zł dostawa jest bezpłatna!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja: Dostawa -->
        <section id="dostawa" class="mb-8 scroll-mt-24">
            <h2 class="font-semibold text-custom-lg text-dark mb-4 flex items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.3333 2.5H2.5V12.5H13.3333V2.5Z" stroke="#E67E22" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.3333 6.66667H16.6667L18.3333 9.16667V12.5H13.3333V6.66667Z" stroke="#E67E22"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M5.41667 17.5C6.56726 17.5 7.5 16.5673 7.5 15.4167C7.5 14.2661 6.56726 13.3333 5.41667 13.3333C4.26607 13.3333 3.33333 14.2661 3.33333 15.4167C3.33333 16.5673 4.26607 17.5 5.41667 17.5Z"
                        stroke="#E67E22" stroke-width="1.5" />
                    <path
                        d="M15.4167 17.5C16.5673 17.5 17.5 16.5673 17.5 15.4167C17.5 14.2661 16.5673 13.3333 15.4167 13.3333C14.2661 13.3333 13.3333 14.2661 13.3333 15.4167C13.3333 16.5673 14.2661 17.5 15.4167 17.5Z"
                        stroke="#E67E22" stroke-width="1.5" />
                </svg>
                Dostawa
            </h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Jak długo trwa dostawa?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Zamówienia realizujemy w ciągu 1-2 dni roboczych. Dostawa kurierem (InPost)
                                trwa 1-2 dni robocze. Paczkomaty InPost to zazwyczaj 1-2 dni. Łącznie od złożenia
                                zamówienia do dostawy mija zwykle 2-4 dni robocze.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Ile kosztuje dostawa?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Koszt dostawy zależy od aktualnych stawek przewoźników (np. InPost, DPD) oraz wybranej
                                metody dostawy. Najnowsze ceny zobaczysz w koszyku przed finalizacją zamówienia. Przy
                                zamówieniach powyżej określonej kwoty (obecnie 200 zł) dostawa jest bezpłatna – nie
                                dotyczy przesyłek za pobraniem.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Czy wysyłacie za granicę?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Tak, wysyłamy do wszystkich krajów Unii Europejskiej. Koszt wysyłki międzynarodowej
                                zależy od kraju docelowego i wagi paczki. Skontaktuj się z nami, aby uzyskać dokładną
                                wycenę.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Jak mogę śledzić swoją przesyłkę?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Po wysłaniu zamówienia otrzymasz e-mail z numerem przesyłki i linkiem do śledzenia.
                                Możesz też sprawdzić status zamówienia w swoim koncie klienta na naszej stronie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja: Zwroty i reklamacje -->
        <section id="zwroty-reklamacje" class="mb-8 scroll-mt-24">
            <h2 class="font-semibold text-custom-lg text-dark mb-4 flex items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5 17.5L10 15M10 15L7.5 17.5M10 15V18.3333" stroke="#E67E22" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M17.5 10.8333C17.5 6.23096 13.7690 2.5 9.16667 2.5C4.56429 2.5 0.833336 6.23096 0.833336 10.8333"
                        stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" />
                    <path
                        d="M4.16667 10.8333H5.83333C6.29357 10.8333 6.66667 11.2064 6.66667 11.6667V13.3333C6.66667 13.7936 6.29357 14.1667 5.83333 14.1667H4.16667C3.70643 14.1667 3.33333 13.7936 3.33333 13.3333V11.6667C3.33333 11.2064 3.70643 10.8333 4.16667 10.8333Z"
                        stroke="#E67E22" stroke-width="1.5" />
                    <path
                        d="M14.1667 10.8333H15.8333C16.2936 10.8333 16.6667 11.2064 16.6667 11.6667V13.3333C16.6667 13.7936 16.2936 14.1667 15.8333 14.1667H14.1667C13.7064 14.1667 13.3333 13.7936 13.3333 13.3333V11.6667C13.3333 11.2064 13.7064 10.8333 14.1667 10.8333Z"
                        stroke="#E67E22" stroke-width="1.5" />
                </svg>
                Zwroty i reklamacje
            </h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Czy mogę zwrócić pokrowiec, jeśli nie pasuje?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Tak! Masz 14 dni na zwrot towaru bez podania przyczyny (zgodnie z prawem konsumenckim).
                                Produkt musi być nieużywany, w oryginalnym opakowaniu. Koszt zwrotu pokrywa kupujący.
                                Zwrot pieniędzy następuje w ciągu 14 dni od otrzymania przesyłki zwrotnej.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Jak złożyć reklamację?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Reklamację można złożyć mailowo lub przez formularz kontaktowy. Opisz problem i dołącz
                                zdjęcia wady. Rozpatrujemy reklamacje w ciągu 14 dni. Jeśli reklamacja zostanie uznana,
                                oferujemy wymianę produktu na nowy lub zwrot pieniędzy.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Co zrobić, jeśli otrzymam uszkodzoną przesyłkę?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Jeśli paczka jest wyraźnie uszkodzona, odmów jej przyjęcia. Jeśli zauważysz uszkodzenie
                                po otwarciu, zrób zdjęcia i skontaktuj się z nami w ciągu 24 godzin. Wyślemy nowy
                                produkt bezpłatnie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja: Pielęgnacja -->
        <section id="pielegnacja" class="mb-8 scroll-mt-24">
            <h2 class="font-semibold text-custom-lg text-dark mb-4 flex items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.33333 10C3.33333 6.31810 6.31810 3.33333 10 3.33333C13.6819 3.33333 16.6667 6.31810 16.6667 10C16.6667 13.6819 13.6819 16.6667 10 16.6667"
                        stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M10 10L6.66667 13.3333" stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M3.33333 13.3333H6.66667V16.6667" stroke="#E67E22" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Pielęgnacja i pranie
            </h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Jak prać pokrowce na krzesła?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Nasze pokrowce można prać w pralce w temperaturze do 30°C, w trybie delikatnym. Używaj
                                łagodnego detergentu, unikaj wybielaczy. Pokrowce można suszyć w suszarce bębnowej w
                                niskiej temperaturze lub rozłożyć na płasko/powiesić do wyschnięcia. Nie ma potrzeby
                                prasowania - materiał się nie gniecie.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Jak usunąć plamy z pokrowca?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Świeże plamy najlepiej usuwać natychmiast wilgotną ściereczką. Do uporczywych plam użyj
                                delikatnego środka do czyszczenia tkanin. Unikaj szorowania - może to uszkodzić
                                strukturę materiału. Po usunięciu plamy możesz wyprać cały pokrowiec.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>Czy pokrowce się mechacą?</h3>
                    <div class="faq-content">
                        <div>
                            <p>Nasze pokrowce wykonane są z wysokiej jakości materiałów, które są odporne na mechacenie.
                                Przy prawidłowej pielęgnacji (pranie w niskiej temperaturze, bez suszarki) zachowują
                                swój wygląd przez długi czas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <div class="bg-gray-1 rounded-xl p-6 sm:p-8 text-center mt-10">
            <h2 class="font-semibold text-xl text-dark mb-2">Nie znalazłeś odpowiedzi na swoje pytanie?</h2>
            <p class="text-dark-4 mb-5">Skontaktuj się z nami - chętnie pomożemy!</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>"
                    class="inline-flex justify-center font-medium text-white bg-[#E67E22] py-3 px-7 rounded-md ease-out duration-200 hover:bg-[#E67E22]/80">
                    Napisz do nas
                </a>
                <a href="tel:+48123456789"
                    class="inline-flex justify-center font-medium text-dark bg-white border border-gray-3 py-3 px-7 rounded-md ease-out duration-200 hover:bg-dark hover:text-white hover:border-transparent">
                    <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.3333 14.1V16.6C18.3343 16.8321 18.2867 17.0618 18.1937 17.2745C18.1008 17.4871 17.9644 17.678 17.7934 17.8349C17.6224 17.9918 17.4205 18.1113 17.2006 18.1856C16.9808 18.26 16.7479 18.2876 16.5167 18.2667C13.9523 17.9881 11.4892 17.1118 9.32499 15.7083C7.31151 14.4289 5.60443 12.7218 4.32499 10.7083C2.91663 8.53438 2.04019 6.05923 1.76666 3.48333C1.74583 3.25292 1.77321 3.02067 1.84707 2.80139C1.92092 2.58211 2.03963 2.38061 2.19562 2.20972C2.35162 2.03883 2.54145 1.9023 2.75309 1.80881C2.96473 1.71532 3.19348 1.66692 3.42499 1.66667H5.92499C6.32941 1.66273 6.72148 1.80594 7.02812 2.06965C7.33476 2.33336 7.53505 2.69958 7.59166 3.1C7.69717 3.9001 7.89286 4.68565 8.17499 5.44167C8.2871 5.73998 8.31137 6.06414 8.24491 6.37577C8.17844 6.68741 8.02404 6.97347 7.79999 7.2L6.74166 8.25833C7.92795 10.3446 9.65536 12.072 11.7417 13.2583L12.8 12.2C13.0265 11.976 13.3126 11.8216 13.6242 11.7551C13.9359 11.6886 14.26 11.7129 14.5583 11.825C15.3144 12.1071 16.0999 12.3028 16.9 12.4083C17.3048 12.4655 17.6745 12.6694 17.9388 12.9813C18.2031 13.2932 18.3436 13.6914 18.3333 14.1Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    +48 661 962 732
                </a>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>