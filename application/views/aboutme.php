
            <div class="container">
              <div class="profile_inner p_120">
          <?php foreach($tentang as $me): ?>
          <div class="row">
            <div class="col-lg-6">
              <img class="" src="<?php echo base_url(); ?>assets/about/<?php echo $me['foto'] ?>" alt="" width="600" height="450">
            </div>
            <div class="col-lg-6">
              <div class="personal_text">
                <h6>
                <script type="text/javascript">
                    window.setTimeout("waktu()",1000);
                    function waktu() {
                        var tanggal = new Date();
                        setTimeout("waktu()",1000);
                        document.getElementById("jam").innerHTML = tanggal.getHours();
                        document.getElementById("menit").innerHTML = tanggal.getMinutes();
                        document.getElementById("detik").innerHTML = tanggal.getSeconds();
                    }
                </script>
                <style>
                #jam-digital{overflow:hidden; width:350px}
                 #hours{float:left; width:100px; height:50px; background-color:#6B9AB8; margin-right:25px}
                  #minute{float:left; width:100px; height:50px; background-color:#A5B1CB}
                  #second{float:right; width:100px; height:50px; background-color:#FF618A; margin-left:25px}
                   #jam-digital p{color:#FFF; font-size:36px; text-align:center; margin-top:4px}
          </style>

          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div id="jam-digital"><center>
        <div id="hours" onclick="warna('black')";><p id="jam" onclick="warna('black')";></p></div>
        <div id="minute" onclick="warna('blue')";><p id="menit"></p></div>
        <div id="second" onclick="warna('pink')";><p id="detik"></p></div>
    </div></center>
                      </h6><br>
                
                <h3>
                    <SCRIPT language="JavaScript">
                        document.write("<?php echo $me['nama'] ?>");
                    </SCRIPT></h3>
                <h4></h4>
                <p></p>
                <ul class="list basic_info">
                  <li><a href="#"><i class="lnr lnr-calendar-full"></i> <?php echo $me['tgl_lhr'] ?></a></li>
                  <li><a href="#"><i class="lnr lnr-phone-handset"></i> <?php echo $me['no_hp'] ?></a></li>
                  <li><a href="#"><i class="lnr lnr-envelope"></i> <?php echo $me['email'] ?></a></li>
                  <li><a href="#"><i class="lnr lnr-home"></i> <?php echo $me['alamat'] ?></a></li>
                </ul>
                <ul class="list personal_social">
                  <li><a href="#" class="danger"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div><?php endforeach; ?>
              </div>
            </div>


   <script type="text/javascript">
   function warna(color) 
   {
     document.body.style.background = color;
   }
 </script> 

