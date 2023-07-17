function JavaScriptVariables(){
    const cars = ["Suzuki", "Honda", "Toyota"];
    for(c in cars){
      console.log(c.toString() + " = " + cars[c].toString() + ".");
    }
    for(c in cars){
      cars[c] = prompt("Enter your favourit brands of cars: ", null);
    }
    for(c in cars){
      document.write("<!doctype html>");
      document.write("<p>" + c + " = " + cars[c] + ".</p>");
    }
  }
  