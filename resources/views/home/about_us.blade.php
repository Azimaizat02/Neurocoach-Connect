<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .about-us-section {
            background: linear-gradient(to bottom, #FFD862, #E74133);
            padding: 50px 20px;
            color: #343a40;
        }
        .about-us-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        .about-us-text {
            font-size: 1.2rem;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 20px;
        }
        .features {
            margin-top: 40px;
        }
        .features .feature-item {
        background: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .features .feature-item:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .feature-item i {
        font-size: 3rem;
        color: #17a2b8;
        margin-bottom: 15px;
    }

    .feature-item h5 {
        font-size: 1.5rem;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .feature-item p {
        font-size: 1rem;
    }
        .collaboration-section {
            background: #ffffff;
            padding: 30px 20px;
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .collaboration-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .collaboration-text {
            font-size: 1.2rem;
            line-height: 1.8;
            text-align: justify;
        }
    </style>
</head>
<body class="main-layout">
    <header>
        @include('home.header')
    </header>

    <!-- About Us Section -->
    <section class="about-us-section">
        <div class="container">
            <h2 class="about-us-title">About Neurocoach Digital Lab</h2>
            <p class="about-us-text">
                Neurocoach Digital Lab (NDL) is a center for measurements and treatments fully dedicated
                to the well-being of children and adults with brain-related and behavioral problems.
                At NDL, we combine knowledge and experience from the fields of psychology, neurology, and
                computer science to make sure that you get the right treatment. We measure brain and behavior
                using state-of-the-art equipment and tests. And we use the same techniques in combination with
                our multidisciplinary experience to train the brain and mind and improve problems.
            </p>
            <p class="about-us-text">
                We measure and treat brain-related problems such as concentration problems, fatigue, and stress.
                But also people with diseases like depression and anxiety can benefit from the state-of-the-art
                measurements and treatments at the Lab.
            </p>

            <!-- Collaboration Section -->
            <div class="collaboration-section">
                <h3 class="collaboration-title">Our Collaboration</h3>
                <p class="collaboration-text">
                    NDL is a unique collaboration between the university IIUM and Neurocoach Europe.
                    We connect expertises from different areas to design and offer assessments and treatments
                    of the brain and behavior. Neurocoach Europe operates several clinics in Germany and the
                    Netherlands and implements its clinical expertise in NDL. IIUM brings in the necessary
                    expertise in brain research and data analysis.
                </p>
                <p class="collaboration-text">
                    Because of this unique multidisciplinary approach, NDL can offer valuable insights and
                    solutions to patients and their therapists and physicians.
                </p>
            </div>

            <!-- Features Section -->
            <div class="features row text-center">
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-brain"></i>
                        <h5>Brain and Behavior</h5>
                        <p>Advanced techniques to measure and treat brain and behavior problems.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-heart-pulse"></i>
                        <h5>Stress Management</h5>
                        <p>Effective treatments for managing fatigue, stress, and concentration issues.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-people"></i>
                        <h5>Multidisciplinary Approach</h5>
                        <p>A team of experts in psychology, neurology, and computer science working together.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('home.footer')
</body>
</html>
