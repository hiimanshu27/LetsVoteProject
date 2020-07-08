
 <?php
    session_start();
    $link = mysqli_connect( 'localhost', 'root', 'himanshu' );
    mysqli_select_db( $link, 'Demo' );
    $user=$_SESSION['name'];
    $result="DELETE FROM `Candidates` WHERE username='$user'";
    mysqli_query( $link, $result );
    
    if (isset($_POST['firstName'])){
    $fname=$_REQUEST['firstName'];
    $lname=$_REQUEST['lastName'];
    $email=$_REQUEST['email'];
    $state=$_REQUEST['state'];
    $user=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $total=1;
    $query="INSERT INTO User (`First Name`, `Last Name`, `Email Address`, Province, Username, Password) VALUES ('$fname','$lname','$email','$state','$user','$password')";
    mysqli_query( $link, $query );
    if ( ! mysqli_query( $link, $query ) ) {
      $error_number = mysqli_errno( $link );
      $error_message = mysqli_error( $link );
      file_put_contents( "/tmp/project.log", "($error_number) $error_message" );   
    }
    
    header('Location: '.$_SERVER['PHP_SELF'].'?success');
    exit;
  }
    
  mysqli_close( $link );

?>
<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="common.css">
  
  <title>LETS VOTE</title>

    
 

  <link href="form-validation.css" rel="stylesheet">
</head>

