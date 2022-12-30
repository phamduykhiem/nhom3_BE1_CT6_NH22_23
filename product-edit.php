<?php
include "header.php";
include "sidebar.php";
if(isset($_GET['id']))
{
$gettypeid=$product->gettype($_GET['id']);

}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <form action="updateproduct.php?id=<?php echo $gettypeid[0]['id']; ?>" method="post" enctype="multipart/form-data">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input value="<?php echo $gettypeid[0]['name'] ?>" name="name" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputprice">Price</label>
                <input value="<?php echo $gettypeid[0]['price']?>" name="price" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">  
                <label for="inputprice">Image</label>
                <input  name="image" type="file" id="inputName" class="form-control">
                <img style="width:100px" src="../img/<?php echo $gettypeid[0]['image'] ?>" alt="">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea name="desciption" id="inputDescription" class="form-control" rows="4">
                    <?php echo $gettypeid[0]['desciption'] ?>
                </textarea>
              </div>
              <div class="form-group">
                <label for="inputName">Screen</label>
                <input value="<?php echo $gettypeid[0]['screen'] ?>" name="screen" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">CPU</label>
                <input value="<?php echo $gettypeid[0]['cpu'] ?>" name="cpu" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">RAM</label>
                <input value="<?php echo $gettypeid[0]['ram'] ?>" name="ram" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Graphics</label>
                <input value="<?php echo $gettypeid[0]['graphics'] ?>" name="gra" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Osystem</label>
                <input value="<?php echo $gettypeid[0]['osystem'] ?>" name="osystem" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Discount</label>
                <input value="<?php echo $gettypeid[0]['discountproducts'] ?>" name="discount" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputmanufacture">Manufacture</label>
                <select name="manu_id" id="inputmanufacture" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                <?php 
                $getmanu=$product->getmanu();
                foreach($getmanu as $value):
                    if($value['manu_id']==$gettypeid[0]['manu_id']):?>
                        <option  selected  value="<?php echo $value['manu_id'] ?>" ><?php echo $value['manu_name'] ?></option>
                    <?php
                    else:
                ?>
                  <option value="<?php echo $value['manu_id'] ?>" ><?php echo $value['manu_name'] ?></option>
                <?php endif; endforeach;?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Protype</label>
                <select name="type_id" id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                <?php 
                $getprotype=$product->getprotype();
                foreach($getprotype as $value):
                    if($value['type_id']==$gettypeid[0]['type_id']):?>
                     <option selected value="<?php echo $value['type_id']?>"><?php echo $value['type_name'] ?></option>
               <?php
               else:
                     ?>
                  <option value="<?php echo $value['type_id']?>"><?php echo $value['type_name'] ?></option>
                <?php endif;endforeach;?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Feature</label><br>
                <div style="text-align:center">
                        <?php
                        if($gettypeid[0]['feature']==1):?>
                        <input checked name="feature" id="inputClientCompany" class="form-control" type="checkbox" name="" id="">
                        <?php
                        else:
                        ?>
                            <input name="feature" id="inputClientCompany" class="form-control" type="checkbox" name="" id="">
                            <?php endif; ?>
             </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update project" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php
include "footer.php";
 ?>
