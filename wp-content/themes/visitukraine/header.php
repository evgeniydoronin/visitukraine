<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Information page for tourists and visitors</title>

    <?php wp_head(); ?>
</head>

<body>

<main class="main_go">

    <header class="header_go">
        <div class="container">
            <div class="in_to_cont_hd d_flex_center justify_between">
                <div class="logo_head_g">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                    </a>
                </div>
                <div class="right_head_go d_flex_center">

                    <div class="switcher_version">
                        <div class="in_to_switcher d_flex_center">
                            <div>
                                <div class="in_to_switcher_g d_flex_center">
                                    <a href="home_2.php" class="item_teh_gver d_flex_center justify_center" data-fly-to>TO</a>
                                    <a href="/" class="item_teh_gver d_flex_center justify_center current_this" data-fly-from>FROM</a>
                                </div>
                            </div>
                            <div class="d_flex_center tittlej_us_g">Ukraine <span class="icon_arr_to_tp"></span></div>
                        </div>
                    </div>
                    <div class="menu_header_go">
                        <ul class="d_flex">
                            <li class="active">
                                <a href="#">MAIN</a>
                            </li>
                            <li>
                                <a href="#">HOTELS</a>
                            </li>
                            <li>
                                <a href="#">TOURS</a>
                            </li>
                            <li>
                                <a href="#">BLOG</a>
                            </li>
                        </ul>
                    </div>
                    <div class="language_menu_g">
                        <div class="d_inline_block in_to_ldhgjd_g">
                            <div class="in_to_lang_g d_flex_center" data-show-toggle-lang>
                                <span class="point_spr"></span>
                                <span class="span_txt_lang">EN</span>
                                <span class="arr_drop_lan"></span>
                            </div>
                            <div class="dropdown_lang_g">
                                <div class="in_dropdown_g">
                                    <ul>
                                        <li><a href="#">RU</a></li>
                                        <li><a href="#">UA</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Socials mobile -->
                    <div class="socs_mob_go">
                        <div class="soc_lef_hm d_flex_center">
                            <div class="item_soc_subr">
                                <a href="#" class="d_flex_center" target="_blank">
										<span class="icon_left">
											<svg xmlns="http://www.w3.org/2000/svg" width="15.649" height="15.649" viewBox="0 0 15.649 15.649">
												<path id="Path_3714" data-name="Path 3714" d="M11.9,54.987a1.1,1.1,0,0,0-1.658,0c-.388.384-.775.769-1.156,1.159a.228.228,0,0,1-.319.059c-.251-.137-.518-.247-.759-.4a12.022,12.022,0,0,1-2.9-2.638,6.866,6.866,0,0,1-1.039-1.664.238.238,0,0,1,.059-.306c.388-.374.765-.759,1.146-1.143a1.1,1.1,0,0,0,0-1.7c-.3-.306-.606-.606-.909-.912s-.622-.628-.938-.938a1.1,1.1,0,0,0-1.658,0c-.391.384-.765.778-1.163,1.156a1.887,1.887,0,0,0-.593,1.273,5.394,5.394,0,0,0,.417,2.322,14.109,14.109,0,0,0,2.5,4.171A15.5,15.5,0,0,0,8.07,59.452a7.422,7.422,0,0,0,2.843.827A2.083,2.083,0,0,0,12.7,59.6c.332-.371.707-.71,1.058-1.065a1.108,1.108,0,0,0,.007-1.687Q12.838,55.914,11.9,54.987Z" transform="translate(-0.006 -44.635)" fill="#fff"></path>
												<path id="Path_3715" data-name="Path 3715" d="M241.384,100.631l1.2-.205A5.394,5.394,0,0,0,238.023,96l-.169,1.208a4.168,4.168,0,0,1,3.53,3.422Z" transform="translate(-230.109 -92.874)" fill="#fff"></path>
												<path id="Path_3716" data-name="Path 3716" d="M248,2.533A8.86,8.86,0,0,0,242.923,0l-.169,1.208a7.731,7.731,0,0,1,6.542,6.34l1.2-.205A8.925,8.925,0,0,0,248,2.533Z" transform="translate(-234.849)" fill="#fff"></path>
											</svg>
										</span>
                                    <span>Hotline</span>
                                </a>
                            </div>
                            <div class="item_soc_subr">
                                <a href="#" class="d_flex_center" target="_blank">
										<span class="icon_left">
											<svg xmlns="http://www.w3.org/2000/svg" width="15.537" height="12.948" viewBox="0 0 15.537 12.948">
												<path d="M6.1,10.533l-.257,3.615a.9.9,0,0,0,.718-.348l1.724-1.648,3.572,2.616c.655.365,1.117.173,1.293-.6L15.492,3.179h0c.208-.968-.35-1.347-.989-1.11L.721,7.345c-.941.365-.926.889-.16,1.127l3.524,1.1L12.27,4.447c.385-.255.735-.114.447.141Z" transform="translate(0 -2)" fill="#fff"></path>
											</svg>
										</span>
                                    <span>Telegram</span>
                                </a>
                            </div>
                            <div class="item_soc_subr">
                                <a href="#" class="d_flex_center" target="_blank">
										<span class="icon_left">
											<svg xmlns="http://www.w3.org/2000/svg" width="15.659" height="15.658" viewBox="0 0 15.659 15.658">
												<path d="M7.831,0h0A7.824,7.824,0,0,0,1.49,12.418L.515,15.327l3.009-.962A7.828,7.828,0,1,0,7.831,0Zm4.556,11.056a2.209,2.209,0,0,1-1.536,1.1c-.409.087-.943.157-2.742-.589a9.808,9.808,0,0,1-3.9-3.443,4.472,4.472,0,0,1-.93-2.361,2.5,2.5,0,0,1,.8-1.905,1.138,1.138,0,0,1,.8-.281c.1,0,.184,0,.262.009.23.01.345.023.5.387.189.455.649,1.579.7,1.694a.466.466,0,0,1,.033.424,1.353,1.353,0,0,1-.253.359c-.115.133-.225.235-.341.378-.106.124-.225.257-.092.487A6.949,6.949,0,0,0,6.962,8.9,5.756,5.756,0,0,0,8.8,10.029a.5.5,0,0,0,.552-.087,9.473,9.473,0,0,0,.612-.81.437.437,0,0,1,.562-.17c.211.073,1.33.626,1.56.741s.382.17.437.267A1.95,1.95,0,0,1,12.387,11.056Z" transform="translate(0)" fill="#fff"></path>
											</svg>
										</span>
                                    <span>whatsapp</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Socials mobile -->

                </div>
                <div class="menu_burger_go">
                    <button class="burger_menu_g d_flex_center justify_center">
							<span class="d_flex_center justify_center">
								<span class="item_point_g"></span>
								<span class="item_point_g"></span>
								<span class="item_point_g"></span>
							</span>
                    </button>
                </div>
            </div>
        </div>
    </header>