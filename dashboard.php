<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .dashboard {
      background-color: #f4f4f4;
      padding: 20px;
    }
    
    .section {
      margin-bottom: 20px;
    }
    
    .section-header {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .data {
      display: flex;
      justify-content: space-between;
    }
    
    .data-item {
      width: 150px;
      background-color: #fff;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .data-item h3 {
      font-size: 18px;
      margin: 0;
    }
    
    .data-item p {
      font-size: 14px;
      margin: 0;
    }
  </style>
</head>
<body>
    <nav>
        <button>
            <a href="logout.php">LogOut</a>
        </button>
    </nav>
  <div class="dashboard">
    <div class="section">
      <div class="section-header">Users Overview</div>
      <div class="data">
        <div class="data-item">
          <h3>Total Users</h3>
          <p>[Number]</p>
        </div>
        <div class="data-item">
          <h3>Active Users</h3>
          <p>[Number]</p>
        </div>
        <div class="data-item">
          <h3>Inactive Users</h3>
          <p>[Number]</p>
        </div>
      </div>
    </div>
    
    <div class="section">
      <div class="section-header">Books Overview</div>
      <div class="data">
        <div class="data-item">
          <h3>Total Books</h3>
          <p>[Number]</p>
        </div>
        <div class="data-item">
          <h3>Available Books</h3>
          <p>[Number]</p>
        </div>
        <div class="data-item">
          <h3>Reserved Books</h3>
          <p>[Number]</p>
        </div>
        <div class="data-item">
          <h3>Overdue Books</h3>
          <p>[Number]</p>
        </div>
      </div>
    </div>
    
    <div class="section">
      <div class="section-header">Reservations Overview</div>
      <div class="data">
        <div class="data-item">
          <h3>Total Reservations</h3>
          <p>[Number]</p>
        </div>
        <div class="data-item">
          <h3>Pending Reservations</h3>
          <p>[Number]</p>
        </div>
        <div class="data-item">
          <h3>Active Reservations</h3>
          <p>[Number]</p>
        </div>
        <div class="data-item">
          <h3>Completed Reservations</h3>
          <p>[Number]</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>