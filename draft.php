<?php 
    $title = "Draft page";
    $page = "Draft page";
    include_once('assets/include/header.php');
    include_once('assets/include/sidebar.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Grades</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item active">Draft page</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

         
          <table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><input type="text" name="filipino_1st" placeholder="---------"></td>
            <td><input type="text" name="filipino_2nd" placeholder="---------"></td>
            <td><Button type="text" name="math_final" placeholder="---------" readonly>Edit</td>
            <td><Button type="text" name="english_final" placeholder="---------" readonly>Delete</td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="text" name="filipino_1st" placeholder="---------"></td>
            <td><input type="text" name="filipino_2nd" placeholder="---------"></td>
            <td><Button type="text" name="math_final" placeholder="---------" readonly>Edit</td>
            <td><Button type="text" name="english_final" placeholder="---------" readonly>Delete</td>
        </tr>

    </tbody>
</table>

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

    <br><br><br><br><br><br><br><br><br><br>.<br><br>
    <?php 
        include_once('assets/include/Footer.php');
    ?>

  </main><!-- End #main -->


</body>

</html>