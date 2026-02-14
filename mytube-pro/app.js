function toggleTheme(){
  document.body.classList.toggle("light");
}

db.collection("videos").onSnapshot(snapshot => {
  const container = document.getElementById("videos");
  if(!container) return;
  container.innerHTML = "";

  snapshot.forEach(doc => {
    const video = doc.data();
    container.innerHTML += `
      <div class="video-card" onclick="location.href='watch.html?id=${doc.id}'">
        <h3>${video.title}</h3>
        <p>${video.channel}</p>
      </div>
    `;
  });
});