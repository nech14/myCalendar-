<!DOCTYPE html>
<html>
<head>
<style>
        .my-button {
          			margin-top: 20px;
          			margin-left:auto;
          			margin-right:10%;
                cursor: pointer;
        }
  
  			button{ 
                padding: 10px;
                width: 160px;
          			height: 40px;
          			font-weight: bold;
          			font-size: 16px;
        }
			
  			.box{
          			width: 100%;
        				display: flex;
          			flex-direction: column;
    						align-items: center;
        }
  
  			.create_task{
        				text-decoration: none;
        }
  
        body {
            font-family: Calibry, sans-serif;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        tbody{
          border: solid 1px black;
        }

        th, td {
            padding: 10px;
        }

        th {
            background-color: lightgray;
            font-weight: bold;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #eeeeee;
        }

        tr:hover {
            background-color: #d7faf8;
        }
  
  			.typoHeader{
          margin-left:10%;
          display: flex;
          width: 80%;
        }
  			select{
          margin-right: 40px;
        }
  			.selectTask{
          width: 60%;
        }
  			.selectDay{
          display: flex;
          width: 40%;
          margin-top: auto;
          font-size: 16px;          
          justify-content: flex-end;
        }
  			.sDay{
          width: 100%;
          display: flex;
          justify-content: flex-end;
        }
  			.selDay{
          display: flex;
          justify-content: flex-end;          
    			flex-direction: column;	
          margin-right: 20px;
        }
    </style>
    <title>Мой календарь</title>
</head>
<body>
  <h1>Мой календарь</h1>
  
  <div class="typoHeader">
    <div class="selectTask">
      <?php if (isset($listTitle)): ?>
        <h2><?= $listTitle ?></h2>
    <?php endif; ?>
  	<br>
      <select onchange="location = this.value;">
        <option value="">Выберите тип задачи</option>
        <option value="index.php?action=current">Текущие задачи</option>
        <option value="index.php?action=overdue">Просроченные задачи</option>
        <option value="index.php?action=completed">Выполненные задачи</option>
      </select>
      <a href="index.php?action=today">Сегодня</a> |
      <a href="index.php?action=tomorrow">Завтра</a> |
      <a href="index.php?action=week">На эту неделю</a> |
      <a href="index.php?action=nextweek">На след. неделю </a>
    
    </div>
   	<div class="selectDay">
      <form class="sDay" action="index.php?action=tasksByDate" method="POST">
        <div  class="selDay">
          <label for="date">Выберите дату:</label>
          <input type="date" id="date" name="date">          
        </div>
        <button type="submit">Показать задачи</button>
    	</form>
    </div>    	
  </div>
  	
  <div class="box">
      <table>
          <tr>
              <th>Тема</th>
              <th>Тип</th>
              <th>Место</th>
              <th>Дата и время</th>
              <th>Длительность</th>
              <th>Комментарий</th>
              <th>Статус</th>
              <th>Действия</th>
          </tr>
          <?php foreach ($tasks as $task): ?>
              <tr>
                  <td><?= $task['topic'] ?></td>
                  <td><?= $task['type'] ?></td>
                  <td><?= $task['location'] ?></td>
                  <td><?= $task['date_time'] ?></td>
                  <td><?= $task['duration'] ?></td>
                  <td><?= $task['comment'] ?></td>
                  <td><?= $task['status'] ?></td>
                  <td>
                      <a href="index.php?action=edit&id=<?= $task['id'] ?>">Редактировать</a> |
                      <?php if ($task['status'] !== 'готово'): ?>
                          <a href="index.php?action=markAsCompleted&id=<?= $task['id'] ?>">Готово</a>
                      <?php endif; ?>
                  </td>
              </tr>
          <?php endforeach; ?>
      </table>
      <button class="my-button" onclick="window.location.href = 'index.php?action=create';">Создать задачу</button>
  	</div>
    
</body>
</html>