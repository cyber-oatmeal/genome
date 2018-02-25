<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File selector demo</title>

    <link href="file-selecting/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="file-selecting/style.css?4" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        .container {
            padding-top: .3em;
        }

        #appChainContainer li {
            cursor: pointer;
            color: blue;
        }
    </style>
</head>

<body>

    <div id="personContainer">
        <?php print($access_token) ?> dsfdsfdsasdfdsfdsdsf

        <button id="submitSamplePerson">Submit</button>
        <div class="container">
            <input type="hidden" name="file" id="sequencing-file-selector-example" />
        </div>
    </div>

    <div id="appChainContainer">
        <h1>Chain Container</h1>
        <li id="Chain1527">Blood clot risk</li>
    </div>

    <div id="waiting"><h1>Waiting For Data</h1></div>
            <input type="hidden" value="<?php echo $access_token ?>" id="tokenId" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file-selecting/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="file-selecting/sequencing-file-selector.js?4"></script>
    <script>
        $('#sequencing-file-selector-example').sequencingFileSelector({
            accessToken: "<?php echo $access_token ?>"
        });
    </script>

</body>

</html>