@section('content')
    <section class="content-section">
        <div class="content-section__left">
            <h1>My Work</h1>
            <p>
                During my career I've worked on a plethora of websites, taking
                care of front-end, back-end, database design &amp;
                implementation and server administration work.
            </p>
            <p>
                I started off as a junior web developer at A Shade
                Greener, working with the marketing team and Managing Director
                to build websites and marketing campaigns, successfully growing
                the company to become the UK's largest installer of free solar
                panels. During my time there I continuously improved my skills
                while advancing to the role of lead developer.
            </p>
            <p>
                Since then I've been the Head of Development at an online
                marketing &amp; lead generation company started by myself and
                some colleagues, before moving onto a senior development
                position at a Design &amp; Print Agency.
            </p>
            <p>
                Below is a selection of some of the websites I've worked on,
                with highlights of their notable features.
            </p>
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>Rethink Web2Print</h2>
            <p>
                I've weas responsible for a large amount of work on Rethink's
                custom-built Web-to-print platform, which combines
                e-commerce development with heavy use of an API created by
                Xerox to interact with their FreeFlow Core platform to send
                online print jobs directly to press.
            </p>
            <p>Features include:</p>
            <dl>
                <dt>E-commerce</dt>
                <dd>
                    WordPress &amp; WooCommerce used as a base for e-commerce
                    features.
                </dd>

                <dt>FreeFlow Core API</dt>
                <dd>
                    Heavy use of Xerox's FreeFlow Core API to send artwork and
                    print instructions directly to the press queue.
                </dd>

                <dt>Automatic Artwork Checks</dt>
                <dd>
                    Using a combination of ImageMagick and FreeFlow Core's API,
                    artwork is passed through a 'pre-flight' check to analyse
                    print compatibility, and provide feedback, as well as
                    generating print-ready 'autocorrected' versions.
                </dd>

                <dt>JDF/JMF PHP Library</dt>
                <dd>
                    FreeFlow Core utilises the JDF/JMF XML format for
                    interfacing with Rethink's press hardware. To make this an
                    easier process, I created a basic PHP library to create
                    files and handle sending/receiving of messages.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot"
                src="/img/web2print-home_thumb.png"
                alt="Rethink Media Website Homepage Screenshot">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>Rethink Media Website</h2>
            <p>
                I worked with the design team to rebuild the Rethink Media
                website shortly after my arrival. The primary focus of the
                redesign was to bring the website up to speed with a new look
                and full cross-device responsiveness.
            </p>
            <p>
                The website was built using the Slim PHP microframework and 
                Zurb Foundation front-end framework for rapid development.
            </p>
            <p>Features include:</p>
            <dl>
                <dt>Updated backend</dt>
                <dd>
                    The website was updated to use the Slim PHP microframework
                    for speed and better abstraction of functionality.
                </dd>

                <dt>Templating Engine Implemented</dt>
                <dd>
                    The Twig templating engine was also used, allowing reusable
                    components to be created for easier updating of repeated
                    elements.
                </dd>

                <dt>Mobile optimised</dt>
                <dd>
                    Fully responsive across devices, as well as loading
                    differently sized images on appropriate devices for
                    optimised speed, quality and data usage.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot"
                src="/img/rethink-home_thumb.png"
                alt="Rethink Media Website Homepage Screenshot">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>ASG Money CRM</h2>
            <p>
                A custom-built Customer Relationship Management system to allow
                A Shade Greener Money to manage loans.
            </p>
            <p>
                The system was built using Laravel 5.3 and Vue.js to allow for
                seamless in-page editing and addition of information.
            </p>
            <p>Features include:</p>
            <dl>
                <dt>Task system</dt>
                <dd>
                    Users can attach tasks to existing loans and assign a user
                    to be responsible for that task. Notifications are
                    automatically sent to assigned users. 
                </dd>

                <dt>Export loan data to document template</dt>
                <dd>
                    A summary of loan data can be exported to a Word document,
                    PDF or saved to Google Drive in one click.
                </dd>

                <dt>Notes system</dt>
                <dd>
                    Easy to use notes system. Add or edit notes without leaving
                    the page.
                </dd>

                <dt>Reporting</dt>
                <dd>
                    Filter loans by status, date added, amount owed etc.  All
                    results can be exported to document template
                    simultaneously.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot"
                src="/img/asgm-crm-home_thumb.png"
                alt="ASG Money CRM Homepage Screenshot">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>
                <a href="http://compare.ashadegreener.co.uk/" target="_blank">
                    ASG Energy Comparison
                </a>
            </h2>
            <p>
                Custom built energy comparison site, using UKPower's API
                and combination of cURL and custom JavaScript &amp; AJAX.
            </p>
            <p>
                Created with ease-of-use in mind. The form is simple, easy to
                follow and loads in a state which can be submitted without
                changing any options.
            </p>
            <dl>
                <dt>API Usage</dt>
                <dd>
                    The form uses UK Power's API to retrieve suppliers for the
                    user's postcode area via cURL before the page renders.
                </dd>

                <dt>Dynamic Form</dt>
                <dd>
                    AJAX requests are used to display contextually relevant
                    data, such as a supplier's list of tariffs, based on the
                    form's current state.
                </dd>

                <dt>SVG Sprite</dt>
                <dd>
                    Icons are loaded using a Gulp-generated SVG sprite so they
                    can easily change colour with a simple change of class.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/asgcompare-home_thumb.png"
                alt="ASG Energy Comparison Website Form">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>Last Minute Solar</h2>
            <p>Lead generation landing page &amp; accompanying form.</p>
            <dl>
                <dt>One-tap registration</dt>
                <dd>
                    We sent an SMS to previous solar panel applicants
                    containing a link to re-register their interest in one tap
                    using a unique URL identifier to retrieve existing database
                    information.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/lastminutesolar-home_thumb.png"
                alt="Last Minute Solar Website Homepage">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>Best Boiler Deal</h2>
            <p>Landing page &amp; accompanying multi-step form.</p>
            <dl>
                <dt>Postcode address lookup</dt>
                <dd>
                    Form contains a postcode address lookup with manual entry
                    fallback in case of errors.
                </dd>

                <dt>Affiliate integration</dt>
                <dd>
                    Leads are automatically relayed to affiliates using
                    background tasks. No waiting for long response times from
                    an external API.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/bestboilerdeal-home_thumb.png"
                alt="Best Boiler Deal Website Homepage">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>A Shade Greener</h2>
            <p>
                The main business venture of A Shade Greener Ltd. I was
                responsible for maintaining and updating the website. If we
                have any new marketing ideas, changes to the application
                process or updates for the customer login system I'm the man
                that makes them work.
            </p>
            <p>
                I've worked on several designs and revamps of the
                <abbr title="A Shade Greener">ASG</abbr> website over the
                years, from the original solar panel application site to a more
                recent home-savings-based variant.
            </p>
            <p>
                Some of the site's more prominent features have been:
                <dl>
                    <dt>Social networking APIs</dt>
                    <dd>
                        Implementation of Facebook, Twitter and
                        Google+ APIs to fetch likes, followers etc.
                    </dd>

                    <dt>Automated location finding</dt>
                    <dd>
                        When submitting an application, customers' precise
                        locations (latitude and longitude) are automatically
                        searched for via a back-end system based on their
                        street address and postcode.
                    </dd>

                    <dt>Multi-friend referral</dt>
                    <dd>
                        AJAX form to easily send referral emails to multiple
                        friends at once to earn rewards.
                    </dd>

                    <dt>Dynamically ranked FAQs</dt>
                    <dd>
                        Visitors to the site were able to give feedback on our
                        FAQs page. These questions were then ordered by ranking
                        so the most useful questions appear first.
                    </dd>

                    <dt>Automatically expiring job vacancies</dt>
                    <dd>
                        Using a combination of data from a database and CSS
                        classes dynamically set with PHP, job vacancies
                        automatically expired.
                    </dd>
                </dl>
            </p>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/asg-home_thumb.jpg"
                alt="ASG Home Homepage Thumbnail">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>Everlasting Boilers</h2>
            <p>
                As well as solar panels, ASG also branched out into boiler
                installation. I've built several versions of the company
                website from scratch using PHP, Laravel, HTML, CSS/SCSS and
                jQuery.
            </p>
            <p>
                Although I'm no longer responsible for the existing version of
                the website, I did implement some interesting technologies in
                older versions of the site.
            </p>
            <dl>
                <dt>Time-based form functionality</dt>
                <dd>
                    Application form which behaves differently
                    depending on whether the office is currently open,
                    instructing customers on when they will receive a callback.
                </dd>

                <dt>Location-based content</dt>
                <dd>
                    Display phone numbers with a local area code based on
                    pre-set query string data.
                </dd>

                <dt>Device-based CTAs</dt>
                <dd>
                    Device-based dynamic content, focusing on having the
                    customer call us if using a mobile device, or request a
                    callback on tablets and desktop computers.
                </dd>

                <dt>Modernizr</dt>
                <dd>
                    Using Modernizr as a shim for HTML5 support in older
                    versions of Internet Explorer, as well as some CSS based on
                    browser feature detection
                </dd>

                <dt>Javascript Tooltips</dt>
                <dd>
                    I created a tooltip-style enquiry form which expands from a
                    banner CTA button
                </dd>

                <dt>CSS3 With Fallbacks</dt>
                <dd>
                    Some elements of the site, such as circles primarily use
                    CSS3 and fall back to more compatible methods in
                    unsupported browsers.
                </dd>

                <dt>HTML5 Video</dt>
                <dd>
                    Footer video playing on loop in HTML5-enabled browsers wich
                    falls back to a still image in non-supported ones.
                </dd>

                <dt>Customer Reviews</dt>
                <dd>
                    A reviews page which fetches and sorts reviews for each
                    team of installers from a database and displays them
                    appropriately.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/evlb-home_thumb.jpg"
                alt="Everlasting Boilers Homepage Thumbnail">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>ASG Money</h2>
            <p>
                The original website for a now-updated branch of A Shade
                Greener. Built on the premise of crowd-funding investments for
                free solar installations with the promise of a high interest
                return for the customer.
            </p>
            <p>
                The back-end was fully developed using Oject-Oriented PHP by
                myself with the <a href="http://www.slimframework.com/"
                    target="_blank">Slim</a> micro framework modified to work
                with an <abbr title="Model-View-Controller">MVC</abbr> pattern.
            </p>

            <p>Interesting features include:</p>
            <dl>
                <dt>Email Confirmation</dt>
                <dd>
                    When a customer registers their interest in investing,
                    an email with attached information document is
                    automatically sent to the email address they registered
                    with.
                </dd>

                <dt>Complex and secure application process</dt>
                <dd>
                    The entire application process has been built with multiple
                    levels of security including SSL, securely hashed/encrypted
                    application data,
                    <a href="http://en.wikipedia.org/wiki/Blowfish_(cipher)"
                        target="_blank">Blowfish</a> encrypted passwords and 
                    encrypted cookies for user authorisation.
                </dd>

                <dt>Full front- and back-end validation</dt>
                <dd>
                    All user-filled forms include full JavaScript and PHP data
                    validation implemented with reusable, data-agnostic classes.
                </dd>

                <dt>Automatic identification checks</dt>
                <dd>
                    Integration of an ID/fraud checking API is in progress to
                    perform automatic checks of user-submitted applications.
                </dd>

                <dt>Payment integration</dt>
                <dd>
                    The site has a full payment system implemented via WorldPay
                    with back-end validation and authorisation of the payment
                    response.
                </dd>

                <dt>Custom built admin panel</dt>
                <dd>
                    Used to gain secure access to customers' application
                    details and verify/reject application.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/money-home_thumb.jpg"
                alt="ASG Money Homepage Thumbnail">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>ASG Biomass</h2>
            <p>
                On top of solar panels and boiler for homes, ASG has also
                provided free commercial biomass heating systems.
            </p>
            <p>
                This project had a very tight deadline so the initial website
                was created in just 2 weeks with all HTML and CSS and full
                application process completed.
            </p>
            <p>
                Once the core site was completed additional components and
                JavaScript enhancements were added until the site underwent a
                full redesign.
            </p>

            <p>Some of the original website features:</p>
            <dl>
                <dt>Savings counter</dt>
                <dd>
                    A dynamic counter utilising back-end data and
                    front-end functionality
                </dd>

                <dt>User-controllable webcam</dt>
                <dd>
                    Users of the site were able to remotely control a webcam
                    placed in our warehouse to view us assembling the biomass
                    units.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/biomass-home_thumb.jpg"
                alt="ASG Biomass Homepage Thumbnail">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>Overall / Other</h2>
            <p>
                As well as my web development duties, I've also worked on
                several other projects at A Shade Greener.
            </p>

            <dl>
                <dt>Data Management/Manipulation</dt>
                <dd>
                    Head of the massive suitable house finding initiative.
                    Responsible for collating and reporting on around 6000
                    records of suitable solar properties per week
                </dd>

                <dt>Automation of repetitive tasks</dt>
                <dd>
                    <p>
                        When I'm not taking care of marketing-related web
                        development I use my powers for good in other
                        departments. If I'm aware of a task that could be
                        automated or improved I'll do what I can
                        to write a program or script to take care of it.
                    </p>

                    <p>
                        One example is a slow, unreliable screen-recorded macro
                        that was run to submit and extract data from an online
                        calculator. Using PHP and cURL I wrote a script which
                        reduced this task from taking several days to being
                        completed in under an hour.
                    </p>
                </dd>
            </dl>
        </div>
    </section>
@stop
