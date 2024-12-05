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

    <!-- Policy Section -->
    <section class="policy-section">
        <div class="container">
            <h1 class="policy-title">Neurocoach Connect Policies</h1>

            <!-- Privacy Policy -->
            <div class="policy-content">
                <div class="icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <h2>Privacy Policy</h2>
                <p>
                    Your privacy is our priority. We are committed to protecting your personal information and ensuring it is used responsibly. Our Privacy Policy outlines how we collect, store, and handle your data to provide a seamless and secure experience.
                </p>
                <p>
                    By using our platform, you agree to our collection and use of personal data as described in this Privacy Policy. We may collect personal information such as your name, email, phone number, and usage data to improve the services we provide.
                </p>
                <p>
                    We use the collected data to personalize your experience, improve our services, and communicate with you. Your information will never be shared with third parties without your explicit consent, except as required by law.
                </p>
                <h3>1. Information We Collect</h3>
                <p> <b>Personal Information</b>: Name, email, phone number, and other details you provide during registration.</p>
                <p> <b>Usage Data</b>: Information about how you access and use the platform, including IP address and device data.</p>
                <h3>2. How We Use Your Information</h3>
                <p>We use your information to:</p>
                <p>Provide and improve our services.</p>
                <p>Communicate updates and offers.</p>
                <p>Ensure security and prevent fraud.</p>
                <h3>3. Data Sharing</h3>
                <p>We do not sell or rent your personal information. However, we may share it with:</p>
                <p> <b>Service Providers</b>: Third parties that help us operate our platform.</p>
                <p> <b>Legal Authorities</b>: If required by law or to protect our rights.</p>
                <h3>4. Data Security</h3>
                <p>We implement industry-standard security measures to protect your data. However, no system is completely secure, and we cannot guarantee absolute security.</p>
                <h3>5. Your Rights</h3>
                <p> <b>Access and Correction</b>: You may access and correct your personal data.</p>
                <p> <b>Deletion</b>: You may request the deletion of your data, subject to legal obligations.</p>
                <h3>6. Cookies</h3>
                <p>We use cookies to enhance your experience and analyze site traffic. You can manage your cookie preferences in your browser settings.</p>
                <h3>7. Changes to Privacy Policy</h3>
                <p>We may update this policy periodically. Significant changes will be communicated to users.</p>
            </div>

            <!-- Terms of Service -->
            <div class="policy-content">
                <div class="icon">
                    <i class="bi bi-file-text"></i>
                </div>
                <h2>Terms of Service</h2>
                <p>
                    By using Neurocoach Connect, you agree to our terms and conditions, which are designed to ensure a fair, safe, and effective experience for all users. Our Terms of Service outline your rights, responsibilities, and acceptable use of our platform.
                </p>
                <p>
                    Our platform provides services related to mental and behavioral health, including consultations and therapies. It is important to use our services responsibly and follow the rules outlined in our Terms of Service.
                </p>
                <p>
                    Please read the full Terms of Service carefully. These include terms related to appointment policies, cancellations, and the use of our platform.
                </p>
                <h3>1. Use of Services</h3>
                <p> <b>Eligibility</b>: Users must be at least 18 years old or have parental consent. </p>
                <p> <b>Account Responsibility</b>: You are responsible for maintaining the confidentiality of your account information.</p>
                <h3>2. Appointment Policies</h3>
                <p> <b>Arrival Time</b>: Clients are required to arrive at least <b>10 minutes</b> before their scheduled appointment time to ensure a smooth check-in process. If a client anticipates being late, they must inform us in advance. Clients who are more than <b>20 minutes</b> late will have their appointment <b>postponed to a later date.</b></p>
                <p> <b>Last-Minute Cancellations</b>: Clients who cancel their appointments at the last minute will <b>not be eligible for a refund.</b> However, they will have the option to <b>book a new appointment</b> at a later date.</p>
                <h3>3. Prohibited Activities</h3>
                <p>Users agree not to:</p>
                <p>Engage in unlawful activities or violate any regulations.</p>
                <p>Use the platform for unauthorized commercial purposes.</p>
                <p>Introduce viruses or harmful code.</p>
                <h3>4. Intellectual Property</h3>
                <p>All content on Neurocoach Connect, including text, graphics, logos, and software, is the property of Neurocoach Digital Lab and protected by intellectual property laws. You may not reproduce or distribute content without permission</p>
                <h3>5. Limitation of Liability</h3>
                <p>Neurocoach Connect is not liable for any indirect, incidental, or consequential damages arising from the use of our platform or services.</p>
                <h3>6. Termination</h3>
                <p>We reserve the right to suspend or terminate accounts that violate these terms or engage in fraudulent activities.</p>
                <h3>7. Changes to Terms</h3>
                <p>Neurocoach Connect may update these terms from time to time. Users will be notified of any significant changes.</p>
                <h3>8. Governing Law</h3>
                <p>These Terms and Conditions are governed by the laws of Personal Data Protection Act 2010 (PDPA), without regard to its conflict of law principles.</p>
            </div>

            <!-- Refund Policy -->
            <div class="policy-content">
                <div class="icon">
                    <i class="bi bi-wallet2"></i>
                </div>
                <h2>Refund Policy</h2>
                <p>
                    We offer a clear and straightforward refund policy for our services. If you are unsatisfied or need to cancel a service, our Refund Policy explains the process and criteria for eligibility.
                </p>
                <p>
                    If you cancel your appointment last minute, you will not be eligible for a refund but can book a new appointment. If you are unsatisfied with the service provided, you may reach out to us for further assistance.
                </p>
                <p>
                    Learn more by checking our <a href="#">Refund Policy</a>.
                </p>
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
