<br><br><br>
<div class="container">
    <div class="row mt-5 mb-4">
        <div class="col">
            <h1 class="fw-bold">Contact Me</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <form action="<?=App::path('/send-contact-email')?>" method="post" class="needs-validation" novalidate>
                        <div class="form-floating mb-3 has-validation">
                            <input type="text" class="form-control" id="nameFloat" placeholder="Your Name" name="name" required>
                            <label for="nameFloat">Your Name</label>
                            <div class="invalid-feedback mb-3">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="form-floating mb-3 has-validation">
                            <input type="email" class="form-control" id="emailFloat" placeholder="Your Email Address" name="email" required>
                            <label for="emailFloat">Your Email Address</label>
                            <div class="invalid-feedback mb-3">
                                Please enter a valid Email Address.
                            </div>
                        </div>
                        <div class="form-floating mb-3 has-validation">
                            <textarea class="form-control" placeholder="Leave a message here" id="messageFloat" name="message" style="height: 200px" required></textarea>
                            <label for="messageFloat">Message</label>
                            <div class="invalid-feedback mb-3">
                                Please enter a message for me!
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Lf43CoeAAAAAOQ6wyiidT5H8cxoq7sih2O3eeNY" data-theme="dark"></div><br>
                        <button class="btn btn-info btn-rounded" type="submit" id="submitBtn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?= $alert ?>
            <ul class="text-muted">
                <li>Need a website or development services?</li>
                <li>Job opportunities?</li>
                <li>Questions for me?</li>
                <li>Let's get in touch.</li>
            </ul>
        </div>
    </div>
</div>
<style>
    .invalid-feedback, .invalid-tooltip {
        position: relative;
    }
</style>
<script>

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    $('#submitBtn').prop('disabled', true);
                    $('#submitBtn').html('<span style="line-height:1rem;" >Sending Message</span> &nbsp;<span style="height:1rem;width:1rem;" class="spinner-border text-light" role="status"></span>');
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

    /* $(document).on('submit','form.remember',function(){
        $(this).prop('disabled', true);
        $(this).html('<span style="line-height:1rem;" >Sending Message</span> &nbsp;<span style="height:1rem;width:1rem;" class="spinner-border text-light" role="status"></span>');
    }); */
</script>