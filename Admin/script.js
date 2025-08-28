// Example data (replace with real backend values later)
  const carData = {
    all: { count: 120, growth: "+10% since last month" },
    sedan: { count: 50, growth: "+5% since last month" },
    suv: { count: 40, growth: "+8% since last month" },
    coup: { count: 30, growth: "+12% since last month" }
  };

  function updateCarCount() {
    const category = document.getElementById("carCategory").value;
    document.getElementById("carCount").innerText = carData[category].count;
    document.getElementById("carGrowth").innerText = carData[category].growth;
  }

document.addEventListener("DOMContentLoaded", () => {
      const sidebar  = document.getElementById("sidebar");
      const toggle   = document.getElementById("menuToggle");
      const backdrop = document.getElementById("backdrop");
      const mq       = window.matchMedia("(max-width: 768px)");

      function openMobile(open) {
        if (open) {
          sidebar.classList.add("open");
          backdrop.classList.add("show");
        } else {
          sidebar.classList.remove("open");
          backdrop.classList.remove("show");
        }
      }

      toggle.addEventListener("click", () => {
        if (mq.matches) {
          // Mobile: slide in/out
          openMobile(!sidebar.classList.contains("open"));
        } else {
          // Desktop: collapse/expand (icons only)
          sidebar.classList.toggle("collapsed");
        }
      });

      backdrop.addEventListener("click", () => openMobile(false));

      // If resizing to desktop, ensure mobile overlay is closed
      window.addEventListener("resize", () => {
        if (!mq.matches) openMobile(false);
      });

      // (Optional) Demo category update
      const data = {
        all:   { count: 120, growth: "+10% since last month" },
        sedan: { count: 50,  growth: "+5% since last month"  },
        suv:   { count: 40,  growth: "+8% since last month"  },
        coup:  { count: 30,  growth: "+12% since last month" }
      };
      const sel = document.getElementById("carCategory");
      const countEl = document.getElementById("carCount");
      const growthEl = document.getElementById("carGrowth");
      sel?.addEventListener("change", () => {
        const k = sel.value;
        countEl.textContent = data[k].count;
        growthEl.textContent = data[k].growth;
      });
    });