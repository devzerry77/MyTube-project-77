function uploadVideo(){
  const title = document.getElementById("title").value;
  const channel = document.getElementById("channel").value;
  const file = document.getElementById("videoFile").files[0];

  const storageRef = storage.ref("videos/" + file.name);

  storageRef.put(file).then(snapshot=>{
    snapshot.ref.getDownloadURL().then(url=>{
      db.collection("videos").add({
        title,
        channel,
        url,
        likes: 0,
        comments: []
      });
      alert("Uploaded!");
    });
  });
}