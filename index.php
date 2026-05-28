<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Management System</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/f7e50e2bfa.js" crossorigin="anonymous"></script>

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    /* ═══════════════════════════════════════════
       DESIGN TOKENS
    ═══════════════════════════════════════════ */
    :root {
      --navy:       #0b1628;
      --navy-mid:   #152240;
      --gold:       #c9a84c;
      --gold-lt:    #f0e6cc;
      --cream:      #faf8f4;
      --white:      #ffffff;
      --muted:      #8a8f9d;
      --border:     #e8e4dc;
      --ff-serif:   'Cormorant Garamond', Georgia, serif;
      --ff-sans:    'Outfit', sans-serif;
      --radius:     12px;
      --radius-lg:  20px;
      --ease:       cubic-bezier(.4,0,.2,1);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--ff-sans);
      background: var(--cream);
      color: var(--navy);
      overflow-x: hidden;
    }

    /* ═══════════════════════════════════════════
       NAVBAR
    ═══════════════════════════════════════════ */
    /* Centered nav links: brand left · links middle · login right.
       The mx-auto on .main-nav (added in navbar.php markup) handles centering. */
    .navbar .main-nav .nav-link {
      font-family: var(--ff-sans);
      font-weight: 500;
      letter-spacing: .02em;
    }

    /* ═══════════════════════════════════════════
       HERO SECTION
    ═══════════════════════════════════════════ */
    .hero {
      min-height: 100vh;
      background:
        linear-gradient(135deg, rgba(11,22,40,.88) 0%, rgba(21,34,64,.72) 60%, rgba(201,168,76,.18) 100%),
        url("images/s1.avif") center/cover no-repeat;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    /* Animated diagonal accent line */
    .hero::before {
      content: '';
      position: absolute;
      top: -10%;
      right: 28%;
      width: 1px;
      height: 120%;
      background: linear-gradient(to bottom, transparent, rgba(201,168,76,.35), transparent);
      transform: rotate(8deg);
    }

    .hero__content {
      padding-top: 20px;
    }

    .hero__eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-family: var(--ff-sans);
      font-size: .7rem;
      font-weight: 600;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 18px;
    }

    .hero__eyebrow::before {
      content: '';
      display: block;
      width: 28px;
      height: 1px;
      background: var(--gold);
    }

    .hero__title {
      font-family: var(--ff-serif);
      font-size: clamp(2.4rem, 5vw, 4rem);
      font-weight: 700;
      color: var(--white);
      line-height: 1.08;
      margin-bottom: 20px;
    }

    .hero__title span {
      color: var(--gold);
    }

    .hero__desc {
      font-size: .95rem;
      font-weight: 300;
      color: rgba(255,255,255,.75);
      line-height: 1.75;
      margin-bottom: 32px;
      max-width: 420px;
    }

    .btn-gold {
      display: inline-flex;
      align-items: center;
      gap: 9px;
      background: var(--gold);
      color: var(--navy);
      font-family: var(--ff-sans);
      font-size: .82rem;
      font-weight: 600;
      letter-spacing: .06em;
      text-transform: uppercase;
      padding: 14px 28px;
      border-radius: 50px;
      border: none;
      text-decoration: none;
      transition: background .3s var(--ease), transform .25s var(--ease), box-shadow .3s var(--ease);
      box-shadow: 0 8px 24px rgba(201,168,76,.35);
    }

    .btn-gold:hover {
      background: #b8952f;
      transform: translateY(-2px);
      box-shadow: 0 14px 32px rgba(201,168,76,.4);
      color: var(--navy);
      text-decoration: none;
    }

    /* ── Inquiry Card ── */
    .inquiry-card {
      background: rgba(255,255,255,.97);
      backdrop-filter: blur(12px);
      border-radius: var(--radius-lg);
      padding: 36px 32px;
      box-shadow: 0 32px 80px rgba(0,0,0,.28);
      border-top: 4px solid var(--gold);
    }

    .inquiry-card h4 {
      font-family: var(--ff-serif);
      font-size: 1.55rem;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 24px;
      text-align: center;
    }

    .inquiry-card .form-control {
      border: 1.5px solid var(--border);
      border-radius: 8px;
      padding: 11px 16px;
      font-family: var(--ff-sans);
      font-size: .9rem;
      color: var(--navy);
      background: var(--cream);
      transition: border-color .25s, box-shadow .25s;
    }

    .inquiry-card .form-control:focus {
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(201,168,76,.18);
      background: #fff;
      outline: none;
    }

    .inquiry-card .form-control::placeholder { color: var(--muted); }

    .btn-submit {
      width: 100%;
      background: var(--navy);
      color: #fff;
      font-family: var(--ff-sans);
      font-size: .85rem;
      font-weight: 600;
      letter-spacing: .07em;
      text-transform: uppercase;
      padding: 13px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      transition: background .3s, transform .2s;
      margin-top: 4px;
    }

    .btn-submit:hover {
      background: var(--navy-mid);
      transform: translateY(-1px);
    }

    .field-error {
      font-size: .75rem;
      color: #e05252;
      margin-top: 4px;
      display: block;
    }

    /* ═══════════════════════════════════════════
       NOTICE MODAL (restyled)
    ═══════════════════════════════════════════ */
    .modal-content {
      border: none;
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: 0 24px 80px rgba(0,0,0,.2);
    }

    .modal-header {
      background: var(--navy);
      color: #fff;
      border-bottom: 3px solid var(--gold);
      padding: 18px 24px;
    }

    .modal-title {
      font-family: var(--ff-serif);
      font-size: 1.25rem;
      font-weight: 700;
      color: #fff;
    }

    .modal-header .close { color: rgba(255,255,255,.6); opacity: 1; }
    .modal-header .close:hover { color: #fff; }

    .modal-body {
      font-family: var(--ff-sans);
      font-size: .95rem;
      color: var(--navy);
      line-height: 1.7;
      padding: 24px;
    }

    .modal-footer {
      padding: 16px 24px;
      border-top: 1px solid var(--border);
    }

    .modal-footer .btn-danger {
      background: var(--navy);
      border: none;
      border-radius: 6px;
      font-family: var(--ff-sans);
      font-size: .82rem;
      font-weight: 600;
      letter-spacing: .06em;
      padding: 9px 24px;
    }

    /* ═══════════════════════════════════════════
       SECTION HEADER (shared)
    ═══════════════════════════════════════════ */
    .section-label {
      display: inline-block;
      font-family: var(--ff-sans);
      font-size: .68rem;
      font-weight: 600;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 12px;
    }

    .section-title {
      font-family: var(--ff-serif);
      font-size: clamp(1.9rem, 3.5vw, 2.9rem);
      font-weight: 700;
      color: var(--navy);
      line-height: 1.12;
      margin-bottom: 0;
    }

    .section-rule {
      width: 44px;
      height: 3px;
      background: var(--gold);
      border-radius: 2px;
      margin: 16px auto 0;
    }

    /* ═══════════════════════════════════════════
       COURSES SECTION
    ═══════════════════════════════════════════ */
    #courses {
      background: var(--white);
      padding: 96px 0 80px;
    }

    .course-card {
      background: var(--cream);
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid var(--border);
      transition: transform .35s var(--ease), box-shadow .35s var(--ease);
      display: flex;
      flex-direction: column;
      margin-bottom: 28px;
    }

    .course-card:hover {
      transform: translateY(-7px);
      box-shadow: 0 24px 60px rgba(11,22,40,.12);
    }

    .course-card__img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      display: block;
      transition: transform .5s var(--ease);
    }

    .course-card:hover .course-card__img {
      transform: scale(1.05);
    }

    .course-card__img-wrap {
      overflow: hidden;
    }

    .course-card__body {
      padding: 20px 22px 22px;
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;
    }

    .course-card__name {
      font-family: var(--ff-serif);
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 16px;
    }

    .course-card__divider {
      width: 36px;
      height: 2px;
      background: var(--gold);
      border-radius: 2px;
      margin-bottom: 18px;
    }

    .btn-outline-navy {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      border: 1.5px solid var(--navy);
      color: var(--navy);
      font-family: var(--ff-sans);
      font-size: .78rem;
      font-weight: 600;
      letter-spacing: .06em;
      text-transform: uppercase;
      padding: 9px 20px;
      border-radius: 50px;
      text-decoration: none;
      transition: background .3s, color .3s, border-color .3s, transform .2s;
    }

    .btn-outline-navy:hover {
      background: var(--navy);
      color: #fff;
      text-decoration: none;
      transform: translateY(-1px);
    }

    /* ═══════════════════════════════════════════
       ABOUT SECTION  (now full-screen)
    ═══════════════════════════════════════════ */
    #about-us {
      background: var(--cream);
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 96px 0;
      position: relative;
      overflow: hidden;
    }

    /* Subtle large watermark accent so the bigger section doesn't feel empty */
    #about-us::before {
      content: '';
      position: absolute;
      top: -120px;
      right: -160px;
      width: 460px;
      height: 460px;
      border: 2px solid var(--gold);
      border-radius: 50%;
      opacity: .12;
      pointer-events: none;
    }

    #about-us::after {
      content: '';
      position: absolute;
      bottom: -140px;
      left: -120px;
      width: 360px;
      height: 360px;
      background: radial-gradient(circle, rgba(201,168,76,.10), transparent 70%);
      pointer-events: none;
    }

    #about-us .container { position: relative; z-index: 1; width: 100%; }

    .about__img-wrap {
      position: relative;
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(11,22,40,.14);
      height: 70vh;
      min-height: 420px;
    }

    .about__img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* Gold accent box behind image */
    .about__img-wrap::before {
      content: '';
      position: absolute;
      inset: -10px -10px 10px 10px;
      border: 2px solid var(--gold);
      border-radius: var(--radius-lg);
      z-index: -1;
      opacity: .5;
    }

    .about__text h4 {
      font-family: var(--ff-serif);
      font-size: 1.6rem;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 16px;
      line-height: 1.25;
    }

    .about__text p {
      font-size: 1rem;
      font-weight: 300;
      color: #4a5068;
      line-height: 1.9;
      margin-bottom: 18px;
    }

    /* ═══════════════════════════════════════════
       NEWS / RECENT UPDATES SECTION
    ═══════════════════════════════════════════ */
    #updates {
      background: var(--navy);
      padding: 96px 0 80px;
      position: relative;
      overflow: hidden;
    }

    /* Diagonal texture */
    #updates::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        repeating-linear-gradient(
          135deg,
          rgba(255,255,255,.015) 0px,
          rgba(255,255,255,.015) 1px,
          transparent 1px,
          transparent 60px
        );
      pointer-events: none;
    }

    #updates .section-title { color: #fff; }
    #updates .section-label { color: var(--gold); }

    .news-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 26px;
      position: relative;
      z-index: 1;
    }

    .news-card {
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.1);
      border-radius: var(--radius-lg);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform .35s var(--ease), background .35s, box-shadow .35s;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeUp .6s var(--ease) forwards;
    }

    .news-card:nth-child(1) { animation-delay: .05s; }
    .news-card:nth-child(2) { animation-delay: .15s; }
    .news-card:nth-child(3) { animation-delay: .25s; }
    .news-card:nth-child(4) { animation-delay: .35s; }
    .news-card:nth-child(5) { animation-delay: .45s; }
    .news-card:nth-child(n+6) { animation-delay: .55s; }

    @keyframes fadeUp {
      to { opacity: 1; transform: translateY(0); }
    }

    .news-card:hover {
      background: rgba(255,255,255,.08);
      transform: translateY(-6px);
      box-shadow: 0 24px 60px rgba(0,0,0,.35);
    }

    .news-card__img-wrap {
      position: relative;
      height: 210px;
      overflow: hidden;
      flex-shrink: 0;
    }

    .news-card__img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform .55s var(--ease);
      filter: brightness(.85);
    }

    .news-card:hover .news-card__img-wrap img {
      transform: scale(1.07);
      filter: brightness(.95);
    }

    /* Gold shimmer overlay on hover */
    .news-card__img-wrap::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, transparent 40%, rgba(11,22,40,.7));
    }

    /* Date badge */
    .news-card__date {
      position: absolute;
      top: 14px;
      left: 14px;
      z-index: 2;
      background: var(--gold);
      color: var(--navy);
      border-radius: 8px;
      padding: 7px 11px;
      text-align: center;
      line-height: 1;
      box-shadow: 0 4px 14px rgba(201,168,76,.4);
    }

    .news-card__date-day {
      display: block;
      font-family: var(--ff-serif);
      font-size: 1.4rem;
      font-weight: 700;
    }

    .news-card__date-month {
      display: block;
      font-family: var(--ff-sans);
      font-size: .6rem;
      font-weight: 600;
      letter-spacing: .12em;
      text-transform: uppercase;
      margin-top: 2px;
    }

    .news-card__body {
      padding: 22px 22px 26px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }

    .news-card__title {
      font-family: var(--ff-serif);
      font-size: 1.1rem;
      font-weight: 700;
      color: #fff;
      margin: 0 0 10px;
      line-height: 1.35;
    }

    .news-card__text {
      font-family: var(--ff-sans);
      font-size: .88rem;
      font-weight: 300;
      color: rgba(255,255,255,.6);
      line-height: 1.7;
      flex: 1;
      margin-bottom: 20px;
    }

    .news-card__link {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      font-family: var(--ff-sans);
      font-size: .76rem;
      font-weight: 600;
      letter-spacing: .1em;
      text-transform: uppercase;
      color: var(--gold);
      text-decoration: none;
      padding-bottom: 2px;
      border-bottom: 1px solid transparent;
      align-self: flex-start;
      transition: border-color .25s, gap .25s;
    }

    .news-card__link:hover {
      border-color: var(--gold);
      gap: 11px;
      color: var(--gold);
      text-decoration: none;
    }

    .news-card__link svg { transition: transform .25s var(--ease); }
    .news-card__link:hover svg { transform: translateX(3px); }

    .news-empty {
      grid-column: 1 / -1;
      text-align: center;
      color: rgba(255,255,255,.4);
      font-family: var(--ff-sans);
      padding: 64px 0;
    }

    /* ═══════════════════════════════════════════
       FOOTER
    ═══════════════════════════════════════════ */
    footer {
      background: var(--navy-mid);
      color: rgba(255,255,255,.75);
      padding: 72px 0 48px;
    }

    .footer__thanks {
      text-align: center;
      margin-bottom: 52px;
    }

    .footer__thanks h2 {
      font-family: var(--ff-serif);
      font-size: clamp(1.8rem, 3vw, 2.6rem);
      font-weight: 700;
      color: #fff;
    }

    .footer__thanks h2 span { color: var(--gold); }

    .footer__heading {
      font-family: var(--ff-serif);
      font-size: 1.35rem;
      font-weight: 700;
      color: #fff;
      margin-bottom: 20px;
      text-align: center;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      margin-bottom: 14px;
      font-size: .88rem;
      line-height: 1.6;
    }

    .contact-item i {
      color: var(--gold);
      margin-top: 3px;
      flex-shrink: 0;
      width: 16px;
      text-align: center;
    }

    /* Footer form */
    .footer-form input[type="text"],
    .footer-form input[type="email"],
    .footer-form textarea {
      width: 100%;
      background: rgba(255,255,255,.06);
      border: 1.5px solid rgba(255,255,255,.12);
      border-radius: 8px;
      padding: 11px 16px;
      font-family: var(--ff-sans);
      font-size: .88rem;
      color: #fff;
      margin-bottom: 14px;
      transition: border-color .25s, background .25s;
      outline: none;
    }

    .footer-form input::placeholder,
    .footer-form textarea::placeholder { color: rgba(255,255,255,.35); }

    .footer-form input:focus,
    .footer-form textarea:focus {
      border-color: var(--gold);
      background: rgba(255,255,255,.09);
    }

    .footer-form textarea { resize: vertical; min-height: 90px; }

    .btn-footer-submit {
      background: var(--gold);
      color: var(--navy);
      font-family: var(--ff-sans);
      font-size: .82rem;
      font-weight: 700;
      letter-spacing: .07em;
      text-transform: uppercase;
      padding: 12px 30px;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: background .3s, transform .2s;
      box-shadow: 0 6px 20px rgba(201,168,76,.3);
    }

    .btn-footer-submit:hover {
      background: #b8952f;
      transform: translateY(-2px);
    }

    /* ── Copyright bar ── */
    .copyright-bar {
      background: var(--navy);
      padding: 18px 0;
      border-top: 1px solid rgba(255,255,255,.07);
    }

    .copyright-bar__inner {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
    }

    .copyright-bar p {
      margin: 0;
      font-size: .8rem;
      color: rgba(255,255,255,.45);
    }

    .social-links { display: flex; gap: 14px; }

    .social-links a {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,.15);
      display: flex;
      align-items: center;
      justify-content: center;
      color: rgba(255,255,255,.5);
      font-size: .82rem;
      text-decoration: none;
      transition: border-color .25s, color .25s, background .25s;
    }

    .social-links a:hover {
      border-color: var(--gold);
      color: var(--gold);
      background: rgba(201,168,76,.1);
    }

    /* ═══════════════════════════════════════════
       UTILS
    ═══════════════════════════════════════════ */
    @media (max-width: 991px) {
      /* On mobile the centered nav collapses into the toggler menu */
      .navbar .main-nav { text-align: left; }
    }

    @media (max-width: 767px) {
      .hero { min-height: auto; padding: 100px 0 60px; }
      #about-us {
        min-height: auto;
        padding: 64px 0 52px;
      }
      .about__img-wrap {
        margin-bottom: 36px;
        height: auto;
        min-height: 0;
      }
      #courses, #updates { padding: 64px 0 52px; }
      .news-grid { gap: 18px; }
    }
  </style>
