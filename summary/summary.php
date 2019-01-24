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
            <li><a href="#what-weve-learned-2">What we've learned</a>
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
                        <img src="img/macbook.png"><br>
                        <span style="font-size: 10px;">Replace with image of TSLR on computer...</span>
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
                <span style="color: #0072C6 !important;">The start of Alpha...</span>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 120px;">
                <br/><br/>
                <h2>Our first task was to define the <a href="https://drive.google.com/open?id=1wcR7HjW_hTX2sdVLORQ_NCwm9xcw64_cB3IX3T9ERKU" target="_blank" title="View the full problem statement with links to evidence">problem</a></h2><br/><br/>
                <span class="emoji">🤔</span>
                <br/><br/>
                <h4 class="standout">"Schools in more challenging areas are finding it harder to recruit and retain teachers, particularly in the subjects of languages (excluding English), science and computer science."</h4><br/><br/><br/><br/><br/><br/><br/>
                <h2>We then gave ourselves the following <a href="https://drive.google.com/open?id=1c3uXEKQnV6ypkOqr8OgoBTu6i_5maARfdMiVoMVzbDw" target="_blank" title="View the earlier iterations of the mission statement">mission</a>:</h2>
                <br/><br/>
                <span class="emoji">🧐</span><br/><br/>
                <h4 class="standout">"Make it quick and easy for teachers to receive a student loan repayment, if they teach a priority subject in an area of greatest need."</h4><br/><br/><br/><br/><br/><br/><br/>
                <h2>We then got to work on testing our assumptions...</h2><br/><br/>
                <span class="emoji">👩🏻‍🏫</span>
                <br/><br/><br/><br/><br/><br/><br/>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-learned-2" class="cell" data-magellan-target="what-weve-learned-2">
                <span style="color: #0072C6 !important;">What we've learned about Teachers’ Student Loan Reimbursement Service</span>
            </div>
        </div>


        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 80px; margin-bottom: 80px;">
                <h2>Policy:</h2>
            </div>
        </div>
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Policy aim</h4>
                        <p style="text-align: left;">The aim is to give young people the education they need to have the the best opportunities in life.</p>
                        <ul>
                            <li>Children need stability in their lives to give them the best chance of future prospects, this includes consistency of teachers and teaching approach.</li>
                            <li>Children need an education to have the best chance of future prospects this includes enough teachers to teach the rising number of children in schools</li>
                        </ul>
                        <p style="text-align: left;"><a href="#">Link to user stories page in PDF</a></p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🎯</span>

                            </div>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Eligibility</h4>
                        <p style="text-align: left;">Currently the policy states that a teacher must have been teaching an eligible subject for at least 50% of their time.</p>
                        <p style="text-align: left;"> Our research suggests asking the teacher what they were employed to teach during the previous tax year instead. This allows us to understand their intent, and thus target the right teachers to align better with the policy's objective.
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🏫</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 80px; margin-bottom: 80px;">
                <h2>Discovering the service:</h2>
            </div>
        </div>
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Hearing about it</h4>
                        <p style="text-align: left;">Teachers will likely find out about the scheme from their school, mailing lists, or via teacher Facebook or WhatsApp groups</p>
                        <div class="grid-x grid-padding-x">
                            <div class="large-12 medium-12 cell"><br>
                                <img src="img/social-icons.svg" style="text-align: center; height: 100%; padding-top: 10%;">
                            </div>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Service name</h4>
                        <p style="text-align: left;">Teachers said the title of the service makes sense, but all the eligibility critera aren't explicit in the title
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <span class="emoji">🤔</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                <h2>Making a claim:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">

                    <div class="large-4 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Getting data from HMRC</h4>
                        <p style="text-align: left;">We looked into receiving data from HMRC but they didn't have enough capacity to support in Year 1. <br><br>So we've focussed on a model where teachers submit information that is verified by school.</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 20%;">
                                <img src="img/hmrc.svg">
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Teachers submitting their data</h4>
                        <p style="text-align: left;">Teachers said they could access the information they'd need for the application fairly easily and would get these things together before starting the application... <br><br>...but we suggest building the Beta version to allow them to go away and come back if they need to.
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">👨🏻‍🏫</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Filtering applicants</h4>
                        <p style="text-align: left;">We believe that some teachers won't read the eligibility content, and some teachers aren't sure what local authority their school is a part of, so we'd recommend testing an <a href="https://dfe-tslr.herokuapp.com/z/check-intro" target="_blank">eligibility checker</a> in Beta. </p>
                        <p style="text-align: left;">This may be a more effective filter of ineligible teachers.
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 10%;">
                                <img src="img/eligibility-checker.png">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                <h2>Verifying a claim:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">

                    <div class="large-4 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">SBP awareness</h4>
                        <p style="text-align: left;">not heard about it</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🤷🏽‍♀️</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Inbox</h4>
                        <p style="text-align: left;">shared inbox probz
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">📨</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Onboarding</h4>
                        <p style="text-align: left;">blah </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🤝</span>
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
