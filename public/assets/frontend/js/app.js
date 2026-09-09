
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("[data-copy]").forEach(btn => {
    btn.addEventListener("click", async () => {
      const value = btn.getAttribute("data-copy");
      try {
        await navigator.clipboard.writeText(value);
        const old = btn.innerHTML;
        btn.innerHTML = '<i class="bi bi-check2 me-1"></i>Copied';
        setTimeout(() => btn.innerHTML = old, 1300);
      } catch(e) {}
    });
  });

  document.querySelectorAll("[data-toggle-password]").forEach(btn => {
    btn.addEventListener("click", () => {
      const input = document.getElementById(btn.dataset.togglePassword);
      input.type = input.type === "password" ? "text" : "password";
      btn.innerHTML = input.type === "password"
        ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
    });
  });

  const urlForm = document.querySelector("#shortenForm");
  if (urlForm) {
    urlForm.addEventListener("submit", e => {
      e.preventDefault();
      const result = document.querySelector("#shortenResult");
      result.classList.remove("d-none");
    });
  }
});
