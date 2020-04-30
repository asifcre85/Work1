<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F7F7F7;">

	<div class="form-group" style="padding-left: 200px;padding-top: 50px;">
    <?php $ids=$this->uri->segment(3);?>
<input type="text" hidden name="ids" class="ids" value="<?php echo $ids;?>">
<?php
 $query = $this->db->query("SELECT * FROM products where id='$ids'");
$row = $query->row();
?>
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="Single" value="<?php echo $row->name;?>" style="width:80%;">
      <br>
       <label for="usr">Price:</label>
      <input type="text" class="form-control" id="Double" value="<?php echo $row->price;?>" style="width:80%;">
      
       <!-- <label for="usr">City:</label>
      <input type="text" class="form-control" id="usr" style="width:80%;">
       <label for="usr">Mobile:</label>
      <input type="text" class="form-control" id="usr" style="width:80%;"> -->
      <br>
     
    </div>
    <div style="padding-left: 200px;">
 <button type="button" class="btn btn-primary" style="width:80%;" id="update">Update</button>
</div>
    </body>


    <script>
    $(document).ready(function(){
      
       $("#update").on("click",function(){
          var Single = $('#Single').val();
         var Double= $('#Double').val();
         
         var id1= $('.ids').val();
             $.ajax({
        type: 'POST',
        url: '<?= site_url();?>/welcome/u/',
         data: { Single: Single,Double: Double,id1: id1 },
      
        success: function(data) {
          //alert(name);
           window.location.href='<?= site_url();?>/welcome/table_2/';

        }

       });
      });

       

      });
    </script>
</html>