</head>

<body>

<?php include('navbar.php'); ?>

<!-- ═══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center py-5">

      <!-- Left: text -->
      <div class="col-lg-6 col-12 hero__content mb-5 mb-lg-0">
        <span class="hero__eyebrow">Welcome to Excellence</span>
        <h1 class="hero__title">
          School <span>Management</span><br>System
        </h1>
        <p class="hero__desc">
          Empowering students, faculty, and administrators with a seamless digital campus experience built for the modern age.
        </p>
        <a href="tel:+9779841300727" class="btn-gold">
          <i class="fas fa-phone-alt"></i> Call Now
        </a>
      </div>

      <!-- Right: inquiry card -->
      <div class="col-lg-5 offset-lg-1 col-12">
        <div class="inquiry-card">
          <h4>Inquiry Form</h4>
          <form action="insert_query.php?id=1" method="POST" onsubmit="return heroValidation()">
            <div class="mb-3">
              <input type="text" name="name" placeholder="Your name" required class="form-control" id="fname">
              <span id="a" class="field-error"></span>
            </div>
            <div class="mb-3">
              <input type="email" name="email" placeholder="Your email" class="form-control" id="email">
              <span id="b" class="field-error"></span>
            </div>
            <div class="mb-3">
              <input type="number" name="phone" placeholder="Your mobile" class="form-control" id="contact">
              <span id="c" class="field-error"></span>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="message" placeholder="Your query" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn-submit">Submit Inquiry</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
