<?php
 include "header.php";
 include "sidebar.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
            <a class="btn btn-success" href="protypes-add.php">ADD</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
         
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          Image
                      </th>
                      <th style="width: 79%">
                          Name
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody class = "bodyyy">
                <?php
                $getprototype=$product->getprotype();
                foreach($getprototype as $value){
                  $id=$value['type_id']
                ?>
                  <tr>
                      <td>
                         <img style="width:100px" src="../img/<?php echo $value['logoProtypes'] ?>" alt=""> 
                      </td>
                      <td>
                      <?php echo $value['type_name'] ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="protypes-edit.php?id=<?php echo $id ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a id = "<?php echo $value['type_id']; ?>"  class="btn btn-danger btn-sm dete" >
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                <?php }?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "footer.php";

?>
<script>
function filterdata(typeid) {
  var action = 'chay';
                $.ajax({
                url: 'ajaxdeleteadmin.php',
                dataType: 'html',
                method: 'POST',
                data: {
                  'action' : action,'typeid' : typeid
                },
                success: function(html){
                  if(html=="Sai")
                  {
                    alert("Có nhiều sản phẩm thuộc loại này nên không thể xóa")
                  }
                  else
                  {
                    $('.bodyyy').html(html);
                  }
                }
            });
            }
    $(document).on("click",".dete",function () {
                filterdata(this.id);
            });
</script>
