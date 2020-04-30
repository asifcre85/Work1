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
      <!-- <label for="usr">Id:</label>
      <input type="text" class="form-control" id="usr" style="width:80%;">
      <br> -->
       <label for="usr">Name:</label>
      <input type="text" class="form-control" id="Single" style="width:80%;">
      <br>
       <label for="usr">Price:</label>
      <input type="text" class="form-control" id="Double" style="width:80%;">
      
      
      <br>
     
    </div>
    <div style="padding-left: 200px;">
 <button type="button" class="btn btn-primary" style="width:80%;" id="save">Save</button>
</div>
    </body>


    <script>
    $(document).ready(function(){
      
       $("#save").on("click",function(){
         var Single = $('#Single').val();
         var Double= $('#Double').val();
        
             $.ajax({
        type: 'POST',
        url: '<?= site_url();?>/Welcome/ins/',
         data: { Single: Single,Double: Double},
      
        success: function(data) {
          //alert(name);
           //location.reload();
            window.location.href='<?= site_url();?>/Welcome/table_2/';

        }

       });
      });

       

      });
    </script>
</html>
