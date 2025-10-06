/*
 * This file contains custom WordPress admin scripts for customizing fields 
 * in the 'case_study' custom post type.
 */

(function() {
  'use strict';

  function updateSections() {
    const sections = document.querySelectorAll('#case_study_sections_repeat .cmb-repeatable-grouping');
    
    sections.forEach((section) => {
      const iterator = section.getAttribute('data-iterator');
      if (!iterator) return;
      
      const checkbox = section.querySelector(`input[name="case_study_sections[${iterator}][enabled]"]`);
      const select = section.querySelector(`select[name="case_study_sections[${iterator}][section_type]"]`);
      
      if (!checkbox || !select) return;
      
      // Update title if checkbox is checked
      if (checkbox.checked) {
        const sectionType = select.value;
        const titleSpan = section.querySelector('.cmb-group-title span');
        
        if (titleSpan && sectionType) {
          const readableTitle = sectionType
            .split('_')
            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
            .join(' ');
          
          titleSpan.textContent = readableTitle;
        }
        
        // Add checkmark
        const handle = section.querySelector('.cmbhandle-title');
        if (handle && !handle.querySelector('.enabled-mark')) {
          const mark = document.createElement('span');
          mark.className = 'enabled-mark';
          mark.style.cssText = 'color: #46b450; margin-left: 10px;';
          mark.textContent = '✓';
          handle.appendChild(mark);
        }
      } else {
        // Remove checkmark if unchecked
        const handle = section.querySelector('.cmbhandle-title');
        const mark = handle?.querySelector('.enabled-mark');
        if (mark) mark.remove();
      }
    });
  }
  
  // Run on page load
  updateSections();
  
  // Run when checkboxes or selects change
  document.addEventListener('change', function(e) {
    if (e.target.matches('input[name*="[enabled]"]') || 
        e.target.matches('select[name*="[section_type]"]')) {
      updateSections();
    }
  });
  
})();