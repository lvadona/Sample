<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>User Access Authorization</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-5 py-lg-6 pt-lg-6">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 px-5">
              <h1 class="text-white">USER ACCESS AUTHORIZATION FORM</h1>
			  <!--
			  <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
			  -->
			  
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="card bg-secondary border-0 mb-0">
				<img src="pages/images/Land_Transportation_Office.png" style="width: 10%;" class="rounded mx-auto d-block pt-4">
            <div class="card-body px-lg-4 py-lg-4">
              <div class="text-center text-muted mb-4">
                <small style="color: black;">Please fill in all necessary fields</small>
              </div>
              <form role="form">
              <div class="mb-3" style="color: black;">
				I. System Access Functions:
              </div>
				<div class="form-check form-check-inline px-2 ml-5">
				  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
				  <label class="form-check-label" for="inlineCheckbox1">Frontliner</label>
				</div>
				<div class="form-check form-check-inline px-2">
				  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
				  <label class="form-check-label" for="inlineCheckbox2">Cashier</label>
				</div>
				<div class="form-check form-check-inline px-2">
				  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2">
				  <label class="form-check-label" for="inlineCheckbox3">District Officer</label>
				</div>
				<div class="form-check form-check-inline px-2">
				  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
				  <label class="form-check-label" for="inlineCheckbox4">Director</label>
				</div>
				<div class="form-check form-check-inline px-2">
				  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
				  <label class="form-check-label" for="inlineCheckbox5">OGA</label>
				</div>
				
				
              <div class="mb-3 mt-5" style="color: black;">
				II. User Information:
              </div>
				  <label class="form-check-label ml-5 mr-4" for="inlineName1">Name:</label>
				<div class="col-lg-4 form-check form-check-inline">
                  <div class="input-group input-group-merge input-group-alternative">
                    <input class="form-control" id="inlineName1" placeholder="Surname" type="text">
                  </div>
				</div>
				<div class="col-lg-4 form-check form-check-inline">
                  <div class="input-group input-group-merge input-group-alternative">
                    <input class="form-control" id="inlineName1" placeholder="First Name" type="text">
                  </div>
				</div>
				<div class="col-lg-2 form-check form-check-inline">
                  <div class="input-group input-group-merge input-group-alternative">
                    <input class="form-control" id="inlineName1" placeholder="Middle Name" type="text">
                  </div>
				</div>
					<?php
						include 'pages/offices.php';
					?>
				<div class="form-row justify-content-md-center mt-5">
					<div class="form-group col-lg-4 text-center">
					  <label for="employeeID1">Employee ID</label>
					  <input type="text" class="form-control" id="employeeID1" placeholder="">
					</div>
					<div class="form-group col-lg-4 text-center">
					  <label for="designation1">Designation</label>
					  <input type="text" class="form-control" id="designation1" placeholder="">
					</div>
				</div>
  
				<div class="form-row justify-content-md-center mt-4">
					<div class="form-group col-lg-4 text-center">
					  <label for="contact1">Contact Number</label>
					  <input type="number" class="form-control" id="contact1" placeholder="">
					</div>
					<div class="form-group col-lg-4 text-center">
					  <label for="email1">Email</label>
					  <input type="email" class="form-control" id="email1" placeholder="">
					</div>
				</div>
				<!--
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Sign in</button>
                </div>
				-->
            </div>
          </div>
		  
		  <!--
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
		  -->
		  
        </div>
		
		<hr />
		
        <div class="col-lg-12 col-md-12">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-4 py-lg-4">
              <div class="mb-3" style="color: black;">
				III. Modules:
              </div>
              <div class="mt-4 ml-6" style="color: black;">
				DLS (Driver's Licensing System)
              </div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="dlsmod1" value="option1">
				  <label class="form-check-label" for="dlsmod1">Licensing Module and Examination</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="dlsmod2" value="option2">
				  <label class="form-check-label" for="dlsmod2">Medical Clinics and Doctors Accreditation</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="dlsmod3" value="option2">
				  <label class="form-check-label" for="dlsmod3">Driving School Accreditation</label>
				</div>
				
              <div class="mt-4 ml-6" style="color: black;">
				MVIRS (Motor Vehicle Inspection and Registration System)
              </div>
				<form id="mv_checkboxes">
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="mvmod1" value="option1" name="mv_reg" onclick="javascript:ToggleSwitch1(this.form)">
				  <label class="form-check-label" for="mvmod1">MV Registration</label>
				</div>
				<div class="form-check form-check-inline px-2 ml-8">
				  <input class="form-check-input" type="checkbox" id="mvmod1A" value="option2" name="mv_approval" disabled="true">
				  <label class="form-check-label" for="mvmod1A">Approval function</label>
				</div>
				<div class="form-check form-check-inline px-2">
				  <input class="form-check-input" type="checkbox" id="mvmod1B" value="option2" name="mv_release" disabled="true">
				  <label class="form-check-label" for="mvmod1B">Release function</label>
				</div>
				</form>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="mvmod2" value="option1">
				  <label class="form-check-label" for="mvmod2">DO Inspection</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="mvmod3" value="option1">
				  <label class="form-check-label" for="mvmod3">MVIC Inspection</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="mvmod4" value="option1">
				  <label class="form-check-label" for="mvmod4">MAIRDOEs Accreditation and Renewal</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="mvmod5" value="option1">
				  <label class="form-check-label" for="mvmod5">Chassis Number Stamping</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="mvmod6" value="option1">
				  <label class="form-check-label" for="mvmod6">Reports</label>
				</div>
				
              <div class="mt-4 ml-6" style="color: black;">
				LETAS (Law Enforcement and Traffic Adjudication System)
              </div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="letasmod1" value="option1">
				  <label class="form-check-label" for="letasmod1">Handheld Mobile Device and Law Enforcer Porta</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="letasmod2" value="option1">
				  <label class="form-check-label" for="letasmod2">Data Control</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="letasmod3" value="option1">
				  <label class="form-check-label" for="letasmod3">Custodial and Releasing</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="letasmod4" value="option1">
				  <label class="form-check-label" for="letasmod4">Adjudication</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="letasmod5" value="option1">
				  <label class="form-check-label" for="letasmod5">Intelligence and Investigation</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="letasmod6" value="option1">
				  <label class="form-check-label" for="letasmod6">Reports</label>
				</div>
				<form id="letas_checkboxes">
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="letasmod7" value="option1" name="inter_agency" onclick="javascript:ToggleSwitch(this.form)">
				  <label class="form-check-label" for="letasmod7">Inter-Agency Collaboration</label>
				</div>
				<div class="form-check form-check-inline px-2 ml-8">
				  <input class="form-check-input" type="checkbox" id="letasmod7A" value="option2" name="apprehension" disabled="true">
				  <label class="form-check-label" for="letasmod7A">Apprehension</label>
				</div>
				<div class="form-check form-check-inline px-2">
				  <input class="form-check-input" type="checkbox" id="letasmod7B" value="option2" name="alarm" disabled="true">
				  <label class="form-check-label" for="letasmod7B">Alarm</label>
				</div>
				</form>
				
				<div class="mt-4 ml-6" style="color: black;">
				RCS (Revenue Collection System)
              </div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="rcsmod1" value="option1">
				  <label class="form-check-label" for="rcsmod1">Cash Payment Transaction (RCS Cash)</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="rcsmod2" value="option1">
				  <label class="form-check-label" for="rcsmod2">Daily Abstract of Collection</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="rcsmod3" value="option1">
				  <label class="form-check-label" for="rcsmod3">List of Deposited Collection</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="rcsmod4" value="option1">
				  <label class="form-check-label" for="rcsmod4">Merchant Report</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="rcsmod5" value="option1">
				  <label class="form-check-label" for="rcsmod5">Official Receipt Repository</label>
				</div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="rcsmod6" value="option1">
				  <label class="form-check-label" for="rcsmod6">Monthly Report with BTR</label>
				</div>
				
              <div class="mt-4 ml-6" style="color: black;">
				EIS
              </div>
				<div class="form-check px-2 ml-7">
				  <input class="form-check-input" type="checkbox" id="eismod1" value="option1">
				  <label class="form-check-label" for="eismod1">Reports and Statistics</label>
				</div>
				<br />
                <div class="text-right">
                  <button type="button" class="btn btn-primary my-4">Submit</button>
                </div>
              </form>
            </div>
          </div>
		  
		  <!--
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
		  -->
		  
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://lto.gov.ph/" class="font-weight-bold ml-1" target="_blank">LTO - MID</a>
          </div>
        </div>
		
		<!--
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
		-->
		
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
  <script>
        function ToggleSwitch1(mv_checkboxes) {
            if (mv_checkboxes.elements["mv_reg"].checked) {
                mv_checkboxes.elements["mv_approval"].disabled = false
                mv_checkboxes.elements["mv_release"].disabled = false
            } else {
                mv_checkboxes.elements["mv_approval"].disabled = true
                mv_checkboxes.elements["mv_release"].disabled = true
            }
        }
		
		function ToggleSwitch(letas_checkboxes) {
            if (letas_checkboxes.elements["inter_agency"].checked) {
                letas_checkboxes.elements["apprehension"].disabled = false
                letas_checkboxes.elements["alarm"].disabled = false
            } else {
                letas_checkboxes.elements["apprehension"].disabled = true
                letas_checkboxes.elements["alarm"].disabled = true
            }
        }
  </script>
</body>

</html>