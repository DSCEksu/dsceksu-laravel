<!-- Firebase Config -->
<script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-firestore.js"></script>

<script>
  var firebaseConfig = {
    apiKey: docApiKey,
    authDomain: document.getElementById("authDomain").textContent,
    databaseURL: document.getElementById("databaseURL").textContent,
    projectId: document.getElementById("projectId").textContent,
    storageBucket: document.getElementById("storageBucket").textContent,
    messagingSenderId: document.getElementById("messagingSenderId").textContent,
    appId: document.getElementById("appId").textContent
  };
  firebase.initializeApp(firebaseConfig);
</script>

<!-- End Firebase Config -->