function heroValidation() {
  // Clear previous errors
  ['a','b','c'].forEach(id => document.getElementById(id).innerHTML = '');

  var fname = document.getElementById("fname").value;
  if (fname.length < 3) {
    document.getElementById("a").innerHTML = "Name must be at least 3 characters.";
    return false;
  }
  if (!/^[A-Za-z\s]+$/.test(fname)) {
    document.getElementById("a").innerHTML = "Name must contain letters only.";
    return false;
  }

  var vemail = document.getElementById("email").value;
  if (vemail.indexOf("@") <= 0) {
    document.getElementById("b").innerHTML = "Please enter a valid email address.";
    return false;
  }
  if (vemail.charAt(vemail.length - 4) !== "." && vemail.charAt(vemail.length - 3) !== ".") {
    document.getElementById("b").innerHTML = "Email domain appears invalid.";
    return false;
  }

  var phone = document.getElementById("contact").value;
  if (phone.length !== 10) {
    document.getElementById("c").innerHTML = "Phone number must be exactly 10 digits.";
    return false;
  }
  if (isNaN(phone)) {
    document.getElementById("c").innerHTML = "Only numbers are allowed.";
    return false;
  }

  return true;
}
</script>


<!-- ═══════════════════════════════════════════
     POPUP NOTICE MODAL  (PHP logic unchanged)
