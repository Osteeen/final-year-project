<?php
    require("includes/functions.php");
    $connection = new mysqli("localhost", "root", "", "chapel_attendance");
    $id = $_GET['id'];
    $getEvent = mysqli_query($connection,  "SELECT * FROM events WHERE id = '$id'");
    $event = mysqli_fetch_array($getEvent);

  
    $getUser = mysqli_query($connection,  "SELECT * FROM staffs WHERE staff_ID = '1234'");
    $user = mysqli_fetch_array($getUser);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/logo.jpg" type="image/ico" />
    <title>Take Fingerprint</title>
    <script type="text/javascript" defer src="face-api.min.js"></script>
    <script type="text/javascript" defer src="./script.js"></script>

    

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="./css/verifyfingerprint.css" />
    <style>
    canvas {
      position: absolute;
      top: 0;
      left: 0;
    }
    </style>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <!-- Page Content  -->
        <div id="content" class="p-3 p-md-3 pt-3">
            <div class="container-fluid row " style="width: 100%; height: 80%" >
                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard">
                            <div class="info">
                                <img src="./images/user.jpg" width="470" height="360" class="img-thumbnail" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard">
                            <div id="vid" class="info">
                            <video id="video" width="610" height="450" autoplay muted></video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard" id="details">
                        <div class="info">

                        <div class="form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align". for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr">
                        </div>
                        <hr/>
                        <div class="">Name : <?php echo $user['first_name']; ?> </div>
                        <hr />
                        <div class="">MatNo/Staff Id : <?php echo $user['staff_ID']; ?> </div>
                        <hr />
                        <div class="">Department : <?php echo $user['department']; ?> </div>
                        <hr />
                        <div class="">Level/Position : <?php echo $user['position']; ?> </div>
                        
                        
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="">
                        <div class="card hovercard">
                            <div class="info">
                                <div class="">Event</div>
                                <hr />
                                <div class="">Name : <?php echo $event['name']; ?></div>
                                <hr />
                                <div class="">Date : <?php echo $event['date']; ?></div>
                                <hr />
                                <div class="">Time :<?php echo $event['start_time']; ?></div>
                                <hr />
                                <div class="">Time :<?php echo $event['late_at']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>

            
            </div>
        </div>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="js/home.js"></script>
    
  
</body>

</html>
<script>
     $(document).on('blur', '#mat_no', function()
     {  
        var matNo = $(this).text();  
        alert(matNo) 
           $.ajax({  
                url:"info.php",  
                method:"POST",  
                data:{matNo:matNo}, 
			    dataType:"text",  
                success:function(data){  
                     $('#details').html(data);
                     alert(matNo)
                } 
           });  
    });

</script>


<script>

$(document).ready(function() {


    var p1 = "yooooo";
const video = document.getElementById('video')

Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('./models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('./models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('./models'),
  faceapi.nets.faceExpressionNet.loadFromUri('./models'),
  faceapi.nets.ssdMobilenetv1.loadFromUri('./models')
]).then(startVideo) 

async function startVideo() {
  navigator.getUserMedia(
    { video: {} },
    stream => video.srcObject = stream,
    err => console.error(err)
  ) 
  

video.addEventListener('play', async () => {
  const container = document.createElement('div')
  container.style.position = 'relative'
  document.getElementById('vid').append(container)  
  const labeledFaceDescriptors = await loadLabeledImages()
  const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6)
  //document.body.append('Loaded')


  container.append(video)
  const canvas = faceapi.createCanvasFromMedia(video)
  container.append(canvas)
  const displaySize = { width: video.width, height: video.height }

  faceapi.matchDimensions(canvas, displaySize)

  setInterval(async () => {
    const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceExpressions().withFaceDescriptors()
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    const results = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor))
    results.forEach((result, i) => {
    const box = resizedDetections[i].detection.box
    const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString() })
    
 
    canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)
    faceapi.draw.drawFaceLandmarks(canvas, resizedDetections)
    faceapi.draw.drawFaceExpressions(canvas, resizedDetections)
    drawBox.draw(canvas)
    })     
  }, 100)
})

}//start video ends  




function loadLabeledImages() {
  const labels = ['Black Widow', 'Captain America', 'Captain Marvel', 
  'Hawkeye', 'Jim Rhodes', 'Thor', 'Tony Stark', 'Jimmy Carter', 'Austin John']

  return Promise.all(
    labels.map(async label => {
      const descriptions = []
      for (let i = 1; i <= 2; i++) {
        const img = await faceapi.fetchImage(`http://localhost/final-year-project/production/labeled_images/${label}/${i}.jpg`)
        const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
        descriptions.push(detections.descriptor)
      }

      return new faceapi.LabeledFaceDescriptors(label, descriptions)
    })
  )

}
  

});

<script/>


