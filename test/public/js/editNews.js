document.addEventListener('DOMContentLoaded', () => {
  const editButtons = document.querySelectorAll('#edit-icon');
  const formContainer = document.querySelector('#form-container');
  const createForm = document.querySelector('#create-form-container');
  const editForm = document.querySelector('#edit-form-container');

  // Hide the edit form initially
  editForm.style.display = 'none';

  editButtons.forEach((editButton) => {
    editButton.addEventListener('click', (event) => {
      event.preventDefault();

      // Hide the create form and show the edit form
      createForm.style.display = 'none';
      editForm.style.display = 'block';

      // Get the data for the selected item
      const article = editButton.closest('.article');
      const id = article.querySelector('[data-id="id"]').textContent;
      const title = article.querySelector('[data-id="title"]').textContent;
      const description = article.querySelector('[data-id="description"]').textContent;

      // Set the data in the edit form
      const editIdInput = document.querySelector('#edit-id-input');
      editIdInput.value = id;

      const editTitleInput = document.querySelector('#edit-title-input');
      editTitleInput.value = title;

      const editDescriptionInput = document.querySelector('#edit-description-input');
      editDescriptionInput.value = description;
      
    });
  });

  // Add a click event listener to the cancel button to show the create form and hide the edit form
  const cancelButton = document.querySelector('#cancel-edit');
  cancelButton.addEventListener('click', (event) => {
    event.preventDefault();

    // Hide the edit form and show the create form
    editForm.style.display = 'none';
    createForm.style.display = 'block';
  });
});
