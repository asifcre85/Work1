<!DOCTYPE html>
<html lang="en">

<head>
  <title>hi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- container section start -->
  

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Id</th>
                    <th><i class=""></i> Name</th>
                    <th><i class=""></i> Price</th>
                    
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <?php
 $query = $this->db->query('SELECT * FROM products');

foreach ($query->result_array() as $row)
{
  ?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['price'];?></td>
                   
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="<?= site_url();?>/welcome/insert/"><i class="icon_plus_alt2"></i>C</a>
                        <a class="btn btn-success" href="<?= site_url();?>/welcome/update/<?php echo $row['id'];?>"><i class="icon_check_alt2"></i>U</a>
                        <a class="btn btn-danger delete" id="<?php echo $row['id'];?>"><i class="icon_close_alt2"></i>D</a>
                      </div>
                    </td>
                  </tr>
                  <?php       
}
      ?>
                </tbody>
              </table>
            
  


</body>


<script>
    $(document).ready(function(){
    $(".delete").on("click",function(){
           if (confirm("Are you Delete?")) {
         var name = $(this).attr('id');
             $.ajax({
        type: 'POST',
        url: '<?= site_url();?>/Welcome/d1/',
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
