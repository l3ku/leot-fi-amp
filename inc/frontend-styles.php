<?php
/**
 * Frontend style CSS file
 *
 * @package leot-fi-amp
 */
?>
/*******************************
 *         UNIVERSAL           *
 ******************************/
body {
  font-family: 'Raleway', sans-serif;
  margin: 0;
  background-image: linear-gradient(to left, white,  rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 0) 65%, white 100%), url(<?php header_image(); ?>)
}
.center-container {
  margin: 0 auto;
  width: 50%;
}

/*******************************
 *          HEADER             *
 ******************************/
.menu ul {
  margin: 0 auto;
  padding: 0;
  padding-left: 2em;
  padding-right: 2em;
}
.menu li {
  list-style-type: none;
  text-align: center;
  margin-bottom: 1em;
}
.menu li a, .menu li a:visited {
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 1.75em;
}
.nav-menu-toggle {
  float: left;
  margin-top: 1.5em;
  margin-left: 1.5em;
  outline: 0;
}
.header-image {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}
.header-container {
  display: block;
  text-align: center;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
}
.nav-container {
  margin: 0 auto;
}
.navbar-nav>ul {
  margin: 0 auto;
  text-align: center;
  list-style-type: none;
}
.navbar-nav>li>a:hover, .navbar-nav>li>a:active, .navbar-nav>li>a:focus {
  background-color: rgba(255, 0, 0, 0);
}
.header-title-container {
  padding-top: 7.5em;
}
.header-title {
  font-size: 5em;
  font-weight: bold;
  font-family: 'Dancing Script', sans-serif;
  text-align: center;
  margin: 0 auto;
}
.header-title>a, .header-title>a:hover {
  text-decoration: none;
  color: white;
}
.header-description {
  color: white;
  font-size: 1.5em;
  text-align: center;
  font-family: 'Raleway', sans-serif;
  margin-top: 0.5em;
}

/*******************************
 *            HOME             *
 ******************************/
.index-black {
  padding-top: 3em;
  position: relative;
  background-position: center;
  display: block;
  min-height: 300px;
  font-size: 1.5em;
}
.personal-image {
  margin: 0 auto;
  margin-top: 2em;
  margin-bottom: 1em;
  max-height: 10em;
  border-radius: 70px;
  display: block;
}
.homeinfo-text {
  color: white;
  text-align: center;
  margin-bottom: 1em;
}
.recent-projects {
  text-align: center;
}
.projects-preview {
  padding-top: 2em;
}
.projects-preview-entry {
  text-align: center;
  margin-bottom: 2em;
}
.projects-preview-title {
  color: white;
  text-align: center;
  font-size: 1.7em;
}
.projects-preview-title:hover {
  color: white;
  text-decoration: none;
}
.projects-preview-thumbnail > img {
  opacity: 0.7;
  max-height: 15em;
  padding-top: 0.75em;
  -webkit-backface-visibility: hidden;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
}
.projects-preview-thumbnail:hover > img {
  opacity: 1;
}
.index-lower {
  min-height: 300px;
  margin-top: -2px;
  background-repeat: no-repeat;
  background-size: cover;
  filter: contrast(110%);
  filter: brightness(70%);
}

/*******************************
 *           FOOTER            *
 ******************************/
.footer-wrapper {
  min-height: 5em;
  padding: 1em;
  margin: 0 auto;
  width: 50%;
  margin-top: 2em;
}
.footer-copyright {
  font-size: 1.2em;
  color: white;
  text-align: center;
}
.footer-copyright>a{
  color: white;
  text-decoration: none;
}
.social-media-wrapper {
  margin: 0 auto;
  min-height: 3em;
  min-width: 2em;
  display: block;
  text-align: center;
}
.twitter-logo, .facebook-logo, .github-logo, .linkedin-logo {
  display: inline-block;
  background-repeat:no-repeat;
  background-size:100% 100%;
  padding-left: 4em;
  height: 50px;
  width: 45px;
}
.twitter-logo {
  background-image: url(<?php echo get_template_directory_uri() . '/images/twitter.png'; ?>)
}
.facebook-logo {
  background-image: url(<?php echo get_template_directory_uri() . '/images/facebook.png'; ?>)
}
.github-logo {
  background-image: url(<?php echo get_template_directory_uri() . '/images/github.png'; ?>)
}
.linkedin-logo {
  background-image: url(<?php echo get_template_directory_uri() . '/images/linkedin.png'; ?>)
}

.twitter-link, .facebook-link, .github-link, .linkedin-link {
  opacity: 0.5;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  font-size: 0;
}
.twitter-link:hover, .facebook-link:hover, .github-link:hover, .linkedin-link:hover {
  opacity: 1;
}

/*******************************
 *         404 page            *
 ******************************/
.not-found-title, .not-found-content {
  text-align: center;
}

/*******************************
 *           @MEDIA            *
 ******************************/
@media (max-width:770px) {
  body {
    font-size: 13px;
  }
  .header-container {
    height: 700px;
  }
}

@media (min-width: 770px) {
  body{
    font-size: 15px;
  }
  .header-container {
    height: 500px;
  }
}
