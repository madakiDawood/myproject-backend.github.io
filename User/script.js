    const editBtn = document.getElementById("editBtn");
    const cancelBtn = document.getElementById("cancelBtn");
    const saveCancelBtns = document.getElementById("saveCancelBtns");
    const inputs = document.querySelectorAll("#profileForm input, #profileForm textarea");

    editBtn.addEventListener("click", () => {
      inputs.forEach(input => input.disabled = false);
      editBtn.classList.add("d-none");
      saveCancelBtns.classList.remove("d-none");
    });

    cancelBtn.addEventListener("click", () => {
      inputs.forEach(input => input.disabled = true);
      editBtn.classList.remove("d-none");
      saveCancelBtns.classList.add("d-none");
    });

    document.getElementById("profileForm").addEventListener("submit", (e) => {
      e.preventDefault();
      inputs.forEach(input => input.disabled = true);
      editBtn.classList.remove("d-none");
      saveCancelBtns.classList.add("d-none");
      alert("Profile updated successfully!");
    });