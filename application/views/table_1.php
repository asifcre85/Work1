<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>hi</title>

  <!-- Bootstrap CSS -->
  <link href="<?= base_url();?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?= base_url();?>/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?= base_url();?>/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?= base_url();?>/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?= base_url();?>/css/style.css" rel="stylesheet">
  <link href="<?= base_url();?>/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Id</th>
                    <th><i class=""></i> Name</th>
                    <th><i class=""></i> Price</th>
                    <!-- <th><i class=""></i> Triple</th>
                    <th><i class=""></i> Quad</th> -->
                    <!-- <th><i class=""></i> Phone</th> -->
                    <!-- <th><i class=""></i> Room</th>
                    <th><i class=""></i> Adult</th>
                    <th><i class=""></i> Child</th> -->
                   <!--  <th><i class="icon_pin_alt"></i> People</th>
                    <th><i class="icon_mobile"></i> Mobile</th> -->
                   <!--  <th><i class="icon_cogs"></i> Action</th> -->
                  </tr>
                  <?php
 $query = $this->db->query('SELECT * FROM sales_details');

foreach ($query->result_array() as $row)
{
  ?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <!-- <td><?php echo $row['triple'];?></td>
                    <td><?php echo $row['quad'];?></td> -->
                    <!-- <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['room'];?></td>
                    <td><?php echo $row['adult'];?></td>
                    <td><?php echo $row['child'];?></td> -->
                    <!-- <td>1</td>
                    <td>176-026-5992</td> -->
                   <!--  <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="<?= site_url();?>/welcome/insert/"><i class="icon_plus_alt2"></i>C</a>
                        <a class="btn btn-success" href="<?= site_url();?>/welcome/update/<?php echo $row['id'];?>"><i class="icon_check_alt2"></i>U</a>
                        <a class="btn btn-danger delete" id="<?php echo $row['id'];?>"><i class="icon_close_alt2"></i>D</a>
                      </div>
                    </td> -->
                  </tr>
                  <?php       
}
      ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="<?= base_url();?>/js/jquery.js"></script>
  <script src="<?= base_url();?>/js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="<?= base_url();?>/js/jquery.scrollTo.min.js"></script>
  <script src="<?= base_url();?>/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="<?= base_url();?>/js/scripts.js"></script>


</body>


<script>
    $(document).ready(function(){
    $(".delete").on("click",function(){
           if (confirm("Are you Delete?")) {
         var name = $(this).attr('id');
             $.ajax({
        type: 'POST',
        url: '<?= site_url();?>/welcome/d1/',
         data: { name: name },
      
        success: function(data) {
          //alert(name);
           location.reload();

        }

       });
         }
      });




      });
    </script>

</html>
