
const countdownDate = new Date("2024-12-25").getTime();

// Mise à jour du compte à rebours chaque seconde
const countdown = setInterval(() => {
  const now = new Date().getTime();
  const distance = countdownDate - now;

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Affichage du compte à rebours dans les éléments correspondants
  document.getElementById("days").innerText = days;
  document.getElementById("hours").innerText = hours;
  document.getElementById("minutes").innerText = minutes;
  document.getElementById("seconds").innerText = seconds;

  // Arrêt du compte à rebours une fois atteint
  if (distance < 0) {
    clearInterval(countdown);
    document.getElementById("timer").innerHTML = "L'évenement à débuté";
  }
}, 1000);