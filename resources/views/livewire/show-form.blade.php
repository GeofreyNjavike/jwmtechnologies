<main id="main">
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2><u>Contact Us</u></h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <a
                                    href="https://www.google.com/maps/place/JWM+Technologies+Limited/@-6.7753145,39.2299292,15z/data=!4m2!3m1!1s0x0:0xece730d6b2aa774a?sa=X&ved=2ahUKEwj2vZv5tffzAhUV14UKHacxA9oQ_BJ6BAhIEAU">
                                    <i class="bi bi-geo-alt"></i>
                                </a>
                                <h4>Location:</h4>
                                <p>Nzasa-Kijitonyama <br>DAR ES SALAAM<br>Plot No.509, House No.7,</p>

                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <a href="mailto:md@jwmtechnologies.com"> <i class="bi bi-envelope"></i></a>
                                <h4>Email:</h4>
                                <p>md@jwmtechnologies.com<br>contact@jwmtechnologies.com</p>

                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <a href="tel:+255 767 884 328"> <i class="bi bi-phone"></i></a>
                                <h4>Call:</h4>
                                <p>+255 767 884 328<br>+255 659 336 839</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row justify-content-center">

                <div class="col-lg-10">
                    <form wire:submit.prevent="saveContact" role="form" class="php-email-form">

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input wire:model="names" type="text" name="names" class="form-control" id="name"
                                    placeholder="Your Names" required>
                                @error('names') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input wire:model="email" type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input wire:model="subject" type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                            @error('subject') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mt-3">
                            <textarea wire:model="message" class="form-control" name="message" rows="5"
                                placeholder="Message" required></textarea>
                            @error('message') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="text-center"><button type="submit">Send Message</button></div>
                        <div>

                            @if (session()->has('message'))

                                <div class="alert alert-success">

                                    {{ session('message') }}

                                </div>

                            @endif
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->
