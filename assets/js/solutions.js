// Solutions page specific JavaScript

// Industry tabs switching
document.addEventListener('DOMContentLoaded', function() {
  const tabButtons = document.querySelectorAll('.industry-tab-btn');
  const tabContents = document.querySelectorAll('.industry-cards');
  const industryImageText = document.querySelector('.industry-image-text');
  
  if (!tabButtons.length || !tabContents.length) return;
  
  const industryImageIcon = industryImageText ? industryImageText.previousElementSibling : null;

  tabButtons.forEach(button => {
    button.addEventListener('click', function() {
      const tabName = this.getAttribute('data-tab');
      
      // Remove active class from all buttons
      tabButtons.forEach(btn => btn.classList.remove('active'));
      
      // Add active class to clicked button
      this.classList.add('active');
      
      // Hide all tab contents
      tabContents.forEach(content => content.classList.remove('active'));
      
      // Show selected tab content
      const selectedContent = document.querySelector(`.industry-cards[data-content="${tabName}"]`);
      if (selectedContent) {
        selectedContent.classList.add('active');
      }
      
      // Update image text and icon
      if (industryImageText && industryImageIcon) {
        if (tabName === 'retail') {
          industryImageText.textContent = 'Retail Solutions Image';
          industryImageIcon.textContent = '🏪';
        } else if (tabName === 'healthcare') {
          industryImageText.textContent = 'Healthcare & Education Image';
          industryImageIcon.textContent = '🏥';
        }
      }
    });
  });
});

