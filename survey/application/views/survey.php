<html>
<head>
  <title>Survey</title>
  <style>
  #survey-form {
    text-align: center;
    border: 2px solid black;
    height: 200px;
    width: 500px;
    padding-top: 20px;
    margin-left: 480px;
}
h1 {
    text-align: center;
}

form {
    text-align: center;

}

input {
    border: 1px solid black;
}

label {
    margin-bottom: 20px;
}

label {
    display: block;
}

.btn {
    margin-left: 240px;
    background-color: blue;
    color: white;
}

.counter {
    width: 550px;
    height: 100px;
    background: green;
    border: 2px solid black;
    margin-left: 450px;
}

.btn-back {
    background-color: blue;
    color: white;
}

  </style>
</head>
<body>

<h1>SURVEY</h1>
<div id="survey-form">
  <form action="surveys/process_form" method="post">
        <label>
            Your Name: <input type="text" name="name"><br>
        </label>
        <label>
            Dojo Location: <select name ='location'><br>
                <option value="mountain view">Mountain View</option>
                <option value="seattle">Seattle</option>
                <option value="los angeles">Los Angeles</option>
            </select><br>
        </label>
        <label>
            Favorite Language: <select name ='language'>
                <option value="php">PHP</option>
                <option value="ruby">Ruby</option>
                <option value="javascript">Javascript</option>
            </select><br>
        </label>

        <label>
            Comment(Optional): <textarea name="comment"></textarea><br>
        </label>

            <input type= "submit" class= 'btn' value="Submit">
    </form>
</div>



</body>
</html>

