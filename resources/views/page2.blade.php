<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Tasom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">TASOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_us">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('message'))
        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-{{ session('alert-type') }}">
                    <div class="modal-header bg-{{ session('alert-type') }} text-white">
                        <h5 class="modal-title" id="messageModalLabel">Info</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-{{ session('alert-type') }}">{{ session('message') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-{{ session('alert-type') }}" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Hero Section -->
    <section class="hero">
        <div class="container px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">"Your Support, Our Expansion"</h1>
            <p class="lead fs-4 fw-bold ">Help Us Grow: Support TASOM's New Building Fund</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#zelleConfirmation">
                <img src="{{ asset('images/buy_a_brick.jpg') }}" width="200" height="200" class="img-thumbnail" alt="">
            </a>
            <p class="lead fs-4 fw-bold pt-3">
                <strong>1</strong> Brick is <strong>$50</strong> and, We are Looking for <strong>8000</strong> Bricks.
            </p>
            <p class="lead fs-4 fw-bold pt-3">
                Our Goal is $400,000 for Initial Costs.
            </p>
            <div class="progress">
                <div class="progress-bar brick-color" role="progressbar" style="width: 2.5%;" aria-valuenow="2.5" aria-valuemin="0" aria-valuemax="100">206 Bricks</div>
            </div>
            <p class="lead fw-bold">
                            We Have Received <strong>206</strong> Bricks So Far. <span style="font-weight: normal;">(daily updated)</span>
                        </p>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <h2 class="pb-2 border-bottom" id="about_us">About Us </h2>
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center py-5">
                <div class="col d-flex flex-column align-items-start">
                    <h2 class="fw-bold text-body-emphasis">NEW TASOM</h2>
                    <p class="text-body-secondary text-justify">
                        The Turkish American Society of Missouri (TASOM) is a vibrant and inclusive community
                        organization dedicated to fostering cross-cultural understanding, friendship, and collaboration.
                        As our community continues to grow, so does our need for a larger space to accommodate our
                        diverse programs and activities. Currently, our building is too small to effectively serve our
                        members and the broader community.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#zelleConfirmation" >Buy A Brick</a>
                </div>
                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-1 g-4">

                        <div class="col d-flex flex-column gap-2 pt-4">
                            <h4 class="fw-semibold mb-0 text-body-emphasis">Why We Need Your Support</h4>
                            <p class="text-body-secondary">Our mission at TASOM is to create a dynamic and welcoming environment where people of all
                                <a href=""  data-bs-toggle="modal" data-bs-target="#expandEducationalModal"> more...</a></p>

                        </div>
                        <div class="modal fade" id="expandEducationalModal" tabindex="-1" aria-labelledby="expandEducationalModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="expandEducationalModalLabel">Why We Need Your Support</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Our mission at TASOM is to create a dynamic and welcoming environment where people of all
                                            backgrounds—Muslim and non-Muslim, Turkish and non-Turkish—can come together to learn,
                                            grow, and celebrate shared values. A larger building will enable us to:</p>
                                        <ul>
                                            <li>
                                                Expand Our Educational Programs: Offer more classes and workshops, including language courses, cultural activities, and career development seminars.
                                            </li>
                                            <li>
                                                Enhance Youth Programs: Provide additional space for youth clubs, mentorship programs, and sports activities.
                                            </li>
                                            <li>
                                                Increase Community Engagement: Host larger events and gatherings to promote cultural exchange and community building.
                                            </li>
                                            <li>
                                                Support Elderly and Vulnerable Members: Offer more comprehensive support services and social activities for older adults.
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  ------------------------    --}}
                        <div class="col d-flex flex-column gap-2">
                            <h4 class="fw-semibold mb-0 text-body-emphasis">How You Can Help</h4>
                            <p class="text-body-secondary">We have launched a BUY A BRICK campaign to raise funds for purchasing a new building
                                <a href=""  data-bs-toggle="modal" data-bs-target="#expandEducationalModal2"> more...</a></p>

                        </div>

                        <div class="modal fade" id="expandEducationalModal2" tabindex="-1" aria-labelledby="expandEducationalModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="expandEducationalModalLabel">How You Can Help</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Donate: Every contribution, big or small, brings us one step closer to our goal.</p>
                                        <ul>
                                            <li>
                                                Share: Spread the word about our campaign to friends, family, and colleagues.
                                            </li>
                                            <li>
                                                Get Involved: Join our events and activities to see firsthand the impact of your support.
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  ------------------------    --}}



                        <div class="col d-flex flex-column gap-2">
                            <h4 class="fw-semibold mb-0 text-body-emphasis">Our Vision for the Future</h4>
                            <p class="text-body-secondary">With a new, larger building, TASOM will be better equipped to:
                                <a href=""  data-bs-toggle="modal" data-bs-target="#expandEducationalModal3"> more...</a></p>

                        </div>

                        <div class="modal fade" id="expandEducationalModal3" tabindex="-1" aria-labelledby="expandEducationalModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="expandEducationalModalLabel">Our Vision for the Future</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            With a new, larger building, TASOM will be better equipped to:</p>
                                        <ul>
                                            <li>
                                                Host Cultural Events and Exhibitions: Showcase the richness of Turkish culture and
                                                promote intercultural understanding.
                                            </li>
                                            <li>
                                                Provide Comprehensive Support Services: Assist community members in navigating life
                                                in the United States.
                                            </li>
                                            <li>
                                                Create a Hub for Cross-Cultural Exchange: Serve as a place where people from all walks
                                                of life can come together to share knowledge, experiences, and friendships.
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
            <div class="col-lg-6 mx-auto">
                <p class="h4 mb-4 text-center text-gradient fw-bold ">
                    We warmly invite you to be a part of our journey. Together, we can build a brighter future for our community.
                </p>
                <p class="lead mb-4 text-center text-gradient fw-bold ">
                    Thank you for your generosity and support!
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">Let's build our future together</h2>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="" data-bs-toggle="modal" data-bs-target="#zelleConfirmation" >Buy A Brick</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 mb-4 text-center">
                <div class="col mb-3">
                    <div class="card">
                        <img src="{{ asset('images/p3.jpg') }}" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Programs for Kids (Ages 5-10)</h5>
                            <p class="card-text">
                                At TASOM, we are dedicated to the holistic development of children through structured
                                programs that focus on cultural preservation, educational growth, and personal
                                development. Our initiatives for younger children aim to instill a strong sense of cultural
                                identity while supporting their academic and personal growth. Our key programs
                                include:
                            </p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#p3">Read more...</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card">
                        <img src="{{ asset('images/p4.jpg') }}" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Youth Programs (Ages 11-23)</h5>
                            <p class="card-text">
                                At TASOM, we are dedicated to fostering the growth and development of young people through
                                a variety of programs and activities. Our youth initiatives aim to preserve cultural heritage,
                                promote cross-cultural understanding, and support personal and academic growth. Our key
                                programs include:
                            </p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#p4">Read more...</a>
                        </div>
                    </div>
                </div>

                <div class="col mb-3">
                    <div class="card">
                        <img src="{{ asset('images/p1.jpg') }}" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Programs for Adults</h5>
                            <p class="card-text">
                                At TASOM, we provide a range of programs and services for adults to support their
                                integration into American society, promote cultural exchange, and reinforce community
                                ties. Our initiatives aim to help adults navigate their new environment, engage with
                                diverse communities, and preserve their cultural heritage. Key programs include:
                            </p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#p1">Read more...</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card">
                        <img src="{{ asset('images/p2.jpg') }}" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                Outreach Dialogue for a Better World
                            </h5>
                            <p class="card-text">
                                In today's world, one of the biggest challenges we face is the lack of dialogue between
                                different nations, religions, and cultures. Our cultural centre believes that
                                understanding each other is key to solving humanity's most fundamental problems.
                            </p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#p2">Read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Zelle Confirmation Modal -->
    <div id="zelleConfirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="zelleConfirmationLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="zelleConfirmationLabel">Do you have a Zelle account?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>
                        "Please consider using Zelle to ensure we receive the full amount of your donation, as third-party companies deduct a minimum of 3% in fees from your donation."
                    </p>
                    <button type="button" class="btn btn-primary mb-2" data-bs-dismiss="modal" onclick="showNoZelleModal()">Yes, I have a Zelle account</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="showBuyBrickModal()">No, I don't have a Zelle account</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Buy Brick Modal -->
    <div id="buyBrick" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="buyBrickLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buyBrickLabel">Buy a Brick</h5>
                </div>
                <form method="post" action="{{ route('stripe.checkout') }}">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="pieces">Number of Bricks($50 per brick):</label>
                                    <input
                                        type="number"
                                        id="pieces"
                                        name="pieces"
                                        value="{{ old('pieces') }}"
                                        class="form-control {{ $errors->has('pieces') ? 'is-invalid' : '' }}"
                                        placeholder="Enter the number of pieces"
                                        required
                                        min="1"
                                        step="1"
                                        oninput="calculateTotalPrice()"
                                    >
                                    @error('pieces')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="total_price">Total Cost + %3 Fee(USD):</label>
                                    <input
                                        type="text"
                                        id="total_price"
                                        name="total_price"
                                        class="form-control"
                                        readonly
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-warning" type="submit" value="Purchase">
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- No Zelle Account Modal -->
    <div id="noZelleModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="noZelleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="noZelleModalLabel">Zelle Account Details</h5>
                </div>
                <div class="modal-body">
                    <p>We are looking forward to have your donation.</p>
                    <p><strong>1</strong> Brick is <strong>$50</strong> and, we are looking for <strong>8000</strong> bricks.</p>
                    <p>New Tasom Zelle Account:
                        <strong id="zelleEmail" onclick="copyToClipboard('newtasom@gmail.com')" style="cursor: pointer;">
                            newtasom@gmail.com
                            <i class="bi bi-clipboard"></i>
                        </strong>
                    </p>
                    <p>Thanks for your support.</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4" id="contact_us">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">TASOM</h5>
                    <p>
                        Join us to build something bigger. Your support matters!
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-0">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:contact@tasom.org" class="text-dark">Email: contact@tasom.org</a>
                        </li>
                        <li>
                            <a href="tel:+13146755871" class="text-dark">Phone: (314) 675-5871</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-dark text-white">
            © 2024 TASOM
        </div>
    </footer>




    <!-- modal content -->
    <div id="p1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Programs for Adults</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">

                        <img src="{{ asset('images/p1.jpg') }}"  class="img-fluid pb-3">
                        <p>
                            At TASOM, we provide a range of programs and services for adults to support their
                            integration into American society, promote cultural exchange, and reinforce community
                            ties. Our initiatives aim to help adults navigate their new environment, engage with
                            diverse communities, and preserve their cultural heritage. Key programs include:
                        </p>
                        <p class="fw-bold">
                            Language and Integration Support
                        </p>
                        <ul>
                            <li>
                                English Language Classes: Teaching English to help Turkish adults integrate into
                                American society more effectively.
                            </li>
                            <li>
                                Official Procedure Assistance: Helping adults understand and follow official
                                procedures to contribute to their work and community without being a burden.
                            </li>
                        </ul>
                        <p class="fw-bold">
                            Cultural Exchange and Community Engagement
                        </p>
                        <ul>
                            <li>
                                Holiday and Meal Gatherings: Organizing events during Muslim, Christian, and
                                American public holidays to foster interactions and help Turkish adults integrate
                                ethnically and socially.
                            </li>
                        </ul>
                        <p class="fw-bold">
                            Support and Volunteering
                        </p>
                        <ul>
                            <li>
                                Elder Support: Providing psychological and physical assistance to older
                                community members through voluntary cleaning, social events, and educational
                                activities.
                            </li>
                        </ul>
                        <p class="fw-bold" >
                            Cultural and Educational Activities
                        </p>
                        <ul>
                            <li>
                                Cooking Classes: Introducing Turkish cuisine through cooking classes.
                            </li>
                            <li>
                                Turkish Language Courses: Offering Turkish language courses for foreigners
                                interested in learning the language.
                            </li>
                            <li>
                                Cultural Exhibitions: Hosting exhibitions to promote Turkish culture.
                            </li>
                            <li>
                                Weekly Debates: Organizing debates to remember and reinforce religious beliefs.
                            </li>
                        </ul>
                        <p>
                            Through these programs, TASOM strives to support adults in adapting to their new
                            environment while celebrating and preserving their cultural identity. We believe in
                            fostering a community where adults can thrive, contribute, and feel connected both to
                            their heritage and their new home.
                        </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- modal content -->
    <div id="p2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Outreach Dialogue for a Better World</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <img src="{{ asset('images/p2.jpg') }}"  class="img-fluid pb-3">
                    <p>
                        In today's world, one of the biggest challenges we face is the lack of dialogue between
                        different nations, religions, and cultures. Our cultural centre believes that
                        understanding each other is key to solving humanity's most fundamental problems.

                    </p>
                    <p>
                        We organize various dialogue activities where people from all backgrounds come
                        together to share beautiful moments, exchange knowledge, and get to know each other
                        better. Through these events, we aim to contribute to making the world a more beautiful
                        and livable place.
                    </p>
                    <h3>
                        Dialogue Activities at Our Cultural Center
                    </h3>
                    <p>
                        <strong>Promoting Peace Through Religious Dialogue</strong> Our centre hosts
                        interfaith activities where people of different beliefs come together to dialogue and
                        discover ways to live peacefully. These activities are open to people of all faiths and are
                        based on mutual respect and understanding.
                    </p>
                    <ul>
                        <li>
                            <strong>Interfaith Conversations:</strong> Discussions with representatives of different
                            religions to increase mutual understanding and talk about shared values.
                        </li>
                        <li>
                            <strong>Joint Worship and Rituals:</strong> Opportunities to participate in the worship
                            practices of different faiths, fostering deeper understanding.
                        </li>
                        <li>
                            <strong>Panels and Seminars:</strong> Expert-led discussions on interfaith peace and
                            tolerance, providing in-depth knowledge and a platform for discussion.
                        </li>
                        <li>
                            <strong>Sacred Site Visits:</strong> Visits to holy sites of various religions, allowing participants
                            to learn about their religious and historical significance.
                        </li>
                    </ul>
                    <p>
                        In our cultural centre in America, we focus on dialogue activities. Based on the idea that
                        not knowing each other well is the root cause of humanity's biggest problems, we aim to
                        show how the world can become a better place to live through programs where people
                        from every nation, religion, and culture share beautiful moments.
                    </p>
                    <p>
                        Join us in building a world where understanding and cooperation flourish!
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- modal content -->
    <div id="p4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Youth Programs (Ages 11-23)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <img src="{{ asset('images/p4.jpg') }}"  class="img-fluid pb-3">
                    <p>
                        At TASOM, we are dedicated to fostering the growth and development of young people through
                        a variety of programs and activities. Our youth initiatives aim to preserve cultural heritage,
                        promote cross-cultural understanding, and support personal and academic growth. Our key
                        programs include:
                    </p>
                    <h4>
                        Youth Club
                    </h4>
                    <ul>
                        <li>
                            Cultural and Language Preservation: We emphasize the importance of maintaining our
                            Turkish culture and language.
                        </li>
                        <li>
                            American-Turkish History: Youth learn about the histories of both America and Turkey
                            to better integrate into American culture while appreciating their heritage.
                        </li>
                    </ul>
                    <h4>
                        Cultural Exchange and Networking
                    </h4>
                    <ul>
                        <li>
                            Joint Programs: Collaboration with other universities and high schools to facilitate
                            mutual cultural exchange and understanding.
                        </li>
                        <li>
                            Cultural Activities: Events that allow youth to engage with peers from diverse
                            backgrounds.
                        </li>
                    </ul>
                    <h4>
                        Sports and Health
                    </h4>
                    <ul>
                        <li>
                            Sports Activities: Engaging in sports to promote physical health and protect against
                            harmful habits.
                        </li>
                    </ul>
                    <h4>
                        Educational and Career Development
                    </h4>
                    <ul>
                        <li>
                            Career Planning Seminars: Providing guidance and resources to help young people plan
                            their futures and broaden their horizons.
                        </li>
                        <li>
                            University Preparation: Programs aimed at increasing university acceptance rates and
                            preparing students for higher education.
                        </li>
                    </ul>
                    <h4>
                        Mentorship and Personal Growth
                    </h4>
                    <ul>
                        <li>
                            Mentoring: Encouraging older members to mentor younger ones, fostering a supportive
                            community.
                        </li>
                        <li>
                            Weekly Meetings: University students and high schoolers meet weekly to pray, study,
                            engage in values education, read books, and participate in sleepovers.
                        </li>
                    </ul>
                    <h4>
                        Democratic and Free Environment
                    </h4>
                    <ul>
                        <li>
                            Democratic Values: Creating an environment that encourages democratic values and
                            personal freedom, helping youth grow into well-rounded individuals.
                        </li>
                    </ul>


                    <p>
                        Through these programs, TASOM strives to nurture the next generation, helping them
                        to achieve their full potential while staying connected to their cultural roots. We believe
                        in empowering our youth to become responsible, knowledgeable, and compassionate
                        members of society.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- modal content -->
    <div id="p3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Programs for Kids (Ages 5-10)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <img src="{{ asset('images/p3.jpg') }}"  class="img-fluid pb-3">
                    <p>
                        At TASOM, we are dedicated to the holistic development of children through structured
                        programs that focus on cultural preservation, educational growth, and personal
                        development. Our initiatives for younger children aim to instill a strong sense of cultural
                        identity while supporting their academic and personal growth. Our key programs
                        include:
                    </p>
                    <h4>
                        Weekend Schools
                    </h4>
                    <ul>
                        <li>
                            Structured Curriculum: Weekend programs designed with a specific curriculum to
                            support the development of children in grades 1-5.
                        </li>
                        <li>
                            Cultural and Language Preservation: Activities and lessons that help primary school
                            children maintain and appreciate their language, culture, and religion.
                        </li>
                    </ul>
                    <h4>
                        Mentorship and Guidance
                    </h4>
                    <ul>
                        <li>
                            Elder-Youth Mentoring: High school and university students mentor elementary and
                            primary school children.
                        </li>
                        <li>
                            Weekly Meetings: Regular gatherings where older students help younger ones with
                            prayers, studies, values education, and book reading.
                        </li>
                    </ul>
                    <h4>
                        Homeschool Program
                    </h4>
                    <ul>
                        <li>
                            8th Grade Homeschool: A one-year homeschool program focused on teaching religion
                            comprehensively alongside regular school subjects.
                        </li>
                    </ul>



                    <p>
                        Through these programs, TASOM aims to create a nurturing environment for children,
                        ensuring they grow up with a strong foundation in their cultural heritage while excelling
                        academically. We believe in empowering our young ones to become well-rounded,
                        knowledgeable, and confident individuals.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <script>
        function showBuyBrickModal() {
            var buyBrickModal = new bootstrap.Modal(document.getElementById('buyBrick'));
            buyBrickModal.show();
        }
        function showNoZelleModal() {
            var noZelleModal = new bootstrap.Modal(document.getElementById('noZelleModal'));
            noZelleModal.show();
        }
    </script>

    <script>
        function calculateTotalPrice() {
            const pieces = document.getElementById('pieces').value;
            const totalPrice = (pieces * 50) * 1.03;
            document.getElementById('total_price').value = totalPrice.toFixed(2);
        }
        // Initialize the total price when the modal is shown
        document.getElementById('buyBrick').addEventListener('shown.bs.modal', calculateTotalPrice);
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const bricks = [
            { name: 'Alice' },
            { name: 'Bob' },
            { name: 'Charlie' },
            { name: 'David' },
            { name: 'Eve' },
            { name: 'Frank' },
            { name: 'Alice' },
            { name: 'Bob' },
            { name: 'Charlie' },
            { name: 'David' },
            { name: 'Eve' },
        ];

        const brickWall = document.getElementById('brick-wall');

        function getRandomBronzeColor() {
            // Bronze shades typically have RGB values within these ranges
            const r = Math.floor(Math.random() * (205 - 139) + 139); // Between 139 and 205
            const g = Math.floor(Math.random() * (115 - 69) + 69);   // Between 69 and 115
            const b = Math.floor(Math.random() * (66 - 19) + 19);    // Between 19 and 66
            return `rgb(${r}, ${g}, ${b})`;
        }

        bricks.forEach(brick => {
            const brickDiv = document.createElement('div');
            brickDiv.className = 'brick';
            brickDiv.style.backgroundColor = getRandomBronzeColor();
            brickDiv.innerHTML = `<span class="tooltiptext">${brick.name}</span>`;
            brickWall.appendChild(brickDiv);
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