<body>
  
  
  <header>
    <nav id ="firstNav">
      <ul >
        <li><a data-flickr-embed="true"  href="https://www.flickr.com/photos/20770987@N03/2146505943/in/photolist-4Ny1yw-b7SkbB-g1VNRn-7ejYFo-koVBew-5ezrxR-797PF8-i8tnWY-95N2na-Vfu8if-cpeCxJ-qCnMHC-7LNwXg-8ZwCDP-8kc2kA-9UrgnP-Abkq29-8Q1aYv-5AVBGx-8Q1ewa-7DzsCM-5R1n6X-aF2p1i-5R1baM-7G7aTL-b7SjV2-39kqd-4Cv4No-auGh1p-r7vfYX-7uhLvd-ieTDy-743Bje-8gZhiX-7YrZU3-23Pd4D-4gFpra-d7HvhJ-2b1qSq-6ZiU8q-ofVYRW-2dRgMGm-Lu1RWW-nnNHGR-7YRnHR-7MasMi-7KA3ka-5gvA9Z-4xMSwH-mFMeN/" title="jane"><img src="https://live.staticflickr.com/2184/2146505943_a51d95f95b.jpg" width="75" height="75" alt="jane"></a><script async src="//embedr.flickr.com/assets/client-code.js" ></script><script async src="//embedr.flickr.com/assets/client-code.js"></script></li>
        <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Provience</button></li>
        <li><a class="p" href="update.php">Home</a></li>
        <li><a href="logout.php" class="button">Log Out</a></li>
        <li><a href="documentation.html" class="button">Documentation</a></li>

      </ul>
    </nav>
        
    </header>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Search By Name Or Select Your Provience </h4>
        </div>
        <div class="modal-body">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   
            <div class="invalid-feedback"></div>
                    
          <ul class="state-list" id="nineNav">
                      
                <li><a href="https://www.ontario.ca/page/government-ontario" style="color:white"  ><b>Ontario</b></a><br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/wiless/4750898694/in/photolist-8ePAEs-nYuSvr-fd4q8j-28y46hC-75tgzT-rpUCxh-8bXUpQ-ayBjAP-fYkaC6-89EXdx-dxTcTt-9m17ji-onYNPo-662iAX-8eVQJH-jw8rVU-BCzX1y-XCGZnn-5fTDaq-YE6a69-JkxV8L-d6CZxG-991rdS-f2c723-gnLwyL-697zvz-e8yQWf-8XMXYA-28RSQXL-25vJmhm-ay2Qqz-jcEWo7-m7yBWU-nZueTp-bXjoN6-9Qd2hD-7Sr3GV-2CFhA9-ZerktQ-JxTjgw-j3CW1o-9YHT9d-8GpV7r-2c8UYTd-iqd2cQ-7dKTJq-Jngz9F-bUTGiy-7EJhiE-29vahue" title="The Ontario flag"><img src="https://live.staticflickr.com/4142/4750898694_fec859254a_b.jpg" width="100" height="100" alt="The Ontario flag"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>                      
                </li>
                      
                <li><a href="https://www.quebec.ca/en/" style="color:white"  ><b>Qubec</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/lyricsofmylife/30338896834/in/photolist-T9zCT-2iCSJC-NdWM3b" title="Tranagender Pride Flag of Quebec"><img src="https://live.staticflickr.com/5638/30338896834_a31cfb01c8_b.jpg" width="100" height="100" alt="Tranagender Pride Flag of Quebec"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                </li>
                      
                <li><a href="https://www.welcomebc.ca/" style="color:white" ><b>British Columbia</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/sbivy/3741415890/in/photolist-6GBJAw-9zQwjh-rLZd39-TK4xSU-aeN4VS-39Du1b-9uRuPi-7JSzkQ-5cXwDX-2bqAfLG-nhkMsb-7KaPYW-qrRHFS-6wxRwh-6y8jZ1-p7Jyx9-iJkZe-8WbxPh-6iqqvf-nTZe2m-5Wj1yD-mQ4MR-oqryYe-4G9Sbj-ofuWxR-K4wAvD-87Y1Ka-2pPLJ-5X7bUQ-Y5iE2Z-e8xfZj-8eP4Y9-bXJy7C-bXJxSb-6vBX8B-2dDEmZ9-9pJxJD-dME7BP-9sUvjq-edZKwc-6wqx5N-7McXea-fT2SxB-8kRMQi-aaB3sL-23R4MRH-8Yv9u8-9JNbQd-eY14N-cmxvFm" title="British Columbia"><img src="https://live.staticflickr.com/3495/3741415890_6ef360dcd1.jpg" width="100" height="100" alt="British Columbia"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                </li>
                                            
                <li><a href="https://www.alberta.ca/index.aspx" style="color:white" ><b>Alberta</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/28041550@N05/3081237721/in/photolist-5Gh9Ci-e8TRre-hWkkpY-8URFM5-eK1DYk-RYB3Fp-brc8SU-ocvvZn-28eAA3W-dtxMUB-CdG17X-7CABnz-hrb55v-4Unmqm-nsWWoz-UVa2aB-25vMpgu-niT1oe-dubLjW-8wK3Np-dLCjnz-ocxnTL-nPZc1y-22Xi7QQ-bEt5aV-nE9L-sojuTa-211KvdR-23GNKZM-S3yLKy-ZTZAQB-rvAR7N-27bDbTS-drNbcN-dR3XHq-cQkUW3-274hWsB-21L3C9o-fDN78M-dVTjdm-nB7kXi-pScE91-bC3uhE-JfJPQB-awqJwB-8BMduM-nskgif-bqnqEG-5p87V3-8z365D" title="Alberta Flag"><img src="https://live.staticflickr.com/3031/3081237721_3d0bd422f3.jpg" width="100" height="100" alt="Alberta Flag"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script> 
                </li>
                                            
                <li><a href="https://www.gov.mb.ca/" style="color:white" ><b>Manitoba</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/arlophoto/33247619425/in/photolist-SDYJVF-222gXs6-feP4f4-ck1Ftm-9eb1Dq-WvBdfD-gv3B66-avCFpw-6AgLcr-9n3pBt-jAUNi-39ws4S-ac2r2B-76cHDw-7VwNRY-4gjaQm-oJ7cUk-fLkY2E-2dHnxea-6NjWtK-Ki6Hts-sBLLNG-a7YDsx-83QXse-fGwez6-ff4iqU-2ecyKBr-E7gc95-GqMSZT-2b8RDC3-6XEyXP-Lu7L2j-9qzrd8-88bnL8-8wLC4v-6Bw1j3-6WszZ4-fGNGwJ-2e1jR6q-JEhUyr-SCedZ3-wTnSRc-vVZ9b8-dLyDXz-dLEcem-57BDeN-dLEcam-58wGwu-cpaG25-4EvTxP" title="2017 365 arlophotochallenge 63-365"><img src="https://live.staticflickr.com/3696/33247619425_c89b1d6227.jpg" width="100" height="100" alt="2017 365 arlophotochallenge 63-365"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                </li>
                                            
                <li><a href="https://www.saskatchewan.ca/" style="color:white" ><b>Saskatchewan</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/2017canadagames/36286345221/in/photolist-Xhv1eK-ff4iqU-2ecyKBr-E7gc95-LdR4BZ-jccem-8jyL3g-6pQMdt-7FisLm-fwuULA-6nh9Hq-fGNvMw-28rZMUT-8v7qi3-6H4TSG-74oZdq-WLRqu2-GqMSZT-fqvVSM-puhpLc-7e8vNB-dZ3hWQ-LyHzgm-pxTqpJ-jV4yk-2aFine9-UVa2aB-VuC8X3-5tWNdz-f8MEsP-5tWKZ8-fwuMLL-7Lit3v-2eyUWcL-dP6ZKg-26ADgUN-7iz9Yb-e2grz-dcnKWk-6BJAG1-yWgTL-bEt5aV-5Cn35z-W5LbT3-tRgdHC-2hVqPb-7JkSgL-SdJnry-5RnyvU-8o9ZF7" title="2017-08-06-Ken_Sterzuk-Festival_Sask-01.jpg"><img src="https://live.staticflickr.com/4397/36286345221_83ce083ee2.jpg" width="100" height="100" alt="2017-08-06-Ken_Sterzuk-Festival_Sask-01.jpg"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                </li>
                                          
                <li><a href="https://www.novascotia.com/" style="color:white" ><b>Nova Scotia</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/ryanisland/9345290371/in/photolist-feP4f4-35KRZ3-4WUDUC-dnWXGa-24txmrc-7AVbNo-ff4iqU-7mFcCc-bwa8x1-YgF3Ny-aSJFfH-ayKY4J-doCL79-bWnBBD-5Diygx-fxyThZ-Uvvwmr-eXTVj6-eJicwV-FJfsM-nMnRC9-cBAyJN-28mARnm-23w24vW-9dMyda-9nbQaY-7VFdCQ-ZnEXk-229pou8-28kD5ZS-47GaSe-oxMzpB-2dGb3t2-nvbzum-J9bZcu-2ffEiBZ-6quTNA-8fUAat-31gQVV-LCDsyL-fGvCZr-KiHKgf-8AAyxt-dayYie-5ar8aL-5cPi2U-5JFz9m-LwH1wf-2faZCGW-VFu63C" title="The flag of Nova Scotia"><img src="https://live.staticflickr.com/2864/9345290371_65a4638fb9.jpg" width="100" height="100" alt="The flag of Nova Scotia"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                </li>
                                                       
                <li><a href="https://www2.gnb.ca/" style="color:white" ><b>New Brunswick</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/alain_quevillon/7672377532/in/photolist-cFYWxf-dnWXGa-4k7AJa-5CyzJN-J9X7zj-4QAP57-feP4f4-7THPFH-25Pnshu-4Wn5oz-7CF5NV-aTVtYM-rA6SZX-2HWc1X-JC7kB7-9YyWZm-8eFRAj-qjWHAt-8koPHb-AhPreh-5nb7QH-ad25a7-4kwUyE-6NyAK9-d7fJEd-d7fJyS-8JDhmm-ZnEXk-ck1Ftm-ff4iqU-3XzCdm-2ecyKBr-WvBdfD-98UEe4-9UsaWC-WP1BXj-zCn9XC-2HRdnV-4KerZW-4Wytbv-d84szj-dniark-29GHrxU-gnnk46-9hBwzH-cZoYaU-ouTHvf-de2JFw-gwMCr-KGdcEh" title="Flag of New Brunswick"><img src="https://live.staticflickr.com/8007/7672377532_a132da3411.jpg" width="100" height="100" alt="Flag of New Brunswick"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                </li>
                                           
                <li><a href="https://www.newfoundlandlabrador.com/" style="color:white" ><b>Newfoundland</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/crobart/17016234856/in/photolist-rVEDMA-6DejUm-dsJudH-2DT8rb-Lrowp1-AqPqeu-ahREfE-8CWB8Q-8f2LDb-8u4wx8-E7gc95-zeRu3Z-2b8RDC3-48QB6j-26EkvTS-2ekzuQ8-nN2wBq-kfZRty-23Jf31i-5nxg5B-HpjV3p-24rG1X7-8u4k9F-677j2C-8EnceZ-dbh7qq-2vobCm-f6x8M7-739tV-6E3y5t-hxRiDu-JGQcKT-fRcyt-JwTMEb-7iP8F4-6dAjtz-S6jzLj-ARHTAU-YLLdRH-uy8ixy-5dpmJ3-86kc1C-asa7eZ-9XLQ3X-Qj62NA-WEVa9C-ko3Yqa-oaEF9Q-5dsS94-295WiH" title="P1010485r"><img src="https://live.staticflickr.com/8821/17016234856_184f5d358d.jpg" width="100" height="100" alt="P1010485r"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>                      
                </li>
                      
                <li><a href="https://www.princeedwardisland.ca/en" style="color:white" ><b>Prince Edward Island</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/15609463@N03/7841099854/in/photolist-cWTFNN-ddXNy7-7AVbNo-feP4f4-ck1Ftm-ff4iqU-2ecyKBr-WvBdfD-gJ2BzE-E7gc95-GqMSZT-9JjUZy-CTE6HE-2aqtDsr-pBGvEK-4ptuVU-fFky8k-27Gikkb-dJnidH-crfDKJ-8Khcbq-agRUmt-RizN29-8MHRDh-9rTr3B-qU1Qai-8wYofA-7JuuYD-748tRV-73r59f-oNem6c-74E6WV-E5bxS6-mNgbKW-UYyEY8-W7SeZf-bAsQDg-d3paJw-BHcTft-hVqgku-9g3Qkd-8Mxi4p-24Z7K6w-fQQrok-w3CaK-ffKpoM-fHv6wg-ouZbBA-peRvf-pfjMGU" title="Prince Edward Island Provincial Flag"><img src="https://live.staticflickr.com/8281/7841099854_1afe5e7b1a.jpg" width="100" height="100" alt="Prince Edward Island Provincial Flag"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>               
                </li>
                       
                <li><a href="https://www.gov.nt.ca/" style="color:white" ><b>Northwest Territories</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/lyricsofmylife/30338895354/in/photolist-NdWLAE-bD293G-eK7ZxM-M4j1GF-c8fowQ-8BMduM-o5QnoD-Cd4dnS-7KcYUo-7Jg8vP-BP7UYa-JPUt9K-7K4MqH-7Ju8jD-Cez8M2-RnDyeG-7HYRzn-7JPwjP-7J8ehH-7JayRY-7JeZJt-7HM3Eb-5VTxrD-6gbuDN-7JCKqD-7JVv3P-aLfu9i-FTqkYt-9XR5Sa-7JiNs6-e8Up3s-5Diygp-7K8ZWD-7Jnx7i-7HLTrY-7JmMVb-CmS3Ba-7JUhAy-7Jfs9c-7HM91m-bxCpnf-7K8Dbv-7JuRAc-7Jz2pN-c3QGSL-7JVP6t-7Jr2FN-7J7hi4-65dL5w-7JVz1H" title="Transgender Pride Flag of the Northwest Territories"><img src="https://live.staticflickr.com/5571/30338895354_3454df59da.jpg" width="100" height="100" alt="Transgender Pride Flag of the Northwest Territories"></a><script async src="//embedr.flickr.com/assets/client-code.js" ></script>               
                </li>
                                         
                <li><a href="https://yukon.ca/" style="color:white" ><b>Yukon</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/27508472@N07/2566015443/in/photolist-4UKuZz-6WdKFo-NeiBTb-oZS7nN-FoGsm-YyALLw-6EgRpK-cY39Fb-oFmvLH-89Jigq-5DzUSp-6564U9-nLyPcn-849Dmq-o4YJDf-qbqw6j-5wJdhv-byexLC-jedCP-8tbgJE-6e2yMp-6Y6FC6-NnJMHB-oid9zN-bVxx2V-9y92TT-9MBBvb-8vWtNn-rxBbwf-fmMUhg-fn33Ej-oXmiVt-ff4qjj-cXeJQ5-9LDy82-fmMSQ6-fn3dMd-7HGEYG-cPZtWL-c45hAo-6FwZ8X-nHYCBK-ff4Az9-9Xnoxf-aExbQL-rQ63WV-dUNP31-bp33x9-ff4nCL-8U9TH3" title="Canada Yukon Flag History"><img src="https://live.staticflickr.com/3128/2566015443_e466677f8b.jpg" width="100" height="100" alt="Canada Yukon Flag History"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                </li>
                        
                <li><a href="https://www.gov.nu.ca/" style="color:white" ><b>Nunavut</b></a> <br>
                <a data-flickr-embed="true"  href="https://www.flickr.com/photos/caat/5009535205/in/photolist-8CFbhD-68wRzy-znaX43-7JkSgL-nSVRpx-7N9ncn-XxXRAc-5Tn8nM-ejoPr2-2xizYd-p5N85N-cPDJwm-KfuvMs-8sqfyi-m1UAfH-8cwf3x-a3bqkL-ai8yCo-8URFNS-2FcnWR-89F3Ma-rG6JMq-7N9n1V-7M7rUp-JDrYoE-5RnyvU-bhZB5K-8o9ZF7-5AiGfN-4MzerA-9kgVnu-VH6CBh-9y92TT-HvgEu5-8vWtNn-fmMUhg-fn33Ej-ff4qjj-MF2tXq-9kHEfj-9LDy82-fmMSQ6-fn3dMd-ff4Az9-9JZjm1-ff4nCL-fn38ef-ff4ns7-fn3a9d-eWbExg" title="nunavut flag"><img src="https://live.staticflickr.com/4145/5009535205_b5e224b427.jpg" width="100" height="100" alt="nunavut flag"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                </li>
                                                   
            </ul>
        </div>
        </div>
        </div>
    </div>
    
  <nav id = "secondNav">
    <ul >
      <li><a href="https://www.canada.ca/en.html">Canada</a></li>
    </ul>
  </nav>
  
  <div class= "poll">
    <h1> VOTE NOW TO OUR POLL</h1>
    <h2>Vote for 2019 elections</h2>
  </div>
    <ol>
      
   <li>
   <nav id="thirdNav">
    <h2>Top PM Candidates</h2>
    <ul>
      <li>Liberal Party<br><h3>Justin Trudeau</h3></li>
      <li>NDP<br><h3>Jagmeet Singh</h3></li>
       <li>Conservatives<br><h3>Andrew Scheer</h3></li>
       <li>Green Party<br><h3>Elizabeth May Badia</h3></li>
    </ul>
    </nav></li>
  
    <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Vote Now</button>
      <form class="needs-validation" novalidate action="voted.php" method="post">
      <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Vote for your Prime Minister </h4>
          </div>
          
          <div class="modal-body">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <h2> Here Are Your Options</h2>
              <div class="form-check">
                
                  <!--<label for="state">Select Provience</label>
                    <select class="custom-select d-block w-100" id="state" name ="state" required>
                      <option>Select your provience</option>
                      <option>Ontario</option>
                      <option>Qubec</option>
                      <option>British Columbia</option>
                      <option>Alberta</option>
                      <option>Manitoba</option>
                      <option>Saskatchewan</option>         
                      <option>Nova Scotia</option>
                      <option>New Brunswick</option>
                      <option>Newfoundland</option>
                      <option>Prince Edward Island</option>
                      <option>Northwest Territory</option>
                      <option>Yukon</option>
                      <option>Nunavut</option>
                    </select>-->
                    
              <ul id="fifthNav">
                
                <li>Enter Your Username
                  <div id="usertext">
                  <input id="user" type="text" class="form-check-input" name="user" value = ""></div>
                </li>
                
                <li>
                Liberal Party <br> <h3>Justin Trudeau</h3><a data-flickr-embed="true"  href="https://www.flickr.com/photos/stjacquesphotography/8076169939/in/photolist-diEtXi-diEtkT-9zNMpa-9zRLgU-9zNMBK-euBvCg-diErvJ-diEs3w-diEs9j-diEpsq-diEoEr-di3Fxq-di3JtT-9zNMgc-diEqZF-9BTFjj-dgnPm9-dwvqHm-dwpP4n-dwveGQ-dwviaL-dwpREP-dBqfCB-rNJsJg-dBqZki-a5PoFk-dvejtZ-f8Ydb8-eFAhYL-eFAo6N-eFtXgc-eFA5z1-oZzJuZ-dBqXQX-fcLkTn-fcJqJ4-9YGQQJ-fcKsSD-is3k5J-87F8rz-fcHbZv-f2rbR1-dtqVD5-e18CQt-jY44M6-diEp11-dWHfeS-eZmkGd-rNKujD-9AjPjn" title="Justin Trudeau Hamilton Oct 2012"><img src="https://live.staticflickr.com/8045/8076169939_cbd83f1b2f.jpg" width="150" height="100" alt="Justin Trudeau Hamilton Oct 2012"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                <input id="lib" type="radio" class="form-check-input" name="l" value = "lib"></li>
                
                <li>
                NDP <br> <h3>Jagmeet Singh</h3><a data-flickr-embed="true"  href="https://www.flickr.com/photos/12973569@N04/37561082641/in/photolist-Ze9ng8-ZZymYC-215kGRK-WSzuF2-2byzZZv-8TU2rP-3WbJS8-cxm2ZL-RcDrxj-23Swwhs-21xgUCM-2eWG4UT-7ACeyR-221PgjJ-221Pfo5-252PQf2-LWJkPN-GPtVzh-9AMwKW-9AMwL9-25ou8rQ-aqo1Hx-bJqwCP-2eaaUkM-2ecWHnT-2ftnUJj-c21S9J-anJYyY-ahsJzk-ahsKQM-ahsJNg-ahsJhn-SNSQs3-uYv8tP-ahsFWZ-9AL4wn-ahsENt-anK1pf-anJZNf-anGdpH-anJYYb-9avbaY-9avQcN-anJYKW-9ZToeB-aiZ2hV-aj2NJW-anGcop-c21aiU-c1ZEcL" title="Jagmeet Singh"><img src="https://live.staticflickr.com/4505/37561082641_07ec2ff0fd.jpg" width="150" height="100" alt="Jagmeet Singh"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                <input id="ndp" type="radio" class="custom-control-input" name="l" value = "ndp"></li>
               
                <li>
                Conservatives<br> <h3>Andrew Scheer</h3><a data-flickr-embed="true"  href="https://www.flickr.com/photos/cdnclubto/24891961858/in/photolist-DVBP3b-21ZyaLL-ZX2tE5-21Zy8Bf-H6GedK-223iuZM-H6GgEZ-ZYfdQU-21Zxh59-Cq2uWa-ZYfmqo-Cq2mWH-Cq27p6-DVC85y-223ivWB-21Zxxzh-H7Ye4Z-ZFWqQi-CoM69V-ZYfMZu-223iuJr-DVCbSJ-H6GdiP-221Qaxm-Yrv2w6-ViXzxQ-VZUw5u-WkiePW-ZX1Tg5-Cq28JF-ZHcNnv-21Zxxbm-2dEerpD-TWywP3-TWyCbW-XkgEgL-YrwBqg-YrxWQM-XaHcBL-XaHcgA-e318XQ-XQskRJ-Y1yyEi-XXNqcN-2dLJ8wR-4QpFE3-XCJUza-XCJUCX-Yrwgmt-edQgPK" title="Andrew Scheer 654"><img src="https://live.staticflickr.com/4571/24891961858_78f2b029e7.jpg" width="150" height="100" alt="Andrew Scheer 654"></a><script async src="//embedr.flickr.com/assets/client-code.js" ></script>
                <input id="con" type="radio" class="custom-control-input" name="l" value = "con"></li>
                
                <li>
                Green Party<br> <h3>Elizabeth May</h3><a data-flickr-embed="true"  href="https://www.flickr.com/photos/greenpartyofcanada/5601889890/in/photolist-9x29Gs-9F8imP-bZmkKf-VPPNBj-noPJjf-9pGj8Q-8urMto-5qa8iM-9pG1js-9pD4ug-9pCWKe-Z3FM1L-72XsKv-86CMRR-aPqP8i-9pFZFY-9pG5ry-7T34xH-9BZEqg-9pG7uj-9pFZ41-9mqSr4-U2ksnE-ea8cYU-r7Fbmj-SbArsn-TYtwx9-2eqZiTz-2fGGoHw-8MXLaN-5EHrXZ-eF1KtY-UHeEds-fTfDk6-4NeZqh-dt5a29-nqkoVY-xawxbM-2dQoB2L-x9djJf-9kTz9c-mmQ1fB-oeWrfe-dxekq8-cbFX8h-TFh1z1-nsLe2C-9gFTBC-eh1qwr-zL6kUQ" title="reopening SGI office"><img src="https://live.staticflickr.com/5266/5601889890_ae50a95c82.jpg" width="150" height="100" alt="reopening SGI office"></a><script async src="//embedr.flickr.com/assets/client-code.js"></script>
                <input id="gp" type="radio" class="custom-control-input" name="l" value = "gp"></li>
              </ul>
              </div>
              
              <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Your Vote</button>
          </div>
        </div>
        </div>
      </div>
      </form></li>

 
  
  <li>
  <nav id="tenNav">
    <h2>Mystery Links</h2>
    <ul>
      <li><a href="https://nationalpost.com/category/news/politics">National Post</a></li>
      <li><a href="https://www.cbc.ca/news/politics">CBC</a></li>
       <li><a href= "https://www.msn.com/en-ca/news/politics">MSN</a></li>
       <li><a href="https://globalnews.ca/politics/">Global News</a></li>
       <li><a href="https://www.huffingtonpost.ca/politics/">Huffpost</a></li>
    </ul>
  </nav>
  </li>
  
  </ol>
  
    
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <!--<p class="mb-1">&copy; 2017-2019 Company Name</p>-->
    <!--<ul class="list-inline">-->
      <!--<li class="list-inline-item"><a href="#">Privacy</a></li>-->
      <!--<li class="list-inline-item"><a href="#">Terms</a></li>-->
      <!--<li class="list-inline-item"><a href="#">Support</a></li>-->
    <!--</ul>-->
  </footer>
  
</body>

</html>