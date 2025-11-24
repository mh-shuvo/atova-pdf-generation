<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/certificate.css') }}">
    <style>
        /* Font Faces */
        @font-face {
            font-family: 'gardenHidaleya';
            src: url('{{ storage_path("fonts/gardenHidaleya.ttf") }}') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'MinionPro-Regular';
            src: url('{{ storage_path("fonts/MinionPro-Regular.otf") }}') format('truetype');
            font-weight: 100;
            font-style: normal;
        }
        @font-face {
            font-family: 'MinionPro-Semibold';
            src: url('{{ storage_path("fonts/MinionPro-Semibold.otf") }}') format('truetype');
        }
        @font-face {
            font-family: 'MinionPro-Bold';
            src: url('{{ storage_path("fonts/MinionPro-Bold.otf") }}') format('truetype');
        }

        /* Reset & Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            height: 100%;
            background: #F4F2E5;
        }

        body {
            font-family: 'MyFont', sans-serif;
        }

        .main {
            padding: 30px;
        }

        /* Watermark Styles */
        .watermark-border {
            position: relative;
        }

      .watermark-border-left {
       position: absolute;
       width: 119.1176 px;
       height: 450px;
       top: 50%;
       left: -2px;
       transform: translateY(-50%);
       opacity: 0.8;
       }

       .watermark-border-right {
       position: absolute;
       top: 50%;
       right: 0px;
       transform: translateY(-50%);
       width: 119.1176px;
       height: 450px;
       opacity: 0.8;
       }

       .watermark-border-upper {
        position: absolute;
        top: 0px;
        left: 50%;
        transform: translateX(-50%);
        width: 450px;
        height: 119.1176px;
       }

     .watermark-border-down {
      position: absolute;
      bottom: 0px;
      left: 52%;
      transform: translateX(-50%);
      width: 470px;
      height: 119.1176px;

      }

        .watermark-border-left img,
        .watermark-border-right img,
        .watermark-border-upper img,
        .watermark-border-down img {
            display: block;
            height: 100%;
            width: 100%;
        }

        /* Certificate Content */
        .certificate-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 80px 70px;
            max-width: 900px;
            margin: 0 auto;
        }
        .certificate-logo{
            margin-top: -38px !important;
        }
        .certificate-logo img {
            opacity: 1;
            width: 255px;
            height: auto;
            margin: auto;
        }

        .certificate-word img {
            width: 500px;
            height: auto;
            margin: 28px auto 0 auto;
        }

        .certificate-word-completion img {
            width: 430px;
            height: auto;
            margin: 16px auto 0 auto;
        }

        /* Rectangle Images */
        .rectangle-left,
        .rectangle-right,
        .left-side-down-rectangle,
        .right-side-down-rectangle {
            position: absolute;
        }

        .rectangle-left {
            top: 20%;
            left: 10px;
            transform: translateY(-40%);
        }

        .serial-left {
            position: absolute;
            top: -30px;
            left: 8%;
            font-family: 'MinionPro-Bold';
            font-size: 26px;
            z-index: 5;
            color: #414142;
        }

        .rectangle-right {
            top: 20%;
            right: 10px;
            transform: translateY(-60%);
        }

        .left-side-down-rectangle {
            bottom: 5%;
            left: 10px;
            transform: translateY(-5%);
        }

        .right-side-down-rectangle {
            bottom: 4%;
            right: 10px;
            transform: translateY(-10%);
        }

        .rectangle-left img,
        .rectangle-right img,
        .left-side-down-rectangle img,
        .right-side-down-rectangle img {
            display: block;
            opacity: 1;
            width: 193.601px;
            height: 193.281px;
        }

        /* Text Styles */
        .user-name {
            font-family: 'gardenHidaleya';
            font-size: 64px;
            line-height: 0px;
            margin-top: 85px;
        }

        .student-id {
            font-family: 'MinionPro-Regular';
            line-height: 0px;
            margin-top: 50px;
            letter-spacing: 2px;
            font-size: 23px;
            font-weight: 100;
        }

        .student-id span {
            font-size: 22px;
            font-family: 'MinionPro-Bold';
            font-weight: 400;
            margin: 0 10px;
        }

        .course-name {
            font-family: 'MinionPro-Semibold';
            font-size: 53px;
            line-height: 0px;
            margin-top: 60px;
        }

        .course-duration {
            font-family: 'MinionPro-Regular';
            line-height: 0px;
            margin-top: 50px;
            letter-spacing: 2px;
            font-size: 27px;
            font-weight: 100;
        }

        .course-duration span {
            font-family: 'MinionPro-Bold';
            font-weight: 400;
            margin-left: 8px;
        }

        /* ISO Certified Logo */
        .iso-certified-logo {
            position: absolute;
            bottom: 65px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            z-index: 10;
        }

        .iso-certified-logo img {
            width: 141.32px;
            height: 125.67px;
            opacity: 1;
        }

        .iso-certified-logo-left {
            position: absolute;
            bottom: 135px;
            left: 170px;
            text-align: center;
            color: #414142;
        }

        .iso-certified-logo-left p:first-child {
            font-family: 'MinionPro-Bold';
            font-size: 25px;
        }

        .iso-certified-logo-left span {
            display: block;
            width: 204.85px;
            height: 2px;
            background-color: #B73332;
            margin: 10px auto 5px;
        }

        .iso-certified-logo-left p:last-child {
            font-family: 'MinionPro-Bold';
            font-size: 18px;
            color: #B73332;
            margin-top: -7px;
        }

        /* Contact Info */
        .contact-info {
            position: absolute;
            bottom: 70px;
            left: 70px;
            text-align: left;
        }

        .contact-info p {
            font-family: 'MinionPro-Regular';
            font-size: 16px;
            margin: 0 0;
            font-weight: 100;
        }

        .contact-info .icon {
            display: inline-block;
            vertical-align: middle;
            margin-right: 2px;
            margin-top: 10px;
            width: 20px;
            text-align: center;
        }

        .contact-info .icon img {
            vertical-align: middle;
        }

        /* Authorized Signature */
        .authorized-signature {
            position: absolute;
            bottom: 135px;
            right: 155px;
            text-align: center;
        }

        .authorized-signature img {
            width: 117.937px;
            height: 51.862px;
            margin-bottom: 0;
            opacity: 1;
        }

        .authorized-signature span {
            display: block;
            width: 204.85px;
            height: 2px;
            background-color: #B73332;
            margin: 10px auto 5px;
        }

        .authorized-signature p {
            font-family: 'MinionPro-Regular';
            font-size: 18px;
            color: #B73332;
        }

        /* QR Code */
        .qr-code {
            position: absolute;
            bottom: 70px;
            right: 69px;
        }

        .qr-code img {
            width: 64.17px;
            height: 64.17px;
        }
    </style>
    <title>{{ $title }}</title>
