function showInfo(type) {
  let infoElement = document.getElementById('info');
  if (type === 'cardio') {
    infoElement.innerHTML = '<h2>Cardio</h2><p>Cardiovascular exercise is any exercise that raises your heart rate. It includes activities such as running, cycling, and swimming.</p>';
  } else if (type === 'strength') {
    infoElement.innerHTML = '<h2>Strength Training</h2><p>Strength training is a type of physical exercise specializing in the use of resistance to induce muscular contraction. It builds the strength, anaerobic endurance, and size of skeletal muscles.</p>';
  }
}
