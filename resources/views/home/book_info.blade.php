<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>

        .policy-section {
            background: linear-gradient(to right, #fdfbfb, #ebedee);
            padding: 60px 20px;
            color: #333;
        }

        .policy-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        .policy-content {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .policy-content h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #4e54c8;
        }
        .policy-content h3 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #121220;
        }

        .policy-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 15px;
        }

        .policy-content a {
            color: #4e54c8;
            text-decoration: underline;
            font-weight: bold;
        }

        .policy-content .icon {
            font-size: 4rem;
            color: #17a2b8;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-policy {
            display: block;
            margin: 20px auto 0;
            width: 200px;
            padding: 10px 20px;
            text-align: center;
            color: #fff;
            background-color: #4e54c8;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-policy:hover {
            background-color: #7378cf;
            color: #fff;
        }
    </style>
</head>
<body class="main-layout">

    <!-- Header -->
    <header>
        @include('home.header')
    </header>

    <section class="policy-section">
        <div class="container">
            <h1 class="policy-title">NDL SERVICE PACKAGE REGISTRATION</h1>

            <div class="policy-content">
                <div class="icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <h2><b>WELCOME TO NDL.</b></h2>
                <p>
                    Thank you for choosing our services.
                </p>
                <p>
                    Please follow the instructions carefully to ensure a smooth and successful registration process.
                </p>
                <p>
                    <b>Step 1</b> - Select the service package. (Refer below)
                </p>
                <p>
                    <b>Step 2</b> - Fill in registration details.
                </p>
                <p>
                    <b>Step 3</b> - The payment method will be as follows:
                </p>
                <p>
                    <b>Bank Transfer:</b>
                </p>
                <p>
                    Beneficiary Name                    <b>: UIAM OPERATING ACCOUNT</b>
                </p>
                <p>
                    Beneficiary Bank                    <b>: BANK MUAMALAT MALAYSIA BERHAD</b>
                </p>
                <p>
                    Beneficiary Account No              <b>: 1407-000000-4716</b>
                </p>
                <p>
                    <b>Ref 1: NDL Brain Assessment</b>
                </p>
                <p>
                    <b>Ref 2: Client's name</b>
                </p>
                <p>
                    <b>A copy of the payment slip must be submitted to:</b>
                </p>
                <p>
                    <b>Neurocoach Digital Lab :</b> 016 - 206 3258 <b>OR</b> neurocoachdigitallab@iium.edu.my
                </p>
                <p>
                    If you encounter any difficulties or have questions, please don't hesitate to contact our customer support team for assistance. We look forward to serving you and ensuring a smooth registration experience.
                </p>
                <p>
                    Thank you.
                </p>
            </div>

            <div class="policy-content">
                <div class="icon">
                    <i class="bi bi-file-text"></i>
                </div>
                <h2>NDL SERVICE PACKAGES</h2>
                <h3>Brain Measurement</h3>
                <p> Evaluation of brain activity and brain function: <b>RM120.00</b></p>
                <p> EEG pre-measurement and attention test: <b>RM180.00</b></p>
                <h3>Brain Training</h3>
                <p> NFB 1 session: <b>RM20.00</b></p>
                <p> NFB 1 month (10 session): <b>RM150.00</b></p>
                <p> NFB 3 month (30 session): <b>RM450.00</b></p>
                <p> NFB Report: <b>RM60.00</b></p>

                <p> NFB = Neurofeedback</p>

            </div>

            <div class="policy-content">
                <div class="icon">
                    <i class="bi bi-file-text"></i>
                </div>
                <h3>Visit Our Main Website to learn more.</h3>
                <p> Click this link <a href="https://kulliyyah.iium.edu.my/kict/ndl/"><b>Main Website</b></a></p>
            </div>

            <!-- Contact Button -->
            <a href="{{url('contact_us')}}" class="btn-policy">Contact Us</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        @include('home.footer')
    </footer>

</body>
</html>
