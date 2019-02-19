<?php
 include('conn/conn.php');

$sql = "SELECT * FROM news limit 3";
$result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) > 0) {

      while($row = mysqli_fetch_assoc($result)){
        echo '<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="images/3.jpg" height="225"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">'.$row['news'].'</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>'; 
      }
  }else{
    echo "No content";
  }

?>


<button style="margin: auto; border-radius: 5px; height: 50px; width: 100%; border-style: none;">Load more content</button>


<script>
  
  $(document).ready(function(){
    var newsCount = 3;
  
    $("button").click(function(){
       newsCount = newsCount + 3;
      $(".row").load("load-content.php",{
       newsNewCount: newsCount
      });
    });
  });
</script>



