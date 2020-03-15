<html>

<head><!-- comment added by deivegan for demo -->
<!-- again second change to betterment of understanding   M is Modified-->
    <title>
        Enquiry Form
    </title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <form class="form-horizontal" name="enquiry" method="post" action="notification.php">
        <fieldset>
            <!-- Form Name -->
            <legend>Form Name</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="mobile">Mobile</label>
                <div class="col-md-4">
                    <input id="mobile" name="mobile" type="text" placeholder="Enter Mobile" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="text" placeholder="Enter Email" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="subject">Subject</label>
                <div class="col-md-4">
                    <input id="subject" name="subject" type="text" placeholder="Enter Subject" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="message">Message</label>
                <div class="col-md-4">
                    <input id="message" name="message" type="text" placeholder="Enter Your Message" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">

                <div class="col-md-4">
                    <input id="submit" name="submit" type="submit" class="form-control input-md">
                </div>
            </div>
        </fieldset>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>