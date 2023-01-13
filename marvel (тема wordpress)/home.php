<?php
/*
Template Name: home
*/
?>
    <?php get_header(); ?>
    <div class="home-page" id="home">
        <div class="conteiner">
            <div class="home-page-text">
            <p class="p1">Marvel Power Group</p>
            <p class="p2">
                Marvel Power Group is a boutique consulting firm with a fresh,
                markets-based approach to value creation. We offer services to
                clients in energy, water, manufacturing and transportation sectors.
            </p>
            <a href="#contact">
                <button class="home-page-button">
                <p>CONTACT US</p>
                </button>
            </a>
            </div>
        </div>
    </div>

    <div class="about" id="about">
        <div class="conteiner">
            <div class="about-us">
            <p>About Us</p>
            </div>
            <div class="about-strange-line"></div>
            <div class="about-description">
            <div class="about-description-picter">
                <img src="https://www.marvelpowergroup.com/assets/images/about.jpg" />
            </div>
            <div class="about-description-text">
                Our dynamic, solutions-oriented team brings decades of relevant
                transactional, analytical and regulatory experience to supporting
                our clients unique agendas.<br /><br />

                We are experienced practitioners who have run companies,
                successfully originated and closed complex deals, advocated and
                negotiated favorable policy and advanced technological innovation
                and climate leadership. <br /><br />

                We specialize in structuring balanced solutions for all affected
                stakeholders and uncovering economic opportunities in otherwise
                opaque environments.
            </div>
            </div>
        </div>
    </div>

    <div class="services" id="services">
        <div class="conteiner">
            <div class="services-services">
            <p>Services</p>
            </div>
            <div class="services-strange-line"></div>
            <div class="services-text-one">
            Our clients are at the forefront of energy transition and innovation.
            Their task is complex: balance reliability and cost effectiveness with
            new customer demands, investment decisions, decarbonization goals and
            an evolving menu of new technologies. We understand the task and bring
            deep expertise to addressing these challenges.
            </div>
            <div class="services-blocks">
            <div class="services-blocks-one">
                <div class="services-content">Enterprise Strategy</div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Procurement and investment diligence
                </div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Customer engagement and retention
                </div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Renewable, DER, and EV program structuring
                </div>
                <div class="services-blocks-one-text-last">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Reliability planning and reporting
                </div>
                <a href="#contact" class="services-arrow">
                <svg
                    width="45"
                    height="12"
                    viewBox="0 0 45 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <rect y="5" width="33" height="2" fill="white" />
                    <path d="M38 1L43 6L38 11" stroke="white" stroke-width="2" />
                </svg>
                </a>
            </div>
            <div class="services-blocks-two">
                <div class="services-content">Wholesale Power</div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Commodity advisory and RFPs
                </div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Energy, capacity, REC, RIN, and LCFS placement
                </div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Enterprise PPA structuring
                </div>
                <div class="services-blocks-one-text-last">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Contract extensions and re-packaging
                </div>
                <a href="#contact" class="services-arrow">
                <svg
                    width="45"
                    height="12"
                    viewBox="0 0 45 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <rect y="5" width="33" height="2" fill="white" />
                    <path d="M38 1L43 6L38 11" stroke="white" stroke-width="2" />
                </svg>
                </a>
            </div>
            <div class="services-blocks-three">
                <div class="services-content">Market Development</div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                New venture setup
                </div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Demand planning and acquisition
                </div>
                <div class="services-blocks-one-text">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Project development and regulatory support
                </div>
                <div class="services-blocks-one-text-last">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dot.svg" alt="" />
                Partnership structuring
                </div>
                <a href="#contact" class="services-arrow">
                <svg
                    width="45"
                    height="12"
                    viewBox="0 0 45 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <rect y="5" width="33" height="2" fill="white" />
                    <path d="M38 1L43 6L38 11" stroke="white" stroke-width="2" />
                </svg>
                </a>
            </div>
            </div>
            <div class="services-text-two">
            Our clients are time constrained and under-resourced. Agendas shift,
            budgets move and priorities change. We understand. We are agile,
            creative and immediately responsive to your various working styles,
            governance requirements and evolving needs.
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
