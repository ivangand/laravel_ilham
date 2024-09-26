@extends('layout.layout')

@section('title', 'Contact')

@section('content')
<div class="flex-wrapper">
    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- Contact Form -->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input -->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message -->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br/>
                            </div>
                        </div>
                        <!-- Submit error message -->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button -->
                        <a href="/contact" class="btn btn-secondary" id="submitButton" type="submit">Send</button><a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Footer Section -->
<footer class="footer bg-dark text-white py-4 mt-auto">
    <div class="container text-center">
        <p>© 2024 Ilham Adriano. All rights reserved.</p>
        <div class="social-links">
            <a href="https://www.linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            <!-- Add more social media links as needed -->
        </div>
        <div class="quick-links mt-2">
            <a href="/" class="text-white mx-2">Home</a>
            <a href="/about" class="text-white mx-2">About Me</a>
            <a href="/projects" class="text-white mx-2">Projects</a>
        </div>
    </div>
</footer>
@endsection
