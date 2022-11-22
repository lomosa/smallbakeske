const admin = require("firebase-admin");
const firebaseConfig = {
    apiKey: "AIzaSyAwthR8D2RPjefSvpuCuzwv22tLjOwSyHQ",
    authDomain: "smallbakes-ba7f7.firebaseapp.com",
    databaseURL: "https://smallbakes-ba7f7-default-rtdb.firebaseio.com",
    projectId: "smallbakes-ba7f7",
    storageBucket: "smallbakes-ba7f7.appspot.com",
    messagingSenderId: "557138742464",
    appId: "1:557138742464:web:0219f801361c60fcfd7125",
    measurementId: "G-TJ9BE89S9H"
  };

var serviceAccount = require("/Users/user/Desktop/smallbakeske/themes/smallbakeske/smallbakes-ba7f7-firebase-adminsdk-hfkr3-93c1d08bfb.json");

admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  databaseURL: "https://smallbakes-ba7f7-default-rtdb.firebaseio.com"
});

  firebase.initializeApp(firebaseConfig);

  //reference your database
  var smallbakesDB = firebase.database().ref('smallbakes')

  document.getElementById('smallbakes').addEventListener("submit", submitform)

  function submitform(e) {
      e.preventDefault();

      var username = getElementVal('username');
      var password = getElementVal('password');

      saveMessages(username, password);

      document.getElementById("smallbakes").reset();
  }

  const saveMessages = (username, password) => {
      var newsmallbakes = smallbakesDB.push();

      newsmallbakes.set({
          username: username,
          password: password,
      });
  };

  const getElementById= (id) => {
      return document.getElementById(id).value;
  };