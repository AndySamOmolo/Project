const navLinks = document.querySelectorAll('nav a');
const dashboardSections = document.querySelectorAll('section.dashboard-section');

// Check that the dashboard sections exist
if (dashboardSections.length === 0) {
  console.error('No dashboard sections found');
} else {
  // Check if a success message is set in the URL query string
  const urlParams = new URLSearchParams(window.location.search);
  const message = urlParams.get('message');
  if (message === 'Employee added successfully') {
    // Show the employee management section if an employee was added successfully
    const employeeManagementSection = document.querySelector('#employee-management');
    if (employeeManagementSection) {
      showSection('employee-management');
    } else {
      console.warn('Employee management section not found');
      showSection(dashboardSections[0].id);
    }
  } else {
    // Show the first section by default
    showSection(dashboardSections[0].id);
  }

  for (let i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener('click', function(e) {
      e.preventDefault();
      const sectionId = this.getAttribute('data-section');
      showSection(sectionId);
      // Save the section ID in sessionStorage
      sessionStorage.setItem('dashboardSectionId', sectionId);
    });
  }

  function showSection(sectionId) {
    // Check that the section ID is valid
    const section = document.getElementById(sectionId);
    if (!section) {
      console.error('Invalid section ID: ' + sectionId);
      return;
    }

    // Display the selected section and hide the others
    for (let i = 0; i < dashboardSections.length; i++) {
      if (dashboardSections[i].id === sectionId) {
        dashboardSections[i].style.display = 'block';
      } else {
        dashboardSections[i].style.display = 'none';
      }
    }
  }
}
