var gauge2 = Gauge(
    document.getElementById("gauge_json1"),
    {
      min: 0,
      max: 100,
      dialStartAngle: 180,
      dialEndAngle: 0,
      value: 0,
      viewBox: "0 0 100 57",
      color: function(value) {
        if (value >=20){
          return "#d21404";
        }
        else if (value >=10){
          return "#03c04a";
        }
        else if (value >=0){
          return "#82eefd";
        }
        else if (value >=-20){
          return "#0492c2";
        }
        else {
          return "#0000ff";
        }
      }
    }
    );