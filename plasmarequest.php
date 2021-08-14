<html>
    <head>
        <meta charset="UTF-8">
        <title>
            "Hey! Donors"
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "icon" href ="icon.png" type = "image/x-icon">
        <link rel="stylesheet" href="plasma.css">
    </head>
    <body>
        <div class="heading">
            <h1 style="font-family:cursive">PLASMA DONATION</h1>
            <h5>&#128151 Lets fight this together &#128151</h5>
        </div>
        <div class="doreform">
            <form>
                <h3 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Please fill this form to get help.</h3>
            <section class="data" style="padding-top: 50px;">
                <label for="name">Name</label> <input type="text" required>
            </section>
            <section class="data">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </section>
            <section class="data">
                <label for="contact">Contact number</label><input type="tel" required>
            </section>
            <section class="data">
                <label for="email">Email</label><input type="email">
            </section>
            <section class="data">
                <label for="dob">Date of Birth</label><input type="date">
            </section>
            <section class="data">
                <label for="duraition" aria-required="true">UIDAI no</label><input type="number" required>
            </section>
            <section class="data">
                <label for="blood group">Blood Type</label>
                <select name="bloodtype" id="bloodgrp">
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                </select>
            </section>
            <section class="data">
                <label for="duraition">Recovery Date</label><input type="date">
            </section>'
            
            <section class="data">
                <label for="duraition" aria-required="true">Upload Adhaar</label><input type="file" required>
            </section>
            <section class="btsubmit">
                <input type="submit" style="margin-left: 25%;" id="request" class="btn btn-info btn-lg " value="Request">

            </section>
            </form>
        </div>
    </body>
</html>