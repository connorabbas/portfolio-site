<br><br><br>
<div class="container">
    <div class="row mt-5 mb-4">
        <div class="col">
            <h1>Contact Me</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?=App::route('/send-contact-email')?>" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nameFloat" placeholder="Your Name" name="name">
                            <label for="nameFloat">Your Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="emailFloat" placeholder="Your Email Address" name="email">
                            <label for="emailFloat">Your Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a message here" id="messageFloat" name="message" style="height: 200px"></textarea>
                            <label for="messageFloat">Message</label>
                        </div>
                        <button class="btn btn-primary btn-rounded" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <ul class="text-muted">
                <li>Need a website or development services?</li>
                <li>Job opportunities?</li>
                <li>Questions for me?</li>
                <li>Let's get in touch.</li>
            </ul>
        </div>
    </div>
</div>