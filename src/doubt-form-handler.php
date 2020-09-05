<?php $errors = '';
$myemail = 'web@rirtakmanna.com';
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))
{
    $errors .= "\n Error: Invalid email address";
}
if (empty($errors))
{
    $to = $myemail;
    $email_subject = "Doubt form submission: $name";
    $email_body = "A Doubt form submited in your website. " . " Here are the details:\n\n Name: $name \n\n Email: $email_address \n\n Message \n\n $message";
    $headers = "From My Website Doubt Form";
    mail($to, $email_subject, $email_body, $headers);
    header('Location: thank-you.html');
} ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta
      content="Hey!!., I'm Rirtak Manna, a front end developer and my mission is to design the digital world in a new way, even in a better way. I love creating websites that resonate and connect with their target audience."
      name="description"
    />
    <meta
      content="Front end developer, website, web making, Rirtak, Manna, Rirtak Manna"
      name="keywords"
    />
    <meta content="Rirtak Manna" name="author" />
    <link
      href="./assets/favicon/apple-touch-icon.png"
      rel="apple-touch-icon"
      sizes="180x180"
    />
    <link
      href="./assets/favicon/favicon-32x32.png"
      rel="icon"
      sizes="32x32"
      type="image/png"
    />
    <link
      href="./assets/favicon/favicon-16x16.png"
      rel="icon"
      sizes="16x16"
      type="image/png"
    />
    <link href="./assets/favicon/site.webmanifest" rel="manifest" />
    <link
      href="./assets/favicon/safari-pinned-tab.svg"
      rel="mask-icon"
      color="#61961f"
    />
    <link href="./assets/favicon/favicon.ico" rel="shortcut icon" />
    <meta content="#f9f9f9" name="msapplication-TileColor" />
    <meta
      content="./assets/favicon/browserconfig.xml"
      name="msapplication-config"
    />
    <meta content="#ffffff" name="theme-color" />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,700;1,400;1,700&family=Muli:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link href="./css/style.min.css" rel="stylesheet" />
    <script defer src="./js/app.min.js"></script>
    <title>Failed | Rirtak Manna</title>
  </head>
  <body>
  <div class="rapper">
      <div class="preloder">
        <div class="preloder__anim">
          <div class="load_anim" data-file="preLoad"></div>
        </div>
      </div>
      <div class="transition"></div>
      <div class="cursor"></div>
      <div class="wrapper">
        <nav class="navbar">
          <div class="navbar__logo">
            <a href="/" class="navbar__logo--link expand">
              <span class="anim" data-file="logoSide"></span>
            </a>
          </div>
          <ul class="navbar__list">
            <li class="navbar__item">
              <a href="./about.html" class="navbar__link expand">About</a>
            </li>
            <li class="navbar__item">
              <a href="./project.html" class="navbar__link expand">Project</a>
            </li>
          </ul>
          <div class="navbar__button">
            <a href="./contact.html" class="btn btn__navbar expand"
              >Let's Talk</a
            >
          </div>
        </nav>

        <nav class="navbar-mob">
          <ul class="navbar-mob__list">
            <li class="navbar-mob__item">
              <a href="./about.html" class="navbar-mob__link expand">About</a>
            </li>
            <li class="navbar-mob__logo">
              <a href="/" class="navbar-mob__logo--link expand"
                ><span class="anim" data-file="logoSymbol"></span
              ></a>
            </li>
            <li class="navbar-mob__item">
              <a href="./project.html" class="navbar-mob__link expand"
                >Project</a
              >
            </li>
          </ul>
        </nav>
        <main>
          <div class="header-afterForm" data-aos="zoom-in-down">
            <img
              alt="Error Mgs"
              src="/assets/error.svg"
              class="header-afterForm--img"
            />
            <h1 class="header-afterForm__tittle heading-1">
              Sorry Something is not right
            </h1>
            <p class="header-afterForm__para">Please Try Again.</p>
          </div>
          </main>
      </div>
      <footer class="footer u-text-white cursor__dark u-margin-top-large">
        <div class="footer__contact">
          <a
            href="mailto:web@rirtakmanna.com"
            target="_blank"
            class="footer__social expand"
          >
            <div class="footer__social--icon1 expand">
              <span class="icon" data-file="Mail"></span>
            </div>
            <span class="footer__content">Web@rirtakmanna.com</span>
          </a>
          <a
            href="https://www.behance.net/webRirtakmanna/"
            target="_blank"
            class="footer__social expand"
          >
            <div class="footer__social--icon2">
              <span class="icon" data-file="Behance"></span>
            </div>
            <span class="footer__content">Behance Page</span>
          </a>
          <a
            href="https://github.com/rirtakmanna"
            target="_blank"
            class="footer__social expand"
          >
            <div class="footer__social--icon3">
              <span class="icon" data-file="Github"></span>
            </div>
            <span class="footer__content">Github Repo</span>
          </a>
        </div>
        <div class="footer__center">
          <a href="/" class="footer__logo expand">
            <span class="anim" data-file="logoDown"></span>
          </a>
          <p class="footer__copyright">
            Copyright &copy; Rirtak Manna; All Rights Reserved. By using this
            site, you agree to the
            <a
              href="https://www.freeprivacypolicy.com/privacy/view/129824f3561294f47a72da1a6c3b68f1"
              class="footer__pravacy"
              target="_blank"
              >Privacy Policy</a
            >
          </p>
        </div>
        <div class="footer__navbar">
          <ul class="footer__navlist">
            <li class="footer__navitem">
              <a href="./about.html" class="footer__navLink expand">About</a>
            </li>
            <li class="footer__navitem">
              <a href="./project.html" class="footer__navLink expand"
                >Project</a
              >
            </li>
            <li class="footer__navitem">
              <a href="./contact.html" class="footer__navLink expand"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </footer>

      <footer class="footer-mob u-margin-top-large">
        <div class="footer-mob__left">
          <a href="/" class="footer-mob__logo">
            <span class="anim" data-file="logoSideWhite"></span>
          </a>
          <div class="footer-mob__social">
            <a
              href="mailto:web@rirtakmanna.com"
              target="_blank"
              class="footer-mob__icon expand"
            >
              <svg
                enable-background="new 0 0 512 512"
                viewBox="0 0 512 512"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g>
                  <path
                    d="m187 390c0-112.968.1-126.93 0-126.98-.2-.06-3.28-.02-42.53-.02-8.1 0-15.09-6.22-15.45-14.31-.39-8.59 6.47-15.69 14.98-15.69 39.66 0 42.8.04 43-.02.1-.05 0-12.775 0-110.98 0-8.28 6.72-15 15-15h169.02c-39.58-41.19-94.91-66-155.02-66-119.1 0-216 96.45-216 215s96.9 215 216 215c60.08 0 115.42-24.79 155.02-66h-169.02c-8.28 0-15-6.72-15-15zm-59-221h23.53c8.1 0 15.09 6.22 15.45 14.31.39 8.59-6.47 15.69-14.98 15.69h-23.53c-8.1 0-15.09-6.22-15.45-14.31-.39-8.59 6.47-15.69 14.98-15.69zm16 158h-47.53c-8.1 0-15.09-6.22-15.45-14.31-.39-8.59 6.47-15.69 14.98-15.69h47.53c8.1 0 15.09 6.22 15.45 14.31.39 8.59-6.47 15.69-14.98 15.69z"
                  />
                  <path d="m491.77 137h-255.558l129.652 99.956z" />
                  <path
                    d="m375.327 267.748c-5.382 4.273-13.009 4.354-18.485.131l-139.842-107.81v199.931c0 8.284 6.716 15 15 15h265c8.284 0 15-6.716 15-15v-200.756z"
                  />
                </g>
              </svg>
            </a>
            <a
              href="https://www.behance.net/webRirtakmanna/"
              target="_blank"
              class="footer-mob__icon expand"
            >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.36 97.75">
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_1-2" data-name="Layer 1">
                    <path
                      d="M38.64,38.73c0-4.6-3.13-4.6-3.13-4.6H22.6V44H34.71C36.8,44,38.65,43.34,38.64,38.73ZM35.51,50.85H22.6V62.7H34.9c7.67.47,6-12.55.6-11.86Zm33-6.85c-6.85,0-7.81,6.83-7.81,6.83H75.31S75.4,44,68.55,44ZM48.18,0c-64.25,1.1-64.24,96.66,0,97.75C112.43,96.65,112.42,1.09,48.18,0ZM58.84,28.85H77.13v5.46H58.84ZM49.59,57.49c-.65,19.74-26.85,11.36-37.16,13.08V26.24H35.51C49.11,25,52.56,45.12,41.29,46.48c8.92,0,8.3,11,8.3,11Zm19,7c7.37,0,7.1-4.77,7.1-4.77h7.8c-.83,18.63-34.4,14.6-32.21-5.16.22-23.46,36.05-22.7,32.48,2.21h-23C60.83,65,68.64,64.48,68.64,64.48Z"
                    />
                  </g>
                </g>
              </svg>
            </a>
            <a
              href="https://github.com/rirtakmanna"
              target="_blank"
              class="footer-mob__icon expand"
            >
              <svg
                enable-background="new 0 0 24 24"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z"
                />
              </svg>
            </a>
          </div>

          <p class="footer-mob__copyright">
            Copyright &copy; Rirtak Manna; All Rights Reserved. By using this
            site, you agree to the
            <a
              href="https://www.freeprivacypolicy.com/privacy/view/129824f3561294f47a72da1a6c3b68f1"
              class="footer__pravacy"
              target="_blank"
              >Privacy Policy</a
            >
          </p>
        </div>

        <div class="footer-mob__right">
          <ul class="footer-mob__navlist">
            <li class="footer-mob__navitem">
              <a href="./about.html" class="footer-mob__navLink expand"
                >About</a
              >
            </li>
            <li class="footer-mob__navitem">
              <a href="./project.html" class="footer-mob__navLink expand"
                >Project</a
              >
            </li>
            <li class="footer-mob__navitem">
              <a href="./contact.html" class="footer-mob__navLink expand"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </footer>
  </body>
