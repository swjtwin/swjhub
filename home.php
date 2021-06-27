<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? require "validate.php" ?>
    <title>7장</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form method="POST" action="#">
        <div class="inpt_text">
            <label for="id">아이디 :</label>
            <input type="text" id = "id">
        </div>
        <div class="inpt_text">
            <label for="pw">비밀번호 :</label>
            <input type="password" id = "pw">
        </div>

        <button type="submit" class = "submit">CONFIRM</button>
    </form>


    <div class="regist"><a href="regist.php">회원가입</a></div>
    


</body>
</html>