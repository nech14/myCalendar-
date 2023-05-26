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

        }

        select {
            width: 261px;
            padding: 5px;

        }

        input[type="submit"] {
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        display: flex;
        margin: 0 auto;
      }

    </style>
    <title>Редактировать задачу</title>
</head>
<body>
    <h1>Редактировать задачу</h1>
    <div class="container">
      <form method="POST" action="index.php?action=edit&id=<?= $task['id'] ?>">
      <div class="box">
        <label>Тема:</label>
        <input type="text" name="topic" value="<?= $task['topic'] ?>" required><br>
      </div>
      <div class="box">
      <label>Тип:</label>
          <select name="type" required>
              <option value="встреча" <?= $task['type'] === 'встреча' ? 'selected' : '' ?>>Встреча</option>
              <option value="звонок" <?= $task['type'] === 'звонок' ? 'selected' : '' ?>>Звонок</option>
              <option value="совещание" <?= $task['type'] === 'совещание' ? 'selected' : '' ?>>Совещание</option>
              <option value="дело" <?= $task['type'] === 'дело' ? 'selected' : '' ?>>Дело</option>
          </select><br>
      </div>
      <div class="box">
        <label>Место:</label>
        <input type="text" name="location" value="<?= $task['location'] ?>"><br>
      </div>
      <div class="box">
        <label>Дата и время:</label>
        <input type="datetime-local" name="date_time" value="<?= $task['date_time'] ?>" required><br>
      </div>
      <div class="box">
        <label>Длительность (в минутах):</label>
        <input type="number" name="duration" max="10080" value="<?= $task['duration'] ?>"><br>
      </div>
      <div class="box">
        <label>Комментарий:</label>
        <textarea name="comment"><?= $task['comment'] ?></textarea><br>
      </div>
          <input type="submit" value="Сохранить">
      </form>
    </div>
</body>
</html>