document.addEventListener("DOMContentLoaded", () => {
    const mealPlan = [
        { meal: "Breakfast", description: "Oatmeal with fruits and nuts", calories: 300, image: "https://www.budgetbytes.com/wp-content/uploads/2010/10/Autumn-Fruit-and-Nut-Oatmeal-bowls.jpg" },
        { meal: "Lunch", description: "Grilled chicken with quinoa and vegetables", calories: 600, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7gyPcnENzcNtIv0E4No013AWXRKlUDgBRiw&s" },
        { meal: "Dinner", description: "Salmon with brown rice and broccoli", calories: 500, image: "https://thatothercookingblog.com/wp-content/uploads/2017/01/IMG_5617.jpg" }
    ];

    const mealPlanDiv = document.getElementById("mealPlan");
    mealPlan.forEach(meal => {
        mealPlanDiv.innerHTML += `<div class="meal-plan">
            <img src="${meal.image}" alt="${meal.meal}" class="meal-image">
            <div class="meal-info">
                <h3>${meal.meal}</h3>
                <p>${meal.description}</p>
                <p><strong>Calories:</strong> ${meal.calories} kcal</p>
            </div>
        </div>`;
    });
});
