<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <h3>contact Page</h3>


<div class="table-responsive">
        <table class="table mb-4 responsive-table table-bordered bg-white table-hover">
                  <thead class="thead-light2">
                    <tr>
                      <th scope="col" width="1">Sr. no.</th>
                      <th scope="col">Nmae</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Course</th>
                      <th scope="col">Message</th>
                    </tr>
                  </thead>
                  <tbody class="newslettertab">
                    
                      <?php include_once('config.php');
                      $sql="select * from `contactindex`";
                      $query=mysqli_query($connect,$sql);
                      $p=1;
                      while($row=mysqli_fetch_array($query)){
                      ?>
                      <tr>
                      <th data-label="Serial Number" scope="row"><?php echo $p;   ?></th>
                      <td data-label="Link Text"><a href="#" class="text-secondary"><?php echo $row['name'] ?></a></td>
                      <td data-label="Last Name"><?php echo $row['email']   ?></td>
                      <td data-label="Some Other"><?php echo $row['phone']   ?></td>
                      <td data-label="Some Other"><?php echo $row['course']   ?></td>
                      <td data-label="Some Other"><?php echo $row['message']   ?></td>
                      
                    </tr>
                    <?php $p++; } ?>
                    
                  </tbody>
                </table>
</div>