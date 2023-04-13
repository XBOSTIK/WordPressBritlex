<?php get_header();?>
    <?php 
        function generate_text($string) {
            $words = explode(' ', $string);
            $first_word = array_shift($words);
            $rest_of_words = implode(' ', $words);
            echo "$first_word<br> $rest_of_words";
        }
    ?>   
    <div class="overlay"></div>

    <section class="first">
        <div class="container">
            <div class="first__inner">
                <div class="first__inner-text">
                    <h2 class="title first__title"><?php generate_text(CFS()->get('ms_title')); ?></h2>
                    <p class="text first__text"><?= CFS()->get('ms_desc') ?></p>
                    <button class="btn first__btn"><?= CFS()->get('ms_btn_text') ?></button>
                </div>
                <div class="first__inner-img">
                    <img src="<?= CFS()->get('ms_img') ?>" alt="language image">
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <div class="container">
            <div class="skills__inner">
                <h3 class="title skills__inner-title">Skills</h3>
                <div class="skills__grid">
                <?php
                        $loop = CFS()->get('skills-loop');
                        $index = 1;
                        foreach ($loop as $row) {
                        ?>
                        <div class="skills__grid-inner skills__grid--<?= $index ?>">
                            <div class="skills__grid-img">
                                <img src="<?= $row[skill_img] ?>" alt="speaking information">
                            </div>
                            <div class="skills__grid-text">
                                <h4 class="sub-title skills__grid-title"><?= $row[skill_title] ?></h4>
                                <p class="text skills__grid-desc"><?= $row[skill_desc] ?></p>
                                <?php 
                                    if(!empty($row['skill_desc_2'])) { 
                                    ?>
                                        <p class="text skills__grid-desc"><?= $row[skill_desc_2] ?></p>
                                    <?php 
                                    }
                                ?>
                                <a href="#" class="btn skills__grid-link"><?= $row[link_text] ?></a>
                            </div>
                        </div>
                        <?php
                        $index++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <h3 class="title about__title"><?= CFS()->get('about_title'); ?></h3>
            <div class="about__inner">
                <div class="about__inner-text">
                    <p class="text about__text"><?= CFS()->get('about_text'); ?></p>
                    <div class="about__stat">
                    <?php
                        $loop2 = CFS()->get('about_stats');
                        foreach ($loop2 as $row) {
                        ?>
                            <div class="about__stat-item">
                                <div class="about__stat-number"><?= $row[stat_number] ?></div>
                                <p class="text about__stat-desc"><?= $row[stat_desc] ?></p>
                            </div>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="about__inner-img">
                    <img src="<?= CFS()->get('about_img'); ?>" alt="about us image">
                </div>
            </div>
        </div>
    </section>

    <section class="price" id="pricing">
        <div class="container">
            <div class="price__inner">
                <h3 class="title price__title"><?= CFS()->get('pricing_title'); ?></h3>
                <div class="price__inner-items">
                    <?php
                        $loop3 = CFS()->get('pricing_cards');
                        foreach ($loop3 as $row) {
                        ?>
                            <div class="price__inner-item">
                                <div class="price__inner-img">
                                    <img src="<?= $row[card_img] ?>" alt="price for Self-study online course">
                                </div>
                                <h4 class="price__inner-title sub-title"><?= $row[card_title] ?></h4>
                                <p class="text price__inner-text"><?= $row[card_text] ?></p>
                                <div class="price__cost">
                                    <span class="price__cost-value"><?= $row[card_price] ?></span>
                                    <span class="price__cost-desc"><?= $row[card_price_time] ?></span>
                                </div>
                            </div>                       
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <div class="container">
            <div class="contacts__inner">
                <div class="contacts__inner-img">
                    <img src="<?= CFS()->get('form_img'); ?>" alt="contacts us image">
                </div>
               <div class="contacts__inner-info">
                    <h3 class="title contacts__inner-title"><?= CFS()->get('form_title'); ?></h3>
                    <p class="text contacts__inner-text"><?= CFS()->get('form_desc'); ?></p>
                    <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form"]'); ?>
               </div>
            </div>
        </div>
    </section>


<?php get_footer();?>