═══════════════════════════════════════════ -->
<?php
  include("includes/dbcon.php");
  $todayDate = date("Y-m-d");
  $sql = "select * from notice where validUpto >= '$todayDate' and to_whom = 'all'";
  $res = mysqli_query($conn, $sql);
  if (!$res) {
    echo "Unable to fetch notice.";
  } else {
    while ($row = mysqli_fetch_assoc($res)) { ?>
      <div class="modal fade" id="popupNotice" tabindex="-1" role="dialog" aria-labelledby="noticeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="noticeLabel">
                <i class="fas fa-bell mr-2" style="color:var(--gold)"></i>
                Notice: <?php echo htmlspecialchars($row['subject']); ?>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"><?php echo $row['message']; ?></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Got it</button>
            </div>
          </div>
        </div>
      </div>
    <?php }
  }
?>
<script>
  setTimeout(function () { $('#popupNotice').modal('show'); }, 900);
</script>


<!-- ═══════════════════════════════════════════
     COURSES SECTION
═══════════════════════════════════════════ -->
<section class="py-5" id="courses">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">What We Offer</span>
      <h2 class="section-title">Our Courses</h2>
      <div class="section-rule"></div>
    </div>

    <div class="row">
      <?php
        $courses = [
          ['img' => 'images/course-1.png', 'name' => 'Bsc. CSIT', 'link' => 'courseDetails/csit.php'],
          ['img' => 'images/course-2.png', 'name' => 'BCA',       'link' => 'courseDetails/bca.php'],
          ['img' => 'images/course-3.png', 'name' => 'BIM',       'link' => 'courseDetails/bim.php'],
          ['img' => 'images/course-4.png', 'name' => 'BBS',       'link' => 'courseDetails/bbs.php'],
        ];
        foreach ($courses as $c): ?>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="course-card">
            <div class="course-card__img-wrap">
              <img src="<?= $c['img'] ?>" alt="<?= $c['name'] ?>" class="course-card__img">
            </div>
            <div class="course-card__body">
              <h5 class="course-card__name"><?= $c['name'] ?></h5>
              <div class="course-card__divider"></div>
              <a href="<?= $c['link'] ?>" class="btn-outline-navy">
                View More <i class="fas fa-arrow-right" style="font-size:.7rem"></i>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════
     ABOUT US SECTION  (full-screen)
