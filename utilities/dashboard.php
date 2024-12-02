<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proxime</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link to Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="dashboardstyle.css">
</head>
<body>

  <?php include '../components/navbar.php';?>

  <div class="container-fluid d-flex">

  <!-- Side Panel -->
  <div class="side-panel">
    <h3>PROXIME</h3>
    <ul class="list-unstyled">
    <!-- Home with Submenu -->
    <li>
        <a href="dashboard.php" class="toggle-menu" data-target="#home-submenu">
          <i class="fas fa-home"></i> Home
        </a>
    </li>
      <!-- Projects with Submenu -->
      <li>
        <a href="#" class="toggle-menu" data-target="#projects-submenu">
          <i class="fas fa-project-diagram"></i> Projects
        </a>
        <ul class="submenu" id="projects-submenu">
          <li><a href="../pages/projects/ongoing.php"><i class="fas fa-spinner"></i>Ongoing</a></li>
          <li><a href="../pages/projects/completed.php"><i class="fas fa-check"></i> Completed</a></li>
          <li><a href="../pages/projects/upcoming.php"><i class="fas fa-calendar-alt"></i>Upcoming</a></li>
        </ul>
      </li>
      <!-- Engineers with Submenu -->
      <li>
        <a href="#" class="toggle-menu" data-target="#engineers-submenu">
          <i class="fas fa-users"></i> Engineers
        </a>
        <ul class="submenu" id="engineers-submenu">
          <li><a href="../pages/engineers/budget.php"><i class="fas fa-dollar-sign"></i>Budgets</a></li>
          <li><a href="../pages/engineers/projectmgr.php"><i class="fas fa-user-tie"></i> Project Managers</a></li>
          <li><a href="../pages/engineers/scheduling.php"><i class="fas fa-calendar-alt"></i> Scheduling</a></li>
          <li><a href="../pages/engineers/drawing.php"><i class="fas fa-drafting-compass"></i> Drawing</a></li>
          <li><a href="../pages/engineers/oversight.php"><i class="fas fa-shield-alt"></i> Oversight</a></li>
          <li><a href="../pages/engineers/cashflow.php"><i class="fas fa-cash-register"></i> Cash Flow</a></li>
        </ul>
      </li>
      <!-- Contractors with Submenu -->
      <li>
        <a href="#" class="toggle-menu" data-target="#contractor-submenu">
          <i class="fas fa-hard-hat"></i> Contractors
        </a>
        <ul class="submenu" id="contractor-submenu">
        <li><a href="../pages/contractors/registration.php"><i class="fas fa-id-card"></i> Registration</a></li>
          <li><a href="../pages/contractors/gradings.php"><i class="fas fa-star"></i> Gradings</a></li>
          <li><a href="../pages/contractors/tenders.php"><i class="fas fa-bullhorn"></i> Tenders</a></li>
          <li><a href="../pages/contractors/work orders.php"><i class="fas fa-clipboard"></i> Work Orders</a></li>
          <li><a href="../pages/contractors/oversight.php"><i class="fas fa-eye"></i> Oversight</a></li>
          <li><a href="../pages/contractors/bill.php"><i class="fas fa-file-invoice"></i> Bills</a></li>
        </ul>
      </li>
       <!-- Material with Submenu -->
      <li>
        <a href="#" class="toggle-menu" data-target="#material-submenu">
          <i class="fas fa-cogs"></i> Material
        </a>
        <ul class="submenu" id="material-submenu">
        <li><a href="../pages/material/suppliers.php"><i class="fas fa-truck"></i> Suppliers</a></li>
          <li><a href="../pages/material/requisition.php"><i class="fas fa-box-open"></i> Material Requisition</a></li>
          <li><a href="../pages/material/comparison.php"><i class="fas fa-arrow-right"></i> Comparison</a></li>
          <li><a href="../pages/material/orders.php"><i class="fas fa-box"></i> Orders</a></li>
          <li><a href="../pages/material/bills.php"><i class="fas fa-file-invoice"></i> Bills</a></li>
          <li><a href="../pages/material/transportation.php"><i class="fas fa-truck-loading"></i> Transportation</a></li>
          <li><a href="../pages/material/inventory_controls.php"><i class="fas fa-cogs"></i> Inventory Controls</a></li>
        </ul>
      </li>
      <!-- Sales with Submenu -->
      <li><a href="#" class="toggle-menu" data-target="#sales-submenu">
        <i class="fas fa-chart-line"></i> Sales
      </a>
      <ul class="submenu" id="sales-submenu">
      <li><a href="../pages/sales/budget.php"><i class="fas fa-wallet"></i> Budget</a></li>
          <li><a href="../pages/sales/campaigns.php"><i class="fas fa-bullhorn"></i> Campaigns</a></li>
          <li><a href="../pages/sales/leads.php"><i class="fas fa-user-plus"></i> Leads</a></li>
          <li><a href="../pages/sales/remuneration.php"><i class="fas fa-money-check-alt"></i> Remuneration</a></li>
        </ul>
    </li>
    <!-- Accounts with Submenu -->
      <li><a href="#" class="toggle-menu" data-target="#accounts-submenu">
        <i class="fas fa-calculator"></i> Accounts
      </a>
      <ul class="submenu" id="accounts-submenu">
          <li><a href="../pages/accounts/transactions.php"><i class="fas fa-money-bill-wave"></i> Transactions</a></li>
          <li><a href="../pages/accounts/banks.php"><i class="fas fa-building"></i> Banks</a></li>
          <li><a href="../pages/accounts/tax.php"><i class="fas fa-file-invoice"></i> Tax</a></li>
          <li><a href="../pages/accounts/gst.php"><i class="fas fa-file-invoice-dollar"></i> GST</a></li>
          <li><a href="../pages/accounts/invoice.php"><i class="fas fa-file-alt"></i> E-Invoice</a></li>
        </ul>
    </li>
    <!-- Legal with Submenu -->
      <li><a href="#" class="toggle-menu" data-target="#legal-submenu">
        <i class="fas fa-gavel"></i> Legal
      </a>
      <ul class="submenu" id="legal-submenu">
          <li><a href="../pages/legal/documents.php"><i class="fas fa-file-alt"></i> Documents</a></li>
          <li><a href="../pages/legal/compliances.php"><i class="fas fa-check-circle"></i> Compliances</a></li>
          <li><a href="../pages/legal/authority.php"><i class="fas fa-users-cog"></i> Authority</a></li>
      </ul>
    </li>
    <!-- Quality with Submenu -->
      <li><a href="#" class="toggle-menu" data-target="#quality-submenu">
        <i class="fas fa-check-circle"></i> Quality
      </a>
      <ul class="submenu" id="quality-submenu">
      <li><a href="../pages/quality/qualitycheck.php"><i class="fas fa-check"></i> Quality Check</a></li>
          <li><a href="../pages/quality/check_failures.php"><i class="fas fa-times-circle"></i> Check Failures</a></li>
          <li><a href="../pages/quality/photos.php"><i class="fas fa-camera"></i> Photos</a></li>
          <li><a href="../pages/quality/compliance.php"><i class="fas fa-user-shield"></i> Compliance</a></li>
      </ul>
    </li>
    <!-- HR with Submenu -->
      <li><a href="#"  href="#" class="toggle-menu" data-target="#hr-submenu">
        <i class="fas fa-user-tie"></i> HR
      </a>
      <ul class="submenu" id="hr-submenu">
        <li><a href="../pages/hr/employee_info.php"><i class="fas fa-id-card"></i> Employee Info</a></li>
        <li><a href="../pages/hr/attendance.php"><i class="fas fa-clock"></i> Biometric Attendance</a></li>
        <li><a href="../pages/hr/pay_slips.php"><i class="fas fa-file-invoice-dollar"></i> Pay Slips</a></li>
        <li><a href="../pages/hr/performance.php"><i class="fas fa-chart-line"></i> Performance Manager</a></li>
        <li><a href="../pages/hr/documents.php"><i class="fas fa-folder"></i> Documents</a></li>
      </ul>
    </li>
    <!-- MIS with Submenu -->
    <li><a href="#"  href="#" class="toggle-menu" data-target="#mis-submenu">
        <i class="fas fa-user-tie"></i> MIS
      </a>
      <ul class="submenu" id="mis-submenu">
        <li><a href="../pages/mis/reports.php"><i class="fas fa-file-alt"></i> Review Reports</a></li>
        <li><a href="../pages/mis/configure_workflow.php"><i class="fas fa-cogs"></i> Configure Workflow</a></li>
        <li><a href="../pages/mis/land_purchase.php"><i class="fas fa-map-signs"></i> Land Purchase</a></li>
        <li><a href="../pages/mis/contacts.php"><i class="fas fa-address-book"></i> Contacts</a></li>
      </ul>
    </li>
    <!-- AI Embedded with Submenu -->
    <li><a href="#"  href="#" class="toggle-menu" data-target="#ai-submenu">
        <i class="fas fa-user-tie"></i> AI Embedded
      </a>
      <ul class="submenu" id="ai-submenu">
        <li><a href="../pages/ai/updates.php"><i class="fas fa-sync-alt"></i> Live Updates</a></li>
        <li><a href="../pages/ai/vr_features.php"><i class="fas fa-vr-cardboard"></i> VR Feature</a></li>
        <li><a href="../pages/ai/rate_trends.php"><i class="fas fa-chart-line"></i> Rate Trends</a></li>
        <li><a href="../pages/ai/progress.php"><i class="fas fa-calendar-check"></i> Monthly Progress</a></li>
      </ul>
    </li>
    <!-- Maps with Submenu -->
    <li><a href="#"  href="#" class="toggle-menu" data-target="#map-submenu">
        <i class="fas fa-user-tie"></i>Maps
      </a>
      <ul class="submenu" id="map-submenu">
        <li><a href="#"><i class="fas fa-map"></i> Google Maps</a></li>
      </ul>
    </li>
    </ul>
  </div>
</div>

  <!-- Footer -->
  <div class="footer text-center">
        &copy; 2024 Proxime. All rights reserved.
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle submenu visibility
    document.addEventListener('DOMContentLoaded', () => {
      const toggleMenus = document.querySelectorAll('.toggle-menu');
      
      toggleMenus.forEach(menu => {
        menu.addEventListener('click', (e) => {
          e.preventDefault();
          const target = document.querySelector(menu.dataset.target);
          target.style.display = target.style.display === 'block' ? 'none' : 'block';
        });
      });
    });
  </script>
</body>
</html>
