<?php require_once 'session.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Account Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard_pastreview_product.css">
    <link rel="stylesheet" href="css/dashboard_orderhistory_product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
	
    </style>
  </head>
  
  <body>
    <!---Sidebar-->
    <div class="sidebar">
    <div class="d-flex flex-column align-items-center text-center mt-5">
        <?php if (!empty($profile_picture)) : ?>
            <img src="<?php echo $profile_picture; ?>" alt="Profile Picture" class="rounded-circle bg-white" style="width: 150px; height: 150px; ">
        <?php else : ?>
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Default Profile Picture" class="rounded-circle bg-white" style="width: 150px; height: 150px;">
        <?php endif; ?>
        <span class="logo_name text-white mt-3"><?php echo $fname . ' ' . $lname; ?></span>
    </div>
      <ul class="nav-links">
        <li>
            <a href="worker_service.php">
                <i class="bi bi-box"></i>
                <span class="links_name">Services</span>
            </a>
        </li>
        <li>
            <a href="worker_request.php">
                <i class="bi bi-truck"></i>
                <span class="links_name">Orders</span>
            </a>
        </li>
        <li>
            <a href="worker_review.php" class="active">
                <i class="bi bi-chat-left-dots"></i>
                <span class="links_name">Past Reviews</span>
            </a>
        </li>
        <li>
            <a href="worker_history.php">
                <i class="bi bi-clock-history"></i>
                <span class="links_name">History</span>
            </a>
        </li>
        <li>
            <a href="worker_profile.php">
                <i class="bi bi-person-circle"></i>
                <span class="links_name">User Profile</span>
            </a>
        </li>
        <li class="log_out">
            <a href="logout.php">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Logout</span>
            </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid" style="margin-left: 80%;margin-top:15px;">
                  <form  action=""  method="POST">
                     <input class="form-control me-2" type="search" name="searchQuery" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success" type="submit">
                        <i class="fa-sharp fa-solid fa-magnifying-glass fa-sm" style="color: #000000;"></i>
                     </button>
                  </form>
               </div>
            </nav>

        </header>
        <!-- Order Nav -->
      <div class="home-content">
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <div class="sales-boxes py-5 border-top ">
              <div class="recent-sales box ">
                <div><h5>1 Reviews</h5></div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Service(s)</th>
                      <th scope="col">Description</th>
                      <th scope="col">Rating</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="name">
                      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr6a047PhWwkiRXbbGO61yrSqqxUDauVGz6dsz8KVLAxVqzBFmiWrnoaiqh_N9dQy8RD4&usqp=CAU" alt="product name">Multifunctional Universal Diagonal Pliers </td>
                      <td>Super Good</td>
                      <td>4 out of 5</td>
                      <td>
                        <a href="#">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="black" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                            </svg>
                          </span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    </script>
  </body>
</html>