═══════════════════════════════════════════ -->
<section id="about-us">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-12 mb-5 mb-lg-0">
        <div class="about__img-wrap">
          <img src="images/about.png" alt="College building" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 col-12 about__text">
        <span class="section-label">Who We Are</span>
        <h2 class="section-title" style="text-align:left; margin-bottom:20px">
          Meow Meow<br>College of IT
        </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corrupti aspernatur dolores sint, ipsum totam commodi velit nisi, animi, perferendis possimus quo doloribus incidunt neque aut asperiores omnis quam quia?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quasi veritatis excepturi distinctio earum laborum nulla accusamus? Officiis possimus quidem dolore exercitationem delectus perferendis deserunt.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia, nulla expedita ratione dignissimos quo accusamus aliquam ducimus dolorem laudantium repellat eius nemo similique aspernatur.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════
     RECENT UPDATES  (PHP logic unchanged)
═══════════════════════════════════════════ -->
<?php
  include('includes/dbcon.php');
  $sql = "SELECT * FROM news ORDER BY id DESC";
  $res = mysqli_query($conn, $sql);
  if (!$res) { echo "Failed to fetch news updates."; }
?>

<section id="updates">
  <div class="container">
    <div class="text-center mb-5" style="position:relative;z-index:1">
      <span class="section-label">Stay Informed</span>
      <h2 class="section-title">Recent Updates</h2>
      <div class="section-rule"></div>
    </div>

    <div class="news-grid">
      <?php if (mysqli_num_rows($res) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($res)):
          $newsDay   = date("d", strtotime($row['date']));
          $newsMonth = date("M", strtotime($row['date']));
          $content   = $row['content'];
          $preview   = mb_strlen($content) > 110
                         ? mb_substr($content, 0, 110) . '…'
                         : $content;
        ?>
        <article class="news-card">
          <div class="news-card__img-wrap">
            <img src="images/news/<?= htmlspecialchars($row['image']) ?>"
                 alt="<?= htmlspecialchars($row['heading']) ?>"
                 loading="lazy">
            <div class="news-card__date">
              <span class="news-card__date-day"><?= $newsDay ?></span>
              <span class="news-card__date-month"><?= $newsMonth ?></span>
            </div>
          </div>
          <div class="news-card__body">
            <h3 class="news-card__title"><?= htmlspecialchars($row['heading']) ?></h3>
            <p class="news-card__text"><?= htmlspecialchars($preview) ?></p>
            <a href="news.php?id=<?= (int)$row['id'] ?>" class="news-card__link">
              Read more
              <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                <path d="M1 7h12M8 2l5 5-5 5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </article>
        <?php endwhile; ?>
      <?php else: ?>
        <div class="news-empty">No updates found at this time.</div>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ -->
