document.addEventListener("DOMContentLoaded", () => {
  const workouts = [
      { name: "Push-Ups", description: "Great for upper body strength", image: "https://fitnessprogramer.com/wp-content/uploads/2021/06/Push-Up-Plus.gif" },
      { name: "Squats", description: "Builds lower body strength", image: "https://www.kettlebellkings.com/cdn/shop/articles/Front_Squats.gif?v=1694617488" },
      { name: "Plank", description: "Core strengthening exercise", image: "https://www.inspireusafoundation.org/wp-content/uploads/2022/11/body-saw-plank.gif" }
  ];

  const workoutItems = document.getElementById("workoutItems");
  workouts.forEach(workout => {
      workoutItems.innerHTML += `<li class="workout-item">
          <img src="${workout.image}" alt="${workout.name}" class="workout-image">
          <h3>${workout.name}</h3>
          <p>${workout.description}</p>
      </li>`;
  });
});
