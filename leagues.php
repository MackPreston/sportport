<?php include('includes/header.php'); ?>

  <section id="Leagues">
    <div class="jumbotron" id="LeaguesHeader">
      <h2>Leagues</h2>
    </div>
      <?php
        $sport = $_GET['sport'];

            echo " <div class=\"info\">

                            </div>
                        </a>
                    </div>
                   <table class=\"table\">
                      <thead>
                        <tr>
                            <th>Sport</th>
                            <th>League Name</th>
                            <th>League Info</th>
                            <th>Create Team</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                            <td><div class='sportPicture col-md-1 col-lg-1'>
                            <img class='img-fluid' src='img/sports/$sport.png' alt='$sport'>
                            </div></td>
                            <td>Some Name</td>
                            <td><a href=\"team.php?teamid=1\" type=\"button\" class=\"btn btn-info\">League Info</a></td>
                            <td><a href=\"team.php?teamid=1\" type=\"button\" class=\"btn btn-info\">Create Team</a></td>

                        </tr>
                        <tr>
                            <td><div class='sportPicture col-md-1 col-lg-1'>
                            <img class='img-fluid' src='img/sports/$sport.png' alt='$sport'>
                            </div></td>
                            <td>Some Name</td>
                            <td><a href=\"team.php?teamid=1\" type=\"button\" class=\"btn btn-info\">League Info</a></td>
                            <td><a href=\"team.php?teamid=1\" type=\"button\" class=\"btn btn-info\">Create Team</a></td>
                            </tr>
                        <tr>

                            <td><div class='sportPicture col-md-1 col-lg-1'>
                            <img class='img-fluid' src='img/sports/$sport.png' alt='$sport'>
                            </div></td>
                            <td>Some Name</td>
                            <td><a href=\"team.php?teamid=1\" type=\"button\" class=\"btn btn-info\">League Info</a></td>
                            <td><a href=\"team.php?teamid=1\" type=\"button\" class=\"btn btn-info\">Create Team</a></td>
                            </tr>
                      </tbody>
                  </table>
                   </div>";
      ?>
  </section>

<?php include('includes/footer.php'); ?>
