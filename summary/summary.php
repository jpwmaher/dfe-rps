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
            <div class="cell" style="text-align: center; ">
                <span style="font-size: 18vmax; font-weight: bold;">TSLR</span>
            </div>
            <div id="summary" class="cell" data-magellan-target="summary">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <H2 style="font-size: 15vmin; color: #0072C6;">Summary</H2>
                    </div>
                    <div id="intro" class="large-6 medium-12 cell small-order-2 medium-order-2 large-order-1" style="z-index: 1;">
                        <h4>"Making it quick and easy for teachers to receive a student loan repayment, if they teach a priority subject in an area of greatest need."</h4>
                        <br/>
                        <p>Recruiting and retaining high-quality teachers is central to achieving the DfE mission of giving young people the education they need to have the the best opportunities in life.</p>
                        <p>To encourage that recruitment and retention, the DfE has commissioned a 10 year pilot to reimburse the student loan repayments of new teachers.</p>

                        <p>We've conducted an 'Alpha' on the scheme from October 18 to January 19.</p>
                    </div>
                    <div class="large-6 medium-12 cell small-order-1 medium-order-1 large-order-2" style="text-align: center; padding-bottom: 40px;">
                        <img src="https://support.apple.com/content/dam/edam/applecare/images/en_US/macbookair/psp-mini-hero-macbookair_2x.png">
                    </div>
                    <div class="cell small-order-3 medium-order-3 large-order-3" style="text-align: center; padding-bottom: 40px; padding-top: 40px;">
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
            <div id="what-weve-done" class="cell" data-magellan-target="what-weve-done">
                <span style="color: #0072C6 !important;">What we've done</span>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div id="tasks" class="cell" style="margin-top: 20px;">
                <div class="timeline">

                    <!--       <div class="timeline-item wow fadeInLeft" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-target-two zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="foo">
                                <div class="large-6 medium-6 cell text-center small-order-1 medium-order-2" data-equalizer-watch="foo"><img src="img/target.svg" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell text-right small-order-2 medium-order-1" data-equalizer-watch="foo"><span class="really-big big-icon-bg">18,000</span>
                                    <h4 class="big-icon-bg padd-top">organisations targeted and segmented</h4>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="timeline-item">
                        <div class="timeline-icon wow fadeInRight">
                            <i id="torso" class="fi-torsos-all zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon wow fadeInRight" data-equalizer="fooB">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooB"><img src="img/group.svg" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooB"><span class="really-really-big">99</span>
                                    <h5 class="big-icon-bg padd-top">users interviewed</h5>
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
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--    <div class="timeline-item">
                        <div class="timeline-icon wow fadeInRight">
                            <i id="torso" class="fi-comment-quotes zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon wow fadeInRight" data-equalizer="fooD">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooD"><img data-interchange="[img/faces.svg, small], [img/faces-horiz.svg, medium], [img/faces-horiz.svg, large]" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooD"><span class="really-really-big">367</span>
                                    <h5 class="big-icon-bg padd-top">online user surveys completed</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInLeft" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-graph-trend zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooE">
                                <div class="large-6 medium-6 cell text-center small-order-1 medium-order-2" data-equalizer-watch="fooE"><img src="img/machine.svg" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell text-right small-order-2 medium-order-1" data-equalizer-watch="fooE"><span class="really-big big-icon-bg">500,000</span>
                                    <h4 class="big-icon-bg" style="margin-top: 10px !important;">SCRa user sessions analysed</h4>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="timeline-item">
                        <div class="timeline-icon wow fadeInRight">
                            <i id="torso" class="fi-results-demographics zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon wow fadeInRight" data-equalizer="fooO">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooO" style="padding: 2vmax 10vmax;"><img src="img/prototype-mac.svg" style="height: 100%;"></div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooO"><span class="really-really-big">10</span>
                                    <h5 class="big-icon-bg padd-top">prototypes usability tested</h5>
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
                    <div class="large-6 medium-6 cell theme-cell">
                        <h3 style="text-align: center;">Content</h3>
                        <p>Today SCRa is mainly used for demographic searches and medication and allergies. Its often called the "pharmacist's tool".</p>
                        <div class="responsive-embed">
                            <video width="400" controls>
                    <source src="/videos/content.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell">
                        <h3 style="text-align: center;">Consent</h3>
                        <p>We didn’t set out to research patient consent for data sharing but this theme emerged</p>
                        <div class="responsive-embed">
                            <video width="400" controls>
                    <source src="/videos/consent.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell">
                        <h3 style="text-align: center;">Backstop</h3>
                        <p>What is the purpose of Summary Care Record Application? Is it a good thing when people stop using it?...</p>
                        <div class="responsive-embed">
                            <video width="400" controls>
                    <source src="/videos/backstop.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell">
                        <h3 style="text-align: center;">Local v. National</h3>
                        <p>The NHS landscape contains local solutions that compete with SCRa. What role should NHS Digital play?...</p>
                        <div class="responsive-embed">
                            <video width="400" controls>
                    <source src="/videos/local.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>
                        </div>
                    </div>
                </div>
            </div>

            <!--   <div class="grid-x grid-padding-x">
            <div class="cell" style="text-align: center; margin-top: 120px;">
                <br/><br/>
                <h2>Patient flags have <span style="text-decoration: underline;">very little usage due to lack of awareness</span></h2><br/><br/>
            </div>
            <div class="cell" style="text-align: center;"><br/><br/>
                <img src="img/flag.svg" style="height: 120px;"><br/><br/>
                <p>Female Genital Mutilation Risk Indicator, Child Protection Info Sharing &amp; Overseas Visitors &amp; Migrants account for only </p>
                <p><span style="font-size: 48px; font-weight: bold;">0.04%</span></p>
            </div>
        </div> -->

            <!-- <div class="grid-x grid-padding-x">
            <div class="cell" style="text-align: center; margin-top: 120px;">
                <br/><br/>
                <h2>Care providers want <span style="text-decoration: underline;">more content</span> &amp; <span style="text-decoration: underline;">context</span></h2>
            </div>
            <div class="large-3 cell" style="padding: 30px;">
                <p><img src="img/steth.svg" style="padding: 23px;"></p>
                <h5>GP / Admin</h5>
                <ul>
                    <li>Recent &amp; forthcoming appointments</li>
                    <li>Referrals</li>
                    <li>Organ donor status</li>
                    <br/>
                    <p><strong>Flags:</strong></p>
                    <li>More alerts – e.g. drug seeking behaviour</li>
                    <li>Risk warnings</li>
                    <li>Reasonable adjustments</li>
                </ul>
            </div>
            <div class="large-3 cell" style="padding: 30px;">
                <p><img src="img/heart.svg" style="padding: 60px;"></p>
                <h5>Records &amp; results</h5>
                <ul>
                    <li>Full Patient medical history</li>
                    <li>Diagnoses</li>
                    <li>Long term conditions</li>
                    <li>Comorbidity</li>
                    <li>Psychiatric history</li>
                    <li>Specialist results</li>
                    <li>Blood test results</li>
                    <li>Discharge summaries</li>
                    <li>Clinic letters</li>
                    <li>Special notes</li>
                </ul>
            </div>
            <div class="large-3 cell" style="padding: 30px;">
                <p><img src="img/pill.svg" style="padding: 50px;"></p>
                <h5>Medication, immunisations &amp; vaccines</h5>
                <ul>
                    <li><strong><span style="text-decoration: underline;">All</span></strong> medications - GP, Sexual, Mental, etc</li>
                    <li>Repeat dispensing period</li>
                    <li>Repeat meds before acute meds</li>
                    <li>Meds start date</li>
                    <li>Healthcare at Home meds</li>
                    <li>Interactions information against allergies</li>
                </ul>
            </div>
            <div class="large-3 cell" style="padding: 30px;">
                <p><img src="img/plan.svg" style="padding: 50px;"></p>
                <h5>Plans</h5>
                <ul>
                    <li>Social Care plans</li>
                    <li>End of Life plans</li>
                    <li>DNR</li>
                    <li>Key contacts</li>
                </ul>
            </div>
        </div> -->

            <div class="grid-x grid-padding-x" style="margin-top: 120px;">
                <div id="user-groups" class="cell" style="text-align: center;" data-magellan-target="user-groups">
                    <h2 style="color: #0072C6 !important;">Findings by user groups:</h2>
                </div>
                <div class="cell" style="margin-top: 20px;" data-magellan>
                    <div class="grid-x grid-padding-x grid-margin-x small-up-1 medium-up-3 large-up-3">
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#compharm">Community Pharmacy</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#hospharm">Hospital Pharmacy</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#aerecep">Reception (A&amp;E)</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#aecons">A&amp;E Consultant</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#gpooh">GP Practices / OOH / WIC</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#ambtru">Ambulance Trusts</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#carehomes">Care Homes</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#seventh">Social Workers</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#prisons">Prisons</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#custody">Custody suites</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#dataqual">Data Quality Team</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#isps">Independent Service Providers</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#safeguarding">Safeguarding Lead</a></div>
                        <div class="cell nav-panel"><a class="button hollow expanded big-font" href="#maternity">Maternity Unit</a></div>
                    </div>
                </div>
            </div>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="compharm" class="info-section" data-magellan-target="compharm">
                        <h2 style="color: #005EB8;">Community Pharmacy</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon green" title="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-up access-icon green" title="High"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Emergency prescribing of drugs (Medications &amp; allergies)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Smartcard access can be slow</li>
                                            <li>Completeness and timeliness of the medicines data particularly if a patient has been discharged from hospital</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Emergency prescribing of drugs (Medications &amp; allergies)</li>
                                            <li>Perform Medication Reviews in Care Homes</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Medications prescribed in all settings (ie secondary care) available in a timely manner</li>
                                            <li>Clinical information to give Context (Problems &amp; Diagnosis)</li>
                                            <li>Clarity in presentation of meds and allergies</li>
                                            <li>Need to be able to refer to other services</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="hospharm" class="info-section" data-magellan-target="hospharm">
                        <h2 style="color: #005EB8;">Hospital Pharmacy</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon green" title="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-up access-icon green" title="High"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Medicines reconciliation (Meds and allergies)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Not a complete record - Meds issued from sources other than the GP are not included</li>
                                            <li>There can be a delay in getting the record updated particularly when a patient has a readmission to hospital</li>
                                            <li>There can be challenges interpreting the meds and allergies data (ie meds not shown as discontinued, or understanding which are really repeat prescriptions)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Medicines reconciliation (Meds and allergies)</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Medications prescribed in all settings (ie secondary care) available in a timely manner</li>
                                            <li>Clinical information to give Context (Problems, Diagnoses, Cormorbidity)</li>
                                            <li>Clarity in presentation of meds and allergies</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="safeguarding" class="info-section" data-magellan-target="safeguarding">
                        <h2 style="color: #005EB8;">Safeguarding Lead</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon green" title="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-up access-icon green" title="High in locations that don’t have an integrated solution... but many systems are integrated"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Manage child protection risk</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Some of the neediest children fall under the CP-IS radar - those in risk of sexual exploitation/ or with a child in need plan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Future access needs for safeguarding</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Ensure there is consistency between how the risks are presented within SCRa as the FGM tab behaves differently (there is always an FGM tab for all girls under 18 even if its not populated). </li>
                                            <li>Consider influencing policy to widen out the child protection information that is shared</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="aerecep" class="info-section" data-magellan-target="aerecep">
                        <h2 style="color: #005EB8;">A&amp;E Reception / other ward reception</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon green" title="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-up access-icon green" title="High in locations that don’t have an integrated solution... but many systems are integrated"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Book patient in (Find patient to check details) &amp; provide clinical information and flags to clinicians</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Lack of awareness of anything other than basic search, clumsy UI, lack of awareness over who will or won’t have an NHS number (edge cases)</li>
                                            <li>Using multiple systems </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Book patient in (Find patient to check details) &amp; provide clinical information and flags to clinicians</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Future needs</h5>
                                        <ul>
                                            <li>Fewer clicks, improved search capability &amp; guidance on edge cases</li>
                                            <li>Fewer systems to use (demographics and flags integrated)</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="aecons" class="info-section" data-magellan-target="aecons">
                        <h2 style="color: #005EB8;">A&amp;E Consultant</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-down access-icon green" title="Low"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-down access-icon" title="Low"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Treat complex patients only (large numbers of drugs)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Culturally SCRa not considered part of routine care – used more for complex cases </li>
                                            <li>Vital Data missing to enable supporting a diagnosis (Clinical history and Context)</li>
                                            <li>Paper docs (DNR / Care Plan) can be damaged or lost</li>
                                            <li>Consent model - should cover all clinicians as part of that episode of care at that organisation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Diagnose and Treat</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Clinical Information to diagnose &amp; treat with dignity</li>
                                            <li>Care Plans, DNR etc</li>
                                            <li>Simple consent model</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="gpooh" class="info-section" data-magellan-target="gpooh">
                        <h2 style="color: #005EB8;">GP Practice / Walk-in-Clinic / Out of Hours</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-minus access-icon green" style="color: orange;" title="Medium" alt="Medium"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-down access-icon" title="Low"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>SCRa more useful when the GP out of hours doesn’t have one of the GP systems with integrated SCR</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Complex data sharing models (ie Systm One) not understood by patients</li>
                                            <li>Smartcard access</li>
                                            <li>Lack of clinical information in SCR to support a diagnosis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Diagnose and Treat (Demographics, Clinical info &amp; Risk indicators)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Clinical information to support a diagnosis</li>
                                            <li>Medications from all sources</li>
                                            <li>Care Plans</li>
                                            <li>Social Care information</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="ambtru" class="info-section" data-magellan-target="ambtru">
                        <h2 style="color: #005EB8;">Ambulance Trusts</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-4 cell show-for-large">
                                &nbsp;
                            </div>
                            <div class="large-4 cell">
                                <div class="responsive-embed">
                                    <video width="400" controls>
                    <source src="/videos/ambulance.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>
                                </div>
                            </div>
                            <div class="large-4 cell show-for-large">
                                &nbsp;
                            </div>
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-minus access-icon green" style="color: orange;" title="Medium" alt="Medium"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-minus access-icon green" style="color: orange;" title="Medium" alt="Medium"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Hear and Treat in Clinical hub (meds and allergies) </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Smartcard and N3, and lack of mobile access</li>
                                            <li>Clinical Information not rich enough to support a diagnosis/ decision where to route passenger</li>
                                            <li>There can be challenges interpreting the meds and allergies data (ie meds not shown as discontinued, or understanding which are really repeat prescriptions)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>See and Treat - Ambulance</li>
                                            <li>Hear and Treat - Clinical hub</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Authentication solution to immediately trial getting solution in the back of an ambulance</li>
                                            <li>Enhanced search</li>
                                            <li>Clinical information to support a diagnosis/ what’s changes – single source of truth</li>
                                            <li>Care plans (mental health), DNR, to support best treatment option and where to take</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="carehomes" class="info-section" data-magellan-target="carehomes">
                        <h2 style="color: #005EB8;">Care Homes</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-4 cell show-for-large">
                                &nbsp;
                            </div>
                            <div class="large-4 cell">
                                <div class="responsive-embed">
                                    <video width="400" controls>
                    <source src="/videos/care-homes.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>
                                </div>
                            </div>
                            <div class="large-4 cell show-for-large">
                                &nbsp;
                            </div>
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon faded" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-down access-icon" style="color: red" title="Low" alt="Low"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-down access-icon" style="color: red" title="Low" alt="Low"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Not used </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Access - Smartcards &amp; N3</li>
                                            <li>Low digital maturity within staff</li>
                                            <li>65% of Care Home Sector have just 1-2 homes, often no wifi, PC on desk – groups 5+ homes more likely to have IT systems</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Create Care Plan</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>SCR as a starter for ten (meds and allergies)</li>
                                            <li>Clinical information </li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="dataqual" class="info-section" data-magellan-target="dataqual">
                        <h2 style="color: #005EB8;">Data Quality Team</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-4 cell show-for-large">
                                &nbsp;
                            </div>
                            <div class="large-4 cell">
                                <div class="responsive-embed">
                                    <video width="400" controls>
                    <source src="/videos/search.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>
                                </div>
                            </div>
                            <div class="large-4 cell show-for-large">
                                &nbsp;
                            </div>
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon" title="High" alt="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-up access-icon" title="High" alt="High"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Find patient and correct demographic details on PAS</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Knowledge of who will have an NHS no/ edge cases</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Find patient and correct demographic details on PAS</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Contextual Help/ guidance on edge cases (who will have an NHS no)</li>
                                            <li>Simplified user interface for search (advanced search etc)</li>
                                            <li>Additional search options (name reversal etc) </li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="isps" class="info-section" data-magellan-target="isps">
                        <h2 style="color: #005EB8;">ISPs (serving Ophthalmology), other ‘ologies</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon faded" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon" title="High" alt="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-down access-icon" title="Low" alt="Low"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Don't currently use the SCRa</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>No N3/smartcards/ IG toolkit small organisations perceived as too expensive</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Find patient details</li>
                                            <li>Refer patient to other services</li>
                                            <li>Clinical information (in some settings)</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Further research needed to confirm demand &amp; needs</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="prisons" class="info-section" data-magellan-target="prisons">
                        <h2 style="color: #005EB8;">Prisons</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon" title="High" alt="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-down access-icon" title="Low" alt="Low"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Find patient / create new patient record (Meds &amp; Allergies)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>SCR needs to include detailed information concerning medication. Why it has been prescribed, dosage, review dates and monitoring (such as blood test results)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Create New Patient Record - Project running to enable patients to be “transferred to a prison GP” which will mean SCR is still used but not SCRa</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Immunisation/vaccination details</li>
                                            <li>Medication prescribed from secondary care services – especially HIV medication</li>
                                            <li>Hep B/C status</li>
                                            <li>Homeless or transient patients often have no up to date medical information in their SCR, there is a need to pull in information from secondary providers of care who might sit outside of the NHS</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="custody" class="info-section" data-magellan-target="custody">
                        <h2 style="color: #005EB8;">Custody suites</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon" title="High" alt="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-up access-icon" title="High" alt="High"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Understand if there are any impairments that need to be taken account of ie (Asperger’s) (Reasonable Adjustments)</li>
                                                <li>Keep a patient safe in custody (meds and allergies)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>Smartcards an issue</li>
                                            <li>Understanding if a patient has reduced capacity to be tried safely</li>
                                            <li>Clinical context (Mental health particularly takes a lot of time)</li>
                                            <li>Who else is treating the patient</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Keep a patient safe in custody</li>
                                            <li>Understand if there are any impairments that need to be taken account of ie (Asperger’s)</li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Clinical Context (Diagnosis etc)</li>
                                            <li>Mental Health information</li>
                                            <li>Services a patient is using</li>
                                            <li>Service contacts</li>
                                            <li>Clinic letters</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="cell sections">
                    <br /><br /><br /><br /><br /><br /><br />

                    <section id="maternity" class="info-section" data-magellan-target="maternity">
                        <h2 style="color: #005EB8;">Maternity / Child Health Units</h2><br />
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                                <h4>Current</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x" data-equalizer="fooF" data-equalize-by-row="true">
                                    <div class="large-5 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-4 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Awareness</h5>
                                        <i class="fi-arrow-up access-icon" title="High" alt="High"></i>
                                    </div>
                                    <div class="large-3 cell small-6 research-panel" style="text-align: center;" data-equalizer-watch="fooF">
                                        <h5 style="text-align: left;">Usage</h5>
                                        <i class="fi-arrow-up access-icon" title="High" alt="High"></i>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Use case(s)</h5>
                                        <div class="large-12 columns">
                                            <ul>
                                                <li>Create Birth Notification</li>
                                                <li>Review Birth Notification</li>
                                                <li>Create FGM indicator </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Challenges</h5>
                                        <ul>
                                            <li>BNA - duplication of effort - input into BNA and in maternity system</li>
                                            <li>Demographic details not always up to date - causes issues with GP information</li>
                                            <li>Some midwives are reluctant to change information that has a national view (FGM)</li>
                                            <li>Ethics around assigning an FGM alert to all baby girls born to women of FGM</li>
                                            <li>Mothers who don't have an NHS number (BNA)</li>
                                            <li>BNA - ethnicity field - families have complained</li>
                                            <li>BNA - basic and advanced search - too many mandatory fields - need 2</li>
                                            <li>BNA - notifications screen - have to search by ODS code</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="large-6 cell future">
                                <h4>Future</h4><br/>
                                <div class="grid-x grid-padding-x grid-margin-x">
                                    <div class="large-12 cell research-panel" data-equalizer-watch="fooF">
                                        <h5>Access</h5>
                                        <div class="grid-x">
                                            <div class="large-12 columns" style="text-align: center;">
                                                <i class="fi-monitor access-icon" title="Desktop"></i> &nbsp; <i class="fi-laptop access-icon faded" title="Laptop"></i> &nbsp; <i class="fi-tablet-portrait access-icon faded" title="Tablet"></i> &nbsp; <i class="fi-mobile  access-icon faded" title="Mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Use case(s)</h5>
                                        <ul>
                                            <li>Create Birth Notification</li>
                                            <li>Review Birth Notification</li>
                                            <li>Create FGM indicator </li>
                                        </ul>
                                    </div>
                                    <div class="large-12 cell research-panel">
                                        <h5>Needs</h5>
                                        <ul>
                                            <li>Simplify BNA search interface</li>
                                            <li>Seek to influence those that set the policy &amp; guidance for recording and acting on FGM risks</li>
                                        </ul>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>

        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <a href="index.html">Back to index</a><br/><br/>
            </div>
            <div class="cell">
                <span><a target="_blank" href="http://www.hippodigital.co.uk"><img src="img/hippo-svg.svg" width="18px !important;"></a></span>
            </div>
        </div>

    </div>

    <?php include ('includes/summary-js.php'); ?>

</body>

</html>
