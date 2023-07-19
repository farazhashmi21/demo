<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .page-headng{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 2%;
  }
  .bodyStyle{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-content: center;
  }
  .mainButtonStyle{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2%;
  }
  </style>
  </head>
  <body class="bodyStyle">
    <div class="page-headng">
      <h1 style="padding: 0; !important;">Pakistan</h1>
      <p>Zindabad</p>
    </div>
    <button class="mainButtonStyle" onClick="JavaScriptTestFunction();">Click</button>
    <script type="text/javascript">
      function getUserInput(question){
        let inputFromUser = prompt(question, null);
        return inputFromUser;
      }
      function JavaScriptObjectsExample(){
        let person = {
          // Example Values Starts
          // firstName: "Sara",
          // lastName: "Ali",
          // eyeColor: "Blue",
          // faceCompliction: "Fair",
          // hairColor: "Dark Brown",
          // nationality: "Pakistani",
          // nic: 12345678909,
          // passport: 09876543212,
          // mobileNumber: 03456534298,
          // bloodGroup: "B+",
          // cupSize: "24:36",
          // height: 5.4,
          // weight: 60 + "KG",
          // age: 24
          // Example Values Ends

          firstName: this.getUserInput("Enter Your First Name Here: "),
          lastName: this.getUserInput("Enter Your Last Name Here: "),
          eyeColor: this.getUserInput("Enter Your Eye Color Here"),
          faceCompliction: this.getUserInput("Enter Your Skin Color Here: "),
          hairColor: this.getUserInput("Enter You Hari Color Here: "),
          nationality: this.getUserInput("Enter Your Country Of Origin Here: "),
          nic: Number(this.getUserInput("Enter Your National Identification Card Number Here: ")),
          passport: Number(this.getUserInput("Enter Your Passport Number Here")),
          mobileNumber: Number(this.getUserInput("Enter Your Mobile Number Here: ")),
          bloodGroup: this.getUserInput("Enter Your Blood Group Here: "),
          cupSize: Number(this.getUserInput("Enter your Cup Size in Case Of A Male, Enter Your Chest Size: ")),
          height: Number(this.getUserInput("Enter Your Height Here: ")),
          weight: this.getUserInput("Enter Your Weight Here: "),
          age: Number(this.getUserInput("Enter Your Age Here: "))
        };
        console.log("Name: " + person.firstName + " " + person.lastName);
        console.log("Eye Color: " + person.eyeColor);
        console.log("Skin Color: " + person.faceCompliction);
        console.log("Hair Color: " + person.hairColor);
        console.log("NIC#: " + person.nic);
        console.log("Mobile#: " + person.mobileNumber);
        console.log("Height: " + person.height);
        console.log("Weight: " + person.weight);
        console.log("Cup Size: " + person.cupSize);
        console.log("Blood Group#: " + person.bloodGroup);
        console.log("Age: " + person.age);
      }
      function JavaScriptTestFunction(){
        this.JavaScriptObjectsExample();
      }
    </script>
</body>
</html>