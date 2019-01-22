<?php ?>

<?php include ('includes/summary-head.php'); ?>

<style>
    body {
        background: white;
        color: #444;
    }

    h3 {
        font-weight: bold;
    }

    .access-icon {
        font-size: 48px;
        color: #3D9AD9;
    }

    .scrollToTop {
        width: auto;
        height: auto;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
        position: fixed;
        bottom: 10px;
        right: 10px;
        display: none;
        background: #CCDEF1;
        z-index: 999;
        font-size: 10px;
    }

    .scrollToTop:hover {
        text-decoration: none;
        color: #fcfcfc;
        background: #CCDEF1;
    }

</style>

<body>

    <div class="grid-container">

        <ol class="vertical menu sticky scrollToTop" data-magellan>
            <li><a href="#summary">Summary</a></li>
            <li><a href="#what-weve-done">What we've done</a></li>
            <li><a href="#what-weve-learned">What we've learned</a>
            </li>
        </ol>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center;" wow-duration="1s">
                <span style="font-size: 18vmax; font-weight: bold;">TSLR</span>
            </div>
            <div id="summary" class="cell" data-magellan-target="summary">
                <div class="grid-x grid-padding-x">
                    <div class="cell wow fadeInLeft" data-wow-duration="1s">
                        <H2 style="font-size: 15vmin; color: #0072C6;">Summary</H2>
                    </div>
                    <div id="intro" class="large-6 medium-12 cell small-order-2 medium-order-2 large-order-1 wow fadeInLeft" style="z-index: 1;">
                        <h4>"Making it quick and easy for teachers to receive a student loan repayment, if they teach a priority subject in an area of greatest need."</h4>
                        <br/>
                        <p>Recruiting and retaining high-quality teachers is central to achieving the DfE mission of giving young people the education they need to have the the best opportunities in life.</p>
                        <p>To encourage that recruitment and retention, the DfE has commissioned a 10 year pilot to reimburse the student loan repayments of new teachers.</p>

                        <p>We've conducted an 'Alpha' on the scheme from October 18 to January 19.</p>
                    </div>
                    <div class="large-6 medium-12 cell small-order-1 medium-order-1 large-order-2 wow fadeInRight" style="text-align: center; padding-bottom: 40px;" data-wow-duration="1s">
                        <img src="img/macbook.png">
                    </div>
                    <div class="cell small-order-3 medium-order-3 large-order-3" style="text-align: center; padding-bottom: 40px; padding-top: 80px;">
                        <ul class="menu vertical" data-magellan>
                            <li>
                                <a href="#what-weve-done">
                                    <h4>1. What we've done</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#what-weve-learned">
                                    <h4>2. What we've learned</h4>
                                </a>
                            </li>
                        </ul>
                        <br/>
                        <p>You can also look at <a href="https://dfe-tslr.herokuapp.com/launch">the prototypes</a> that we tested with users.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-done" class="cell wow fadeIn" data-magellan-target="what-weve-done">
                <span style="color: #0072C6 !important;">What we've done</span>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div id="tasks" class="cell" style="margin-top: 20px;">
                <div class="timeline">

                    <div class="timeline-item wow fadeInRight" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-torsos-all zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon wow fadeInRight" data-equalizer="fooB">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooB"><img src="img/group.svg" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooB"><span class="really-really-big">99</span>
                                    <h4 class="big-icon-bg padd-top">users interviewed</h4>
                                    <a href="#">View the insights</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInLeft" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-torsos-all-female zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooC">
                                <div class="large-6 medium-6 cell text-center small-order-1 medium-order-2" data-equalizer-watch="fooC" style="padding: 2vmax 10vmax;"><img src="img/interview.svg" class="big-icon-bg"><br/></div>
                                <div class="large-6 medium-6 cell text-right small-order-2 medium-order-1" data-equalizer-watch="fooC"><span class="really-really-big big-icon-bg">65</span>
                                    <h4 class="big-icon-bg padd-top">hours of interviews</h4>
                                    <a href="#">View the interview transcripts</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInRight" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-torsos-all-female zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooC">
                                <div class="large-6 medium-6 cell text-center small-order-1 medium-order-2" data-equalizer-watch="fooC" style="padding: 2vmax 10vmax;"><img src="img/teacher-persona.svg" class="big-icon-bg" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell text-right small-order-2 medium-order-1" data-equalizer-watch="fooC"><span class="really-really-big big-icon-bg">7</span>
                                    <h4 class="big-icon-bg padd-top">user personas created</h4>
                                    <a href="#">View the personas</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInLeft" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-results-demographics zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooO">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooO" style="padding: 2vmax 10vmax;">
                                    <img src="img/prototype-mac.svg" style="height: 100%;">
                                </div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooO"><span class="really-really-big">10</span>
                                    <h4 class="big-icon-bg padd-top">prototypes usability tested</h4>
                                    <a href="#">View the prototypes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-learned" class="cell" data-magellan-target="what-weve-learned">
                <span style="color: #0072C6 !important;">What we've learned</span>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div id="what-weve-learned-usage" class="cell" style="text-align: center; margin-top: 60px;" data-magellan-target="what-weve-learned-usage">
                <h2>SCRa is used <span style="text-decoration: underline;">a lot</span>:</h2><br/><br/>
            </div>
            <div class="large-6 medium-6 cell" style="text-align: center;">
                <p><img src="img/connectivity.svg" style="height: 80px;"></p>
                <p><span style="font-size: 64px; font-weight: bold;">221 million</span></p>
                <h5>transactions in 2017 (<i class="fi-arrow-up" style="color: seagreen!important;"></i> <strong>18%</strong> YOY)</h5>
            </div>
            <div class="large-6 medium-6 cell" style="text-align: center;">
                <p><i class="fi-torsos-all access-icon" style="font-size: 50px;"></i></p>
                <p><span style="font-size: 64px; font-weight: bold;">45,500</span></p>
                <h5>active users</h5>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div id="what-weve-learned-themes" class="cell" style="text-align: center; margin-top: 120px;" data-magellan-target="what-weve-learned-themes">
                <br/><br/>
                <h2>As we researched with users and pieced together the complex environment the following <span style="text-decoration: underline;">themes</span> emerged:</h2><br/><br/>
            </div>
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h3 style="text-align: center;">Choice</h3>
                        <p style="text-align: left;">Care providers want choice of device, operating system, &amp; authentication</p>
                        <div class="grid-x grid-padding-x">
                            <div class="large-12 medium-12 cell">
                                <img src="img/responsive.svg" style="padding: 10%; text-align: center;">
                            </div>
                            <div class="large-12 medium-12 cell">
                                <img src="img/OS.svg" style="padding: 15% 10%; text-align: center;"></div>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h3 style="text-align: center;">Clarity</h3>
                        <p style="text-align: left;">Care providers want a clear &amp; consistent navigable UI, with organised, prioritised &amp; structured information</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <img src="img/iPhone-x-scra-1.png" style="max-height: 450px; padding: 10%;"><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <a href="index.php">Back to index</a><br/><br/>
            </div>
            <div class="cell">
                <span><a target="_blank" href="http://www.hippodigital.co.uk"><img src="img/hippo-svg.svg" width="18px !important;"></a></span>
            </div>
        </div>

    </div>

    <?php include ('includes/summary-js.php'); ?>

</body>

</html>
