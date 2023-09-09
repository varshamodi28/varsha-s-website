<form id="contact-form" method="post" action="sendEmail.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required/>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="phone">Phone number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required/>
        </div>
        <div class="form-group col-md-6">
            <label for="gender">Select Gender</label>
            <select id="gender" class="form-control" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" placeholder="" required minlength="15"></textarea>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>
