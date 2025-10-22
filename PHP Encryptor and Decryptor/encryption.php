<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encryptor and Decryptor</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="assets/BSIT.png" type="image/png">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <link href="design.css" rel="stylesheet">
  </head>


  <body>

  
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <span class="fs-4">BSIT 3-1</span>
     
    <!-- para sa navbars lng to-->
      <!--nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Home</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">About Us</a>
      </nav-->
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-5 fw-normal">Text Encryptor & Decryptor</h1>
      <p class="fs-5 text-muted">A text Encryptor and Decryptor for free of use.</p>
    </div>
  </header>
<!-- End of head-->

  <main >
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

<!-- OPTION BOX-->
      <div class="col" style="margin-left:150px;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">

  <form method="post" action="encryption.php">
              <select name="action" id="action" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <!--option selected>Select an action</option-->
                    <option value="encrypt">Encrypt</option>
                      <option value="decryptDecimal">Decrypt Decimal</option>
                      <option value="decryptBinary">Decrypt Binary</option>
              </select>
           

            </h4>

            
          </div>
          <div class="card-body">
            <!--h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1-->
            <ul class="list-unstyled mt-3 mb-4">
            <textarea name="input" id="input"  required style="resize: none; border-radius: 10px; height:100px; width:260px;"></textarea><br><br>
            </ul>
            <input type="submit" class="w-100 btn btn-lg btn-secondary value="Submit">
          </div>
        </div>
      </div>


  </form>
<!-- END OF OPTION BOX-->


<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal ">Result</h4>
          </div>
          <div class="card-body">
            <!--h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1-->
            <ul class="list-unstyled mt-3 mb-4">

            <!-- START -->
  <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $action = $_POST['action'];
                $input = $_POST['input'];


                //encrypt function for text to ASCII
                function encrypt($input) {
                    $encrypted = '';
                    for ($i = 0; $i < strlen($input); $i++) {
                        $decimalValue = ord($input[$i]);
                        $bitstream = decbin($decimalValue); //decimal to binary function
                        // Pad the bitstream to 8 bits
                        $bitstream = str_pad($bitstream, 8, '0', STR_PAD_LEFT);
                        $encrypted .= $bitstream . ' ';
                    }
                    return trim($encrypted);
                }
                //decrypt ASCII from text
                function decrypt($input) {
                    $decrypted = '';
                    $bitstreams = explode(' ', $input);
                    foreach ($bitstreams as $bitstream) {
                        $decimalValue = bindec($bitstream);//binary to decimal function
                        $character = chr($decimalValue); //binary to Character
                        $decrypted .= $character;
                    }
                    return $decrypted;
                }
                //encrypt Decimal from text
                function encryptDecimal($input) {
                    $encryptedDec = '';
                    for ($i = 0; $i < strlen($input); $i++) {
                        $decimalValue = ord($input[$i]);
                        $encryptedDec .= $decimalValue . ' ';
                    }
                    return trim($encryptedDec);
                }
                //decrypt Decimal from binary
                function decryptDecimal($input) {
                    $decryptedDecimal = '';
                    $decimalValue = explode(' ', $input);
                    foreach ($decimalValue as $decimal){
                        $character = chr($decimal);
                        $decryptedDecimal .= $character;
                    }
                    return $decryptedDecimal;
                }
                //Decrypt Binary from Decimal
                function decryptBinary($input) {
                    $decryptedBinary = '';
                    $binaryValue = explode(' ', $input);
                    foreach ($binaryValue as $binary){
                        $character = bindec($binary);
                        $decryptedBinary .= $character . ' ';
                    }
                    return trim($decryptedBinary);
                }

                ?>
     
            <div class="col">
              <div class="card-header py-3">
                    <?php
                    if ($action == 'encrypt') {
                        $output = encrypt($input);
                        $decimalOutput = encryptDecimal($input);
                        echo '<h4 class="my-0 fw-normal">Decimal Value</h4>';
                        echo "$decimalOutput";
                        echo '<br><br><br><br><h4 class="my-0 fw-normal">Binary Value</h4>';
                        echo "$output <br>";

                    } elseif ($action == 'decryptBinary') {
                        $output = decrypt($input);
                        $stringOutput = decryptBinary($input);
                        echo '<h4 class="my-0 fw-normal">Decimal Value</h4>';
                        echo "$stringOutput <br>";
                        echo '<br><br><br><br><h4 class="my-0 fw-normal">String Value</h4>';
                        echo "$output <br>";
                        
                    }
                    elseif ($action == 'decryptDecimal') {
                        $output = decryptDecimal($input);
                        $binaryOutput = encrypt($input);
                        echo '<h4 class="my-0 fw-normal">Binary Value</h4>';
                        echo "$binaryOutput";
                        echo '<br><br><br><br><h4 class="my-0 fw-normal">String Value</h4>';
                        echo "$output <br>"; 
                    }else {
                        echo "Invalid action.";
                    }
                }else {
                        echo "Invalid action.";
                    }
                ?>
            </div>
        </div>


            </ul>
          </div>
        </div>
      </div>
    <!-- END -->





  </main>
        <hr>
  </div>
             
</div>

  </body>
</html>

<!--
  1. Kurt - Front-End Dev
  2. Roy - Back-End Dev
  3. Faisal - UI Designer / Front-End Dev
  4. J-zen - UI Designer
 -->
