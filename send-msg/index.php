<?php
session_start();

if (isset($_POST['sendMessage'])) {
    $chat = $_POST['inputMessage'];
    $_SESSION['returnUrl'] = "location: ../send-msg?sid=" . session_id();
    $_SESSION['msg'] = $chat;
    
    header("location: ../send?sid=" . session_id());
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Message to Telegram Bot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <label class="navbar-brand">Send Message Using Bot</label>
        </div>
    </div>
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <form class="card-body" method="POST">
                        <textarea class="form-control mb-3" rows="10" name="inputMessage" placeholder="your message here..."></textarea>
                        <button type="submit" name="sendMessage" class="w-100 btn btn-dark">Send &raquo;</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>