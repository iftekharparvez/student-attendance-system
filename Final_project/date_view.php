<?php require_once('inc/header.php'); ?>
<?php require_once('lib/Student.php'); ?>


    <div class="top-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <div class="panel panel-default">
              <div class="panel-heading">
                <h2>
                  <a class="btn btn-success" href="add.php">Add Student</a>
                  <a class="btn btn-info pull-right" href="welcome.php">Take Attendance</a>
                </h2>
              </div>
              <div class="panel-body">

                <form action="" method="POST">
                  <table class="table table-striped">
                    <tr>
                      <th width="30%">Serial</th>
                      <th width="50%">Attendance Date</th>
                      <th width="20%">Action</th>
                      
                    </tr>

                    <?php 

                      $stu = new Student();

                      $get_date = $stu->getDatelist();
                      if($get_date){
                        $i = 0;
                        while($value = $get_date->fetch_assoc()){
                          $i++;
                     
                     ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $value['att_time']; ?></td>
                      <a href=""></a>
                      <td>
                        <a class="btn btn-primary" href="student_view.php?dt=<?php echo $value['att_time']; ?>">View</a>
                      </td>
                    </tr>

                    <?php    } } ?>

                  </table>
                </form>
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>

 <?php require_once('inc/footer.php'); ?>