<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <form action="server/server.php" method="post">
        <div class="container text-light">
            <div>
                <label class="mt-2 mb-1 text" for="">Name</label><br>
                <input name="nama" class="border-0 w-100 rounded" type="text" autocomplete="off"
                    placeholder="Your Name">
            </div>
            <div>
                <label class="mb-1 text" for="">Email</label><br>
                <input name="email" class="border-0 w-100 rounded" type="email" placeholder="youremail@email.com">
            </div>
            <div>
                <label class="mb-1 text" for="">Message</label><br>
                <textarea name="message" class="border-0 w-100 rounded" rows="3" type="text" autocomplete="off"
                    placeholder="Text message here"></textarea>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img class="icon-img-about" src="assets/message-icon-flaticon.png" alt="">
                    </div>
                    <div class="col align-self-center d-flex justify-content-end">
                        <input class="custom-btn text-light border-0" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>