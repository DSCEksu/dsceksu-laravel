<!-- Firebase Config -->
<script src="https://www.gstatic.com/firebasejs/6.4.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.4.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.4.1/firebase-functions.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.4.1/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.4.1/firebase-storage.js"></script>

<script>
  var firebaseConfig = {
    apiKey: "{{ config('services.google.firebase.apiKey') }}",
    authDomain: "{{ config('services.google.firebase.authDomain') }}",
    databaseURL: "{{ config('services.google.firebase.databaseURL') }}",
    projectId: "{{ config('services.google.firebase.projectId') }}",
    storageBucket: "{{ config('services.google.firebase.storageBucket') }}",
    messagingSenderId: "{{ config('services.google.firebase.messagingSenderId') }}",
    appId: "{{ config('services.google.firebase.appId') }}"
  };
  firebase.initializeApp(firebaseConfig);
</script>
<!-- End Firebase Config -->
