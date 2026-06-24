(function () {
  const getTheme = () => {
    const saved = localStorage.getItem("theme");
    if (saved) return saved;
    return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
  };

  const applyTheme = (theme) => {
    document.documentElement.setAttribute("data-theme", theme);
    document.documentElement.setAttribute("data-bs-theme", theme);
    localStorage.setItem("theme", theme);
  };

  // Run immediately to prevent flash of light theme
  const initialTheme = getTheme();
  applyTheme(initialTheme);

  document.addEventListener("DOMContentLoaded", () => {
    const toggles = document.querySelectorAll("[data-theme-toggle]");
    
    const updateToggleIcons = () => {
      const current = document.documentElement.getAttribute("data-theme");
      toggles.forEach(toggle => {
        const icon = toggle.querySelector("i");
        if (icon) {
          if (current === "dark") {
            icon.className = "bi bi-sun";
          } else {
            icon.className = "bi bi-moon-stars";
          }
        }
      });
    };

    toggles.forEach(toggle => {
      toggle.addEventListener("click", () => {
        const current = document.documentElement.getAttribute("data-theme");
        const next = current === "dark" ? "light" : "dark";
        applyTheme(next);
        updateToggleIcons();
      });
    });

    updateToggleIcons();
  });
})();
