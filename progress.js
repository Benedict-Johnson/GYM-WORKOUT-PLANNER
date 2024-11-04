
document.addEventListener("DOMContentLoaded", () => {
    const progressData = [
      { category: "Weight", current: "75kg", goal: "70kg" },
      { category: "Body Fat", current: "18%", goal: "12%" },
      { category: "Workout Frequency", current: "4 Days/Week", goal: "5 Days/Week" }
    ];
  
    const progressTable = document.querySelector(".progress-table tbody");
    progressData.forEach(entry => {
      progressTable.innerHTML += `<tr>
        <td>${entry.category}</td>
        <td>${entry.current}</td>
        <td>${entry.goal}</td>
      </tr>`;
    });
  });
  