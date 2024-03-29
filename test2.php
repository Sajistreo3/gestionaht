<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .navigation {
            height: 70px;
            background: #262626;
        }
        .brand {
            position: absolute;
            padding-left: 20px;
            float: left;
            line-height: 70px;
            text-transform: uppercase;
            font-size: 1.4em;
        }
        .brand a, .brand a:visited {
            color: #fff;
            text-decoration: none;
        }
        .nav-container {
            max-width: 1000px;
            margin: 0 auto;
        }
        nav {
            float: right;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            float: left;
            position: relative;
        }
        nav ul li a, nav ul li a:visited {
            display: block;
            padding: 0 20px;
            line-height: 70px;
            background: #262626;
            color: #fff;
            text-decoration: none;
        }
        nav ul li a:hover, nav ul li a:visited:hover {
            background: #f98080;
            color: #fff;
        }
        nav ul li a:not(:only-child):after, nav ul li a:visited:not(:only-child):after {
            padding-left: 4px;
            content: ' ▾';
        }
        nav ul li ul li {
            min-width: 190px;
        }
        nav ul li ul li a {
            padding: 15px;
            line-height: 20px;
        }
        .nav-dropdown {
            position: absolute;
            display: none;
            z-index: 1;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
        }
        /* Mobile navigation */
        .nav-mobile {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            background: #262626;
            height: 70px;
            width: 70px;
        }
        @media only screen and (max-width: 798px) {
            .nav-mobile {
                display: block;
            }
            nav {
                width: 100%;
                padding: 70px 0 15px;
            }
            nav ul {
                display: none;
            }
            nav ul li {
                float: none;
            }
            nav ul li a {
                padding: 15px;
                line-height: 20px;
            }
            nav ul li ul li a {
                padding-left: 30px;
            }
            .nav-dropdown {
                position: static;
            }
        }
        @media screen and (min-width: 799px) {
            .nav-list {
                display: block !important;
            }
        }
        #nav-toggle {
            position: absolute;
            left: 18px;
            top: 22px;
            cursor: pointer;
            padding: 10px 35px 16px 0px;
        }
        #nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
            cursor: pointer;
            border-radius: 1px;
            height: 5px;
            width: 35px;
            background: #fff;
            position: absolute;
            display: block;
            content: '';
            transition: all 300ms ease-in-out;
        }
        #nav-toggle span:before {
            top: -10px;
        }
        #nav-toggle span:after {
            bottom: -10px;
        }
        #nav-toggle.active span {
            background-color: transparent;
        }
        #nav-toggle.active span:before, #nav-toggle.active span:after {
            top: 0;
        }
        #nav-toggle.active span:before {
            transform: rotate(45deg);
        }
        #nav-toggle.active span:after {
            transform: rotate(-45deg);
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        (function($) { // Begin jQuery
            $(function() { // DOM ready
                // If a link has a dropdown, add sub menu toggle.
                $('nav ul li a:not(:only-child)').click(function(e) {
                    $(this).siblings('.nav-dropdown').toggle();
                    // Close one dropdown when selecting another
                    $('.nav-dropdown').not($(this).siblings()).hide();
                    e.stopPropagation();
                });
                // Clicking away from dropdown will remove the dropdown class
                $('html').click(function() {
                    $('.nav-dropdown').hide();
                });
                // Toggle open and close nav styles on click
                $('#nav-toggle').click(function() {
                    $('nav ul').slideToggle();
                });
                // Hamburger to X toggle
                $('#nav-toggle').on('click', function() {
                    this.classList.toggle('active');
                });
            }); // end DOM ready
        })(jQuery); // end jQuery
    </script>
</head>
<body>

<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="#!">Logo</a>
        </div>
        <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li>
                    <a href="#!">Home</a>
                </li>
                <li>
                    <a href="#!">About</a>
                </li>
                <li>
                    <a href="#!">Services</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="#!">Web Design</a>
                        </li>
                        <li>
                            <a href="#!">Web Development</a>
                        </li>
                        <li>
                            <a href="#!">Graphic Design</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!">Pricing</a>
                </li>
                <li>
                    <a href="#!">Portfolio</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="#!">Web Design</a>
                        </li>
                        <li>
                            <a href="#!">Web Development</a>
                        </li>
                        <li>
                            <a href="#!">Graphic Design</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<article>
    <h2>Navigation</h2>
    <p>Responsive Dropdown Navigation Bar.</p>
    <p>Want to see how it's made? <a href="http://www.taniarascia.com/responsive-dropdown-navigation-bar/">Read the tutorial!</a></p>
</article>

</body>
</html>