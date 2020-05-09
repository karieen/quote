<?php
require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client([
 'base_uri' => 'https://api.quotable.io/',
]);
$response = $client->get('random');
$quote = json_decode($response->getBody(), TRUE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        blockquote{
            border-left:none
        }
        .quote-badge{
            background-color: rgba(0, 0, 0, 0.2);   
        }
        .quote-box{
            overflow: hidden;
            margin-top: -50px;
            padding-top: -100px;
            border-radius: 17px;
            background-color: #4ADFCC;
            margin-top: 25px;
            color:white;
            width: 325px;
            box-shadow: 2px 2px 2px 2px #E0E0E0;
        }
        .quotation-mark{
            margin-top: -10px;
            font-weight: bold;
            font-size:100px;
            color:white;
            font-family: "Times New Roman", Georgia, Serif;
        }
        .quote-text{
            font-size: 19px;
            margin-top: -65px;
        }
    </style>
</head>
<body>
<div class="container">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        <?php echo $quote['content'] ?>
      </p>
      <hr>
      <div class="blog-post-actions">
        <p class="blog-post-bottom pull-left">
          <?php echo $quote['author']; ?>
        </p>
      </div>
    </blockquote>
</div>
    
</body>
</html>