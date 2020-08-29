<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
</head>
<body>

<header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <i class="fas fa-book-reader fa-2x mx-3"></i>RESUME</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#section1">Interests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#section3">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/blog')?> ">Internships</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section5">Achievements</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h6>SUCCESSFUL</h6>
                    <h1>WEBDEVELOPER</h1>
                    <p>Hi. I’m Akash, a full stack WebDeveloper with 6 months experience creating successful
                        websites.I’m very interested in web development, and wish to explore different applications in
                        these fields as I motivate and prepare myself for a career as a webdeveloper.
                    </p>

                </div>
                <div class="col-md-5 col-sm-12 h-25">
                    <img src="<?php echo get_theme_file_uri('/images/laptop-5439577_1280.png.')  ?>" alt="books">
                </div>

            </div>
        </div>
    </header>