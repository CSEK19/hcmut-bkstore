<!--Section: Contact v.2-->

<!-- Load map styles -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />


<p class="d-none" id="alertSuccess"><?=$data["alertSuccess"]?></p>

    
<!-- <div style="margin-top:70px" id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5623.641672731866!2d106.65721623557643!3d10.772602968920005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3c161a3fb%3A0xef77cd47a1cc691e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1637332111149!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div> -->

 <!-- Start Map -->
    <div id="mapid" style="margin-top:70px; width: 100%; height: 700px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([10.773369022465484, 106.66062197999558], 17);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([10.773369022465484, 106.66062197999558]).addTo(mymap)
            .bindPopup("<b>BK</b> My Store<br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
    <!-- End Map -->

<section  id="wrapper" class="mb-4">
    <!--Google map-->


<!--Google Maps-->
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Bạn có bất kì câu hỏi nào cho chúng tôi không? Hãy hỏi ngay đừng ngần ngại nhé. Chúng tôi sẽ trả lời bạn sớm nhất có thể!!!</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="http://localhost/bkstore/FeedbackAdmin/addFeedback" method="POST">

                <!--Grid row-->
                <div class="row">
                </div>
                <!--Grid row-->
			    <input type="text" name="user_id" value="<?=$user["id"]?>" hidden="true">

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Chủ đề</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Nội dung</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div style="margin-top:10px" class="text-center text-md-left">
                    <button class="btn btn-primary" onclick=checkBtnContact() name="btnContact">Gửi</button>
                </div>

            </form>

            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Đại học Bách Khoa TPHCM</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>034 765 1292</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>loc.nguyencse@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
<script type="text/javascript">
    var alertSuccess = document.getElementById("alertSuccess").innerHTML;
    if(alertSuccess == 1) 
        alert("Bạn đã gửi thành công!!!");

    function checkBtnContact() {
        var subject = document.getElementById("subject").value; 
        var message = document.getElementById("message").value;
        if(subject == '' || message == '') 
          alert("Vui lòng nhập đủ thông tin!!!");
    }
</script>