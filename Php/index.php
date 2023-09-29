<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<style>
    .ml-form{
        margin-left:150px;
    }
    .tombol{
        color: white;
        font-size: 1.2rem;
        margin-top: 1rem;
        padding: .8rem 5rem;
        border-radius: 3rem;
    }
    .pd-form{
        padding: 10px;
    }
    .rounded-card{
        border-radius: 2rem 0 2rem 2rem;
    }
</style>

<body style="background-color: rgb(200, 200, 200);">
    <section id="contact" class="vh-100 d-flex align-items-center">
        <div class="container" style="width:600px">
            <div class="card contact-card rounded-card py-5 rounded-top-right-0">
                <h1 class="fw-bold justify-content-center d-flex mb-3">Contact</h1>
                <form action="server.php" method="post">
                    <div class="container">
                        <div class="d-flex justify-content-center row">
                            <label class="my-2 form-label ml-form" for="name">Name</label><br>
                            <input id="name" name="nama" class="w-75 rounded pd-form" type="text" autocomplete="off"
                                placeholder="Your Name">
                        
                            <label class="my-2 form-label ml-form" for="email">Email</label><br>
                            <input id="email" name="email" class="w-75 rounded pd-form" type="email"
                                placeholder="youremail@email.com">
                        
                            <label class="my-2 form-label ml-form" for="">Message</label><br>
                            <textarea name="message" class="w-75 rounded pd-form" rows="3" type="text" autocomplete="off"
                                placeholder="Text message here"></textarea>
                        </div>

                        <div class="col align-self-center d-flex justify-content-center">
                            <input class="btn btn-primary tombol border-0" type="submit" value="Submit">
                        </div>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>