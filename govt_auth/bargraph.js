var myChart = {
  "type": "bar",
  "title": {
    "text": "Change me please!"
  },
  "plot": {
    "value-box": {
      "text": "%v"
    },
    "tooltip": {
      "text": "%v"
    }
  },
  "legend": {
    "toggle-action": "hide",
    "header": {
      "text": "Legend Header"
    },
    "item": {
      "cursor": "pointer"
    },
    "draggable": true,
    "drag-handler": "icon"
  },
  "scale-x": {
    "values": [
      "1st",
      "2nd",
      "3rd",
      "4th",
      "5th",
      "6th",
      "7th",
      "8th",
    ]
  },
  "series": [
    {
      "values": [
        3,
        6,
        9
      ],
      "text": "apples"
    },
    {
      "values": [
        1,
        4,
        3
      ],
      "text": "oranges"
    }
  ]
};
zingchart.render({
  id: "myChart",
  data: myChart,
  height: "480",
  width: "100%"
});