<footer id="contact-us">
  <div class="container">

    <div class="footer__thanks">
      <h2>Thanks for <span>Visiting</span></h2>
    </div>

    <div class="row">

      <!-- Contact info -->
      <div class="col-lg-6 col-12 mb-5 mb-lg-0">
        <h3 class="footer__heading">Get in Touch</h3>
        <div class="contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <span>Patandhoka Lalitpur (next to Pimbhal)</span>
        </div>
        <div class="contact-item">
          <i class="fas fa-phone-alt"></i>
          <span>(+977) 9841300727 &nbsp;|&nbsp; 9761113691</span>
        </div>
        <div class="contact-item">
          <i class="fas fa-envelope"></i>
          <span>parajulibipin.com.np</span>
        </div>
        <div class="contact-item">
          <i class="fas fa-globe"></i>
          <a href="http://parajulibipin.com..np/" style="color:var(--gold)">http://parajulibipin.com.np/</a>
        </div>
      </div>

      <!-- Leave a message -->
      <div class="col-lg-6 col-12">
        <h3 class="footer__heading">Leave a Message</h3>
        <form action="insert_query.php?id=2" method="POST" class="footer-form">
          <input type="text"  name="name"    placeholder="Name"    required id="f-name">
          <input type="email" name="email"   placeholder="Email"   required id="f-email">
          <textarea           name="message" placeholder="Message" required></textarea>
          <button type="submit" class="btn-footer-submit">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</footer>

<!-- Copyright bar -->
<div class="copyright-bar">
  <div class="container">
    <div class="copyright-bar__inner">
      <p>Copyright &copy; 2024. All rights reserved.</p>
      <div class="social-links">
        <a href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#!" aria-label="Google"><i class="fab fa-google"></i></a>
        <a href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
