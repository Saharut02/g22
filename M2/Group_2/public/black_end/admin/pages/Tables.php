<?php
    include '../layout/head.php';
?>
<body>
<?php
    include '../layout/sideber.php';
?>

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">สินค้า</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">สินค้า</h6>
        </nav>
              
     <!-- Navbar -->
     <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
        </nav>
        
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!--main content start-->
    
        
    <hr class="horizontal dark mt-0">


              <a href="form_add_Tables.php" class="btn btn-primary">เพิ่มข้อมูล</a>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ชื่อสินค้า</th>
                      <th>รหัสสินค้า</th>
                      <th>รูปภาพ</th>
                      <th>แก้ไขข้อมูล</th>
                      <th>ลบข้อมูล</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>ข้าวหมากโบราณ</td>
                      
                      <td>A-759</td>
                      <td>รูป</td>
                      <td><a href="form_add_edit_Tables.php" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                      <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>ข้าวหมากโบราณ</td>
                      
                      <td>A-759</td>
                      <td>รูป</td>
                      <td><a href="form_add_edit_Tables.php"  class="btn btn-warning">แก้ไขข้อมูล</a></td>
                      <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>
                   
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>ข้าวหมากโบราณ</td>
                      
                      <td>A-759</td>
                      <td>รูป</td>
                      <td><a href="form_add_edit_Tables.php" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                      <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>
                
                    </tr>
                  </tbody>
                </table>
              </div>

            </section>
          </div>
        </div>
        
      </section>
    </section>
    <!--main content end-->
  </section>

</body>
</html>