
<?php
get_header();
?>

<!-- Navigation
    ========================================== -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            <div class="navbar-header">
                <img src="" alt="">
                <a class="navbar-brand page-scroll" href="#page-top">TAHITI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#services">DISCOVER</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">EXPERIENCE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">TRAVEL GUIDES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#booking">ABOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ========== Header ========== -->
    <header id="header">
        <div class="intro-slider">
            <!-- Slick Slider will be initialized here -->
            <div class="intro intro-slide-one d-flex align-items-center justify-content-center">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="intro-text text-center">
                                <h1>Welcome to Tahiti</h1>
                                <p>Your vacation starts here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro intro-slide-two d-flex align-items-center justify-content-center">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="intro-text text-center">
                                <h1>Welcome to </h1>
                                <p>Your vacation starts here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-dots"></div>
    </header>
    <!-- ========== Items Section ========== -->
    <!-- ========== height 1050 ========== -->
    <div id="services">
        <div class="container">
            <div class="section-title">
                <h2>EXPLORE Islands</h2>
                <p>Discover beautiful islands and plan your dream vacation.</p>
            </div>
            <div class="row">
                <?php
                $islands_query = new WP_Query(['post_type' => 'island']);
                if ($islands_query->have_posts()) {
                    while ($islands_query->have_posts()) {
                        $islands_query->the_post();
                        ?>
                        <div class="col-md-3">
                            <div class="island-item">
                                <div class="island-media">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="island-desc">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                    <?php $price = get_field('price'); ?>
                                    <?php if ($price): ?>
                                        <a href="<?php the_field('external_link'); ?>" class="btn island-price">
                                            Price: $
                                            <?php echo esc_html($price); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
                <div class="col-md-12 text-center">
                    <label for="island-dropdown">Discover all Tahiti has to offer.</label>
                    <div class="search">
                        <select id="island-dropdown" class="form-control">
                            <option value="">Select an Island</option>
                            <?php
                            $islands_query = new WP_Query(['post_type' => 'island']);
                            if ($islands_query->have_posts()) {
                                while ($islands_query->have_posts()) {
                                    $islands_query->the_post();
                                    ?>
                                    <option value="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </option>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </select>
                        <button class="btn btn-primary">Your Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== About Section ========== -->
    <about id="about">
        <div class="about-slider">
            <div class="about about-slide-one">
                <div class="container">
                    <div class="row">
                        <div class="about-text col-lg-6">
                            <h1>Welcome to Tahiti</h1>
                            <p>Your vacation starts here</p>
                        </div>
                        <div class="about-desc col-lg-12 text-center">
                            <p>
                                The beauty, drama, and power of today’s Tahitian dance testify to its resilience in
                                Polynesian culture. In ancient times, dances were directly linked with all aspects
                                of life. One would dance for joy, to welcome a visitor, to pray to a god, to
                                challenge an enemy, and to seduce a mate.
                            </p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about about-slide-one">
                <div class="container">
                    <div class="row">
                        <div class="about-text col-lg-6">
                            <h1>Welcome to Tahiti</h1>
                            <p>Feel the Mana</p>
                        </div>
                        <div class="about-desc col-lg-12 text-center">
                            <p>
                                The Islands of Tahiti is a patchwork of experiences to be enjoyed to the full. Meet the
                                local population and share their authentic traditions, explore the unspoiled islands and
                                discover the unique flora and fauna on land and at sea.
                            </p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-dots"></div>
    </about>
    <div id="faq">
        <div class="container align-items-center">
            <div class="section-title text-center">
                <h2>Why Tahiti?</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="faq-item d-flex align-items-center justify-content-center">
                        <div class="faq-desc text-center">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-item d-flex align-items-center justify-content-center">
                        <div class="faq-desc text-center">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-item d-flex align-items-center justify-content-center">
                        <div class="faq-desc text-center">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Booking Section ========== -->
    <!-- ========== height 840 ========== -->
    <booking id="booking">
        <div class="booking-slider">
            <!-- Slick Slider will be initialized here -->
            <div class="booking booking-slide-one d-flex align-items-center justify-content-center">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="booking-text text-center d-flex flex-column justify-content-between">
                                <h1>Unique vacations, tailored to your desires</h1>
                                <p>
                                    Our travel experts will take care of everything. Whether choosing from our packaged
                                    vacations or
                                    customizing your own, extraordinary service and exceptional value are just a call or
                                    click
                                    away.
                                </p>
                                <a href="#" class="btn btn-success">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking booking-slide-one d-flex align-items-center justify-content-center">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="booking-text text-center d-flex align-items-center justify-content-center">
                                <div class="justify-content-center">
                                    <h1>Next Slider ANy text goes here</h1>
                                    <p>
                                        Our travel experts will take care of everything. Whether choosing from our
                                        packaged
                                        vacations or
                                        customizing your own, extraordinary service and exceptional value are just a
                                        call or
                                        click
                                        away.
                                    </p>
                                    <a href="#" class="btn btn-success">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-dots"></div>
    </booking>
    <!-- Footer
        ========================================== -->
    <div id="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-2 col-md-6 mb-3">
                    <a href="/" class="">
                        <img src="" alt="">
                    </a>
                    <p class="">&copy; 2023</p>
                </div>

                <div class="col-lg-2 col-md-6 mb-2">
                    <h5>Islands</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#">Home</a></li>
                        <li class="nav-item mb-2"><a href="#">Features</a></li>
                        <li class="nav-item mb-2"><a href="#">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#">About</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-2">
                    <h5>Packages</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#">Home</a></li>
                        <li class="nav-item mb-2"><a href="#">Features</a></li>
                        <li class="nav-item mb-2"><a href="#">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#">About</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-2">
                    <h5>Tahiti</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#">Home</a></li>
                        <li class="nav-item mb-2"><a href="#">Features</a></li>
                        <li class="nav-item mb-2"><a href="#">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#">About</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-3">
                    <ul class="nav d-flex">
                        <?php
                        $social_links = get_field('social_links');

                        if ($social_links) {
                            $links_array = explode("\n", $social_links);

                            foreach ($links_array as $link) {
                                $link_parts = explode('|', $link);
                                $social_name = trim($link_parts[0]);
                                $social_url = trim($link_parts[1]);

                                // Use Font Awesome icons based on social media name
                                $icon_class = '';
                                switch (strtolower($social_name)) {
                                    case 'facebook':
                                        $icon_class = 'fab fa-facebook';
                                        break;
                                    case 'instagram':
                                        $icon_class = 'fab fa-instagram';
                                        break;
                                    case 'twitter':
                                        $icon_class = 'fab fa-twitter';
                                        break;
                                    case 'pinterest':
                                        $icon_class = 'fab fa-pinterest';
                                        break;
                                    case 'youtube':
                                        $icon_class = 'fab fa-youtube';
                                        break;
                                    // Add cases for other social media if needed
                        
                                    default:
                                        $icon_class = 'fas fa-link'; // Default to a chain link icon
                                        break;
                                }

                                echo '<a href="' . esc_url($social_url) . '"><i class="' . esc_attr($icon_class) . '"></i></a><br>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <p>&copy; 2023 TAHITI. Design by <a href="Arman_Sarkissian" rel="nofollow">WLA</a></p>
    </div>

<?php
    get_footer();
?>