<!DOCTYPE html>
<html>
<head><meta charset="utf-8"/>
  <style type="text/css">
    .room {
      width 100%;
    }
    .date {
      /*
      display: inline-block;
      text-align: right;
      */
      padding-left: 1.5em;
      font-size: 0.9em;
      /*background-color: #FF0000*/
    }
  </style>
</head>
<body>
  <ul>
    <li class="room">
      <a href="messages.php">room name01</a>
      <span class="date">2015/12/3/10:42:35</span>
    </li>
    <li class="room">
      <a href="messages.php">room name01</a>
      room name02<span class="date">2015/12/1/15:30:00</span>
    </li>
    <li class="room">
      <a href="messages.php">room name01</a>
    room name03<span class="date">2014/11/11/11:11:11</span>
  </li>
  </ul>
  <div style="">
    <form action="messages.php" method="POST">
      <label>
        room name:
        <input type="text" name="title" size="80" required>
        <button>make new room</button>
      </label>
    </form>
  </div>
</body>
</html>
