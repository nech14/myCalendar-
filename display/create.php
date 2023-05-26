<!DOCTYPE html>
<html>
<head>
<style>
        body {
            font-family: Calibry, sans-serif;
        }

        .container{
          border: solid 2px black;
          padding: 20px;
          margin: 20px;
          display: flex;
          margin: 0 auto;
          width: 450px;
        }

        .box{
          display: flex;
          justify-content: center;
          margin-bottom: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: inline-block;
            width: 120px;
          	text-align: right;
          	margin-top: auto;
          	margin-bottom: auto;
          	margin-right: 10px;
        }

        input[type="text"],
        input[type="datetime-local"],
        input[type="number"],
        textarea {
            width: 250px;
            padding: 5px;
            resize: none;
        }

        select {
            width: 261px;
            padding: 5px;
            border: none;
        }

        button{
          width: 120px;
          height: 40px;
          margin-left: auto;
          font-weight: bold;
          font-size: 16px;
        }
  
        .buttons{
          display: flex;
          margin-left: 115px;
          width: 280px;
        }
    </style>
    <title>Создать задачу</title>
</head>
<body>
    <h1>Создать задачу</h1>
    <div class="container">
      <form method="POST" action="index.php?action=create">
        <div class='box'>
          <label>Тема:</label>
          <input type="text" name="topic" required><br>
        </div>
        <div class='box'>
          <label>Тип:</label>
          <select name="type" required>
              <option value="встреча">Встреча</option>
              <option value="звонок">Звонок</option>
              <option value="совещание">Совещание</option>
              <option value="дело">Дело</option>
          </select><br>
        </div>
        <div class='box'>
          <label>Место:</label>
          <input type="text" name="location"><br>
        </div>
        <div class='box'>
          <label>Дата и время:</label>
          <input type="datetime-local" name="date_time" required><br>
        </div>
        <div class='box'>
          <label>Длительность (в минутах):</label>
          <input type="number" name="duration" max="10080"><br>
        </div>
        <div class='box'>
          <label>Комментарий:</label>
          <textarea name="comment"></textarea><br>
        </div>
				<div class="buttons">          
          <button type="submit">Добавить</button>
        	<button class="cancel" onclick="window.location.href = 'index.php';">Вернуться</button>
        </div>
      </form>
    </div>
</body>
</html>