/*
 * This file contains custom WordPress admin scripts for customizing fields 
 * in the 'case_study' custom post type.
 */

// Get all sections
const sections = document.querySelectorAll('#case_study_sections_repeat .cmb-repeatable-grouping');

// Loop through each section
sections.forEach((section) => {
  const iterator = section.getAttribute('data-iterator');
  const checkbox = section.querySelector(`input[name="case_study_sections[${iterator}][enabled]"]`);
  const select = section.querySelector(`select[name="case_study_sections[${iterator}][section_type]"]`);
  
  if (checkbox && checkbox.checked) {
    const sectionType = select.value;
    
    const titleSpan = section.querySelector('.cmb-group-title span');
    if (titleSpan && sectionType) {
      // Convert value to readable title
      const readableTitle = sectionType
        .split('_')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
        .join(' ');
      
      titleSpan.textContent = readableTitle;
    }
  }

  if (checkbox && checkbox.checked) {
    const handle = section.querySelector('.cmbhandle-title');
    if (!handle.querySelector('.enabled-mark')) {
      const mark = document.createElement('span');
      mark.className = 'enabled-mark';
      mark.style.color = '#46b450';
      mark.style.marginLeft = '10px';
      mark.textContent = '✓';
      handle.appendChild(mark);
    }
  }
});