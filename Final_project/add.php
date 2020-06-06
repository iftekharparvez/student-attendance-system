<?php require_once('inc/header.php'); ?>
<?php require_once('lib/Student.php'); ?>

<?php 

   $stu = new Student();
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $roll = $_POST['roll'];

    $insertdata = $stu->insertStudent($name,$roll);

   }

?>

<?php 

  if(isset($insertdata)){
    echo $insertdata;
  }

?>


    <div class="top-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <div class="panel panel-default">
              <div class="panel-heading">
                <h2>
                  
                  <a class="btn btn-info pull-right" href="welcome.php">Back</a>
                </h2>
              </div>
              <div class="panel-body">

                <form action="" method="POST">
                  <div class="form-group">
                    <label for="name">Student Name</label>
                    <input class="form-control" type="text" name="name" id="name" >
                  </div>
                  <div class="form-group">
                    <label for="roll">Student Id</label>
                    <input class="form-control" type="text" name="roll" id="roll" >
                  </div>
                  <div class="form-group">
                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Add Student">

                  </div>

                </form>
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>

 <?php require_once('inc/footer.php'); ?>