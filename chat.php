<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <style>
       
        .nb {
            width: 300px;
            height: 300px;
            background-color: greenyellow;
        }

        .chatbox {
            text-align: left;
            margin: 0 auto;
            margin-bottom: 25px;
            padding: 10px;
            background: #fff;
            height: 270px;
            width: 300px;
            overflow:auto;

        }
    </style>
</head>

<body>
   <?php echo $_SESSION['cod'];?>
    <div class="container">
        <div class="col-lg-3">
   
        </div>
        <div class="col-lg-4 bg-primary">
            <h1><strong>Chat</strong></h1>
            <div class="chatbox" id="chatbox">

                
                <div class="hola" id="nn"></div>
            
            </div>
            <form id="formulario" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="mensaje" id="mensaje" name="mensaje">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" id="btn">Enviar</button>
                    </div>
            </form>
        </div>
    </div>
    </div>

  



    <!-- -->

    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