</html>
    <div class="mob-footer__contact">
        <div class="mob-footer__logo">
            <a href="/index.html" [data-swup-preload]><img alt="logo" src="./assets/logo/logoSide.svg">
            </a>
        </div>
        <div class="mob-footer__social">
            <a href="https://www.facebook.com/rirtak" class="mob-footer__socialIcon" target="_blank">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8" />
                        <meta content="width=device-width,initial-scale=1" name="viewport" />
                        <meta content="Hey!!., I'm Rirtak Manna, a front end developer and my mission is to design the digital world in a new way, even in a better way. I love creating websites that resonate and connect with their target audience." name="description" />
                        <meta content="Front end developer, website, web making, Rirtak, Manna, Rirtak Manna" name="keywords" />
                        <meta content="Rirtak Manna" name="author" />
                        <link href="./assets/favicon/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
                        <link href="./assets/favicon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
                        <link href="./assets/favicon/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
                        <link href="./assets/favicon/site.webmanifest" rel="manifest" />
                        <link href="./assets/favicon/safari-pinned-tab.svg" rel="mask-icon" color="#61961f" />
                        <link href="./assets/favicon/favicon.ico" rel="shortcut icon" />
                        <meta content="#f9f9f9" name="msapplication-TileColor" />
                        <meta content="./assets/favicon/browserconfig.xml" name="msapplication-config" />
                        <meta content="#ffffff" name="theme-color" />
                        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,700;1,400;1,700&family=Muli:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
                        <link href="./css/style.min.css" rel="stylesheet" />
                        <script defer src="./js/app.min.js"></script>
                        <title>Errors | Rirtak Manna</title>
                    </head>

                    <body>
                        <div class="rapper">
                            <div class="wrapper">
                                <nav class="navbar">
                                    <div class="navbar__logo"><a href="/index.html" class="logo__link"><span class="logo"data-file="Side"></span></a>
                                    </div>
                                    <ul class="navbar__list">
                                        <li class="navbar__item"><a href="/about.html" class="navbar__link">About</a>
                                        </li>
                                        <li class="navbar__item"><a href="/project.html" class="navbar__link">Project</a>
                                        </li>
                                        <li class="navbar__item"><a href="/contact.html" class="navbar__link btn__navbar u-text-white">Let's Talk</a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav class="mob-navbar">
                                    <ul class="mob-navbar__list">
                                        <li class="mob-navbar__item"><a href="/about.html" class="mob-navbar__link">About</a>
                                        </li>
                                        <li class="mob-navbar__item mob-navbar__item--logo"><a href="/index.html" class="mob-navbar__link mob-navbar__link--logo"><span class="logo"data-file="Symbol"></span></a>
                                        </li>
                                        <li class="mob-navbar__item"><a href="/project.html" class="mob-navbar__link">Project</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <footer class="u-text-white footer">
                                <div class="footer__contact">
                                    <a href="https://www.facebook.com/rirtak" class="footer__social" target="_blank">
                                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m297.277344 508.667969c-2.132813.347656-4.273438.667969-6.421875.960937 2.148437-.292968 4.289062-.613281 6.421875-.960937zm0 0" />
                                            <path d="m302.398438 507.792969c-1.019532.1875-2.039063.359375-3.058594.535156 1.019531-.175781 2.039062-.347656 3.058594-.535156zm0 0" />
                                            <path d="m285.136719 510.339844c-2.496094.28125-5.007813.53125-7.527344.742187 2.519531-.210937 5.03125-.460937 7.527344-.742187zm0 0" />
                                            <path d="m290.054688 509.738281c-1.199219.160157-2.40625.308594-3.609376.449219 1.203126-.140625 2.410157-.289062 3.609376-.449219zm0 0" />
                                            <path d="m309.367188 506.410156c-.898438.191406-1.800782.382813-2.703126.566406.902344-.183593 1.804688-.375 2.703126-.566406zm0 0" />
                                            <path d="m326.664062 502.113281c-.726562.207031-1.453124.402344-2.179687.605469.726563-.203125 1.453125-.398438 2.179687-.605469zm0 0" />
                                            <path d="m321.433594 503.542969c-.789063.207031-1.582032.417969-2.375.617187.792968-.199218 1.585937-.40625 2.375-.617187zm0 0" />
                                            <path d="m314.589844 505.253906c-.835938.195313-1.679688.378906-2.523438.566406.84375-.1875 1.6875-.371093 2.523438-.566406zm0 0" />
                                            <path d="m277.527344 511.089844c-1.347656.113281-2.695313.214844-4.046875.304687 1.351562-.089843 2.699219-.191406 4.046875-.304687zm0 0" />
                                            <path d="m512 256c0-141.363281-114.636719-256-256-256s-256 114.636719-256 256 114.636719 256 256 256c1.503906 0 3-.03125 4.5-.058594v-199.285156h-55v-64.097656h55v-47.167969c0-54.703125 33.394531-84.476563 82.191406-84.476563 23.367188 0 43.453125 1.742188 49.308594 2.519532v57.171875h-33.648438c-26.546874 0-31.6875 12.617187-31.6875 31.128906v40.824219h63.476563l-8.273437 64.097656h-55.203126v189.453125c107.003907-30.675781 185.335938-129.257813 185.335938-246.109375zm0 0" />
                                            <path d="m272.914062 511.429688c-2.664062.171874-5.339843.308593-8.023437.398437 2.683594-.089844 5.359375-.226563 8.023437-.398437zm0 0" />
                                            <path d="m264.753906 511.835938c-1.414062.046874-2.832031.082031-4.25.105468 1.417969-.023437 2.835938-.058594 4.25-.105468zm0 0" />
                                        </svg>
                                        <p>Facebook Page</p>
                                    </a>
                                    <a href="https://www.instagram.com/rirtak_manna/" class="footer__social" target="_blank">
                                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0" />
                                            <path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0" />
                                            <path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0" />
                                        </svg>
                                        <p>Insta Handle</p>
                                    </a>
                                    <a href="https://www.linkedin.com/in/rirtak" class="footer__social" target="_blank">
                                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" />
                                        </svg>
                                        <p>Linkedin ID</p>
                                    </a>
                                    <a href="mailto:web@rirtakmanna.com" class="footer__social">
                                        <svg viewBox="0 0 448 448" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m314.375 144h-180.75l90.375 77.464844zm0 0" />
                                            <path d="m224 240c-1.910156 0-3.757812-.683594-5.207031-1.929688l-98.792969-84.679687v150.609375h208v-150.609375l-98.792969 84.679687c-1.449219 1.246094-3.296875 1.929688-5.207031 1.929688zm0 0" />
                                            <path d="m224 0c-123.710938 0-224 100.289062-224 224s100.289062 224 224 224 224-100.289062 224-224c-.140625-123.652344-100.347656-223.859375-224-224zm120 312c0 4.417969-3.582031 8-8 8h-224c-4.417969 0-8-3.582031-8-8v-176c0-4.417969 3.582031-8 8-8h224c4.417969 0 8 3.582031 8 8zm0 0" />
                                        </svg>
                                        <p>web@rirtakmanna.com</p>
                                    </a>
                                </div>
                                <div class="footer__main">
                                    <a href="/index.html" class="footer__logo"><img alt="logo" src="./assets/logo/logoDown.svg" />
                                    </a>
                                    <p class="footer__copyright">Copyright © Rirtak Manna; All Rights Reserved. By using this site, you agree to the <a href="https://www.freeprivacypolicy.com/privacy/view/129824f3561294f47a72da1a6c3b68f1" class="pravacy" target="_blank">Privacy Policy</a>
                                    </p>
                                </div>
                                <div class="footer__navbar">
                                    <ul class="footer__navItem">
                                        <li class="footer__navList"><a href="/about.html" class="footer__navLink">About</a>
                                        </li>
                                        <li class="footer__navList"><a href="/project.html" class="footer__navLink">Project</a>
                                        </li>
                                        <li class="footer__navList"><a href="/contact.html" class="footer__navLink">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <footer class="u-text-white mob-footer">
                                <div class="mob-footer__contact">
                                    <div class="mob-footer__logo">
                                        <a href="/index.html"><img alt="logo" src="./assets/logo/logoSide.svg" />
                                        </a>
                                    </div>
                                    <div class="mob-footer__social">
                                        <a href="https://www.facebook.com/rirtak" class="mob-footer__socialIcon" target="_blank">
                                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m297.277344 508.667969c-2.132813.347656-4.273438.667969-6.421875.960937 2.148437-.292968 4.289062-.613281 6.421875-.960937zm0 0" />
                                                <path d="m302.398438 507.792969c-1.019532.1875-2.039063.359375-3.058594.535156 1.019531-.175781 2.039062-.347656 3.058594-.535156zm0 0" />
                                                <path d="m285.136719 510.339844c-2.496094.28125-5.007813.53125-7.527344.742187 2.519531-.210937 5.03125-.460937 7.527344-.742187zm0 0" />
                                                <path d="m290.054688 509.738281c-1.199219.160157-2.40625.308594-3.609376.449219 1.203126-.140625 2.410157-.289062 3.609376-.449219zm0 0" />
                                                <path d="m309.367188 506.410156c-.898438.191406-1.800782.382813-2.703126.566406.902344-.183593 1.804688-.375 2.703126-.566406zm0 0" />
                                                <path d="m326.664062 502.113281c-.726562.207031-1.453124.402344-2.179687.605469.726563-.203125 1.453125-.398438 2.179687-.605469zm0 0" />
                                                <path d="m321.433594 503.542969c-.789063.207031-1.582032.417969-2.375.617187.792968-.199218 1.585937-.40625 2.375-.617187zm0 0" />
                                                <path d="m314.589844 505.253906c-.835938.195313-1.679688.378906-2.523438.566406.84375-.1875 1.6875-.371093 2.523438-.566406zm0 0" />
                                                <path d="m277.527344 511.089844c-1.347656.113281-2.695313.214844-4.046875.304687 1.351562-.089843 2.699219-.191406 4.046875-.304687zm0 0" />
                                                <path d="m512 256c0-141.363281-114.636719-256-256-256s-256 114.636719-256 256 114.636719 256 256 256c1.503906 0 3-.03125 4.5-.058594v-199.285156h-55v-64.097656h55v-47.167969c0-54.703125 33.394531-84.476563 82.191406-84.476563 23.367188 0 43.453125 1.742188 49.308594 2.519532v57.171875h-33.648438c-26.546874 0-31.6875 12.617187-31.6875 31.128906v40.824219h63.476563l-8.273437 64.097656h-55.203126v189.453125c107.003907-30.675781 185.335938-129.257813 185.335938-246.109375zm0 0" />
                                                <path d="m272.914062 511.429688c-2.664062.171874-5.339843.308593-8.023437.398437 2.683594-.089844 5.359375-.226563 8.023437-.398437zm0 0" />
                                                <path d="m264.753906 511.835938c-1.414062.046874-2.832031.082031-4.25.105468 1.417969-.023437 2.835938-.058594 4.25-.105468zm0 0" />
                                            </svg>
                                        </a>
                                        <a href="https://www.instagram.com/rirtak_manna/" class="mob-footer__socialIcon" target="_blank">
                                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0" />
                                                <path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0" />
                                                <path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0" />
                                            </svg>
                                        </a>
                                        <a href="https://www.linkedin.com/in/rirtak" class="mob-footer__socialIcon" target="_blank">
                                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" />
                                            </svg>
                                        </a>
                                        <a href="mailto:web@rirtakmanna.com" class="mob-footer__socialIcon">
                                            <svg viewBox="0 0 448 448" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m314.375 144h-180.75l90.375 77.464844zm0 0" />
                                                <path d="m224 240c-1.910156 0-3.757812-.683594-5.207031-1.929688l-98.792969-84.679687v150.609375h208v-150.609375l-98.792969 84.679687c-1.449219 1.246094-3.296875 1.929688-5.207031 1.929688zm0 0" />
                                                <path d="m224 0c-123.710938 0-224 100.289062-224 224s100.289062 224 224 224 224-100.289062 224-224c-.140625-123.652344-100.347656-223.859375-224-224zm120 312c0 4.417969-3.582031 8-8 8h-224c-4.417969 0-8-3.582031-8-8v-176c0-4.417969 3.582031-8 8-8h224c4.417969 0 8 3.582031 8 8zm0 0" />
                                            </svg>
                                        </a>
                                    </div>
                                    <p class="footer__copyright">Copyright © Rirtak Manna; All Rights Reserved. By using this site, you agree to the <a href="https://www.freeprivacypolicy.com/privacy/view/129824f3561294f47a72da1a6c3b68f1" class="pravacy" target="_blank">Privacy Policy</a>
                                    </p>
                                </div>
                                <div class="mob-footer__navbar">
                                    <ul class="mob-footer__navItem">
                                        <li class="footer__navlist"><a href="/about.html" class="footer__navLink">About</a>
                                        </li>
                                        <li class="footer__navlist"><a href="/project.html" class="footer__navLink">Project</a>
                                        </li>
                                        <li class="footer__navlist"><a href="/contact.html" class="footer__navLink">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                        </div>
                    </body>

                    </html>