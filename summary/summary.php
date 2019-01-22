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
            <li><a href="#summary">Overview</a></li>
            <li><a href="#what-weve-done">What we've done</a></li>
            <li><a href="#what-weve-learned">What we've learned</a>
            </li>
        </ol>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center;" wow-duration="1s">
                <span style="font-size: 18vmax; font-weight: bold;">TSLR</span>
            </div>
            <div class="cell wow fadeIn" style="text-align: center; padding-bottom: 40px; margin-bottom: 50vh;" wow-duration="2s">
                <ul id="main-menu" class="menu vertical" data-magellan>
                    <li>
                        <a href="#summary">
                            <h4>1. Overview</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#what-weve-done">
                            <h4>2. What we've done</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#what-weve-learned">
                            <h4>3. What we've learned</h4>
                        </a>
                        <p>
                            <a href="#what-weve-learned">- about Teachers’ Student Loan Reimbursement Service</a>
                            <a href="#what-weve-learned-mpr">- about Maths &amp; Physics Retention Payments</a>
                        </p>
                    </li>
                </ul>
            </div>
            <div id="summary" class="cell" data-magellan-target="summary">
                <div class="grid-x grid-padding-x">
                    <div class="cell wow fadeInLeft" data-wow-duration="1s">
                        <H2 style="font-size: 15vmin; color: #0072C6;">Overview</H2>
                    </div>
                    <div id="intro" class="large-6 medium-12 cell small-order-2 medium-order-2 large-order-1 wow fadeInLeft" style="z-index: 1;">
                        <h4>Recruiting and retaining high-quality teachers is central to achieving the DfE mission of giving young people the education they need to have the the best opportunities in life</h4>
                        <br/>
                        <p><strong>But</strong>...teacher applications are decreasing. Last year the figure decreased by 29%.</p>
                        <p>To encourage recruitment and retention, the DfE has commissioned a 10 year pilot that reimburses the student loan repayments of new teachers.</p>

                        <p>We've conducted an 'Alpha' on the scheme from October 18 to January 19.</p>
                        <p>In parallel, we extended our scope to conduct a 'mini-Discovery' into the proposed <span data-tooltip tabindex="1" title="An annual, tax-free payment to specialist Maths or Physics teachers with the aim of retaining them as teachers">Maths &amp; Physics Retention Payments</span> scheme.</p>
                    </div>
                    <div class="large-6 medium-12 cell small-order-1 medium-order-1 large-order-2 wow fadeInRight" style="text-align: center; padding-bottom: 40px;" data-wow-duration="1s">
                        <img src="img/macbook.png">
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
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooB"><span class="really-really-big">111</span>
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
                                <div class="large-6 medium-6 cell text-right small-order-2 medium-order-1" data-equalizer-watch="fooC"><span class="really-really-big big-icon-bg">77</span>
                                    <h4 class="big-icon-bg padd-top">hours of interviews</h4>
                                    <a href="#">View the interview transcripts</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInRight" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-results-demographics zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooO">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooO">
                                    <img src="img/event.svg" style="height: 100%;">
                                </div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooO"><span class="really-really-big">2</span>
                                    <h4 class="big-icon-bg padd-top">'Get into teaching' events attended</h4>
                                    in Manchester and Leeds
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
                                <div class="large-6 medium-6 cell text-center small-order-1 medium-order-2" data-equalizer-watch="fooC" style="padding: 1vmax;"><img src="img/teacher-persona.svg" class="big-icon-bg" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell text-right small-order-2 medium-order-1" data-equalizer-watch="fooC"><span class="really-really-big big-icon-bg">7</span>
                                    <h4 class="big-icon-bg padd-top">user personas created</h4>
                                    <a href="#">View the personas</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInRight" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-results-demographics zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooO">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooO" style="padding: 2vmax 10vmax;">
                                    <img src="img/prototype-mac.svg">
                                </div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooO"><span class="really-really-big">16</span>
                                    <h4 class="big-icon-bg padd-top">prototypes usability tested</h4>
                                    <a href="https://dfe-tslr.herokuapp.com/launch">View the TSLR prototypes</a><br/>
                                    <a href="https://dfe-rps.herokuapp.com">View the MPR prototypes</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-learned" class="cell" data-magellan-target="what-weve-learned">
                <span style="color: #0072C6 !important;">What we've learned about Teachers’ Student Loan Reimbursement Service</span>
            </div>
        </div>


        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 120px;">
                <br/><br/>
                <h2>Our first was task to define the <a href="https://docs.google.com/document/d/1wcR7HjW_hTX2sdVLORQ_NCwm9xcw64_cB3IX3T9ER
                    KU/edit" target="_blank" title="View the full problem statement with links to evidence">problem</a></h2><br/><br/>
                <span class="emoji">🤔</span>
                <br/><br/>
                <h4 class="standout">"Schools in more challenging areas are finding it harder to recruit and retain teachers, particularly in the subjects of languages (excluding English), science and computer science."</h4><br/><br/><br/><br/><br/><br/><br/>
                <h2>We then gave ourselves the following <a href="https://docs.google.com/document/d/1c3uXEKQnV6ypkOqr8OgoBTu6i_5maARfdMiVoMVzbDw
                    /edit" target="_blank" title="View the earlier iterations of the mission statement">mission</a>:</h2>
                <br/><br/>
                <span class="emoji">🧐</span><br/><br/>
                <h4 class="standout">"Make it quick and easy for teachers to receive a student loan repayment, if they teach a priority subject in an area of greatest need."</h4><br/><br/><br/><br/><br/><br/><br/>
                <h2>We then got to work on testing the assumptions we had at the beginning of Alpha.</h2><br/><br/>
                <span class="emoji">👩🏻‍🏫</span>
                <br/><br/><br/><br/><br/><br/><br/>
            </div>
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <h2>Here's what we know now:</h2>
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h3 style="text-align: center;">Discover</h3>
                        <p style="text-align: left;">Teachers will find out about the scheme from their school, or via teacher Facebook or WhatsApp groups</p>
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

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-learned-mpr" class="cell" data-magellan-target="what-weve-learned-mpr">
                <span style="color: #0072C6 !important;">What we've learned about Maths &amp; Physics Retention Payments</span>
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
