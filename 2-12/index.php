<form action="result.php" method="post">
    私の名前：<input type="text" name="my_name" />
    <br>
    ご希望商品：
    <input type="radio" name="freebie" value="A賞" >A賞
    <input type="radio" name="freebie" value="B賞" >B賞
    <input type="radio" name="freebie" value="C賞" >C賞
<br>
    年齢：
    <select name="number">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
    <input type="submit" value="送信するよ" />
</form>