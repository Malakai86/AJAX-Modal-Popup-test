<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
  // Prevent Refresh
    function setString() 
    {
      var name = document.getElementById('name').value;
      var nameString='name='+ name;
      $.ajax({
        type:"post",
        url: "text.php",
        data: nameString,
        cache: false,
        success: function(html){
            $('#msg').html(html);
        }
      });
      return false;
    }

    
  </script>
</head>
<body>




    <!-- Modal 1 -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#test1">Open Modal 1 </button>
  <div id="test1" class="modal fade" role="dialog" style="z-index: 1400;">
  <div class="modal-dialog">
    <!-- Modal content-->

<!-- Form text input, string appears on next modal box -->
    <div class="modal-content">
    <form>
      <label>Name</label><br>
      <input type="text" id="name">
      <input type="submit" value="submit" onclick="return setString()">
    </form>



    <!-- Dummy Text -->
 
    <br><hr>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum massa odio, tempor gravida felis eleifend in. 
    Maecenas blandit est sit amet lectus eleifend, ac posuere leo placerat. Vestibulum auctor a eros vitae dapibus. 
    Integer dui quam, hendrerit in fringilla gravida, pellentesque ut justo. Nunc feugiat quis tellus ut cursus. 
    Aliquam rhoncus magna at neque laoreet, finibus scelerisque felis convallis. Phasellus sit amet sapien justo.


          Nulla tempor lorem velit, vel rutrum neque hendrerit sit amet. Ut tempus ipsum id mauris laoreet pulvinar nec eget 
          tortor. Pellentesque sit amet consequat tellus. Maecenas quis condimentum elit, facilisis efficitur dui. Proin eu leo 
          sit amet dolor maximus eleifend. Nam eros odio, lobortis sit amet metus sit amet, eleifend luctus mauris. Ut quis nunc 
          sit amet purus maximus auctor. Maecenas volutpat at est nec dapibus. In accumsan, turpis eu iaculis porttitor, neque massa 
          sodales quam, in tempor nunc nisl vitae ligula. Aliquam semper diam metus, sed dignissim lectus congue vitae. 
          Pellentesque auctor libero ac dui scelerisque gravida. Nullam rhoncus consectetur est, sed feugiat mi porta nec.

            
    <!-- Dummy Text -->





        <!-- Modal 2 -->
      <div class="modal-body">
      	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#test2">Open Modal 2</button>
      </div>      
    </div>
  </div>
</div>

<div id="test2" class="modal fade" role="dialog" style="z-index: 1600;">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Data from previous modal window</p>
        <p id="msg"></p>
       <br><hr>

    <!-- Dummy Text -->

        Nulla tempor lorem velit, vel rutrum neque hendrerit sit amet. Ut tempus ipsum id mauris laoreet pulvinar nec eget 
        tortor. Pellentesque sit amet consequat tellus. Maecenas quis condimentum elit, facilisis efficitur dui. Proin eu leo 
        sit amet dolor maximus eleifend. Nam eros odio, lobortis sit amet metus sit amet, eleifend luctus mauris. Ut quis nunc 
        sit amet purus maximus auctor. Maecenas volutpat at est nec dapibus. In accumsan, turpis eu iaculis porttitor, neque massa 
        sodales quam, in tempor nunc nisl vitae ligula. Aliquam semper diam metus, sed dignissim lectus congue vitae. 
        Pellentesque auctor libero ac dui scelerisque gravida. Nullam rhoncus consectetur est, sed feugiat mi porta nec.

    <!-- Dummy Text -->



      <!-- Modal 3 -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#test3">Open Modal 3 </button>
    <div id="test3" class="modal fade" role="dialog" style="z-index: 1800;">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
     <!-- Dummy Text -->
 
        Nam eros odio, lobortis sit amet metus sit amet, eleifend luctus mauris. Ut quis nunc 
        sit amet purus maximus auctor. Maecenas volutpat at est nec dapibus. In accumsan, turpis eu iaculis porttitor, neque massa 
        sodales quam, in tempor nunc nisl vitae ligula. Aliquam semper diam metus, sed dignissim lectus congue vitae. 
        Pellentesque auctor libero ac dui scelerisque gravida. Nullam rhoncus consectetur est, sed feugiat mi porta nec.

    <!-- Dummy Text -->
      <div class="modal-body">
      </div>      
    </div>
  </div>
</div>
  

</body>
</html>