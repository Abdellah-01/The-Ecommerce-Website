<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Abdellah | Admin Panel</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
  <div id="global-loader">
    <div class="whirly-loader"></div>
  </div>

  <div class="main-wrapper">

    <!-- Header -->
    <?php require "th-header.php"; ?>
    <!-- /Header -->

    <!-- Sidebar -->
    <?php require "th-sidebard.php"; ?>
    <!-- /Sidebar -->

    <div class="page-wrapper">
      <div class="content settings-content">
        <div class="row">
          <div class="settings-page-wrap">
            <form action="upload_banner.php" method="POST" enctype="multipart/form-data">
              <div class="setting-title">
                <h4>Banner Section</h4>
              </div>
              <div id="form-container">
                <div class="row align-items-end mb-3">
                  <div class="col-md-4">
                    <label class="form-label">Desktop Image</label>
                    <input type="file" class="form-control" name="desktop_banner" accept="image/*">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Mobile Image</label>
                    <input type="file" class="form-control" name="mobile_banner" accept="image/*">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Insert Link</label>
                    <select class="select" name="link">
                      <option value="">Select Any One</option>
                      <?php
                        include 'dbcon.php';
                        $sqsl = mysqli_query($con, "SELECT * FROM catagory");
                        while ($row = mysqli_fetch_array($sqsl)) {
                      ?>
                      <option value="<?php echo $row['catagory_name']; ?>">
                        <?php echo $row['catagory_name']; ?>
                      </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="settings-bottom-btn">
                <button type="button" class="btn btn-cancel me-2">Cancel</button>
                <button type="submit" class="btn btn-submit">Add Banner</button>
              </div>
            </form>
          </div>
        </div>

        <?php
          require 'dbcon.php';
          $sql = "SELECT * FROM banner ORDER BY sno DESC";
          $result = $con->query($sql);
        ?>
        <div class="table-responsive product-list">
          <table class="table datanew dataTable no-footer" id="DataTables_Table_0">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Desktop Image</th>
                <th>Mobile Image</th>
                <th>Link</th>
              </tr>
            </thead>
            <tbody class="sales-list">
              <?php if ($result->num_rows > 0): 
                while ($row = $result->fetch_assoc()): ?>
              <tr class="odd">
                <td><?= $row['sno'] ?></td>
                <td><a href="<?= $row['desktop_banner'] ?>" target="_blank"><img src="<?= $row['desktop_banner'] ?>" alt="Desktop Banner" style="max-width: 200px; height: 50px;"></a></td>
				<td><a href="<?= $row['mobile_banner'] ?>" target="_blank"><img src="<?= $row['mobile_banner'] ?>" alt="Mobile Banner" style="max-width: 200px; height: 50px;"></a></td>

                <td><a href="<?= $row['link'] ?>" target="_blank"><?= $row['link'] ?></a></td>
              </tr>
              <?php endwhile; else: ?>
              <tr><td colspan="4">No banners found.</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="customizer-links" id="setdata">
    <ul class="sticky-sidebar">
      <li class="sidebar-icons">
        <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme">
          <i data-feather="settings" class="feather-five"></i>
        </a>
      </li>
    </ul>
  </div>

  <script>
    let bannerCount = 0;
    function addAnnouncement() {
      bannerCount++;
      const container = document.getElementById("form-container");
      const bannerHTML = `
        <div class="row align-items-end mb-3 position-relative" id="banner-${bannerCount}">
          <div class="col-md-4">
            <label class="form-label">Desktop Image</label>
            <input type="file" name="image1_${bannerCount}" class="form-control" accept="image/*">
          </div>
          <div class="col-md-4">
            <label class="form-label">Mobile Image</label>
            <input type="file" name="image2_${bannerCount}" class="form-control" accept="image/*">
          </div>
          <div class="col-md-3">
            <label class="form-label">Insert Link</label>
            <input type="text" name="label_${bannerCount}" class="form-control">
          </div>
          <div class="col-md-1 d-flex justify-content-end align-items-start">
            <button type="button" class="btn btn-sm btn-danger mt-4" onclick="removeBanner('banner-${bannerCount}')">&times;</button>
          </div>
        </div>`;
      container.insertAdjacentHTML('beforeend', bannerHTML);
    }

    function removeBanner(id) {
      const row = document.getElementById(id);
      if (row) row.remove();
    }
  </script>

  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/jquery.slimscroll.min.js"></script>
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
  <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="assets/plugins/select2/js/select2.min.js"></script>
  <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
  <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
  <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
  <script src="assets/js/theme-script.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>