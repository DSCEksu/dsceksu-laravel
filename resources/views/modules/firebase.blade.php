<!-- Firebase Config -->
<script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-firestore.js"></script>

<script>
  var firebaseConfig = {
    apiKey: config('services.google.firebase.apiKey'),
    authDomain: config('services.google.firebase.authDomain'),
    databaseURL: config('services.google.firebase.databaseURL'),
    projectId: config('services.google.firebase.projectId'),
    storageBucket: config('services.google.firebase.storageBucket'),
    messagingSenderId: config('services.google.firebase.messagingSenderId'),
    appId: config('services.google.firebase.appId')
  };
  firebase.initializeApp(firebaseConfig);
</script>

<!-- End Firebase Config -->
