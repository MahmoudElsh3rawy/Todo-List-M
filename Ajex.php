<html>

<body>
  <form>
    <div>
      <label class="control-label" for="task">task</label>
        <input type="text" id="task" onKeyUp="name_suggestion()">
        <div id="suggestion"></div>
    </div>
  </form>
  <script>
    function name_suggestion() {
      var name = document.getElementById("task").value; 
      xhr = new XMLHttpRequest();
      console.log(xhr, "xhr");
      var data = "task=" + task;  
      xhr.open("POST", "search.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send(data);
      xhr.onreadystatechange = display_data;
      function display_data() { 
            document.getElementById("suggestion").innerHTML = xhr.responseText;
      }
    }
  </script>
</body>

</html>