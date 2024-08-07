<?php
session_start();
include('../conn/conn.php');

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];

  // Fetch the user's name from the database
  $stmt = $conn->prepare("SELECT `name` FROM `tbl_user` WHERE `tbl_user_id` = :user_id");
  $stmt->bindParam(':user_id', $user_id);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch();
    $user_name = $row['name'];
  }

?>


<?php include '../includes/header.php'; ?>

<div class="container-scroller">

  <?php include '../includes/saidebar.php'; ?>
  <!-- partial -->
  <div class="container-fluid pt-5 ">
    <!-- partial:partials/_settings-panel.html -->
    <?php include '../includes/topbar.php'; ?>
    <!-- partial -->



    <!-- first row starts here -->
    <!-- <div class="main-panel"> -->

    <!-- partial -->
    <div class="content-wrapper pd-0 ">
      <div class="row">
        <div class="col-md-12 grid-margin ">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h3 class="font-weight-bold mb-0">List-Books</h3>
            </div>
            <button type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#exampleModal">
                Add Book
              </button>
            <div>
              <!--  -->
             
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Book</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                 
                  
                      <form action="">
                        <div class="form-row">
                          <div class="col-sm-3">
                            <label for="">Keyword</label>
                            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Keyword">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                          </div>

                          <div class="col-sm-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Author</label>
                            <input type="text" class="form-control" name="author" id="author" placeholder="Author">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Publisher</label>
                            <input type="text" class="form-control" name="publisher" id="publisher" placeholder="Publisher">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Published</label>
                            <input type="text" class="form-control" name="published" id="published" placeholder="Published">
                          </div>
                          <div class="col-sm-3">
                            <label for="">ISBN</label>
                            <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Barcode</label>
                            <input type="text" class="form-control" name="barcode" id="barcode" placeholder="Barcode">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Morrial Type</label>
                            <input type="text" class="form-control" name="morrial_type" id="morrial_type" placeholder="Morrial Type">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Edition</label>
                            <input type="text" class="form-control" name="edition" id="edition" placeholder="Edition">
                          </div>
                          
                          
                          <div class="col-sm-3">
                            <label for="">Editior</label>
                            <input type="text" class="form-control" name="editior" id="edition" placeholder="Edition">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Published IN The</label>
                            <input type="text" class="form-control" name="published_in_the" id="published_in_the" placeholder="Published IN The">
                           
                          </div>

                         
                          <div class="col-sm-3">
                            <label for="">Shevles</label>
                            <input type="text" class="form-control" name="shevles" id="shevles" placeholder="Shevles">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Case</label>
                            <input type="text" class="form-control" name="case" id="case" placeholder="Case">

                          </div>
                          <div class="col-sm-3">
                            <label for="">Order</label>
                            <input type="text" class="form-control" name="order" id="order" placeholder="Order">
                          </div>
                          <div class="col-sm-3">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Image">
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <br>
                          </div>
                        </div>

                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- first row starts here -->
      <div class="row">
        <div class="col-xl-12 stretch-card grid-margin">
          <div class="card">
            <div class="table-responsive">
              <table id="example" class="table table-striped">

                <tr>
                  <td>#</td>
                  <td>Keyword</td>
                  <td>Subject</td>
                  <td>Title</td>
                  <td>Author</td>
                  <td>Publisher</td>
                  <td>Published</td>
                  <td>ISBN</td>
                  <td>Barcode</td>
                  <td>Moterrial Type</td>
                  <td>Edition</td>
                  <td>Editor</td>
                  <td>Published In The</td>
                  <td>Shevles</td>
                  <td>Case</td>
                  <td>Order</td>
                  <td>Image</td>
                  <td>Action</td>
                </tr>
                <?php

                $conn = new mysqli("localhost", "root", "", "library_db");
                $sql = "SELECT * FROM bookk";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['keyword']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['publisher']; ?></td>
                    <td><?php echo $row['published']; ?></td>
                    <td><?php echo $row['isbn']; ?></td>
                    <td><?php echo $row['barcode']; ?></td>
                    <td><?php echo $row['moterrial_type']; ?></td>
                    <td><?php echo $row['edition']; ?></td>
                    <td><?php echo $row['editor']; ?></td>
                    <td><?php echo $row['published_in']; ?></td>
                    <td><?php echo $row['shevles']; ?></td>
                    <td><?php echo $row['casee']; ?></td>
                    <td><?php echo $row['oder']; ?></td>
                    <td><?php echo $row['image']; ?></td>
                    <td><a href="deletebook.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    <td><a href="editbook.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="viewbook.php?id=<?php echo $row['id']; ?>">View</a></td>


                  </tr>
                <?php
                  $i++;
                }
                ?>

              </table>
              <p class="text-muted font-13 mt-2 mt-sm-0"> <a class="text-muted font-13" href="#"><u></u></a>
              </p>

            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12">



      </div>



      <!-- last row starts here -->

    </div>
  </div>
</div>
</div>
<!-- content-wrapper ends -->
<?php include '../includes/footer.php'; ?>

<?php
    } else {
      header("Location:");
    }

      ?>