<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
include('config/dbConfig.php');
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Web Scrap Viewer
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body style="background-color: #fafafa" class="index-page sidebar-collapse">
  <nav style="color: black" class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          Web Scrap Logs </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br>
  <div align="center" class="container">
    <br>
    <h2 style="color: #1dc7de">Please choose a category to see grant</h2>
      <h3><small>(Click on rows to reveal details)</small></h3>
    <form>
      <select onchange="fetch_grant()" class="form-control" id="category">
        <option value="NotSelected" disabled selected>Choose a category</option>
        <option value="LGBTQ+">LGBTQ+</option>
        <option value="Women">Women</option>
        <option value="POC">POC</option>
        <option value="General">General</option>
      </select>
    </form>
  </div>
  <div class="container">
    <table class="table table-striped">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Created At</th>
      </tr>
      </thead>
      <tbody id="grant_list">
              <?php
                    $sql = "SELECT * FROM data";
                    $resultMember = mysqli_query($db, $sql);
                    $i = 1;
                    while($data = mysqli_fetch_assoc($resultMember)){
                ?>
                        <tr onclick="show_info('<?php echo $data['title'] ?>', '<?php echo $data['category'] ?>', ' <?php echo mysqli_real_escape_string($db, $data['text']) ?>')" data-toggle="modal" data-target="#rowInfoViewer">
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $data['title'] ?></td>
                            <td><?php echo $data['category'] ?></td>
                            <td><?php echo $data['created_at'] ?></td>
                        </tr>

              <?php
                    }
              ?>

      </tbody>
    </table>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="rowInfoViewer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5  class="modal-title" id="exampleModalLongTitle"> <span class="text-info" id="modal_title"> Default Title </span> <small> <span class="text-warning" id="modal_category">(Default Category)</span> </small> </h5>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p class="text-primary" id="modal_text">Default Text</p>

              </div>
              <div class="modal-footer">

                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

              </div>
          </div>
      </div>
  </div>

  <!--  End Modal -->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://mxtuhin.ninja/">
              Tuhin Mridha
            </a>
          </li>
          <li>
            <a href="https://github.com/mxTuhin">
              GitHub
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/tuhin.mridha.5/">
              Facebook
            </a>
          </li>
          <li>
            <a href="https://www.upwork.com/freelancers/~0101a7e92e5cc0a3f4">
              UpWork
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.facebook.com/tuhin.mridha.5" target="_blank">Tuhin Mridha</a> for Lanie.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
          crossorigin="anonymous"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>

<script>
function show_info(title, category, text){
    $("#modal_text").html(text);
    $("#modal_title").html(title);
    $("#modal_category").html("("+category+")");



}
</script>

<script>
    function fetch_grant(){
        var cat = document.getElementById("category").value;
        console.log(cat)

        $.ajax({
            type : 'get',
            url : 'fetch_grant.php',
            data:{
                'category': cat

            },
            success:function(data){
                console.log(data);
                document.getElementById("grant_list").innerHTML=data;

            }
        });

    }
</script>

</body>

</html>