</head>
<body>
    <div class="watermark-container">

        <!-- Watermarks -->
        <div class="watermark-border-left">
            <img src="{{ public_path('images/Union-left.svg') }}" alt="left side watermark"/>
            
        </div>
        <div class="watermark-border-right">
            <img src="{{ public_path('images/Union-right.svg') }}" alt="right side watermark"/>
        </div>
        <div class="watermark-border-upper">
            <img src="{{ public_path('images/Union-top.svg') }}" alt="upper watermark"/>
        </div>
        <div class="watermark-border-down">
            <img src="{{ public_path('images/Union-bottom.svg') }}" alt="down watermark"/>
        </div>

        <!-- Center Certificate Content -->
        <div class="certificate-content">
            <div class="certificate-logo">
                <img src="{{ public_path('images/logo.svg') }}" alt="logo"/>
            </div>

            <div class="certificate-word">
                <img src="{{ public_path('images/certificate.svg') }}" alt="certificate"/>
            </div>

            <div class="certificate-word-completion">
                <img src="{{ public_path('images/completion.svg') }}" alt="completion"/>
            </div>

            <div>
                <p class="user-name">Abdullah Al Mamun</p>
                <p class="student-id">bearing student ID: <span>AT-0275</span> has successfully completed the</p>
                <p class="course-name">Professional Graphic Design</p>
                <p class="course-duration">conducted from <span>January 2025 to May 2025</span></p>
            </div>

            <!-- Rectangle Images -->
            <div class="rectangle-left">
                <img src="{{ public_path('images/rectangle-top-left.svg') }}" alt="rectangle-left"/>
                <span class="serial-left">SL : 01</span>
            </div>

            <div class="rectangle-right">
                <img src="{{ public_path('images/rectangle-top-right.svg') }}" alt="rectangle-right"/>
            </div>

            <div class="left-side-down-rectangle">
                <img src="{{ public_path('images/rectangle-left.svg') }}" alt="left-side-down-rectangle"/>
            </div>

            <div class="right-side-down-rectangle">
                <img src="{{ public_path('images/rectangle-right.svg') }}" alt="right-side-down-rectangle"/>
            </div>
        </div>

        <!-- ISO Certified Logo -->
        <div class="iso-certified-logo">
            <img src="{{ public_path('images/iso-certified-logo.svg') }}" alt="iso-certified-logo"/>
        </div>

        <!-- Date of Issue -->
        <div class="iso-certified-logo-left">
            <p>01.01.2026</p>
            <span></span>
            <p>Date of Issue</p>
        </div>

        <!-- Contact Info -->
        <div class="contact-info">
            <p><span class="icon"><img src="{{ public_path('images/mail.png') }}" alt="mail"/></span> info@atovatech.com</p>
            <p><span class="icon"><img src="{{ public_path('images/map.png') }}" alt="map"/></span> Mohammadpur Bus Stand, Dhaka</p>
        </div>

        <!-- Authorized Signature -->
        <div class="authorized-signature">
            <img src="{{ public_path('images/Signature.png') }}" alt="signature"/>
            <span></span>
            <p>Authorized Signature</p>
        </div>

        <!-- QR Code -->
        <div class="qr-code">
            <img src="{{ public_path('images/scan.png') }}" alt="scan"/>
        </div>

    </div>
</body>
</html>
