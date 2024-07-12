<?php
include 'pages/dbconnect.php'; // Pastikan file db.php berada di path yang benar

// Lakukan query ke database
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if (!$result) {
    die("Query Error: " . $conn->error);
}
?>
<section class="section is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Admin</li>
            <li>Dashboard</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="hero is-hero-bar">
    <div class="hero-body">
      <div class="level">
        <div class="level-left">
          <div class="level-item"><h1 class="title">
            Dashboard
          </h1></div>
        </div>
        <div class="level-right" style="display: none;">
          <div class="level-item"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section is-main-section">
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Clients
                </h3>
                  <h1 class="title">
                    512
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-primary is-large"><i
                    class="mdi mdi-account-multiple mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Sales
                </h3>
                  <h1 class="title">
                    $7,770
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-info is-large"><i
                    class="mdi mdi-cart-outline mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Performance
                </h3>
                  <h1 class="title">
                    256%
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-success is-large"><i
                    class="mdi mdi-finance mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-finance"></i></span>
          Performance
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="chart-area">
          <div style="height: 100%;">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div></div>
              </div>
            </div>
            <canvas id="big-line-chart" width="2992" height="1000" class="chartjs-render-monitor" style="display: block; height: 400px; width: 1197px;"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="card has-table has-mobile-sort-spaced">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Data Mahasiswa
        </p>
        <a href="" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">
              <thead>
              <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Program Studi</th>
              <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php
                if ($result->num_rows > 1) {
                 while($row = $result->fetch_assoc()) {
                   echo "<tr>
                      <td>{$row['nim']}</td>
                      <td>{$row['nama']}</td>
                      <td>{$row['jenis_kelamin']}</td>
                      <td>{$row['alamat']}</td>
                      <td>{$row['program_studi']}</td>
                       <td>
                         <a href='pages/edit.php?id={$row['id']}'>Edit</a> | 
                         <a href='pages/delete.php?id={$row['id']}'>Delete</a>
                         </td>
                       </tr>";
                     }
                    } else {
                        echo "<tr><td colspan='6'>.</td></tr>";
                    }
                    ?>
                  </tbody>
            </table>
            <br>
            <a href="pages/insert.php">Tambah Data Mahasiswa</a>
          
  </section>