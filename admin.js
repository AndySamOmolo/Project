const navLinks = document.querySelectorAll('nav a');
const dashboardSections = document.querySelectorAll('section.dashboard-section');

for (let i = 0; i < navLinks.length; i++) {
	navLinks[i].addEventListener('click', function(e) {
		e.preventDefault();
		const sectionId = this.getAttribute('data-section');
		showSection(sectionId);
	});
}

      function showSection(sectionId) {
      	for (let i = 0; i < dashboardSections.length; i++) {
      		if (dashboardSections[i].id === sectionId) {
      			dashboardSections[i].style.display = 'block';
      		} else {
      			dashboardSections[i].style.display = 'none';
      		}
      	}
      }
